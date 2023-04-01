<?php

    $conectare = mysqli_connect('localhost', 'root', '', 'database');

    if(!$conectare){
        die('Conectarea la baza de date a eșuat!');
    }

?>