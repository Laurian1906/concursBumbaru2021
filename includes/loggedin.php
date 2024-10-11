<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../loggedin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.php">
    <title>BLM - CONCURS SEVERIN BUMBARU</title>
</head>

<body>
    <header onclick="close()">
        <span class="logo"><img class="logo" src="../images/logo4.png" alt="Logo"></span>
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div id="modal" class="formularRezervareContainer">
        <form class="rezervare" method="POST" action="../includes/rezervare.php">
            <input type="hidden" name="data_id" id="rezervareDataId" value="">
            <div onclick="inchide11()" class="xmodal">X</div>
            <h1 style="width:100%; text-align:center; position:absolute; top:90px;">Make a booking</h1>
            <div class="wrapperFormInputsModal">
                <!-- Required attribute added -->
                <input class="data" type="date" name="data" placeholder="Select date" required><br><br>
                <select class="momentulZilei" name="momentulZilei" required>
                    <option value="">Select time</option> <!-- Option for user to select -->
                    <option value="toata ziua">All day</option>
                    <option value="doar dimineata">Just morning</option>
                    <option value="doar dupa-amiaza">Just afternoon</option>
                </select><br><br>
                <input id="reserve" class="sendbook" type="submit" value="Send book"><br><br>
            </div>
        </form>
    </div>

    <div id="modal2" class="formularRezervareContainer">
        <form class="rezervare" method="POST" action="../includes/anuleaza.php">
            <input type="hidden" name="id_loc" id="id_rezervare_delete" value="">
            <div onclick="inchide12()" class="xmodal">X</div>
            <h1 style="width:100%; text-align:center; position:absolute; top:90px;">This action will cancel this
                booking. Do you want to proceed?</h1>
            <div class="wrapperFormInputsModal">
                <input id="cancelbook" class="sendbook" type="submit" value="Yes! Cancel this booking"><br><br>
            </div>
        </form>
    </div>

    <div id="modal3" class="formularRezervareContainer">
        <form class="rezervare" method="POST" action="../includes/admin.php">
            <input type="hidden" name="id_rezervare" id="id_rezervare_delete" value="">
            <div onclick="inchide13()" class="xmodal">X</div>
            <h1 style="width:100%; text-align:center; position:absolute; top:90px;">This action will delete this
                booking. Do you want to proceed?</h1>
            <div class="wrapperFormInputsModal">
                <input class="sendbook" type="submit" value="Yes! Disable this place"><br><br>
                <p class="warning">In order to disable this place you must be an <b>admin</b> otherwise it will not work
                </p>
            </div>
        </form>
    </div>

    <div id="img" class="img">
        <h1 class="parter">PARTER</h1>
        <div id="grid" class="grid">
            <button onclick="deschidePopUp()" id="scaun" class="scaun scaun1" value="1">1</button>
            <button onclick="deschidePopUp()" id="scaun" class="scaun scaun2" value="2">2</button>
            <button onclick="deschidePopUp()" id="scaun" class="scaun scaun3" value="3">3</button>
            <button onclick="deschidePopUp()" id="scaun" class="scaun scaun4" value="4">4</button>
            <button onclick="deschidePopUp()" id="scaun" class="scaun scaun5" value="5">5</button>
            <button onclick="deschidePopUp()" id="scaun" class="scaun scaun6" value="6">6</button>
            <button onclick="deschidePopUp()" id="scaun" class="scaun scaun7" value="7">7</button>
            <button onclick="deschidePopUp()" id="scaun" class="scaun scaun8" value="8">8</button>
            <button onclick="deschidePopUp()" id="scaun" class="scaun scaun9" value="9">9</button>
            <button onclick="deschidePopUp()" id="scaun" class="scaun scaun10" value="10">10</button>
            <button onclick="deschidePopUp()" id="scaun" class="scaun scaun11" value="11">11</button>
        </div>
    </div>

    <div id="popup" class="popup" style="display:none;">
        <span class="spanX" onclick="inchidePopUp()">
            <div class="x">X</div>
        </span>
        <div class="optionsBook">
            <div onclick="modal()" class="buttonBook">Book</div>
            <div onclick="modal2()" class="buttonCancelBook">Cancel book</div>
            <div onclick="modal3()" class="buttonDisable">Disable</div>
        </div>
    </div>

    <div>
        <div id="formWrapper" class="form-wrapper">
            <form class="loggedInForm" action="../includes/logout.php" method="GET">
                <img class="profil" src="../images/profil.png" alt="Profile">
                <h1 class="bunvenit"> Bun venit, <?php echo htmlspecialchars($_SESSION['username']); ?>! </h1>
                <input id="reserve" onclick="pressed()" class="loggedinBook" type="button" value="Reserve">
                <input class="loggedinLogin" type="submit" value="Log Out">
            </form>
            <?php
            if (isset($_GET['info'])) {
                if ($_GET['info'] == 'rezervat') {
                    $messageType = 'green';
                    $messageText = 'Your booking was set successfully!';
                } elseif ($_GET['info'] == 'rezervareAnulata') {
                    $messageType = 'orange';
                    $messageText = 'Your booking was deleted successfully!';
                } else {
                    // Poți adăuga un mesaj implicit pentru alte valori
                    $messageType = 'gray';
                    $messageText = 'Status not recognized.';
                }
                echo "<p style='width:100%; text-align:center; color:$messageType; font-family:Raleway, sans-serif; position:relative; top:-30px;'>$messageText</p>";
            }

            // Afișează mesaje de eroare
            if (isset($_GET['error'])) {
                echo "<p style='width:100%; text-align:center; color:red; font-family:Raleway, sans-serif; position:relative; top:-30px;'>" . htmlspecialchars($_GET['error']) . "</p>";
            }
            ?>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../scripts/main.js"></script>
</body>

</html>