<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$piso = $_POST['piso'];
$email = $_POST['email'];

echo "$nombre";
echo "$apellido";
echo "$telefono";
echo "$direccion";
echo "$piso";
echo "$email";




#conexion la base de datos
require("../control/conexion_bd.php");


#consulta para corroborar no dublicidad

$consulta = mysql_num_rows(mysql_query("SELECT email FROM docente WHERE email='$email'"));
if(!$consulta==0){
  header('location: ../emergente/duplicado.php');
}else{


			#REGISTRO DOCENTE
			mysql_query("INSERT INTO docente (nombre_docente,apellido_docente,email,direccion,telefono,piso) VALUES ('$nombre','$apellido','$email','$direccion','$telefono','$piso')") or die (mysql_error());



			mysql_close($link);
			header('location: ../emergente/registro_docente_exitoso.php');
			echo "Se a Registrado el DOCENTE";
			echo "<html><br><html>";
			echo "<html><a href='../../index.html'>inicio</a><html>";



}





?>
