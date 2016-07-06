<?php
$inicio = $_POST['inicio'];
$final = $_POST['final'];


#conexion la base de datos
require("../control/conexion_bd.php");

#consulta para corroborar no dublicidad

$consulta = mysql_num_rows(mysql_query("SELECT inicio FROM periodo_escolar WHERE inicio='$inicio'"));
if(!$consulta==0){
  header('location: ../emergente/duplicado.php');
}else{
  




			#REGISTRO DOCENTE
			mysql_query("INSERT INTO periodo_escolar (inicio,fin) VALUES ('$inicio','$final')") or die (mysql_error());



			mysql_close($link);
			header('location: ../emergente/registro_periodo_exitoso.php');
			#echo "Se a Registrado el periodo_escolar";
			#echo "<html><br><html>";
			#echo "<html><a href='../../index.html'>inicio</a><html>";


}







?>
