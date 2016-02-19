<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require("conexion_bd.php");

$id = $_POST['id_periodo_escolar'];



$sql="DELETE FROM periodo_escolar WHERE id_periodo_escolar ='$id'";

$datos=mysql_query($sql,$link);

mysql_close($link);

if (!$sql == 0){
	echo "Se borro correctamente";
	header('Location: ../emergente/borrar_periodo_exitoso.php');
}else{ 
	echo "error en borrado";}


?>