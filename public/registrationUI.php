<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            display:flex;
            flex-direction: column;
            justify-content: center;
            align-items:center;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        form{
            padding:20px;
            display:flex;
            flex-direction: column;
            justify-content: flex-start;
        }
        input{
            padding:10px;
        }

        input[type="text"], input[type="password"], input[type="email"] {
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Register</h2>

    <!-- Formul de înregistrare -->
    <form action="../includes/registration.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>

        <label for="rpassword">Repeat Password:</label>
        <input type="password" id="rpassword" name="rpassword" placeholder="Repeat your password" required>

        <input type="submit" name="submit" value="Register">
    </form>
</div>

</body>
</html>