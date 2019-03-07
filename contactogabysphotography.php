
<?php
if (isset($_POST['nombre'])) {
	 echo '<div class="sec100print" <h4>deje la informacion </h4>'.
  	'<div class="sec100><div class="sec100 style="border 3px solid red; text-align:center">nombre:' .' '.$_POST["nombre"]. ' '."<br>".
	'apellido:'. ' '. $_POST['apellido'] . ' ' ."<br>" .
	 'Telefono:' .' '. $_POST["Telefono"] .' ' .
     "<br>".
    'cedula:' . ' '. $_POST["cedula"] . ' ' . "<br>".
    'email:'. ' '. $_POST['email'] . ' ' . "<br>";}
else{
	echo "hubo un erro";
 
}
?>


<?php
$nombre="";
if (!empty($_POST["nombre"])) {
	$nombre=$_POST["nombre"];
	# code...
}

	
$apellido="";
if (!empty($_POST["apellido"])) {
	$apellido=$_POST["apellido"];
}
$Telefono="";
if (!empty($_POST["Telefono"])) {
	$Telefono=$_POST["Telefono"];
	
}
$cedula="";
if (!empty($_POST["cedula"])) {
	$cedula=$_POST["cedula"];
	
}
$email="";
if(!empty(!empty($_POST["email"]))){
	$correo=$_POST["email"];
}
$archivos="datos.txt";
$archivos="$cedula"."txt";
$archivos=fopen($archivos,"a+");
$myfile=fopen("file.txt", "w");
$myfile = fopen("informacion.txt", "w");
fwrite($archivos,$nombre."".$apellido." - ".$Telefono." - ".$cedula." - ".$correo);
fclose($archivos);
?>