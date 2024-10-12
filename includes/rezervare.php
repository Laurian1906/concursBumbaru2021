<?php
error_reporting(0);
ini_set('display_errors', 0);

session_start();
require 'conectare.php';



$dataa = json_decode(file_get_contents('php://input'), true);
var_dump($dataa);    

$user = isset($_SESSION['username']) ? $_SESSION['username'] : null;

$id_loc = isset($_POST['data_id']) ? $_POST['data_id'] : null;
var_dump($id_loc);

$momentulZilei = isset($_POST['momentulZilei']) ? $_POST['momentulZilei'] : null;
$data = isset($_POST['data']) ? $_POST['data'] : $_POST['data'] ; // Asigură-te că această variabilă este setată corect

$nr_camera = 0;

// Verifică dacă datele sunt valide
if ($id_loc === null || !is_numeric($id_loc)) {
    echo json_encode(["status" => "error", "message" => "Numărul locului este invalid. Te rog să selectezi un loc corect."]);
    exit;
}

// Determinarea numărului camerei pe baza locului
switch ($id_loc) {
    case '1':
    case '2':
        $nr_camera = 1;
        break;
    case '3':
    case '4':
        $nr_camera = 2;
        break;
    case '5':
    case '6':
        $nr_camera = 3;
        break;
    case '7':
    case '8':
        $nr_camera = 4;
        break;
    case '9':
    case '10':
        $nr_camera = 5;
        break;
    case '11':
        $nr_camera = 6;
        break;
    default:
        echo json_encode(["status" => "error", "message" => "Numărul locului este invalid. Te rog să selectezi un loc corect."]);
        header("Location: ../includes/loggedin.php");
        exit;
}

try {
    // Obține ID_ANGAJAT pe baza username-ului
    $stmt = $db->prepare("SELECT ID_ANGAJAT FROM golgotag_bumbaru.Angajati WHERE Username = :user");
    $stmt->bindParam(':user', $user);
    $stmt->execute();
    $id_angajat = $stmt->fetchColumn();

    // Dacă angajatul nu a fost găsit, trimite un mesaj de eroare
    if (!$id_angajat) {
        echo json_encode(["status" => "error", "message" => "Angajatul nu a fost găsit. Te rog să te asiguri că ești autentificat."]);
        exit;
    }

    // Pregătește query-ul de inserare
    $sql = "INSERT INTO golgotag_bumbaru.Rezervari (ID_ANGAJAT, Data_rezervare, Momentul_zilei, Nr_loc, Nr_camera, ID_LOC) 
            VALUES (:id_angajat, :data_rezervare, :momentulZilei, :nr_loc, :nr_camera, :id_loc)";
    $stmt_insert = $db->prepare($sql);
    $stmt_insert->bindParam(':id_angajat', $id_angajat);
    $stmt_insert->bindParam(':data_rezervare', $data);
    $stmt_insert->bindParam(':momentulZilei', $momentulZilei);
    $stmt_insert->bindParam(':nr_loc', $id_loc);
    $stmt_insert->bindParam(':nr_camera', $nr_camera);
    $stmt_insert->bindParam(':id_loc', $id_loc);

    // Execută inserarea
    $stmt_insert->execute();
    $rowsAffected = $stmt_insert->rowCount();

    if ($rowsAffected > 0) {
        // Actualizează locurile dacă inserarea a avut succes
        $db->prepare("UPDATE golgotag_bumbaru.Locuri SET Disponibilitate = 0 WHERE ID_LOC = :id_loc")->execute([':id_loc' => $id_loc]);
        $db->prepare("UPDATE Camera SET Nr_locuri = Nr_locuri - 1 WHERE ID_Camera = :nr_camera")->execute([':nr_camera' => $nr_camera]);
        echo json_encode(['status' => 'success', 'message' => 'Rezervare efectuată cu succes.']);
        header("Location: ../includes/loggedin.php?info=rezervat");
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Nu s-a putut efectua rezervarea.']);
    }
} catch (PDOException $e) {
    echo json_encode(['status' => 'error', 'message' => 'Eroare: ' . $e->getMessage()]);
}

// Funcția pentru a face locurile disponibile din nou după expirarea rezervărilor
function reangajeazaLocuri($db)
{
    $expirare_timp = 3600; // 1 oră în secunde
    $momentul_curent = time();

    // Găsește rezervările expirate
    $sql_check_expirari = "SELECT * FROM golgotag_bumbaru.Rezervari WHERE UNIX_TIMESTAMP(Data_rezervare) + :expirare_timp < :momentul_curent";
    $stmt_check_expirari = $db->prepare($sql_check_expirari);
    $stmt_check_expirari->bindParam(':expirare_timp', $expirare_timp);
    $stmt_check_expirari->bindParam(':momentul_curent', $momentul_curent);
    $stmt_check_expirari->execute();
    $rezervari_expirate = $stmt_check_expirari->fetchAll(PDO::FETCH_ASSOC);

    foreach ($rezervari_expirate as $rezervare) {
        // Actualizează disponibilitatea locului
        $sql_update_loc = "UPDATE golgotag_bumbaru.Locuri SET Disponibilitate = 1 WHERE ID_LOC = :id_loc";
        $stmt_update_loc = $db->prepare($sql_update_loc);
        $stmt_update_loc->bindParam(":id_loc", $rezervare['ID_LOC']);
        $stmt_update_loc->execute();

        // Actualizează numărul de locuri din cameră
        $sql_update_camera = "UPDATE golgotag_bumbaru.Camera SET Nr_locuri = Nr_locuri + 1 WHERE ID_Camera = :nr_camera";
        $stmt_update_camera = $db->prepare($sql_update_camera);
        $stmt_update_camera->bindParam(":nr_camera", $rezervare['Nr_camera']);
        $stmt_update_camera->execute();
    }
}

// Apelează funcția pentru a reangajează locurile
reangajeazaLocuri($db);
