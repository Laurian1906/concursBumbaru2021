<?php
$error = NULL;

if (isset($_POST['submit'])) {
    //Conectare la baza de date
    $mysqli = new MySQLi('localhost', 'root', '', 'database');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $rpassword = $_POST['rpassword'];
    //$email = $_POST['email'];

    $query_username = $mysqli->query("SELECT * FROM angajati WHERE username = '$username'");


    if (empty($username) or empty($password) or empty($rpassword)) {
        $error = "Please fill in all fields.";
    } elseif ($query_username->num_rows != 0) {
        $error = "That username is already taken.";     // taken username error
    } elseif ($rpassword != $password) {
        $error = "Your passwords don't match.";
    } elseif (strlen($password < 6)) {
        $error = "Your password must be at least 5 characters.";
    } else {
        //Encrypt the password
        $password = md5($password);
        //Inserarea contului in baza de date
        $insert = $mysqli->query("INSERT INTO angajati(username,password) 
        VALUES('$username','$password')");

        if ($insert != TRUE) {
            $error = "There was a problem <br />";
            $error .= $mysqli->error;
        } else {
            $error = "You have been registered!";
        }
    }
} //Close main if
?>


<?php
echo $error;
?>