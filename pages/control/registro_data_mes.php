 <?php

require ("../control/conexion_bd.php");



#seccion de mes tab1 
$periodo_e = $_POST['periodo_e'];
$mes = $_POST['mes'];
#seccion escolaridad 
	#MATERNAL
$maternal_p1_v = $_POST['maternal_p1_v'];
$maternal_p2_v = $_POST['maternal_p2_v'];
$maternal_p3_v = $_POST['maternal_p3_v'];
$maternal_p4_v = $_POST['maternal_p4_v'];
$maternal_p5_v = $_POST['maternal_p5_v'];
$maternal_gi_v = $_POST['maternal_gi_v'];
$maternal_gii_v = $_POST['maternal_gii_v'];


$sql_maternal = "SELECT escolaridad FROM tipo_escolaridad WHERE id_tipo_escolaridad = 1";
$resul_maternal = mysql_query($sql_maternal,$link);
$maternal_resul = mysql_fetch_array($resul_maternal);
$maternal = $maternal_resul['escolaridad'];  

        

	#NIVEL1
$nivel1_p1_v = $_POST['maternal_p1_v'];
$nivel1_p2_v = $_POST['maternal_p2_v'];
$nivel1_p3_v = $_POST['maternal_p3_v'];
$nivel1_p4_v = $_POST['maternal_p4_v'];
$nivel1_p5_v = $_POST['maternal_p5_v'];
$nivel1_gi_v = $_POST['maternal_gi_v'];
$nivel1_gii_v = $_POST['maternal_gii_v'];

$sql_n1 = "SELECT escolaridad FROM tipo_escolaridad WHERE id_tipo_escolaridad = 2";
$resul_n1 = mysql_query($sql_n1,$link);
$n1_resul = mysql_fetch_array($resul_n1);
$n1 = $n1_resul['escolaridad'];

	#NIVEL2
$nivel1_p1_v = $_POST['maternal_p1_v'];
$nivel1_p2_v = $_POST['maternal_p2_v'];
$nivel1_p3_v = $_POST['maternal_p3_v'];
$nivel1_p4_v = $_POST['maternal_p4_v'];
$nivel1_p5_v = $_POST['maternal_p5_v'];
$nivel1_gi_v = $_POST['maternal_gi_v'];
$nivel1_gii_v = $_POST['maternal_gii_v'];

$sql_n1 = "SELECT escolaridad FROM tipo_escolaridad WHERE id_tipo_escolaridad = 3";
$resul_n1 = mysql_query($sql_n1,$link);
$n1_resul = mysql_fetch_array($resul_n1);
$n1 = $n1_resul['escolaridad'];






























#conexion la base de datos

##require("../control/conexion_bd.php");

#consulta para corroborar no dublicidad de ci_escolar

			#REGISTRO DOCENTE
			##mysql_query("INSERT INTO usuario (nombre_usuario, email, clave, pregunta_secreta, respuesta_secreta) VALUES ('$nombre','$email','$clave','$pregunta','$respuesta')") or die (mysql_error());
			
			
			
			##mysql_close($link);
			#header('location: emergente/registro_alumno.php');
			##echo "Se a Registrado el usuario";
			##echo "<html><br><html>";
			##echo "<html><a href='../../index.html'>inicio</a><html>";









?>

