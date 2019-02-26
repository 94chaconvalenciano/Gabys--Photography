<?php include("header.php"); ?>
<main>
	 <section class="hero">
		<h1><strong>Gaby's Photography</strong></h1>

	</section>

		<section id="portafolio" class="portafolio">
			<div class="column">
		<img class="demo cursor" src="cascadas.jpg"  style="width:50%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
	</div>
	<div class="column">
      <img class="demo cursor" src="mariposa%20facebook%20%202.jpg" style="width:50%" onclick="openModal();currentSlide(2)"class="hover-shadow cursor">

         </div>

 <div class="column">
      <img class="demo cursor" src="embarao%203.jpg" style="width:50%" onclick="openModal();currentSlide(3)"class="hover-shadow cursor">
         </div>


			<div class="column">
      <img class="demo cursor" src="ni%C3%B1a%202-psd.jpg"alt="cascadas" class="imagen" style="width:50%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
         </div>
         <div class="column">
      <img class="demo cursor" src="fotos%20para%20el%20libro%201.jpg" style="width:50%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
         </div>

        <div class="column">
      <img class="demo cursor" src="fotos%202%20para%20el%20libro%20y%20concurso%20.jpg" style="width:50%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
         </div>
<div class="column">
      <img class="demo cursor" src="fotos%20para%20el%20libro%203.jpg" style="width:50%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
         </div>
     </div>
     <div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

			
			<h2>portafolio de fotos </h2>
			<h6 >fotos </h6>
			<div class="container">
			<div class="mySlides">
			<div class="numbertext">1 /7</div>
			<img src="cascadas.jpg" alt="cascadas" class="imagen" style="width: 100%">
			</div>

			<div class="mySlides">
			<div class="numbertext">2/7</div>
			<img src="mariposa%20facebook%20%202.jpg" style="width: 100%">	
		</div>
		<div class="mySlides">
		<div class="numbertext">3 /7</div>
		<img src="embarao%203.jpg" style="width: 100%">
			
		</div>
		<div class="mySlides">
			<div  class="numbertext"> 4 /7</div>
			<img src="ni%C3%B1a%202-psd.jpg" style="width: 100%">
		</div>
		<div class="mySlides">
			<div class="numbertext"> 5 / 7 </div>
			<img src="fotos%20para%20el%20libro%201.jpg" style="width: 100%">
		</div>
		<div class="mySlides">
			<div class="numbertext">6 / 7</div>
			<img src="fotos%202%20para%20el%20libro%20y%20concurso%20.jpg" style="width: 100%">
		</div>
		<div class="mySlides">
			<div class="numbertext"> 7 / 7</div>
			<img src="fotos%20para%20el%20libro%203.jpg" style="width: 100%">
		</div>

			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>	

		 <div class="caption-container">
    <p id="caption"></p>
  </div>
		
		<div class="row">
		<div class="column">
      <img class="demo cursor" src="cascadas.jpg" style="width:50%" onclick="currentSlide(1)" alt="cascadas" class="imagen">
   
  </div>
  <div class="column">
      <img class="demo cursor" src="mariposa%20facebook%20%202.jpg" style="width:50%" onclick="currentSlide(2)" alt="mariposa">
         </div>

<div class="column">
      <img class="demo cursor" src="embarao%203.jpg" style="width:50%" onclick="currentSlide(3)" alt="embarazo">
         </div>


			<div class="column">
      <img class="demo cursor" src="ni%C3%B1a%202-psd.jpg" style="width:50%" onclick="currentSlide(4)" alt="niña">
         </div>
         <div class="column">
      <img class="demo cursor" src="fotos%20para%20el%20libro%201.jpg" style="width:50%" onclick="currentSlide(5)" alt="noche">
         </div>

        <div class="column">
      <img class="demo cursor" src="fotos%202%20para%20el%20libro%20y%20concurso%20.jpg" style="width:50%" onclick="currentSlide(6)" alt="iglesia">
         </div>
<div class="column">
      <img class="demo cursor" src="fotos%20para%20el%20libro%203.jpg" style="width:50%" onclick="currentSlide(7)" alt="puente">
         </div>
     </div>
 </div>
</section>
</body>
 

       
		</section>

		
		<section id="sobre mi">
		<h3>sobre mi </h3>
		<div class="tab">
			<p class="centrado">Todos los días nos levantamos con el mismo objetivo, capturar los mejores momentos de nuestros clientes; llevando así hermosos recuerdos de las mejores actividades personales y empresariales. <em>La naturaleza es nuestra inspiración y así como en el paisaje se cuidan todos los detalles, nosotros en nuestras fotografías cuidamos cada aspecto y cada detalle brindando una imagen de calidad, con el compromiso de que en cada fotografía se retrate la emoción vivida en el momento.ANA GABRIELA CHACÓN VALENCIANO | FOTÓGRAFA
            EGRESADA  de la Universidad Creativa y he llevado cursos con Gustavo del  Valle , Rocio Escobar  y Mario Peraza </em>

            </p>
       
 		</section>

 		

	
	 

	
	
	
	
		
		
	<section id= "contacto">
		<h4 class="contacto titulo">dejame tu informacion</h4>
		<div id="container">
		<form method="post " action= emailcontacto.php">
			<div class="row">
			<div class="col-75">	
		<label>nombre</label><input type="text" name="" value="nombre" id="nombre" placeholder="dejame tu nombre completo "><br><br>
	</div>
		<div class="row">
			<div class="col-75">
		<label>apellido</label><input type="text" name="" value="apellido"id="apellido"placeholder="dejame tu apellido completo" ><br><br>
	</div>
	    <div class="row">
			<div class="col-75">
        <label>cedula</label><input type="text" name="" value="cedula" id="cedula" placeholder="cedula completa "><br><br>
		</div>
		<div class="row">
			<div class="col-75">
		<label>correo</label><input type="text" name="" value="email" id="email" placeholder="dejame tu correo completo"><br><br>
	</div>
	<div class="row">
			<div class="col-75">
		<label>fecha</label> <input type="date" name="" value="fecha" id="fecha" ><br><br>
	</div>

        <label>el dia </label><select name="el dia" size="4" multiple><br><br>
        	<div class="costm-select">
        <option value="lunes">lunes</option>
        <option value="martes">martes</option>
        <option value="miercoles">miercoles</option>
        <option value="jueves">jueves</option>
        <option value="viernes">viernes</option>
        <option value="sabado">sabado</option>
        <option value="domingo">domingo</option>
    </select><br><br>
        <label>evento</label> <input list="evento"  name="evento">
        <datalist id="evento">
        	<option value="bodas"></option>
        	<option value="15 años"></option>
        	<optionva value=naturaleza>o</option>
        		<option value="eventos especiales "></option>
        	
        </datalist><br><br>
        <label>horas </label>
    		comnteario :<br><br>
		<textarea maxlength="50" minlength="40"></textarea>
		<input  class="button"type="reset" name="" value="borrar">

		
		
		<button  class="button"onclick= "Myfuncion()">enviar</button><br><br>
		</datalist>
	</form>


        
		

       
   
</section>
        
		
		<button class="button "onclick="ejecultarsiguente()">siguiente </button>
		<button class="button" onclick="ejecultarfotografia()">fotografia</button> <br><br>

	<a href="#portafolio" class="previous">&laquo">previos</a>
	<a href="#contacto" class="next">Next &raquo;</a>
            
  <input class="button" type="button" value="continuar " onclick="window.location.href='gabys photography informacion 2.html'"/>
		
	<footer style="background: black; color: white;">
		<p>Gaby's Photography</p>