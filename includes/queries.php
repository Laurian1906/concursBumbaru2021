<?php
require 'conectare.php';

// Crearea tabelei Angajati
$sql_angajati = "CREATE TABLE IF NOT EXISTS Angajati (
    ID_ANGAJAT INT AUTO_INCREMENT PRIMARY KEY,
    Numele VARCHAR(100) NOT NULL DEFAULT '',
    Prenumele VARCHAR(100) NOT NULL DEFAULT '',
    Email VARCHAR(50) NOT NULL DEFAULT '',
    Username VARCHAR(50) NOT NULL UNIQUE,
    Parola VARCHAR(255) NOT NULL,
    Teamleader BOOLEAN DEFAULT FALSE,
    Adminn BOOLEAN DEFAULT FALSE
)";
try {
    $db->query($sql_angajati);
    echo "Tabela Angajati a fost creată cu succes.<br>";
} catch (PDOException $e) {
    echo "Eroare la crearea tabelei Angajati: " . $e->getMessage() . "<br>";
}

// Crearea tabelei Camera
$sql_camera = "CREATE TABLE IF NOT EXISTS Camera (
    ID_CAMERA INT AUTO_INCREMENT PRIMARY KEY,
    Nr_camera INT NOT NULL,
    Nr_locuri INT NOT NULL,
    Etaj INT NOT NULL
)";
try {
    $db->query($sql_camera);
    echo "Tabela Camera a fost creată cu succes.<br>";

//     // Popularea tabelei Camera
//     $insert_camera = "INSERT IGNORE INTO Camera (Nr_camera, Nr_locuri, Etaj) VALUES
//     (1, 2, 0),  -- Camera 1
//     (2, 2, 0),  -- Camera 2
//     (3, 2, 0),  -- Camera 3
//     (4, 2, 0),  -- Camera 4
//     (5, 2, 0),  -- Camera 5
//     (6, 1, 0)   -- Camera 6 (1 loc)
// ";
//     $db->query($insert_camera);
//     echo "Tabela Camera a fost populată cu succes.<br>";

} catch (PDOException $e) {
    echo "Eroare la crearea tabelei Camera: " . $e->getMessage() . "<br>";
}

// Crearea tabelei Locuri
$sql_locuri = "CREATE TABLE IF NOT EXISTS Locuri (
    ID_LOC INT AUTO_INCREMENT PRIMARY KEY,
    ID_CAMERA INT NOT NULL,
    Disponibilitate BOOLEAN DEFAULT TRUE,
    Nr_loc INT NOT NULL,
    UNIQUE (ID_CAMERA, Nr_loc),
    FOREIGN KEY (ID_CAMERA) REFERENCES Camera(ID_CAMERA) ON DELETE CASCADE
)";
try {
    $db->query($sql_locuri);
    echo "Tabela Locuri a fost creată cu succes.<br>";

    // // Popularea tabelei Locuri
    // $insert_locuri = "INSERT IGNORE INTO Locuri (Disponibilitate, ID_CAMERA, Nr_loc) VALUES
    // (TRUE, 1, 1),  -- Loc 1
    // (TRUE, 1, 2),  -- Loc 2
    // (TRUE, 2, 3),  -- Loc 3
    // (TRUE, 2, 4),  -- Loc 4
    // (TRUE, 3, 5),  -- Loc 5
    // (TRUE, 3, 6),  -- Loc 6
    // (TRUE, 4, 7),  -- Loc 7
    // (TRUE, 4, 8),  -- Loc 8
    // (TRUE, 5, 9),  -- Loc 9
    // (TRUE, 5, 10),  -- Loc 10
    // (TRUE, 6, 11)   -- Loc 11
    // ";
    // $db->query($insert_locuri);
    // echo "Tabela Locuri a fost populată cu succes.<br>";

} catch (PDOException $e) {
    echo "Eroare la crearea tabelei Locuri: " . $e->getMessage() . "<br>";
}

// Crearea tabelei Etaj
$sql_etaj = "CREATE TABLE IF NOT EXISTS Etaj (
    ID_ETAJ INT AUTO_INCREMENT PRIMARY KEY,
    Disponibilitate BOOLEAN DEFAULT TRUE
)";
try {
    $db->query($sql_etaj);
    echo "Tabela Etaj a fost creată cu succes.<br>";
} catch (PDOException $e) {
    echo "Eroare la crearea tabelei Etaj: " . $e->getMessage() . "<br>";
}

// Crearea tabelei Rezervari
$sql_rezervari = "CREATE TABLE IF NOT EXISTS Rezervari (
    ID_REZERVARE INT AUTO_INCREMENT PRIMARY KEY,
    ID_LOC INT NOT NULL,
    ID_ANGAJAT INT NOT NULL,
    Data_rezervare TIMESTAMP NOT NULL,
    Momentul_zilei VARCHAR(50), 
    Nr_camera INT NOT NULL,
    Nr_loc INT NOT NULL,
    FOREIGN KEY (ID_LOC) REFERENCES Locuri(ID_LOC) ON DELETE CASCADE,
    FOREIGN KEY (ID_ANGAJAT) REFERENCES Angajati(ID_ANGAJAT) ON DELETE CASCADE
)";
try {
    $db->query($sql_rezervari);
    echo "Tabela Rezervari a fost creată cu succes.<br>";
} catch (PDOException $e) {
    echo "Eroare la crearea tabelei Rezervari: " . $e->getMessage() . "<br>";
}

// Se adauga date in tabelul Angajati
try {
    $db->query("INSERT INTO Angajati (Numele, Prenumele, Username, Parola, Teamleader, Adminn) VALUES ('Popescu', 'Ion', 'popescu.ion', 'parola1234', 0, 0)");
    echo "Interogare facuta cu succes in tabelul Angajati<br>";
} catch (PDOException $e) {
    echo "Error:" . $e->getMessage() . "<br>";
}

$db = null;
?>