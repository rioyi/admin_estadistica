<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require("conexion_bd.php");

$id = $_POST['id_usuario'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$clave = $_POST['clave'];
$respuesta = $_POST['respuesta'];
$rol = $_POST['rol'];


echo "$id";
echo $nombre;
echo "$email";
echo "$clave";
echo "$respuesta";
echo "$rol";


$sql=mysql_query("UPDATE usuario SET email='$email', clave='$clave', nombre_usuario='$nombre', respuesta_secreta='$respuesta', roles='$rol' WHERE id_usuario='$id'");


mysql_close($link);

if ($sql > 0){
	
	header('Location: ../emergente/editar_usuario_exitoso.php');
}else{ 
	echo "error al modificar el usuario";}


?>