var slideIndex = 1;
showSlides(slideIndex);

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlidesfeatures");
  var dots = document.getElementsByClassName("dotfeatures");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

//PARTIE BACKOFFICE
function connexion(){
  document.getElementById('connexion').style.display = "block";
  document.getElementById('inscription').style.display = "none";
}
function inscription(){
  document.getElementById('inscription').style.display = "block";
  document.getElementById('connexion').style.display = "none";
}

// check if it's the same password
var email = document.getElementById('email');
var password = document.getElementById('password');
var passwordVerif = document.getElementById('passwordVerif');
var button = document.getElementById('submit');

passwordVerif.addEventListener('input', function(){
  if(password.value == passwordVerif.value){
    submit.removeAttribute('disabled');
  }
});


// partie backoffice
function countries(){
  document.getElementById('form_countries').style.display = "flex";
  document.getElementById('form_all').style.display = "none";
  document.getElementById('form_featured').style.display = "none";
  document.getElementById('form_events').style.display = "none";
  document.getElementById('form_news').style.display = "none";
  document.getElementById('form_services').style.display = "none";
  document.getElementById('form_testimonial').style.display = "none";
}
function featured(){
document.getElementById('form_featured').style.display = "flex";
document.getElementById('form_all').style.display = "none";
document.getElementById('form_countries').style.display = "none";
document.getElementById('form_events').style.display = "none";
document.getElementById('form_news').style.display = "none";
document.getElementById('form_services').style.display = "none";
document.getElementById('form_testimonial').style.display = "none";}
function events(){
  document.getElementById('form_all').style.display = "none";
  document.getElementById('form_events').style.display = "flex";
  document.getElementById('form_countries').style.display = "none";
  document.getElementById('form_featured').style.display = "none";
  document.getElementById('form_news').style.display = "none";
  document.getElementById('form_services').style.display = "none";
  document.getElementById('form_testimonial').style.display = "none";
}
function news(){
  document.getElementById('form_all').style.display = "none";
  document.getElementById('form_news').style.display = "flex";
  document.getElementById('form_featured').style.display = "none";
  document.getElementById('form_events').style.display = "none";
  document.getElementById('form_countries').style.display = "none";
  document.getElementById('form_services').style.display = "none";
  document.getElementById('form_testimonial').style.display = "none";
}
function services(){
  document.getElementById('form_all').style.display = "none";
  document.getElementById('form_services').style.display = "flex";
  document.getElementById('form_featured').style.display = "none";
  document.getElementById('form_events').style.display = "none";
  document.getElementById('form_news').style.display = "none";
  document.getElementById('form_countries').style.display = "none";
  document.getElementById('form_testimonial').style.display = "none";
}
function testimonial(){
  document.getElementById('form_testimonial').style.display = "flex";
  document.getElementById('form_events').style.display = "none";
  document.getElementById('form_featured').style.display = "none";
  document.getElementById('form_news').style.display = "none";
  document.getElementById('form_services').style.display = "none";
  document.getElementById('form_countries').style.display = "none";
  document.getElementById('form_all').style.display = "none";
}
function seeall(){
  document.getElementById('form_all').style.display = "flex";
  document.getElementById('form_featured').style.display = "none";
  document.getElementById('form_testimonial').style.display = "none";
  document.getElementById('form_events').style.display = "none";
  document.getElementById('form_news').style.display = "none";
  document.getElementById('form_services').style.display = "none";
  document.getElementById('form_countries').style.display = "none";
}





// verif js
// var inscription = document.getElementById('inscription');
//
// inscription.addEventListener('submit', function(){
//   if(password.value != '' && email.value != '' && passwordVerif.value != ''){
//     return true;
//   }else {
//     if (password.value == '') {
//       alert('Mot de passe requis');
//     }
//     if (email.value == '') {
//       alert('Email requis');
//     }
//     if (passwordVerif.value == '') {
//       alert('Mot de passe requis');
//     }
//     return false;
//   }
// })
//
//
// var connexion = document.getElementById('connexion');
//
// connexion.addEventListener('submit', function(){
//   if(password.value != '' && email.value != ''){
//     return true;
//   }else {
//     if (password.value == '') {
//       alert('Mot de passe requis');
//     }
//     if (email.value == '') {
//       alert('Email requis');
//     }
//     return false;
//   }
// })
