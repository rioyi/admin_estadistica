<?php
$piso = $_POST['piso'];
$descripcion = $_POST['descripcion'];






#conexion la base de datos
require("../control/conexion_bd.php");

#consulta para corroborar no dublicidad de ci_escolar

			#REGISTRO DOCENTE
			mysql_query("INSERT INTO piso (descripcion_piso, numero_piso) VALUES ('$descripcion','$piso')") or die (mysql_error());
			
			
			
			mysql_close($link);
			#header('location: emergente/registro_alumno.php');
			echo "Se a Registrado el piso";
			echo "<html><br><html>";
			echo "<html><a href='../../index.html'>inicio</a><html>";
		









?>