<?php

//Pornirea sesiunilor
session_start();

//Includerea fisierului pentru conectarea la baza de date.
require 'conectare.php';



//Memoram valoarea username-ului si a parolei din formularul de log in
$username = $_POST["username"];
$password = $_POST["password"];

//Creeam interogarea
$sql = "SELECT * FROM angajati WHERE username = '$username'";

//Variabila care memoreaza rezultatul interogarii
$interogare = mysqli_query($conectare, $sql);

//Variabila care memoreaza toate randurile din tabel
$row = $interogare->fetch_assoc();
$_SESSION['username'] = $row['username'];
//Variabila care memoreaza valoarea parolei din baza de date
$pass = $row['parola'];
//Se verifica daca parola introdusa de utilizator in formularul de login
//este identica cu cea din baza de date
if ($pass == $password) {
    header("Location: ../index.php?info=yes");
    //sleep(2);
    header("Location: loggedin.php");

    //$sql = "SELECT id WHERE username='$username'";
    //$int = mysqli_query($conectare, $sql);
    //$row = $int -> fetch_assoc();

    //$_SESSION['id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
} else {
    header("Location: ../index.php?info=no");
}
