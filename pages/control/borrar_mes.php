<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require("conexion_bd.php");

$id = $_POST['id'];	
$mes = $_POST['mes'];
$inicio = $_POST['inicio'];
$fin = $_POST['fin'];

echo $mes;
echo "<br>";
echo $inicio;
echo "<br>";
echo $fin;
echo "<br>";
echo $id;






$sql="DELETE FROM total_asistencia WHERE id_mes = '$mes' AND id_periodo_escolar='$id'";

$datos=mysql_query($sql,$link);

mysql_close($link);

if (!$sql == 0){
	echo "Se borro el mes";
	#header('location: ../emergente/borrar_periodo_exitoso.php');
}else{ 
	echo "error en borrado";}














?>