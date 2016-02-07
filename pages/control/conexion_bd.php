<?php
#Datos de la Base de datos

$hostname = "localhost";
$usuario = "root"; 
$clave = "123";
$base_datos = "estadistica_hospital"; 

#conexion con Mysql

$link = mysql_connect("$hostname", "$usuario", "$clave");

if ($link == 0)

echo "Lo sentimos, NO se ha podido conectar con la Base de datos";

else {
#Conectando con la Base de Datos seleccionada.
		$dbconnect = mysql_select_db("$base_datos", $link);
	 }

?>