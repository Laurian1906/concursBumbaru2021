<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.php">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <title>BLM - CONCURS SEVERIN BUMBARU</title>



</head>

<body>
    <header onclick="close()">
        <span class="logo"><img class="logo" src="../images/logo4.png"></img></span>
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div id="modal" class="formularRezervareContainer">
        <form class="rezervare" method="POST" action="../includes/rezervare.php">
            <div onclick="inchide11()" class="xmodal">X</div>
            <h1 style="width:100%;text-align:center;position:absolute;top:90px;">Make a booking</h1>
            <div class="wrapperFormInputsModal">
                <input class="data" type="date" name="data" placeholder="Select date" required></input><br><br>
                <!--<input class="momentulZilei" type="text" name="momentulZilei" placeholder="Select daytime"></input><br><br>-->
                <select class="momentulZilei" name="momentulZilei" required>
                    <option value="toata ziua">All day</option>
                    <option value="doar dimineata">Just morning</option>
                    <option value="doar dupa-amiaza">Just afternoon</option>
                </select><br><br>
                <input class="sendbook" type="submit" value="Send book"></input><br><br>
            </div>

        </form>
    </div>

    <div id="modal2" class="formularRezervareContainer">
        <form class="rezervare" method="POST" action="../includes/anuleaza.php">
            <div onclick="inchide12()" class="xmodal">X</div>
            <h1 style="width:100%;text-align:center;position:absolute;top:90px;">Cancel this booking</h1>
            <div class="wrapperFormInputsModal">
                <!--<input class="momentulZilei" type="text" name="momentulZilei" placeholder="Select daytime"></input><br><br>-->
                <input class="sendbook" type="submit" value="Cancel booking"></input><br><br>
            </div>

        </form>
    </div>

    <div id="modal3" class="formularRezervareContainer">
        <form class="rezervare" method="POST" action="../includes/admin.php">

            <div onclick="inchide13()" class="xmodal">X</div>
            <h1 style="width:100%;text-align:center;position:absolute;top:90px;">Disable this place</h1>
            <div class="wrapperFormInputsModal">
                <!--<input class="momentulZilei" type="text" name="momentulZilei" placeholder="Select daytime"></input><br><br>-->
                <input class="sendbook" type="submit" value="Disable"></input><br><br>
                <h3 class="warning">In order to disable this place you must be an <b>admin</b> otherwise it will not work</h3>
            </div>

        </form>
    </div>

    <div id="img" class="img">
        <h1 class="parter">PARTER</h1>
        <div id="grid" class="grid">
            <div class="but1">
                <button class="scaun 1" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 2" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 3" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 4" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 5" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 6" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 7" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 8" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 9" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 10" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 11" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 12" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 13" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 14" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 15" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 16" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 17" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 18" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 19" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 20" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 21" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 22" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 23" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 24" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 25" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 26" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 27" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 28" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 29" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 30" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 31" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 32" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 33" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 34" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 35" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 36" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 37" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 38" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 39" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 40" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 41" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 42" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 43" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 44" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 45" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 46" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 47" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 48" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 49" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 50" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 51" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 52" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 53" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 54" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 55" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 56" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 57" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 58" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 59" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 60" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 61" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 62" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 63" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 64" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 65" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 66" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 67" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 68" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 69" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 70" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 71" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 72" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 73" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 74" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 75" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 76" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 77 etaj3" value="scaun" style="
    /* width: 114px; */
    /* height: 88px; */
    /* position: absolute; */
    /* top: 42px; */
    /* border: 2px solid black; */
    /* left: 205px; */
    /* background: none; */
    width: 125px;
    height: 90px;
    position: absolute;
    top: 42px;
    border: 2px solid black;
    left: 200px;
    background: none;
    cursor:pointer;
"></button>
                <button class="scaun 78" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 79" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 80" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 81" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 82" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 83" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 84" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 85" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 86" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 87" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 88" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 89" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 90" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 91" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button id="pop-up3" class="scaun 92" value="scaun" style="
    border: 0;
">
                    <div class="optionsBook">

                        <div onclick="modal()" class="buttonBook">Book</div>
                        <div onclick="modal2()" class="buttonCancelBook">Cancel book</div>
                        <!--<div>Select floor</div>-->
                        <div onclick="modal3()" class="buttonDisable">Disable</div>

                    </div>
                    <span class="spanX">
                        <div onclick="inchide3()" class="x">X</div>
                    </span>

                </button>
                <button class="scaun 93" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 94" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 95" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 96" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 97" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 98" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 99" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button onclick="scaun5()" class="scaun 100 scaun5" value="scaun" style="
    width: 33px;
    height: 36px;
    position: absolute;
    top: 95px;
    border: 2px solid black;
    left: 1160px;
    background: #2c9668;
"></button>
                <button class="scaun 101" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button id="pop-up5" class="scaun 102" value="scaun" style="
    border: 0;
">
                    <div class="optionsBook">

                        <div onclick="modal()" class="buttonBook">Book</div>
                        <div onclick="modal2()" class="buttonCancelBook">Cancel book</div>
                        <!--<div>Select floor</div>-->
                        <div onclick="modal3()" class="buttonDisable">Disable</div>

                    </div>
                    <span class="spanX">
                        <div onclick="inchide5()" class="x">X</div>
                    </span>
                </button>
                <button class="scaun 103" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 104" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 105" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 106" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 107" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 108" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 109" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 110" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 111" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 112" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 113" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 114" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 115" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 116" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button onclick="scaun1()" id="scaun1" class="scaun 117 scaun1" value="scaun" style="
    /* border: 0; */
    /* background: none; */
    width: 31px;
    height: 36px;
    position: absolute;
    top: 131px;
    border: 2px solid black;
    left: 424px;
    background: #2c9668;
"></button>
                <button class="scaun 118" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button id="pop-up1" class="scaun 119" value="scaun" style="border: 0px; display: none;">
                    <div class="optionsBook">

                        <div onclick="modal()" class="buttonBook">Book</div>
                        <div onclick="modal2()" class="buttonCancelBook">Cancel book</div>
                        <!--<div>Select floor</div>-->
                        <div onclick="modal3()" class="buttonDisable">Disable</div>

                    </div>
                    <span class="spanX">
                        <div onclick="inchide()" class="x">X</div>
                    </span>
                </button>
                <button class="scaun 120" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 121" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 122" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 123" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 124" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 125" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button onclick="scaun3()" class="scaun 126 scaun3" value="scaun" style="
    width: 34px;
    height: 36px;
    position: absolute;
    top: 107px;
    border: 2px solid black;
    left: 795px;
    background: #2c9668;
"></button>
                <button class="scaun 127" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 128" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 129" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 130" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 131" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 132" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 133" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 134" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 135" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 136" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 137" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 138" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 139" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 140" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun 141" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button id="pop-up6" class="scaun" value="scaun" style="
    border: 0;
">
                    <div class="optionsBook">

                        <div onclick="modal()" class="buttonBook">Book</div>
                        <div onclick="modal2()" class="buttonCancelBook">Cancel book</div>
                        <!--<div>Select floor</div>-->
                        <div onclick="modal3()" class="buttonDisable">Disable</div>

                    </div>
                    <span class="spanX">
                        <div onclick="inchide6()" class="x">X</div>
                    </span>
                </button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun parter" value="scaun" style="
    /* width: 114px; */
    /* height: 85px; */
    /* position: absolute; */
    /* top: 136px; */
    /* border: 2px solid black; */
    /* left: 205px; */
    /* background: none; */
    width: 125px;
    height: 90px;
    position: absolute;
    top: 312px;
    border: 2px solid black;
    left: 200px;
    background: none;
    cursor:pointer;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button onclick="scaun2()" class="scaun scaun2" value="scaun" style="
    width: 51px;
    height: 24px;
    position: absolute;
    top: 160px;
    border: 2px solid black;
    left: 478px;
    background: #2c9668;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button onclick="scaun4()" class="scaun scaun4" value="scaun" style="
    width: 53px;
    height: 24px;
    position: absolute;
    top: 158px;
    border: 2px solid black;
    left: 809px;
    background: #2c9668;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button id="pop-up4" class="scaun" value="scaun" style="
    border: 0;
">
                    <div class="optionsBook">

                        <div onclick="modal()" class="buttonBook">Book</div>
                        <div onclick="modal2()" class="buttonCancelBook">Cancel book</div>
                        <!--<div>Select floor</div>-->
                        <div onclick="modal3()" class="buttonDisable">Disable</div>

                    </div>
                    <span class="spanX">
                        <div onclick="inchide4()" class="x">X</div>
                    </span>
                </button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button onclick="scaun6()" class="scaun scaun6" value="scaun" style="
    width: 52px;
    height: 23px;
    position: absolute;
    top: 155px;
    border: 2px solid black;
    left: 1282px;
    background: #2c9668;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button id="pop-up2" class="scaun" value="scaun" style="border: 0px; display: none;">
                    <div class="optionsBook">

                        <div onclick="modal()" class="buttonBook">Book</div>
                        <div onclick="modal2()" class="buttonCancelBook">Cancel book</div>
                        <!--<div>Select floor</div>-->
                        <div onclick="modal3()" class="buttonDisable">Disable</div>

                    </div>
                    <span class="spanX">
                        <div onclick="inchide2()" class="x">X</div>
                    </span>

                </button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun etaj1" value="scaun" style="
    /* width: 114px; */
    /* height: 88px; */
    /* position: absolute; */
    /* top: 225px; */
    /* border: 2px solid black; */
    /* left: 205px; */
    /* background: none; */
    width: 125px;
    height: 90px;
    position: absolute;
    top: 222px;
    border: 2px solid black;
    left: 200px;
    background: none;
    cursor:pointer;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun etaj2" value="scaun" style="
    /* border: 0; */
    /* background: none; */
    /* width: 114px; */
    /* height: 88px; */
    /* position: absolute; */
    /* top: 316px; */
    /* border: 2px solid black; */
    /* left: 205px; */
    /* background: none; */
    width: 125px;
    height: 90px;
    position: absolute;
    top: 132px;
    border: 2px solid black;
    left: 200px;
    background: none;
    cursor:pointer;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button type="button" onclick="scaun10();" class="scaun scaun10" value="scaun10"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button onclick="scaun7()" class="scaun scaun7" value="scaun" style="
    width: 52px;
    height: 24px;
    position: absolute;
    top: 422px;
    border: 2px solid black;
    left: 1083px;
    background: #2c9668;
"></button>
                <button id="pop-up7" class="scaun" value="scaun" style="
    border: 0;
">
                    <div class="optionsBook">

                        <div onclick="modal()" class="buttonBook">Book</div>
                        <div onclick="modal2()" class="buttonCancelBook">Cancel book</div>
                        <!--<div>Select floor</div>-->
                        <div onclick="modal3()" class="buttonDisable">Disable</div>

                    </div>
                    <span class="spanX">
                        <div onclick="inchide7()" class="x">X</div>
                    </span>
                </button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button id="pop-up10" class="scaun" value="scaun" style="
    border: 0;
">
                    <div class="optionsBook">

                        <div onclick="modal()" class="buttonBook">Book</div>
                        <div onclick="modal2()" class="buttonCancelBook">Cancel book</div>
                        <!--<div>Select floor</div>-->
                        <div onclick="modal3()" class="buttonDisable">Disable</div>

                    </div>
                    <span class="spanX">
                        <div onclick="inchide10()" class="x">X</div>
                    </span>
                </button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button id="pop-up8" class="scaun" value="scaun" style="
    border: 0;
">
                    <div class="optionsBook">

                        <div onclick="modal()" class="buttonBook">Book</div>
                        <div onclick="modal2()" class="buttonCancelBook">Cancel book</div>
                        <!--<div>Select floor</div>-->
                        <div onclick="modal3()" class="buttonDisable">Disable</div>

                    </div>
                    <span class="spanX">
                        <div onclick="inchide8()" class="x">X</div>
                    </span>
                </button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button id="pop-up9" class="scaun" value="scaun" style="
    border: 0;
">
                    <div class="optionsBook">

                        <div onclick="modal()" class="buttonBook">Book</div>
                        <div onclick="modal2()" class="buttonCancelBook">Cancel book</div>
                        <!--<div>Select floor</div>-->
                        <div onclick="modal3()" class="buttonDisable">Disable</div>

                    </div>
                    <span class="spanX">
                        <div onclick="inchide9()" class="x">X</div>
                    </span>
                </button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button onclick="scaun9()" class="scaun scaun9" value="scaun" style="
    width: 33px;
    height: 36px;
    position: absolute;
    top: 515px;
    border: 2px solid black;
    left: 781px;
    background: #2c9668;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button onclick="scaun8()" class="scaun scaun8" value="scaun" style="
    width: 33px;
    height: 35px;
    position: absolute;
    top: 515px;
    border: 2px solid black;
    left: 955px;
    background: #2c9668;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
                <button class="scaun" value="scaun" style="
    border: 0;
    background: none;
"></button>
            </div>

        </div>
        </img>
    </div>

    <div>
        <?php

        echo '<div id="formWrapper" class="form-wrapper">';

        echo '<form  class="loggedInForm" action="../includes/logout.php" method="GET">';
        echo '<img class="profil" src="../images/profil.png"></img>';
        echo '<h1 class="bunvenit"> Bun venit, ' . $_SESSION['username'] . '! </h1>';
        echo '<input id="reserve" onclick="pressed()" class="loggedinBook" type="button" value="Reserve">';
        echo '<input class="loggedinLogin" type="submit" value="Log Out" >';
        echo '</form>';
        if (isset($_GET['info']) && ($_GET['info'] == 'rezervat')) {
            echo '<p style="width:100%;text-align:center;color:green;font-family:Raleway, sans-serif;position:relative;top:-30px;">Your booking was set succesfully!</p>';
        } else if (isset($_GET['info']) && ($_GET['info'] == 'sters')) {
            echo '<p style="width:100%;text-align:center;color:orange;font-family:Raleway, sans-serif;position:relative;top:-30px;">Your booking was deleted succesfully</p>';
        }
        echo '</div>';



        echo '<script src="main.js"></script>';
        ?>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>>
    <script src="../scripts/main.js"></script>
</body>

</html>