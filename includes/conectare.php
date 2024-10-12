<?php
require '../vendor/autoload.php';
use Dotenv\Dotenv;

// Încarcă variabilele din fișierul .env
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Datele de conectare la baza de date din variabilele de mediu
$host = $_ENV['HOSTDB'];
$port = $_ENV['PORTDB'];
$dbname = $_ENV['NAMEDB'];
$username = $_ENV['USERDB'];
$password = $_ENV['PASSDB'];

try {
    // Creează o nouă instanță PDO cu SSL
    $db = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $username, $password, [
        //PDO::MYSQL_ATTR_SSL_CA => $ca_cert,
        //PDO::MYSQL_ATTR_SSL_CERT => $client_cert,
        //PDO::MYSQL_ATTR_SSL_KEY => $client_key,
    ]);

    // Setează modul de raportare a erorilor
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verifică conexiunea printr-o simplă interogare
    //$stmt = $db->query("SELECT VERSION()");
    //echo "Conexiune reușită. Versiunea bazei de date: " . $stmt->fetch()[0];
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    echo "Nu s-a putut conecta la baza de date.";
}

?>