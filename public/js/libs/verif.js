function surligne(champ, erreur) {
   if (erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}

function verifPseudo(champ) {

   var regex = /[^0-9][A-Za-z]{2,25}/;
   if (!regex.test(champ.value) && champ.value.length < 2 || champ.value.length > 25) {
      surligne(champ, true);
      alert('Pseudo : Must contain at least 2 or at most 25 characters');
      return false;

   } else {
      surligne(champ, false);
      return true;
   }
}

function verifMail(champ) {
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if (!regex.test(champ.value)) {
      surligne(champ, true);
      return false;
   } else {
      surligne(champ, false);
      return true;
   }
}

function verifPassword(champ) {
   if (document.getElementById("password").value !== document.getElementById("confirm_pass").value) {
      surligne(champ, true);
      return false;
   } else {
      surligne(champ, false);
      return true;
   }
  
}

var check = function() {
   if (document.getElementById('password').value ==
     document.getElementById('confirm_password').value) {
     document.getElementById('advert').style.color = 'green';
     document.getElementById('advert').innerHTML = 'Matching passwords';
   } else {
     document.getElementById('advert').style.color = 'red';
     document.getElementById('advert').innerHTML = 'Not matching passwords';
   }
 }

var myInput = document.getElementById("password");
var myInputConfirm = document.getElementById("confirm_pass");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");
// When the user clicks on the password field, show the message box
myInput.onfocus = function () {
   document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function () {
   document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function () {
   // Validate lowercase letters
   var lowerCaseLetters = /[a-z]/g;
   if (myInput.value.match(lowerCaseLetters)) {
      letter.classList.remove("invalid");
      letter.classList.add("valid");
   } else {
      letter.classList.remove("valid");
      letter.classList.add("invalid");
   }

   // Validate capital letters
   var upperCaseLetters = /[A-Z]/g;
   if (myInput.value.match(upperCaseLetters)) {
      capital.classList.remove("invalid");
      capital.classList.add("valid");
   } else {
      capital.classList.remove("valid");
      capital.classList.add("invalid");
   }

   // Validate numbers
   var numbers = /[0-9]/g;
   if (myInput.value.match(numbers)) {
      number.classList.remove("invalid");
      number.classList.add("valid");
   } else {
      number.classList.remove("valid");
      number.classList.add("invalid");
   }

   // Validate length
   if (myInput.value.length >= 8) {
      length.classList.remove("invalid");
      length.classList.add("valid");
   } else {
      length.classList.remove("valid");
      length.classList.add("invalid");
   }

  
 
}

function verifForm(f) {
   var pseudoOk = verifPseudo(f.pseudo);
   var mailOk = verifMail(f.email);
   var genreOk = verifGenre(f.genre);
   var passwordOk = verifPassword(f.password);

   if (pseudoOk && mailOk && genreOk && passwordOk)
      return true;
   else {

      alert("Please file correctly the fields");
      return false;
   }
}