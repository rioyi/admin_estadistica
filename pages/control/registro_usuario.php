 <?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$clave = $_POST['clave'];
$pregunta = $_POST['pregunta'];
$respuesta = $_POST['respuesta'];
$rol = $_POST['rol'];







#conexion la base de datos
require("../control/conexion_bd.php");

#consulta para corroborar no dublicidad de ci_escolar

			#REGISTRO DOCENTE
			mysql_query("INSERT INTO usuario (nombre_usuario, email, clave, pregunta_secreta, respuesta_secreta, roles) VALUES ('$nombre','$email','$clave','$pregunta','$respuesta','$rol')") or die (mysql_error());
			
			
			
			mysql_close($link);
			header('location: ../emergente/registro_usuario_exitoso.php');
			echo "Se a Registrado el usuario";
			echo "<html><br><html>";
			echo "<html><a href='../../index.html'>inicio</a><html>";









?>

