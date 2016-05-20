<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require("conexion_bd.php");

$id = $_POST['id_usuario'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$piso = $_POST['piso'];




$sql=mysql_query("UPDATE docente SET nombre_docente='$nombre', apellido_docente='$apellido', email='$email', direccion='$direccion', telefono='$telefono', piso='$piso' WHERE id_docente='$id'");


mysql_close($link);

if ($sql > 0){
	
	header('Location: ../emergente/editar_docente_exitoso.php');
}else{ 
	echo "error al modificar el usuario";}


?>