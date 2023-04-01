<?php
//Pornirea sesiunilor
session_start();

require 'conectare.php';

$user = $_SESSION['username'];
$data = $_POST['data'];
$momentulZilei = $_POST['momentulZilei'];


$sql2 = "SELECT coda FROM `database`.`angajati` WHERE username = '$user'";
$interogare2 = mysqli_query($conectare, $sql2);

$row = $interogare2->fetch_assoc();

$_SESSION['coda'] = $row['coda'];
$coda = $_SESSION['coda'];

$sql = "INSERT INTO rezervarile (coda, data, momentulZilei) VALUES ('$coda', '$data', '$momentulZilei')";
$interogare = mysqli_query($conectare, $sql);

$sql_codr = "SELECT * FROM rezervarile WHERE data = '$data'";
$interogare_data = mysqli_query($conectare, $sql_codr);

$row = $interogare_data->fetch_assoc();

$_SESSION['data'] = $row['data'];

if (isset($_POST['submit'])) {
    echo '
            <style>
                button.scaun.scaun10{
                    background-color:red;
                }
            </style>
        ';
}
//$sql_data = "SELECT * rezervarile FROM data";
//$interogare_data = mysqli_query($conectare, $sql_data);

//$row_data->$interogare_data->fetch_assoc();

//$sql_momentulZilei = "SELECT * rezervarile FROM momentulZilei";
//$interogare_momentulZilei = mysqli_query($conectare, $sql_momentulZilei);

//$row_data->$interogare_data->fetch_assoc();

//$_SESSION['data'] = $row_data['data'];
//$_SESSION['momentulZilei'] = $row_momentulZilei['momentulZilei'];

header("Location: loggedin.php?info=rezervat");
sleep(3);
header("Location: loggedin.php");
