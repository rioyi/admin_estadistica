 <?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$clave = $_POST['clave'];
$pregunta = $_POST['pregunta'];
$respuesta = $_POST['respuesta'];







#conexion la base de datos
require("../control/conexion_bd.php");

#consulta para corroborar no dublicidad de ci_escolar

			#REGISTRO DOCENTE
			mysql_query("INSERT INTO usuario (nombre_usuario, email, clave, pregunta_secreta, respuesta_secreta) VALUES ('$nombre','$email','$clave','$pregunta','$respuesta')") or die (mysql_error());
			
			
			
			mysql_close($link);
			#header('location: emergente/registro_alumno.php');
			echo "Se a Registrado el usuario";
			echo "<html><br><html>";
			echo "<html><a href='../../index.html'>inicio</a><html>";









?>

