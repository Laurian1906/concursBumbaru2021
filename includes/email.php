<?php

$error = NULL;

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $username = 1;

    //Conectare la baza de date
    $mysqli = new MySQLi('localhost', 'root', '', 'database');

    $query = $mysqli->query("SELECT * FROM angajati WHERE email = '$email'");
    if ($mysqli->query("SELECT username FROM angajati WHERE email = '$email'"))
        $username = 0;

    //echo $username;

    if (empty($email)) {
        header("Location: ../contact.php?info=\"error\"");
        //$error = "Please fill in the field.";
    } elseif ($query->num_rows != 0 and $username == 0)      //Inaintarea procedurii de inregistrare
    {
        //Send Email
        $to = $email;
        $subject = "Account Creation";
        $message = "Follow this <a href='http://localhost/tema/includes/registration.php?'>link</a> to the registration page.";
        $headers = "From: isilkroad01@gmail.com \r\n";
        $headers .= "MTME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8:" . "\r\n";
        mail($to, $subject, $message, $headers);

        $error = "The email has been sent.";
        header("Location: ../index.php");
    } elseif ($query->num_rows != 0 and $username != 0) {
        $error = "This email is already associated to a registered account.";
        header("Location: ../index.php");
    } else {
        $error = "This email is not registered in database.";
        header("Location: ../index.php");
    }
} //Close main if
?>



<?php
echo $error;
?>