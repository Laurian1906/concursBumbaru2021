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
    <title>BLM - CONCURS SEVERIN BUMBARU</title>
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

    <form action="includes/login.php" method="POST">
        <div class="inputs">
            <h1 class="welcome">Welcome!</h1>
            <input class="username" type="text" name="username" placeholder="Username" required><br><br>
            <input class="password" type="password" name="password" placeholder="Password" required><br><br>
            <input class="login" type="submit" value="Log In"><br><br>
        </div>
        <?php
        if (isset($_GET['info']) && ($_GET['info'] == 'yes')) {
            echo '<p style="width:100%;text-align:center;color:green;font-family:Raleway, sans-serif;">You are logged in!</p>';
        } else if (isset($_GET['info']) && ($_GET['info'] == 'no')) {
            echo '<p style="width:100%;text-align:center;color:red;font-family:Raleway, sans-serif;">Check your creditentials again!</p>';
        }
        ?>
    </form>


</body>

</html>