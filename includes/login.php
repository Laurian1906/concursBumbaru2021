<?php

// Pornirea sesiunilor
session_start();

// Includerea fisierului pentru conectarea la baza de date
require 'conectare.php';

// Memoram valoarea username-ului si a parolei din formularul de log in
$username = $_POST["username"];
$password = $_POST["password"];

try {
    // Creeam interogarea
    $sql = "SELECT * FROM Angajati WHERE Username = :username";
    
    // Pregătim instrucțiunea
    $stmt = $db->prepare($sql);
    
    // Legăm parametrul
    $stmt->bindParam(':username', $username);
    
    // Executăm interogarea
    $stmt->execute();
    
    // Verificăm dacă există un rezultat
    if ($stmt->rowCount() > 0) {
        // Variabila care memorează toate randurile din tabel
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Variabila care memorează valoarea parolei din baza de date
        $pass = $row['Parola'];
        
        // Se verifică dacă parola introdusă de utilizator în formularul de login
        // este identică cu cea din baza de date
        if ($pass === $password) {
            $_SESSION['username'] = $row['Username'];
            header("Location: loggedin.php");
            exit(); // Asigurăm ieșirea din script
        } else {
            header("Location: ../index.php?info=no");
            exit();
        }
    } else {
        // Dacă utilizatorul nu există
        header("Location: ../index.php?info=no");
        exit();
    }
} catch (PDOException $e) {
    // Afișăm mesajul de eroare
    echo "Eroare la interogare: " . $e->getMessage();
}
