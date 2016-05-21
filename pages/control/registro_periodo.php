<?php
$inicio = $_POST['inicio'];
$final = $_POST['final'];


#conexion la base de datos
require("../control/conexion_bd.php");

#consulta para corroborar no dublicidad de ci_escolar

			#REGISTRO DOCENTE
			mysql_query("INSERT INTO periodo_escolar (inicio,fin) VALUES ('$inicio','$final')") or die (mysql_error());
			
			
			
			mysql_close($link);
			header('location: ../emergente/registro_periodo_exitoso.php');
			echo "Se a Registrado el periodo_escolar";
			echo "<html><br><html>";
			echo "<html><a href='../../index.html'>inicio</a><html>";
		









?>