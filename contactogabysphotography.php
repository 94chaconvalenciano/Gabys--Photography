<?php
$nombre = $apellido = $Telefono = $cedula= $comentarios= $email= "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$nombre= test_input($_POST["nombre"]);
	$apellido = test_input($_POST["apellido"]);
	$Telefono= test_input($_POST["Telefono"]);
	$cedula = test_input($_POST["cedula"]);
	$
	$email = test_input($_POST["email"]);

	# code...
}
function test_input($data){
	$data= trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	
}
?>

<?php
echo " contacto";
if (isset($_POST['nombre'])) {
	 echo '<div class="sec100print" <h4>deje la informacion </h4>'.
  	'<div class="sec100><div class="sec100 style="border 3px solid red; text-align:center">nombre:' .' '.$_POST["nombre"]. ' '."<br>".
	'apellido:'. ' '. $_POST['apellido'] . ' ' ."<br>" .
	 'Telefono:' .' '. $_POST["Telefono"] .' ' .
     "<br>".
    'cedula:' . ' '. $_POST["cedula"] . ' ' . "<br>".
   'comentarios:'. ' '. $_POST["comentarios"] . ' ' . "<br>".
    'email:'. ' '. $_POST['email'] . ' ' . "<br>";}
  
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
 $comentarios = "";
        if(!empty($_POST["comentarios"])){
            $comentarios = $_POST["comentarios"];
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
fwrite($archivos,$nombre."".$apellido." - ".$Telefono." - ".$cedula." - " .$comentarios." - ".$email);
fclose($archivos);
?>