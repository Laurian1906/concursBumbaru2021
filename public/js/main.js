// Functia aceasta face ca div-ul cu log Out si Reserve sa dispara
// atunci cand se apasa pe reserve

function pressed() {
  button = document.getElementById("reserve");

  if (button) {
    document.getElementById("formWrapper").style.display = "none";
    document.getElementById("img").style.display = "flex";
    document.getElementById("grid").style.display = "block";
  }
}

// Functia aceasta afiseaza un pop-up atunci cand se apasa pe buton
function deschidePopUp() {
  // Obține butonul care a fost apăsat
  const button = event.target;

  // Obține valoarea atributului `value` (sau `data-id`, dacă folosești acest atribut)
  const dataId = button.value;

  // Salvează valoarea în câmpul ascuns din formular
  document.getElementById("rezervareDataId").value = dataId;

  // Afișează pop-up-ul
  document.getElementById("popup").style.display = "block";
}

// Functia aceasta inchide pop-up-ul
function inchidePopUp() {
  document.getElementById("popup").style.display = "none";
}

//DESCHIDE MODALE
function modal() {
  document.getElementById("modal").style.display = "flex";
}
function modal2() {
  document.getElementById("modal2").style.display = "flex";
}
function modal3() {
  document.getElementById("modal3").style.display = "flex";
}

// INCHIDERE MODALE
function inchide11() {
  document.getElementById("modal").style.display = "none";
}
function inchide12() {
  document.getElementById("modal2").style.display = "none";
}
function inchide13() {
  document.getElementById("modal3").style.display = "none";
}

// Select all chair buttons and add event listener
let id_loc = 0; // Declarați id_loc în afara funcțiilor pentru a-l face accesibil global
let button_id_loc = 0;
let buttonPath = document.getElementsByClassName("scaun")[button_id_loc];
document.querySelectorAll(".scaun").forEach((button) => {
  button.addEventListener("click", function (event) {
    // Get the value of the button (id_loc)
    id_loc = button.value; // Folosește variabila globală
    sessionStorage.setItem("id_loc", id_loc);

    console.log("ID loc:", id_loc);
    button_id_loc = id_loc - 1;
    buttonPath = document.getElementsByClassName("scaun")[button_id_loc];

    // Store id_loc in the hidden input for later use
    document.getElementById("rezervareDataId").value = id_loc;
    document.getElementById("id_rezervare_delete").value = id_loc;
    console.log(buttonPath);
    // Show the pop-up for the user
    deschidePopUp(event);
  });
});

// Reserve button event listener
const reserveButton = document.getElementById("reserve");
if (reserveButton) {
  reserveButton.addEventListener("click", function () {
    console.log("Rezervare pentru ID loc:", id_loc);

    // Find the button by its value, not its index in the collection

    console.log(buttonPath); // Verifică dacă buttonPath este valid

    console.log("Se trimite cererea...");
    console.log("Na, variabila id_loc", id_loc);
    // Logic to send id_loc for reservation
    fetch("../includes/rezervare.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
    })
      .then((response) => response.text())
      .then((data) => {
        if (data.status === "success") {
          console.log("Rezervare efectuată:", data);
          // Schimbă culoarea butonului
          if (data.status === "success") {
            console.log(buttonPath);
            buttonPath.style.backgroundColor = "#893333";
          }
          // alert(data.message); // Afișează mesajul de succes
          window.location.reload(); // Reload after success
        } else {
          console.error("Eroare la rezervare:", data.message);
          // alert(data.message); // Afișează mesajul de eroare
        }
      })
      .catch((error) => console.error("Eroare:", error));
  });
}

// Cancel button event listener
const cancelBookButton = document.getElementById("cancelbook");

if (cancelBookButton) {
  cancelBookButton.addEventListener("click", function () {
    console.log("Anularea rezervării pentru ID loc:", id_loc);

    // Find the button by its value, not its index in the collection
    let buttonPath = document.querySelector(`.scaun[value='${id_loc}']`);
    console.log(buttonPath); // Verifică dacă buttonPath este valid

    // Sending the data to PHP for cancellation
    // fetch("anuleaza.php", {
    //   method: "POST",
    //   headers: {
    //     "Content-Type": "application/x-www-form-urlencoded",
    //   },
    //   body: `id_loc=${id_loc}`, // Send id_loc for cancellation
    // })
    //   .then((response) => response.json())
    //   .then((data) => {
    //     if (data.status === "success") {
    //       console.log("Rezervare anulată:", data);
    //       if (buttonPath) {
    //         buttonPath.style.backgroundColor = "green"; // Schimbă culoarea
    //       }
    //       window.location.reload(); // Reload after success
    //     } else {
    //       console.error("Eroare:", data.message);
    //     }
    //   })
    //   .catch((error) => console.error("Eroare:", error));
  });
}
