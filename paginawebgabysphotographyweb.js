alert("esto en la pagina de fotografia ");

var Mesaje1=" bienvenidos  para mas  informacion ";
Mesaje1=Mesaje1.toLowerCase();
alert(Mesaje1);


function saludar (msj) {
	alert(msj)
	// body...
}
function ejecultarsaludar(saludar) {
	alert("bienvenidos a mi paginas ")
	// body...
}
function fotografia(msj) {
	// body...
}
function ejecultarfotografia() {
	alert("para mas contrataciones ");
	// body...
}
function siguente(msj) {
	// body...
}
function ejecultarsiguente() {
	alert("para continuar con la informacion");
	// body...
}


var result = confirm("Do you really want to leave this page?");
if (result == true) {
    alert("Thanks for visiting");
}
else {
    alert("Thanks for staying with us");
}


function Myfuncion(){
	saludar()
	
   
	var nombre=document.getElementById('nombre').value;
	var apellido=document.getElementById('apellido').value;
	var telefono =document.getElementById('telefono').value;
  var cedula=document.getElementById('cedula').value;
  var comentarios = document.getElementById('comentarios').value;
	var email=document.getElementById('email').value;

	if(nombre ==""||nombre==null){
		alert("debe completar el nombre ");
	}
	if (apellido ==""||apellido==null) {
		alert("debe completar el apellido");
	}
	
	
    if (telefono ==""||telefono==null){
     alert("debe completar el Telefono ")
 }
	if (email ==""||email==null) {
		alert("debe completar el email");
	}
  if (cedula ==""||cedula==null) {
		alert("debe completar la cedula ");

}
 if (comentarios ==""||comentarios==null) {
  alert("debe completar los comentarios");

 }
 function saludar(){
	alert("debe completar toda la informacion para poder enviar sus consultas o dudas y tiene que estar con su informacion veradadera  ");
}
}

 function openModal(){
 	document.getElementById('myModal').style.display = "block";
 }
 function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}
var acc = document.getElementsByClassName("accordion");
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

function myFunction(imgs) {
  
  var expandImg = document.getElementById("expandedImg");
 
  var imgText = document.getElementById("imgtext");
 
  expandImg.src = imgs.src;

  imgText.innerHTML = imgs.alt;

  expandImg.parentElement.style.display = "block";
}



var elements=document.getElementsByClassName("columna");
var i;

f
    var modal=document.getElementById("id101");

    window.onclick=function (event) {
     if (event.target == modal ) {
      modal.style.display="none";
     } // body...
    }