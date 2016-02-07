<?php
$periodo_escolar = $_POST['periodo_escolar'];







#conexion la base de datos
require("../control/conexion_bd.php");

#consulta para corroborar no dublicidad de ci_escolar

			#REGISTRO DOCENTE
			mysql_query("INSERT INTO periodo_escolar (periodo_escolar) VALUES ('$periodo_escolar')") or die (mysql_error());
			
			
			
			mysql_close($link);
			#header('location: emergente/registro_alumno.php');
			echo "Se a Registrado el periodo_escolar";
		









?>