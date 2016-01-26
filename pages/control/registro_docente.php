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

#consulta para corroborar no dublicidad de ci_escolar

			#REGISTRO DOCENTE
			mysql_query("INSERT INTO docente (nombre_docente,apellido_docente,email,direccion,telefono,piso) VALUES ('$nombre','$apellido','$email','$direccion','$telefono','$piso')") or die (mysql_error());
			
			
			
			mysql_close($link);
			#header('location: emergente/registro_alumno.php');
			echo "Se a Registrado el DOCENTE";
		









?>