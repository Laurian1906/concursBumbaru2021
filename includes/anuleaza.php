<?php
error_reporting(0);
ini_set('display_errors', 0);

session_start(); // Activăm sesiunea
require 'conectare.php'; // Conectarea la baza de date
error_log(print_r($_POST, true));

try {
    // Accessing the correct POST variable
    $id_loc = $_POST['id_loc']; // Change this to id_loc

    // Găsim detaliile rezervării pe baza id_loc
    $sql_select = "SELECT ID_REZERVARE, Nr_camera FROM Rezervari WHERE ID_LOC = :id_loc";
    $stmt_select = $db->prepare($sql_select);
    $stmt_select->bindParam(':id_loc', $id_loc);
    $stmt_select->execute();
    $rezervare = $stmt_select->fetch(PDO::FETCH_ASSOC);

    if ($rezervare) {
        $id_rezervare = $rezervare['ID_REZERVARE']; // Obținem ID-ul rezervării
        $nr_camera = $rezervare['Nr_camera']; // Obținem numărul camerei

        // Ștergem rezervarea din tabelul Rezervari
        $sql_delete = "DELETE FROM Rezervari WHERE ID_REZERVARE = :id_rezervare";
        $stmt_delete = $db->prepare($sql_delete);
        $stmt_delete->bindParam(':id_rezervare', $id_rezervare);
        $stmt_delete->execute();

        // Verificăm dacă rezervarea a fost ștearsă cu succes
        if ($stmt_delete->rowCount() > 0) {
            // Actualizăm disponibilitatea locului
            $sql_update_loc = "UPDATE Locuri SET Disponibilitate = 1 WHERE ID_LOC = :id_loc";
            $stmt_update_loc = $db->prepare($sql_update_loc);
            $stmt_update_loc->bindParam(':id_loc', $id_loc);
            $stmt_update_loc->execute();

            // Actualizăm numărul de locuri disponibile din cameră
            $sql_update_camera = "UPDATE Camera SET Nr_locuri = Nr_locuri + 1 WHERE ID_Camera = :nr_camera";
            $stmt_update_camera = $db->prepare($sql_update_camera);
            $stmt_update_camera->bindParam(':nr_camera', $nr_camera);
            $stmt_update_camera->execute();

            // Verificăm dacă actualizările au avut succes
            if ($stmt_update_loc->rowCount() > 0 && $stmt_update_camera->rowCount() > 0) {
                echo json_encode(['status' => 'success']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Eroare: actualizarea disponibilității locului sau a camerei a eșuat.']);
            }

            header("Location: ../includes/loggedin.php?info=rezervareAnulata");
        } else {
            echo "Eroare: rezervarea nu a fost ștearsă.";
        }
    } else {
        echo "Nu s-a găsit nicio rezervare pentru acest loc (ID_LOC = $id_loc).";
    }
} catch (PDOException $e) {
    echo "Eroare la baza de date: " . $e->getMessage();
}

exit;
?>