/*Akordeón*/
function showSidebar(){
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'flex'
}
function hideSidebar(){
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'none'
} 
var acc = document.getElementsByClassName("akordeon");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
/*Formular validacia, alert, redirect*/
function validateForm() {
  var emailInput = document.getElementById('email');
  var emailValue = emailInput.value.trim();

  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (!emailRegex.test(emailValue)) {
      alert('Prosím zadajte platnú emailovú adresu.');
      return;
  }
  window.location.href = 'thankyoupage.html';
}

function setCookie(cname,cvalue,exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
/*cookies*/
function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
/*slider a bannery*/
function checkCookie() {
  let user = getCookie("username");
  if (user != "") {
    alert("Vitajte " + user);
  } else {
    user = prompt("Prosím zadajte svoje meno:","");
    if (user != "" && user != null) {
      setCookie("username", user, 30);
    }
  }
}

var idx = 1;

function show(n) {
  var slides = document.getElementsByClassName("slide");
  if (n > slides.length){
    idx = 1;
  }   
  if (n < 1) {
    idx = slides.length;
  }
  for (var i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slides[idx-1].style.display = "block";  
}
function nextSlide(n) {
  show(idx += n);
}

show(idx);
var prev  = document.getElementById("prev");
prev.addEventListener("click", function(){
    nextSlide(-1)
});

var next  = document.getElementById("next");
next.addEventListener("click", function(){
    nextSlide(1)
});