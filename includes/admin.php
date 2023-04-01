<?php
session_start();

require 'conectare.php';

$user = $_SESSION['username'];

$sql = "SELECT admin FROM angajati WHERE username = '$user' AND admin = '1'";
$result = mysqli_query($conectare, $sql);
$row = $result->fetch_assoc();

$admin = $row['admin'];

$sql = "SELECT codl FROM locuri";
$result2 = mysqli_query($conectare, $sql);

$codl[] = $row_codl['codl'];

if ($admin == '1') {
    echo '<input type="button" value="scaun10" disabled> ';
    $sql = "UPDATE locuri SET disponibilitate='0' WHERE codl='3'";
    $int = mysqli_query($conectare, $sql);
    header("Location: loggedin.php");
} else {
    header("Location: index.php");
}
