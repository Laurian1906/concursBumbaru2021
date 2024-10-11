<?php

require '../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$smtpHost = $_ENV['SMTP_HOST'];
$smtpPort = $_ENV['SMTP_PORT'];
$smtpUser = $_ENV['SMTP_USER'];
$smtpPass = $_ENV['SMTP_PASS'];


require 'conectare.php'; // Include fișierul care gestionează conexiunea la baza de date

// Initialize error variable
$error = "";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $username = 1;

    // Verificăm dacă email-ul este completat
    if (empty($email)) {
        header("Location: ../contact.php?info=error");
        exit;
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../contact.php?info=invalid_email");
        exit;
    }

    try {
        // Pregătim interogarea pentru a verifica dacă email-ul există în baza de date
        $query = $db->prepare("SELECT * FROM Angajati WHERE Email = :email");
        $query->bindParam(':email', $email);
        $query->execute();

        // Verificăm dacă utilizatorul există și preluăm datele
        if ($query->rowCount() > 0) {
            $user = $query->fetch(PDO::FETCH_ASSOC);

            // Verificăm dacă există un username asociat acestui email
            if (empty($user['username'])) {
                $username = 0; // Dacă nu există username, continuăm procedura
            }
        }

        if ($username == 0) {
            // Procedura de înregistrare - trimitem email
            $mail = new PHPMailer(true); // Instanțiază PHPMailer

            // Configurare server
            $mail->isSMTP();
            $mail->Host = $smtpHost; // Server SMTP
            $mail->SMTPAuth = true;
            $mail->Username = $smtpUser; // Emailul tău
            $mail->Password = $smtpPass; // Introdu parola aici
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // SSL
            $mail->Port = $smtpPort; // Portul pentru SSL

            // Destinatari
            $mail->setFrom('bumbaru@golgotagalati.ro', 'Laurian Hurduza');
            $mail->addAddress($email); // Adresa de email destinatar

            // Conținutul emailului
            $mail->isHTML(true); // Setează formatul emailului ca HTML
            $mail->Subject = "Account Creation";
            $mail->Body = "Click on this <a href='../includes/registration.php'>link</a> to acces the registration page.";

            // Trimiterea emailului
            if ($mail->send()) {
                header("Location: ../contact.php?info=emailSent");
            } else {
                $error = "Email sending failed: " . $mail->ErrorInfo;
                header("Location: ../contact.php?error=sendEmailFailed");
            }
        } elseif ($username != 0) {
            $error = "This email is already associated with a registered account.";
            header("Location: ../contact.php?info=alreadyAsossiatedEmail");
        } else {
            $error = "This email is not registered in the database.";
            header("Location: ../contact.php?info=emailNotInDatabase");
        }

    } catch (PDOException $e) {
        // Gestionăm eventualele erori
        $error = "Database error: " . $e->getMessage();
    }
}

// Afișăm eventualele mesaje de eroare
if (!empty($error)) {
    echo $error;
}
?>
