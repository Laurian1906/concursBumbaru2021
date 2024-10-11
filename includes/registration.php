<?php
require 'conectare.php'; // Conectarea la baza de date

// $error = ""; // Inițializează variabila pentru erori

if (isset($_POST['submit'])) {
    // Obține datele din formular
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $rpassword = trim($_POST['rpassword']);
    //$email = trim($_POST['email']); // Dacă folosești email-ul, adaugă-l și aici

    // Verifică dacă toate câmpurile sunt completate
    if (empty($username) || empty($password) || empty($rpassword)) {
        $error = "Please fill in all fields.";
    } 
    // Verifică dacă username-ul există deja în baza de date
    else {
        // Pregătește interogarea pentru a preveni SQL injection
        $query_username = $db->prepare("SELECT * FROM Angajati WHERE Username = :username");
        $query_username->bindParam(':username', $username);
        $query_username->execute();

        if ($query_username->rowCount() > 0) {
            $error = "That username is already taken.";
        } 
        // Verifică dacă parolele se potrivesc
        elseif ($password !== $rpassword) {
            $error = "Your passwords don't match.";
        } 
        // Verifică lungimea parolei (cel puțin 6 caractere)
        elseif (strlen($password) < 6) {
            $error = "Your password must be at least 6 characters.";
        } 
        // Dacă toate condițiile sunt îndeplinite, se trece la inserarea în baza de date
        else {
            // Hash parolei folosind password_hash (mai sigur decât md5)
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            // Pregătește interogarea de inserare
            $insert_query = $db->prepare("INSERT INTO Angajati (Username, Parola) VALUES (:username, :password)");
            $insert_query->bindParam(':username', $username);
            $insert_query->bindParam(':password', $hashed_password);

            // Execută inserarea și verifică dacă a avut succes
            if ($insert_query->execute()) {
                $error = "You have been registered successfully!";
            } else {
                $error = "There was a problem with registration. Please try again later.";
            }
        }
    }
}

// echo $error;
?>
