<?php
session_start();
require 'conectare.php';

// Verificăm dacă utilizatorul este autentificat
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$user = $_SESSION['username'];

// Folosim interogări pregătite pentru a preveni SQL injection
$stmt = $db->prepare("SELECT Adminn FROM Angajati WHERE Username = :username");
$stmt->bindParam(':username', $user); // Binding the value
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC); // Fetch the results as an associative array

if ($row) {
    $admin = $row['Adminn'];

    // Dacă utilizatorul este admin
    if ($admin == '1') {
        // echo '<input type="button" value="scaun10" disabled> ';

        // Actualizăm disponibilitatea locului
        $update_stmt = $db->prepare("UPDATE Locuri SET Disponibilitate = '0' WHERE ID_LOC = :id_loc");
        $update_stmt->bindParam(":id_loc", $user);
        $update_stmt->execute();

        // Redirecționăm utilizatorul
        header("Location: loggedin.php");
        exit(); // Ne asigurăm că scriptul se oprește aici
    } else {
        header("Location: index.php");
        exit();
    }
} else {
    // Dacă utilizatorul nu există sau nu este admin
    header("Location: index.php");
    exit();
}
?>
