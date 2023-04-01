<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.php">
    <title>Document</title>
</head>

<body>
    <header>
        <span class="logo"><img class="logo" src="images/logo4.png"></img></span>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <form method="POST" action="includes/email.php">
        <div class="alignTable">
            <h1 class="request">Request account creation</h1>
            <input class="username" type="TEXT" name="email" placeholder="Insert your email" required />
            <input class="login" type="SUBMIT" name="submit" value="Send Email Verification" />
        </div>
        <?php
        if (isset($_GET['info']) && ($_GET['info'] == 'error')) {
            echo '<p style="width:100%;text-align:center;color:red;font-family:Raleway, sans-serif;">Please fill out this field!</p>';
        } else if (isset($_GET['info']) && ($_GET['info'] == 'no')) {
            echo '<p style="width:100%;text-align:center;color:red;font-family:Raleway, sans-serif;">Check your creditentials again!</p>';
        }
        ?>
    </form>

    <!--     <form method="POST">
        <table>
            <td></td>
            <td><input class="username" type="TEXT" name="username" placeholder="Username" /></td>
            <tr>
            <tr>
                <td></td>
                <td><input class="password" type="PASSWORD" name="password" placeholder="Password" /></td>
            <tr>
            <tr>
                <td></td>
                <td><input class="password" type="PASSWORD" name="rpassword" placeholder="Repeat password" /></td>
            <tr>
        </table>
        <input class="login" type="SUBMIT" name="submit" value="Register" />
        </table>
    </form> -->


</body>

</html>