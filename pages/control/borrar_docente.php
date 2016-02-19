<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require("conexion_bd.php");

$id = $_POST['id_docente'];



$sql="DELETE FROM docente WHERE id_docente ='$id'";

$datos=mysql_query($sql,$link);

mysql_close($link);

if (!$sql == 0){
	echo "Se borro correctamente";
	header('Location: ../emergente/borrar_docente_exitoso.php');
}else{ 
	echo "error en borrado";}


?>