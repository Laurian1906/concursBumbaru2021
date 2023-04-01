<?php header('Content-type: text/css; charset:UTF-8');
?>

/* Global reset */
* {
margin: 0;
padding: 0;
box-sizing: border-box;
}

body {
width: 100%;
height: 100vh;
background-color: #5C798D;
overflow:hidden;
}

header {
width: 100%;
height: 130px;
background-color: #FFFFFF;
display: flex;
justify-content: space-between;
}

.logo {
width: 157px;
position: relative;
top: -9.5px;
left: -14px;
z-index:90;
}

span {
font-size: 50px;
color: #4E4E4E;
font-family: 'Raleway', sans-serif;
padding-top: 31px;
padding-left: 50px;
}

nav {
height: 159px;
}

nav ul {
list-style: none;
}

nav ul li {
display: inline-block;
padding-top: 31px;
}

nav ul li a {
font-size: 50px;
color: #4E4E4E;
font-family: 'Raleway', sans-serif;
text-decoration: none;
padding-right: 50px;
}

form {
width: 644px;
height: 534px;
background-color: #FFFFFF;
margin: 0 auto;
margin-top: 140px;
}

.inputs {
width: 100%;
display: flex;
justify-content: center;
flex-direction: column;
padding-top: 100px;
}

.welcome {
width: 100%;
text-align: center;
font-size: 72px;
color: #4E4E4E;
font-family: 'Raleway', sans-serif;
padding-bottom: 35px;
font-weight: 300;
}

.username,
.password {
width: 430px;
height: 56px;
font-family: 'Raleway', sans-serif;
background-color: #FFFFFF;
border: 0;
border: 1px solid #000000;
margin: 0 auto;
text-indent: 10px;
padding: 0px 15px;
font-size: 25px;
}

.login {
width: 430px;
height: 56px;
font-family: 'Raleway', sans-serif;
background-color: #28AFD9;
color: #FFFFFF;
border: 0;
margin: 0 auto;
padding: 0px 15px;
font-size: 25px;
cursor: pointer;
transition: 0.3s;
}

.login:hover {
background-color: #29C8F9;
}

/* LOGGEDIN.PHP */

.form-wrapper {
width: 644px;
height: 534px;
background-color: #FFFFFF;
margin: 0 auto;
margin-top: 140px;
display: flex;
justify-content: center;
flex-direction: column;
}

.loggedInForm {
width: 644px;
height: 534px;
background-color: #FFFFFF;
margin: 0 auto;
margin-top: 104px;
}

.bunvenit {
width: 100%;
text-align: center;
font-size: 30px;
color: #4E4E4E;
font-family: 'Raleway', sans-serif;
padding-bottom: 35px;
font-weight: 300;
}

.loggedinLogin,
.loggedinBook {
width: 430px;
height: 56px;
font-family: 'Raleway', sans-serif;
background-color: #28AFD9;
color: #FFFFFF;
border: 0;
margin: 0 auto;
padding: 0px 15px;
font-size: 25px;
cursor: pointer;
transition: 0.3s;
display: flex;
justify-content: center;
margin-bottom: 5px;
}

.loggedinLogin:hover,
.loggedinBook:hover {
background-color: #29C8F9;
}

.profil {
width: 125px;
height: 125px;
margin: 0 auto;
display: flex;
justify-content: center;
}

.img {
display: none;
width: 100%;
height: 100vh;
justify-content: center;
align-content: center;
}

.parterVector {
height: 70%;
margin-top: 3%;
margin-left: -11%;
}

.grid {
display: grid;
justify-content: center;
align-content: center;
position: absolute;
width: 1462px;
height: 637px;
left: auto;
top: 213px;
border: 1px solid white;
background-image: url(../images/parterVector.png);
background-size: 100% 100%;
background-repeat: none;
background-color: #c2d9e8;
}

.but1,
.but2,
.but3,
.but4,
.but5 {
display: grid;
grid-template-columns: repeat(35, 5fr);
gap: 10px;
}

.scaun {
width: 30px;
height: 30px;
display: grid;
border: 0;
/*background:none;*/
}

.scaun2 {
background-color: red;
width: 49px;
height: 22px;
position: relative;
left: -11px;
cursor: pointer;
}

.scaun1,
.scaun2,
.scaun3,
.scaun4,
.scaun5,
.scaun6,
.scaun7,
.scaun8,
.scaun9,
.scaun10 {
cursor: pointer;
z-index: 30;
}

#pop-up1 {
width: 280px;
height: 92px;
background-color: whitesmoke;
font-size: 20px;
position: absolute;
top: 46px;
left: 457px;
border-radius: 15px;
display: none;
z-index: 40;
}

#pop-up2 {
width: 280px;
height: 92px;
background-color: whitesmoke;
font-size: 20px;
position: absolute;
top: 186px;
left: 471px;
border-radius: 15px;
display: none;
z-index: 40;
}

#pop-up3 {
width: 280px;
height: 92px;
background-color: whitesmoke;
font-size: 20px;
position: absolute;
top: 19px;
left: 827px;
border-radius: 15px;
display: none;
z-index: 40;
}

#pop-up4 {
width: 280px;
height: 92px;
background-color: whitesmoke;
font-size: 20px;
position: absolute;
top: 183px;
left: 851px;
border-radius: 15px;
display: none;
z-index: 40;
}

#pop-up5 {
width: 280px;
height: 92px;
background-color: whitesmoke;
font-size: 20px;
position: absolute;
top: 6px;
left: 1191px;
border-radius: 15px;
display: none;
z-index: 40;
}

#pop-up6 {
width: 280px;
height: 92px;
background-color: whitesmoke;
font-size: 20px;
position: absolute;
top: 177px;
left: 1321px;
border-radius: 15px;
display: none;
z-index: 40;
}

#pop-up7 {
width: 280px;
height: 92px;
background-color: whitesmoke;
font-size: 20px;
position: absolute;
top: 337px;
left: 1132px;
border-radius: 15px;
display: none;
z-index: 40;
}

#pop-up8 {
width: 280px;
height: 92px;
background-color: whitesmoke;
font-size: 20px;
position: absolute;
top: 542px;
left: 991px;
border-radius: 15px;
display: none;
z-index: 40;
}

#pop-up9 {
width: 280px;
height: 92px;
background-color: whitesmoke;
font-size: 20px;
position: absolute;
top: 548px;
left: 501px;
border-radius: 15px;
display: none;
z-index: 40;
}

#pop-up10 {
width: 280px;
height: 92px;
background-color: whitesmoke;
font-size: 20px;
position: absolute;
top: 334px;
left: 379px;
border-radius: 15px;
display: none;
z-index: 40;
}

.x {
font-size: 20px;
text-decoration: none;
color: white;
font-family: 'Raleway', sans-serif;
border: 1px solid white;
background-color: #505456;
width: 27px;
border-radius: 25px;
position: absolute;
top: 2px;
left: 3px;
cursor: pointer;
transition: 0.3s;
}
.spanX{
position: absolute;
top: 0;
left: 0;
}

.xmodal {
font-size: 20px;
text-decoration: none;
color: white;
font-family: 'Raleway', sans-serif;
border: 1px solid white;
background-color: #505456;
width: 27px;
border-radius: 25px;
position: absolute;
top: 2px;
left: 3px;
cursor: pointer;
transition: 0.3s;
text-indent:6px;
}

.optionsBook {
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
height: 100%;
font-family: 'Raleway', sans-serif;
}
.buttonBook,
.buttonCancelBook,
.buttonDisable{
cursor:pointer;
}

#closeModal{
width:100%;
height:100%;
display:none;
}

.formularRezervareContainer{
width:100%;
height:100vh;
background-color:rgba(0,0,0,0.3);
font-family:'Raleway', sans-serif;
position:absolute;
display:none;
justify-content:center;
align-content:center;
z-index:80;
}

.rezervare{
display: flex;
flex-direction: column;
position: absolute;
top: -12px;
}

.wrapperFormInputsModal{
display:flex;
justify-content:center;
align-content:center;
flex-direction:column;
position:relative;
top:150px;
}

.data{
width: 430px;
height: 56px;
font-family: 'Raleway', sans-serif;
background-color: #FFFFFF;
border: 0;
border: 1px solid #000000;
margin: 0 auto;
text-indent: 10px;
padding: 0px 15px;
font-size: 25px;
}
.time{
width:30px;
height:30px;
position:absolute;
top:10px;
left:485px;
border:0;
background:none;
cursor:pointer;
}
.momentulZilei{
width: 430px;
height: 56px;
font-family: 'Raleway', sans-serif;
background-color: #FFFFFF;
border: 0;
border: 1px solid #000000;
margin: 0 auto;
text-indent: 10px;
padding: 0px 15px;
font-size: 25px;
}
.sendbook {
width: 430px;
height: 56px;
font-family: 'Raleway', sans-serif;
background-color: #28AFD9;
color: #FFFFFF;
border: 0;
margin: 0 auto;
padding: 0px 15px;
font-size: 25px;
cursor: pointer;
transition: 0.3s;
}

.warning{
padding: 30px px;
color:orange;

}

/* CONTACT.PHP */

.alignTable{
display:flex;
width:100%;
height: 534px;
justify-content:center;
align-content:center;
flex-direction:column;
}

input{
display:flex;
justify-content:center;
align-content:center;
}

.alignTable input{
margin-bottom:12px;
}

.request{
width: 100%;
text-align: center;
font-size: 30px;
color: #4E4E4E;
font-family: 'Raleway', sans-serif;
padding-bottom: 35px;
font-weight: 500;
}

.parter{
width: 100%;
text-align: center;
font-size: 30px;
color: white;
font-family: 'Raleway', sans-serif;
padding-bottom: 35px;
font-weight: 500;
padding-top:30px;
}




button.scaun.scaun10{
width: 51px;
height: 24px;
position: absolute;
top: 425px;
border: 2px solid black;
left: 648px;
background: #2c9668;
}