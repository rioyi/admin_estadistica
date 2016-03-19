 <?php


error_reporting(E_ALL);
ini_set('display_errors', '1');
 

require ("conexion_bd.php");



#seccion de mes tab1 
$periodo_e = $_POST['periodo_e'];
$mes = $_POST['mes'];

/*
#vefificado el post

#seccion escolaridad varones
	#MATERNAL
$maternal_p1_v = $_POST['maternal_p1_v'];
$maternal_p2_v = $_POST['maternal_p2_v'];
$maternal_p3_v = $_POST['maternal_p3_v'];
$maternal_p4_v = $_POST['maternal_p4_v'];
$maternal_p5_v = $_POST['maternal_p5_v'];
$maternal_gi_v = $_POST['maternal_gi_v'];
$maternal_gii_v = $_POST['maternal_gii_v'];






#NIVEL I
$nivel1_p1_v = $_POST['nivel1_p1_v'];
$nivel1_p2_v = $_POST['nivel1_p2_v'];
$nivel1_p3_v = $_POST['nivel1_p3_v'];
$nivel1_p4_v = $_POST['nivel1_p4_v'];
$nivel1_p5_v = $_POST['nivel1_p5_v'];
$nivel1_gi_v = $_POST['nivel1_gi_v'];
$nivel1_gii_v = $_POST['nivel1_gii_v'];


#NIVEL II
$nivel2_p1_v = $_POST['nivel2_p1_v'];
$nivel2_p2_v = $_POST['nivel2_p2_v'];
$nivel2_p3_v = $_POST['nivel2_p3_v'];
$nivel2_p4_v = $_POST['nivel2_p4_v'];
$nivel2_p5_v = $_POST['nivel2_p5_v'];
$nivel2_gi_v = $_POST['nivel2_gi_v'];
$nivel2_gii_v = $_POST['nivel2_gii_v'];



#NIVEL III
$nivel3_p1_v = $_POST['nivel3_p1_v'];
$nivel3_p2_v = $_POST['nivel3_p2_v'];
$nivel3_p3_v = $_POST['nivel3_p3_v'];
$nivel3_p4_v = $_POST['nivel3_p4_v'];
$nivel3_p5_v = $_POST['nivel3_p5_v'];
$nivel3_gi_v = $_POST['nivel3_gi_v'];
$nivel3_gii_v = $_POST['nivel3_gii_v'];



#1 GRADO
$g1_p1_v = $_POST['g1_p1_v'];
$g1_p2_v = $_POST['g1_p2_v'];
$g1_p3_v = $_POST['g1_p3_v'];
$g1_p4_v = $_POST['g1_p4_v'];
$g1_p5_v = $_POST['g1_p5_v'];
$g1_gi_v = $_POST['g1_gi_v'];
$g1_gii_v = $_POST['g1_gii_v'];



#2 GRADO
$g2_p1_v = $_POST['g2_p1_v'];
$g2_p2_v = $_POST['g2_p2_v'];
$g2_p3_v = $_POST['g2_p3_v'];
$g2_p4_v = $_POST['g2_p4_v'];
$g2_p5_v = $_POST['g2_p5_v'];
$g2_gi_v = $_POST['g2_gi_v'];
$g2_gii_v = $_POST['g2_gii_v'];



#3 GRADO
$g3_p1_v = $_POST['g3_p1_v'];
$g3_p2_v = $_POST['g3_p2_v'];
$g3_p3_v = $_POST['g3_p3_v'];
$g3_p4_v = $_POST['g3_p4_v'];
$g3_p5_v = $_POST['g3_p5_v'];
$g3_gi_v = $_POST['g3_gi_v'];
$g3_gii_v = $_POST['g3_gii_v'];



#4 GRADO
$g4_p1_v = $_POST['g4_p1_v'];
$g4_p2_v = $_POST['g4_p2_v'];
$g4_p3_v = $_POST['g4_p3_v'];
$g4_p4_v = $_POST['g4_p4_v'];
$g4_p5_v = $_POST['g4_p5_v'];
$g4_gi_v = $_POST['g4_gi_v'];
$g4_gii_v = $_POST['g4_gii_v'];



#5 GRADO
$g5_p1_v = $_POST['g5_p1_v'];
$g5_p2_v = $_POST['g5_p2_v'];
$g5_p3_v = $_POST['g5_p3_v'];
$g5_p4_v = $_POST['g5_p4_v'];
$g5_p5_v = $_POST['g5_p5_v'];
$g5_gi_v = $_POST['g5_gi_v'];
$g5_gii_v = $_POST['g5_gii_v'];


#6 GRADO
$g6_p1_v = $_POST['g6_p1_v'];
$g6_p2_v = $_POST['g6_p2_v'];
$g6_p3_v = $_POST['g6_p3_v'];
$g6_p4_v = $_POST['g6_p4_v'];
$g6_p5_v = $_POST['g6_p5_v'];
$g6_gi_v = $_POST['g6_gi_v'];
$g6_gii_v = $_POST['g6_gii_v'];


#7 GRADO
$g7_p1_v = $_POST['g7_p1_v'];
$g7_p2_v = $_POST['g7_p2_v'];
$g7_p3_v = $_POST['g7_p3_v'];
$g7_p4_v = $_POST['g7_p4_v'];
$g7_p5_v = $_POST['g7_p5_v'];
$g7_gi_v = $_POST['g7_gi_v'];
$g7_gii_v = $_POST['g7_gii_v'];


#8 GRADO
$g8_p1_v = $_POST['g8_p1_v'];
$g8_p2_v = $_POST['g8_p2_v'];
$g8_p3_v = $_POST['g8_p3_v'];
$g8_p4_v = $_POST['g8_p4_v'];
$g8_p5_v = $_POST['g8_p5_v'];
$g8_gi_v = $_POST['g8_gi_v'];
$g8_gii_v = $_POST['g8_gii_v'];


#9 GRADO
$g9_p1_v = $_POST['g9_p1_v'];
$g9_p2_v = $_POST['g9_p2_v'];
$g9_p3_v = $_POST['g9_p3_v'];
$g9_p4_v = $_POST['g9_p4_v'];
$g9_p5_v = $_POST['g9_p5_v'];
$g9_gi_v = $_POST['g9_gi_v'];
$g9_gii_v = $_POST['g9_gii_v'];



#10 4to Año
$g10_p1_v = $_POST['g10_p1_v'];
$g10_p2_v = $_POST['g10_p2_v'];
$g10_p3_v = $_POST['g10_p3_v'];
$g10_p4_v = $_POST['g10_p4_v'];
$g10_p5_v = $_POST['g10_p5_v'];
$g10_gi_v = $_POST['g10_gi_v'];
$g10_gii_v = $_POST['g10_gii_v'];



#11 5to Año
$g11_p1_v = $_POST['g11_p1_v'];
$g11_p2_v = $_POST['g11_p2_v'];
$g11_p3_v = $_POST['g11_p3_v'];
$g11_p4_v = $_POST['g11_p4_v'];
$g11_p5_v = $_POST['g11_p5_v'];
$g11_gi_v = $_POST['g11_gi_v'];
$g11_gii_v = $_POST['g11_gii_v'];



#12 6to Año
$g12_p1_v = $_POST['g12_p1_v'];
$g12_p2_v = $_POST['g12_p2_v'];
$g12_p3_v = $_POST['g12_p3_v'];
$g12_p4_v = $_POST['g12_p4_v'];
$g12_p5_v = $_POST['g12_p5_v'];
$g12_gi_v = $_POST['g12_gi_v'];
$g12_gii_v = $_POST['g12_gii_v'];



#13 S/E
$g13_p1_v = $_POST['g13_p1_v'];
$g13_p2_v = $_POST['g13_p2_v'];
$g13_p3_v = $_POST['g13_p3_v'];
$g13_p4_v = $_POST['g13_p4_v'];
$g13_p5_v = $_POST['g13_p5_v'];
$g13_gi_v = $_POST['g13_gi_v'];
$g13_gii_v = $_POST['g13_gii_v'];



#14 E/E
$g14_p1_v = $_POST['g14_p1_v'];
$g14_p2_v = $_POST['g14_p2_v'];
$g14_p3_v = $_POST['g14_p3_v'];
$g14_p4_v = $_POST['g14_p4_v'];
$g14_p5_v = $_POST['g14_p5_v'];
$g14_gi_v = $_POST['g14_gi_v'];
$g14_gii_v = $_POST['g14_gii_v'];

#Registro de Escolaridad Varones

mysql_query ("INSERT INTO total_escolaridad (id_sexo,id_periodo_escolar,id_mes,id_tipo_escolaridad,p1,p2,p3,p4,p5,gi,gii) values ('1','$periodo_e','$mes','1','$maternal_p1_v','$maternal_p2_v','$maternal_p3_v','$maternal_p4_v','$maternal_p5_v','$maternal_gi_v','$maternal_gii_v'),
#nivel 1 
	('1','$periodo_e','$mes','2','$nivel1_p1_v','$nivel1_p2_v','$nivel1_p3_v','$nivel1_p4_v','$nivel1_p5_v','$nivel1_gi_v','$nivel1_gii_v'),
#nivel 2 
	('1','$periodo_e','$mes','3','$nivel2_p1_v','$nivel2_p2_v','$nivel2_p3_v','$nivel2_p4_v','$nivel2_p5_v','$nivel2_gi_v','$nivel2_gii_v'),
#nivel 3 
	('1','$periodo_e','$mes','4','$nivel3_p1_v','$nivel3_p2_v','$nivel3_p3_v','$nivel3_p4_v','$nivel3_p5_v','$nivel3_gi_v','$nivel3_gii_v'),
#Grado 1 
	('1','$periodo_e','$mes','5','$g1_p1_v','$g1_p2_v','$g1_p3_v','$g1_p4_v','$g1_p5_v','$g1_gi_v','$g1_gii_v'),
#Grado 2 
	('1','$periodo_e','$mes','6','$g2_p1_v','$g2_p2_v','$g2_p3_v','$g2_p4_v','$g2_p5_v','$g2_gi_v','$g2_gii_v'),
#Grado 3 
	('1','$periodo_e','$mes','7','$g3_p1_v','$g3_p2_v','$g3_p3_v','$g3_p4_v','$g3_p5_v','$g3_gi_v','$g3_gii_v'),
#Grado 4 
	('1','$periodo_e','$mes','8','$g4_p1_v','$g4_p2_v','$g4_p3_v','$g4_p4_v','$g4_p5_v','$g4_gi_v','$g4_gii_v'),
#Grado 5 
	('1','$periodo_e','$mes','9','$g5_p1_v','$g5_p2_v','$g5_p3_v','$g5_p4_v','$g5_p5_v','$g5_gi_v','$g5_gii_v'),
#Grado 6 
	('1','$periodo_e','$mes','10','$g6_p1_v','$g6_p2_v','$g6_p3_v','$g6_p4_v','$g6_p5_v','$g6_gi_v','$g6_gii_v'),
#Grado 7 
	('1','$periodo_e','$mes','11','$g7_p1_v','$g7_p2_v','$g7_p3_v','$g7_p4_v','$g7_p5_v','$g7_gi_v','$g7_gii_v'),
#Grado 8 
	('1','$periodo_e','$mes','12','$g8_p1_v','$g8_p2_v','$g8_p3_v','$g8_p4_v','$g8_p5_v','$g8_gi_v','$g8_gii_v'),
#Grado 9 
	('1','$periodo_e','$mes','13','$g9_p1_v','$g9_p2_v','$g9_p3_v','$g9_p4_v','$g9_p5_v','$g9_gi_v','$g9_gii_v'),
#Grado 10 
	('1','$periodo_e','$mes','14','$g10_p1_v','$g10_p2_v','$g10_p3_v','$g10_p4_v','$g10_p5_v','$g10_gi_v','$g10_gii_v'),
#Grado 11 
	('1','$periodo_e','$mes','15','$g11_p1_v','$g11_p2_v','$g11_p3_v','$g11_p4_v','$g11_p5_v','$g11_gi_v','$g11_gii_v'),
#Grado 12 
	('1','$periodo_e','$mes','16','$g12_p1_v','$g12_p2_v','$g12_p3_v','$g12_p4_v','$g12_p5_v','$g12_gi_v','$g12_gii_v'),
#Grado 13 
	('1','$periodo_e','$mes','17','$g13_p1_v','$g13_p2_v','$g13_p3_v','$g13_p4_v','$g13_p5_v','$g13_gi_v','$g13_gii_v'),
#Grado 14 
	('1','$periodo_e','$mes','18','$g14_p1_v','$g14_p2_v','$g14_p3_v','$g14_p4_v','$g14_p5_v','$g14_gi_v','$g14_gii_v')
	")

or die (mysql_error());





#seccion escolaridad hembras
	#MATERNAL
$maternal_p1_h = $_POST['maternal_p1_h'];
$maternal_p2_h = $_POST['maternal_p2_h'];
$maternal_p3_h = $_POST['maternal_p3_h'];
$maternal_p4_h = $_POST['maternal_p4_h'];
$maternal_p5_h = $_POST['maternal_p5_h'];
$maternal_gi_h = $_POST['maternal_gi_h'];
$maternal_gii_h = $_POST['maternal_gii_h'];


#NIVEL I
$nivel1_p1_h = $_POST['nivel1_p1_h'];
$nivel1_p2_h = $_POST['nivel1_p2_h'];
$nivel1_p3_h = $_POST['nivel1_p3_h'];
$nivel1_p4_h = $_POST['nivel1_p4_h'];
$nivel1_p5_h = $_POST['nivel1_p5_h'];
$nivel1_gi_h = $_POST['nivel1_gi_h'];
$nivel1_gii_h = $_POST['nivel1_gii_h'];

#NIVEL II
$nivel2_p1_h = $_POST['nivel2_p1_h'];
$nivel2_p2_h = $_POST['nivel2_p2_h'];
$nivel2_p3_h = $_POST['nivel2_p3_h'];
$nivel2_p4_h = $_POST['nivel2_p4_h'];
$nivel2_p5_h = $_POST['nivel2_p5_h'];
$nivel2_gi_h = $_POST['nivel2_gi_h'];
$nivel2_gii_h = $_POST['nivel2_gii_h'];



#NIVEL III
$nivel3_p1_h = $_POST['nivel3_p1_h'];
$nivel3_p2_h = $_POST['nivel3_p2_h'];
$nivel3_p3_h = $_POST['nivel3_p3_h'];
$nivel3_p4_h = $_POST['nivel3_p4_h'];
$nivel3_p5_h = $_POST['nivel3_p5_h'];
$nivel3_gi_h = $_POST['nivel3_gi_h'];
$nivel3_gii_h = $_POST['nivel3_gii_h'];

#1 GRADO
$g1_p1_h = $_POST['g1_p1_h'];
$g1_p2_h = $_POST['g1_p2_h'];
$g1_p3_h = $_POST['g1_p3_h'];
$g1_p4_h = $_POST['g1_p4_h'];
$g1_p5_h = $_POST['g1_p5_h'];
$g1_gi_h = $_POST['g1_gi_h'];
$g1_gii_h = $_POST['g1_gii_h'];


#2 GRADO
$g2_p1_h = $_POST['g2_p1_h'];
$g2_p2_h = $_POST['g2_p2_h'];
$g2_p3_h = $_POST['g2_p3_h'];
$g2_p4_h = $_POST['g2_p4_h'];
$g2_p5_h = $_POST['g2_p5_h'];
$g2_gi_h = $_POST['g2_gi_h'];
$g2_gii_h = $_POST['g2_gii_h'];



#3 GRADO
$g3_p1_h = $_POST['g3_p1_h'];
$g3_p2_h = $_POST['g3_p2_h'];
$g3_p3_h = $_POST['g3_p3_h'];
$g3_p4_h = $_POST['g3_p4_h'];
$g3_p5_h = $_POST['g3_p5_h'];
$g3_gi_h = $_POST['g3_gi_h'];
$g3_gii_h = $_POST['g3_gii_h'];



#4 GRADO
$g4_p1_h = $_POST['g4_p1_h'];
$g4_p2_h = $_POST['g4_p2_h'];
$g4_p3_h = $_POST['g4_p3_h'];
$g4_p4_h = $_POST['g4_p4_h'];
$g4_p5_h = $_POST['g4_p5_h'];
$g4_gi_h = $_POST['g4_gi_h'];
$g4_gii_h = $_POST['g4_gii_h'];




#5 GRADO
$g5_p1_h = $_POST['g5_p1_h'];
$g5_p2_h = $_POST['g5_p2_h'];
$g5_p3_h = $_POST['g5_p3_h'];
$g5_p4_h = $_POST['g5_p4_h'];
$g5_p5_h = $_POST['g5_p5_h'];
$g5_gi_h = $_POST['g5_gi_h'];
$g5_gii_h = $_POST['g5_gii_h'];



#6 GRADO
$g6_p1_h = $_POST['g6_p1_h'];
$g6_p2_h = $_POST['g6_p2_h'];
$g6_p3_h = $_POST['g6_p3_h'];
$g6_p4_h = $_POST['g6_p4_h'];
$g6_p5_h = $_POST['g6_p5_h'];
$g6_gi_h = $_POST['g6_gi_h'];
$g6_gii_h = $_POST['g6_gii_h'];



#7 GRADO
$g7_p1_h = $_POST['g7_p1_h'];
$g7_p2_h = $_POST['g7_p2_h'];
$g7_p3_h = $_POST['g7_p3_h'];
$g7_p4_h = $_POST['g7_p4_h'];
$g7_p5_h = $_POST['g7_p5_h'];
$g7_gi_h = $_POST['g7_gi_h'];
$g7_gii_h = $_POST['g7_gii_h'];


#8 GRADO
$g8_p1_h = $_POST['g8_p1_h'];
$g8_p2_h = $_POST['g8_p2_h'];
$g8_p3_h = $_POST['g8_p3_h'];
$g8_p4_h = $_POST['g8_p4_h'];
$g8_p5_h = $_POST['g8_p5_h'];
$g8_gi_h = $_POST['g8_gi_h'];
$g8_gii_h = $_POST['g8_gii_h'];


#9 GRADO
$g9_p1_h = $_POST['g9_p1_h'];
$g9_p2_h = $_POST['g9_p2_h'];
$g9_p3_h = $_POST['g9_p3_h'];
$g9_p4_h = $_POST['g9_p4_h'];
$g9_p5_h = $_POST['g9_p5_h'];
$g9_gi_h = $_POST['g9_gi_h'];
$g9_gii_h = $_POST['g9_gii_h'];



#10 4to Año
$g10_p1_h = $_POST['g10_p1_h'];
$g10_p2_h = $_POST['g10_p2_h'];
$g10_p3_h = $_POST['g10_p3_h'];
$g10_p4_h = $_POST['g10_p4_h'];
$g10_p5_h = $_POST['g10_p5_h'];
$g10_gi_h = $_POST['g10_gi_h'];
$g10_gii_h = $_POST['g10_gii_h'];


#11 5to Año
$g11_p1_h = $_POST['g11_p1_h'];
$g11_p2_h = $_POST['g11_p2_h'];
$g11_p3_h = $_POST['g11_p3_h'];
$g11_p4_h = $_POST['g11_p4_h'];
$g11_p5_h = $_POST['g11_p5_h'];
$g11_gi_h = $_POST['g11_gi_h'];
$g11_gii_h = $_POST['g11_gii_h'];



#12 6to Año
$g12_p1_h = $_POST['g12_p1_h'];
$g12_p2_h = $_POST['g12_p2_h'];
$g12_p3_h = $_POST['g12_p3_h'];
$g12_p4_h = $_POST['g12_p4_h'];
$g12_p5_h = $_POST['g12_p5_h'];
$g12_gi_h = $_POST['g12_gi_h'];
$g12_gii_h = $_POST['g12_gii_h'];



#13 S/E
$g13_p1_h = $_POST['g13_p1_h'];
$g13_p2_h = $_POST['g13_p2_h'];
$g13_p3_h = $_POST['g13_p3_h'];
$g13_p4_h = $_POST['g13_p4_h'];
$g13_p5_h = $_POST['g13_p5_h'];
$g13_gi_h = $_POST['g13_gi_h'];
$g13_gii_h = $_POST['g13_gii_h'];



#14 E/E
$g14_p1_h = $_POST['g14_p1_h'];
$g14_p2_h = $_POST['g14_p2_h'];
$g14_p3_h = $_POST['g14_p3_h'];
$g14_p4_h = $_POST['g14_p4_h'];
$g14_p5_h = $_POST['g14_p5_h'];
$g14_gi_h = $_POST['g14_gi_h'];
$g14_gii_h = $_POST['g14_gii_h'];

#Registro de Escolaridad Hembras

mysql_query ("INSERT INTO total_escolaridad (id_sexo,id_periodo_escolar,id_mes,id_tipo_escolaridad,p1,p2,p3,p4,p5,gi,gii) values ('2','$periodo_e','$mes','1','$maternal_p1_h','$maternal_p2_h','$maternal_p3_h','$maternal_p4_h','$maternal_p5_h','$maternal_gi_h','$maternal_gii_h'),
#nivel 1 
	('2','$periodo_e','$mes','2','$nivel1_p1_h','$nivel1_p2_h','$nivel1_p3_h','$nivel1_p4_h','$nivel1_p5_h','$nivel1_gi_h','$nivel1_gii_h'),
#nivel 2 
	('2','$periodo_e','$mes','3','$nivel2_p1_h','$nivel2_p2_h','$nivel2_p3_h','$nivel2_p4_h','$nivel2_p5_h','$nivel2_gi_h','$nivel2_gii_h'),
#nivel 3 
	('2','$periodo_e','$mes','4','$nivel3_p1_h','$nivel3_p2_h','$nivel3_p3_h','$nivel3_p4_h','$nivel3_p5_h','$nivel3_gi_h','$nivel3_gii_h'),
#Grado 1 
	('2','$periodo_e','$mes','5','$g1_p1_h','$g1_p2_h','$g1_p3_h','$g1_p4_h','$g1_p5_h','$g1_gi_h','$g1_gii_h'),
#Grado 2 
	('2','$periodo_e','$mes','6','$g2_p1_h','$g2_p2_h','$g2_p3_h','$g2_p4_h','$g2_p5_h','$g2_gi_h','$g2_gii_h'),
#Grado 3 
	('2','$periodo_e','$mes','7','$g3_p1_h','$g3_p2_h','$g3_p3_h','$g3_p4_h','$g3_p5_h','$g3_gi_h','$g3_gii_h'),
#Grado 4 
	('2','$periodo_e','$mes','8','$g4_p1_h','$g4_p2_h','$g4_p3_h','$g4_p4_h','$g4_p5_h','$g4_gi_h','$g4_gii_h'),
#Grado 5 
	('2','$periodo_e','$mes','9','$g5_p1_h','$g5_p2_h','$g5_p3_h','$g5_p4_h','$g5_p5_h','$g5_gi_h','$g5_gii_h'),
#Grado 6 
	('2','$periodo_e','$mes','10','$g6_p1_h','$g6_p2_h','$g6_p3_h','$g6_p4_h','$g6_p5_h','$g6_gi_h','$g6_gii_h'),
#Grado 7 
	('2','$periodo_e','$mes','11','$g7_p1_h','$g7_p2_h','$g7_p3_h','$g7_p4_h','$g7_p5_h','$g7_gi_h','$g7_gii_h'),
#Grado 8 
	('2','$periodo_e','$mes','12','$g8_p1_h','$g8_p2_h','$g8_p3_h','$g8_p4_h','$g8_p5_h','$g8_gi_h','$g8_gii_h'),
#Grado 9 
	('2','$periodo_e','$mes','13','$g9_p1_h','$g9_p2_h','$g9_p3_h','$g9_p4_h','$g9_p5_h','$g9_gi_h','$g9_gii_h'),
#Grado 10 
	('2','$periodo_e','$mes','14','$g10_p1_h','$g10_p2_h','$g10_p3_h','$g10_p4_h','$g10_p5_h','$g10_gi_h','$g10_gii_h'),
#Grado 11 
	('2','$periodo_e','$mes','15','$g11_p1_h','$g11_p2_h','$g11_p3_h','$g11_p4_h','$g11_p5_h','$g11_gi_h','$g11_gii_h'),
#Grado 12 
	('2','$periodo_e','$mes','16','$g12_p1_h','$g12_p2_h','$g12_p3_h','$g12_p4_h','$g12_p5_h','$g12_gi_h','$g12_gii_h'),
#Grado 13 
	('2','$periodo_e','$mes','17','$g13_p1_h','$g13_p2_h','$g13_p3_h','$g13_p4_h','$g13_p5_h','$g13_gi_h','$g13_gii_h'),
#Grado 14 
	('2','$periodo_e','$mes','18','$g14_p1_h','$g14_p2_h','$g14_p3_h','$g14_p4_h','$g14_p5_h','$g14_gi_h','$g14_gii_h')
	")

or die (mysql_error());

*/

#Seccion de POBLACION ATENDIDA

#EN AULA VARONES

$p_a_a_p1_v = $_POST['p_a_a_p1_v'];
$p_a_a_p2_v = $_POST['p_a_a_p2_v'];
$p_a_a_p3_v = $_POST['p_a_a_p3_v'];
$p_a_a_p4_v = $_POST['p_a_a_p4_v'];
$p_a_a_p5_v = $_POST['p_a_a_p5_v'];
$p_a_a_gi_v = $_POST['p_a_a_gi_v'];
$p_a_a_gii_v = $_POST['p_a_a_gii_v'];

echo "$p_a_a_p1_v";
echo "$p_a_a_p2_v";
echo "$p_a_a_p3_v";
echo "$p_a_a_p4_v";
echo "$p_a_a_p5_v";
echo "$p_a_a_gi_v";
echo "$p_a_a_gii_v";

#EN HABITACION VARONES

$p_a_h_p1_v = $_POST['p_a_h_p1_v'];
$p_a_h_p2_v = $_POST['p_a_h_p2_v'];
$p_a_h_p3_v = $_POST['p_a_h_p3_v'];
$p_a_h_p4_v = $_POST['p_a_h_p4_v'];
$p_a_h_p5_v = $_POST['p_a_h_p5_v'];
$p_a_h_gi_v = $_POST['p_a_h_gi_v'];
$p_a_h_gii_v = $_POST['p_a_h_gii_v'];

mysql_query ("INSERT INTO total_poblacion_atendida (id_sexo,id_periodo_escolar,id_mes,id_tipo_poblacion_atendida,p1,p2,p3,p4,p5,gi,gii) values ('1','$periodo_e','$mes','1','$p_a_a_p1_v','$p_a_a_p2_v','$p_a_a_p3_v','$p_a_a_p4_v','$p_a_a_p5_v','$p_a_a_gi_v','$p_a_a_gii_v'),
#En habitación
	('1','$periodo_e','$mes','2','$p_a_h_p1_v','$p_a_h_p2_v','$p_a_h_p3_v','$p_a_h_p4_v','$p_a_h_p5_v','$p_a_h_gi_v','$p_a_h_gii_v')
	")

or die (mysql_error());

#EN AULA HEMBRAS

$p_a_a_p1_h = $_POST['p_a_a_p1_h'];
$p_a_a_p2_h = $_POST['p_a_a_p2_h'];
$p_a_a_p3_h = $_POST['p_a_a_p3_h'];
$p_a_a_p4_h = $_POST['p_a_a_p4_h'];
$p_a_a_p5_h = $_POST['p_a_a_p5_h'];
$p_a_a_gi_h = $_POST['p_a_a_gi_h'];
$p_a_a_gii_h = $_POST['p_a_a_gii_h'];

#EN HABITACION HEMBRAS

$p_a_h_p1_h = $_POST['p_a_h_p1_h'];
$p_a_h_p2_h = $_POST['p_a_h_p2_h'];
$p_a_h_p3_h = $_POST['p_a_h_p3_h'];
$p_a_h_p4_h = $_POST['p_a_h_p4_h'];
$p_a_h_p5_h = $_POST['p_a_h_p5_h'];
$p_a_h_gi_h = $_POST['p_a_h_gi_h'];
$p_a_h_gii_h = $_POST['p_a_h_gii_h'];

mysql_query ("INSERT INTO total_poblacion_atendida (id_sexo,id_periodo_escolar,id_mes,id_tipo_poblacion_atendida,p1,p2,p3,p4,p5,gi,gii) values ('2','$periodo_e','$mes','1','$p_a_a_p1_h','$p_a_a_p2_h','$p_a_a_p3_h','$p_a_a_p4_h','$p_a_a_p5_h','$p_a_a_gi_h','$p_a_a_gii_h'),
#En habitación
	('2','$periodo_e','$mes','2','$p_a_h_p1_h','$p_a_h_p2_h','$p_a_h_p3_h','$p_a_h_p4_h','$p_a_h_p5_h','$p_a_h_gi_h','$p_a_h_gii_h')
	")

or die (mysql_error());

/*

#VISITA AGRUPADO POR EDAD VARONES (por filas)

#fila 1 panel 1
$v_e11_p1_v = $_POST['v_e11_p1_v'];
$v_e1_p1_v = $_POST['v_e1_p1_v'];
$v_e2_p1_v = $_POST['v_e2_p1_v'];
$v_e3_p1_v = $_POST['v_e3_p1_v'];
$v_e4_p1_v = $_POST['v_e4_p1_v'];
$v_e5_p1_v = $_POST['v_e5_p1_v'];


#fila 2 panel 1
$v_e11_p2_v = $_POST['v_e11_p2_v'];
$v_e1_p2_v = $_POST['v_e1_p2_v'];
$v_e2_p2_v = $_POST['v_e2_p2_v'];
$v_e3_p2_v = $_POST['v_e3_p2_v'];
$v_e4_p2_v = $_POST['v_e4_p2_v'];
$v_e5_p2_v = $_POST['v_e5_p2_v'];

#fila 3 panel 1
$v_e11_p3_v = $_POST['v_e11_p3_v'];
$v_e1_p3_v = $_POST['v_e1_p3_v'];
$v_e2_p3_v = $_POST['v_e2_p3_v'];
$v_e3_p3_v = $_POST['v_e3_p3_v'];
$v_e4_p3_v = $_POST['v_e4_p3_v'];
$v_e5_p3_v = $_POST['v_e5_p3_v'];

#fila 4 panel 1
$v_e11_p4_v = $_POST['v_e11_p4_v'];
$v_e1_p4_v = $_POST['v_e1_p4_v'];
$v_e2_p4_v = $_POST['v_e2_p4_v'];
$v_e3_p4_v = $_POST['v_e3_p4_v'];
$v_e4_p4_v = $_POST['v_e4_p4_v'];
$v_e5_p4_v = $_POST['v_e5_p4_v'];

#fila 5 panel 1
$v_e11_p5_v = $_POST['v_e11_p5_v'];
$v_e1_p5_v = $_POST['v_e1_p5_v'];
$v_e2_p5_v = $_POST['v_e2_p5_v'];
$v_e3_p5_v = $_POST['v_e3_p5_v'];
$v_e4_p5_v = $_POST['v_e4_p5_v'];
$v_e5_p5_v = $_POST['v_e5_p5_v'];

#fila 6 panel 1
$v_e11_gi_v = $_POST['v_e11_gi_v'];
$v_e1_gi_v = $_POST['v_e1_gi_v'];
$v_e2_gi_v = $_POST['v_e2_gi_v'];
$v_e3_gi_v = $_POST['v_e3_gi_v'];
$v_e4_gi_v = $_POST['v_e4_gi_v'];
$v_e5_gi_v = $_POST['v_e5_gi_v'];

#fila 7 panel 1
$v_e11_gii_v = $_POST['v_e11_p2_v'];
$v_e1_gii_v = $_POST['v_e1_p2_v'];
$v_e2_gii_v = $_POST['v_e2_p2_v'];
$v_e3_gii_v = $_POST['v_e3_p2_v'];
$v_e4_gii_v = $_POST['v_e4_p2_v'];
$v_e5_gii_v = $_POST['v_e5_p2_v'];

#2

#fila 1 panel 2
$v_e6_p1_v = $_POST['v_e6_p1_v'];
$v_e7_p1_v = $_POST['v_e7_p1_v'];
$v_e8_p1_v = $_POST['v_e8_p1_v'];
$v_e9_p1_v = $_POST['v_e9_p1_v'];
$v_e10_p1_v = $_POST['v_e10_p1_v'];
$v_e111_p1_v = $_POST['v_e111_p1_v'];

#fila 2 panel 2
$v_e6_p2_v = $_POST['v_e6_p2_v'];
$v_e7_p2_v = $_POST['v_e7_p2_v'];
$v_e8_p2_v = $_POST['v_e8_p2_v'];
$v_e9_p2_v = $_POST['v_e9_p2_v'];
$v_e10_p2_v = $_POST['v_e10_p2_v'];
$v_e111_p2_v = $_POST['v_e111_p2_v'];

#fila 3 panel 2
$v_e6_p3_v = $_POST['v_e6_p3_v'];
$v_e7_p3_v = $_POST['v_e7_p3_v'];
$v_e8_p3_v = $_POST['v_e8_p3_v'];
$v_e9_p3_v = $_POST['v_e9_p3_v'];
$v_e10_p3_v = $_POST['v_e10_p3_v'];
$v_e111_p3_v = $_POST['v_e111_p3_v'];

#fila 4 panel 2
$v_e6_p4_v = $_POST['v_e6_p4_v'];
$v_e7_p4_v = $_POST['v_e7_p4_v'];
$v_e8_p4_v = $_POST['v_e8_p4_v'];
$v_e9_p4_v = $_POST['v_e9_p4_v'];
$v_e10_p4_v = $_POST['v_e10_p4_v'];
$v_e111_p4_v = $_POST['v_e111_p4_v'];

#fila 5 panel 2
$v_e6_p5_v = $_POST['v_e6_p5_v'];
$v_e7_p5_v = $_POST['v_e7_p5_v'];
$v_e8_p5_v = $_POST['v_e8_p5_v'];
$v_e9_p5_v = $_POST['v_e9_p5_v'];
$v_e10_p5_v = $_POST['v_e10_p5_v'];
$v_e111_p5_v = $_POST['v_e111_p5_v'];

#fila 6 panel 2
$v_e6_gi_v = $_POST['v_e6_gi_v'];
$v_e7_gi_v = $_POST['v_e7_gi_v'];
$v_e8_gi_v = $_POST['v_e8_gi_v'];
$v_e9_gi_v = $_POST['v_e9_gi_v'];
$v_e10_gi_v = $_POST['v_e10_gi_v'];
$v_e111_gi_v = $_POST['v_e111_gi_v'];

#fila 7 panel 2
$v_e6_gii_v = $_POST['v_e6_gii_v'];
$v_e7_gii_v = $_POST['v_e7_gii_v'];
$v_e8_gii_v = $_POST['v_e8_gii_v'];
$v_e9_gii_v = $_POST['v_e9_gii_v'];
$v_e10_gii_v = $_POST['v_e10_gii_v'];
$v_e111_gii_v = $_POST['v_e111_gii_v'];

#3

#fila 1 panel 3
$v_e12_p1_v = $_POST['v_e12_p1_v'];
$v_e13_p1_v = $_POST['v_e13_p1_v'];
$v_e14_p1_v = $_POST['v_e14_p1_v'];
$v_e15_p1_v = $_POST['v_e15_p1_v'];
$v_e16_p1_v = $_POST['v_e16_p1_v'];
$v_e17_p1_v = $_POST['v_e17_p1_v'];

#fila 2 panel 3
$v_e12_p2_v = $_POST['v_e12_p2_v'];
$v_e13_p2_v = $_POST['v_e13_p2_v'];
$v_e14_p2_v = $_POST['v_e14_p2_v'];
$v_e15_p2_v = $_POST['v_e15_p2_v'];
$v_e16_p2_v = $_POST['v_e16_p2_v'];
$v_e17_p2_v = $_POST['v_e17_p2_v'];

#fila 3 panel 3
$v_e12_p3_v = $_POST['v_e12_p3_v'];
$v_e13_p3_v = $_POST['v_e13_p3_v'];
$v_e14_p3_v = $_POST['v_e14_p3_v'];
$v_e15_p3_v = $_POST['v_e15_p3_v'];
$v_e16_p3_v = $_POST['v_e16_p3_v'];
$v_e17_p3_v = $_POST['v_e17_p3_v'];


#fila 4 panel 3
$v_e12_p4_v = $_POST['v_e12_p4_v'];
$v_e13_p4_v = $_POST['v_e13_p4_v'];
$v_e14_p4_v = $_POST['v_e14_p4_v'];
$v_e15_p4_v = $_POST['v_e15_p4_v'];
$v_e16_p4_v = $_POST['v_e16_p4_v'];
$v_e17_p4_v = $_POST['v_e17_p4_v'];

#fila 5 panel 3
$v_e12_p5_v = $_POST['v_e12_p5_v'];
$v_e13_p5_v = $_POST['v_e13_p5_v'];
$v_e14_p5_v = $_POST['v_e14_p5_v'];
$v_e15_p5_v = $_POST['v_e15_p5_v'];
$v_e16_p5_v = $_POST['v_e16_p5_v'];
$v_e17_p5_v = $_POST['v_e17_p5_v'];

#fila 6 panel 3
$v_e12_gi_v = $_POST['v_e12_gi_v'];
$v_e13_gi_v = $_POST['v_e13_gi_v'];
$v_e14_gi_v = $_POST['v_e14_gi_v'];
$v_e15_gi_v = $_POST['v_e15_gi_v'];
$v_e16_gi_v = $_POST['v_e16_gi_v'];
$v_e17_gi_v = $_POST['v_e17_gi_v'];

#fila 7 panel 3
$v_e12_gii_v = $_POST['v_e12_gii_v'];
$v_e13_gii_v = $_POST['v_e13_gii_v'];
$v_e14_gii_v = $_POST['v_e14_gii_v'];
$v_e15_gii_v = $_POST['v_e15_gii_v'];
$v_e16_gii_v = $_POST['v_e16_gii_v'];
$v_e17_gii_v = $_POST['v_e17_gii_v'];

mysql_query ("INSERT INTO total_visita_edad (id_sexo,id_periodo_escolar,id_mes,id_tipo_edad,p1,p2,p3,p4,p5,gi,gii) values ('1','$periodo_e','$mes','1','$v_e11_p1_v','$v_e11_p2_v','$v_e11_p3_v','$v_e11_p4_v','$v_e11_p5_v','$v_e11_gi_v','$v_e11_gii_v'),
#1año varones
	('1','$periodo_e','$mes','2','$v_e1_p1_v','$v_e1_p2_v','$v_e1_p3_v','$v_e1_p4_v','$v_e1_p5_v','$v_e1_gi_v','$v_e1_gii_v'),
#2año varones
	('1','$periodo_e','$mes','3','$v_e2_p1_v','$v_e2_p2_v','$v_e2_p3_v','$v_e2_p4_v','$v_e2_p5_v','$v_e2_gi_v','$v_e2_gii_v'),
#3año varones
	('1','$periodo_e','$mes','4','$v_e3_p1_v','$v_e3_p2_v','$v_e3_p3_v','$v_e3_p4_v','$v_e3_p5_v','$v_e3_gi_v','$v_e3_gii_v'),
#4año varones
	('1','$periodo_e','$mes','5','$v_e4_p1_v','$v_e4_p2_v','$v_e4_p3_v','$v_e4_p4_v','$v_e4_p5_v','$v_e4_gi_v','$v_e4_gii_v'),
#5año varones
	('1','$periodo_e','$mes','6','$v_e5_p1_v','$v_e5_p2_v','$v_e5_p3_v','$v_e5_p4_v','$v_e5_p5_v','$v_e5_gi_v','$v_e5_gii_v'),
#6año varones
	('1','$periodo_e','$mes','7','$v_e6_p1_v','$v_e6_p2_v','$v_e6_p3_v','$v_e6_p4_v','$v_e6_p5_v','$v_e6_gi_v','$v_e6_gii_v'),
#7año varones
	('1','$periodo_e','$mes','8','$v_e7_p1_v','$v_e7_p2_v','$v_e7_p3_v','$v_e7_p4_v','$v_e7_p5_v','$v_e7_gi_v','$v_e7_gii_v'),
#8año varones
	('1','$periodo_e','$mes','9','$v_e8_p1_v','$v_e8_p2_v','$v_e8_p3_v','$v_e8_p4_v','$v_e8_p5_v','$v_e8_gi_v','$v_e8_gii_v'),
#9año varones
	('1','$periodo_e','$mes','10','$v_e9_p1_v','$v_e9_p2_v','$v_e9_p3_v','$v_e9_p4_v','$v_e9_p5_v','$v_e9_gi_v','$v_e9_gii_v'),
#10año varones
	('1','$periodo_e','$mes','11','$v_e10_p1_v','$v_e10_p2_v','$v_e10_p3_v','$v_e10_p4_v','$v_e10_p5_v','$v_e10_gi_v','$v_e10_gii_v'),
#11año varones
	('1','$periodo_e','$mes','12','$v_e111_p1_v','$v_e111_p2_v','$v_e111_p3_v','$v_e111_p4_v','$v_e111_p5_v','$v_e111_gi_v','$v_e111_gii_v'),
#12año varones
	('1','$periodo_e','$mes','13','$v_e12_p1_v','$v_e12_p2_v','$v_e12_p3_v','$v_e12_p4_v','$v_e12_p5_v','$v_e12_gi_v','$v_e12_gii_v'),
#13año varones
	('1','$periodo_e','$mes','14','$v_e13_p1_v','$v_e13_p2_v','$v_e13_p3_v','$v_e13_p4_v','$v_e13_p5_v','$v_e13_gi_v','$v_e13_gii_v'),
#14año varones
	('1','$periodo_e','$mes','15','$v_e14_p1_v','$v_e14_p2_v','$v_e14_p3_v','$v_e14_p4_v','$v_e14_p5_v','$v_e14_gi_v','$v_e14_gii_v'),
#15año varones
	('1','$periodo_e','$mes','16','$v_e15_p1_v','$v_e15_p2_v','$v_e15_p3_v','$v_e15_p4_v','$v_e15_p5_v','$v_e15_gi_v','$v_e15_gii_v'),
#16año varones
	('1','$periodo_e','$mes','17','$v_e16_p1_v','$v_e16_p2_v','$v_e16_p3_v','$v_e16_p4_v','$v_e16_p5_v','$v_e16_gi_v','$v_e16_gii_v'),
#17+año varones
	('1','$periodo_e','$mes','18','$v_e17_p1_v','$v_e17_p2_v','$v_e17_p3_v','$v_e17_p4_v','$v_e17_p5_v','$v_e17_gi_v','$v_e17_gii_v')
	")

or die (mysql_error());


#VISITA AGRUPADO POR EDAD HEMBRAS (por filas)

#fila 1 panel 1
$v_e11_p1_h = $_POST['v_e11_p1_h'];
$v_e1_p1_h = $_POST['v_e1_p1_h'];
$v_e2_p1_h = $_POST['v_e2_p1_h'];
$v_e3_p1_h = $_POST['v_e3_p1_h'];
$v_e4_p1_h = $_POST['v_e4_p1_h'];
$v_e5_p1_h = $_POST['v_e5_p1_h'];

#fila 2 panel 1
$v_e11_p2_h = $_POST['v_e11_p2_h'];
$v_e1_p2_h = $_POST['v_e1_p2_h'];
$v_e2_p2_h = $_POST['v_e2_p2_h'];
$v_e3_p2_h = $_POST['v_e3_p2_h'];
$v_e4_p2_h = $_POST['v_e4_p2_h'];
$v_e5_p2_h = $_POST['v_e5_p2_h'];

#fila 3 panel 1
$v_e11_p3_h = $_POST['v_e11_p3_h'];
$v_e1_p3_h = $_POST['v_e1_p3_h'];
$v_e2_p3_h = $_POST['v_e2_p3_h'];
$v_e3_p3_h = $_POST['v_e3_p3_h'];
$v_e4_p3_h = $_POST['v_e4_p3_h'];
$v_e5_p3_h = $_POST['v_e5_p3_h'];

#fila 4 panel 1
$v_e11_p4_h = $_POST['v_e11_p4_h'];
$v_e1_p4_h = $_POST['v_e1_p4_h'];
$v_e2_p4_h = $_POST['v_e2_p4_h'];
$v_e3_p4_h = $_POST['v_e3_p4_h'];
$v_e4_p4_h = $_POST['v_e4_p4_h'];
$v_e5_p4_h = $_POST['v_e5_p4_h'];

#fila 5 panel 1
$v_e11_p5_h = $_POST['v_e11_p5_h'];
$v_e1_p5_h = $_POST['v_e1_p5_h'];
$v_e2_p5_h = $_POST['v_e2_p5_h'];
$v_e3_p5_h = $_POST['v_e3_p5_h'];
$v_e4_p5_h = $_POST['v_e4_p5_h'];
$v_e5_p5_h = $_POST['v_e5_p5_h'];

#fila 6 panel 1
$v_e11_gi_h = $_POST['v_e11_gi_h'];
$v_e1_gi_h = $_POST['v_e1_gi_h'];
$v_e2_gi_h = $_POST['v_e2_gi_h'];
$v_e3_gi_h = $_POST['v_e3_gi_h'];
$v_e4_gi_h = $_POST['v_e4_gi_h'];
$v_e5_gi_h = $_POST['v_e5_gi_h'];

#fila 7 panel 1
$v_e11_gii_h = $_POST['v_e11_p2_h'];
$v_e1_gii_h = $_POST['v_e1_p2_h'];
$v_e2_gii_h = $_POST['v_e2_p2_h'];
$v_e3_gii_h = $_POST['v_e3_p2_h'];
$v_e4_gii_h= $_POST['v_e4_p2_h'];
$v_e5_gii_h = $_POST['v_e5_p2_h'];

#2
#fila 1 panel 2
$v_e6_p1_h = $_POST['v_e6_p1_h'];
$v_e7_p1_h = $_POST['v_e7_p1_h'];
$v_e8_p1_h = $_POST['v_e8_p1_h'];
$v_e9_p1_h = $_POST['v_e9_p1_h'];
$v_e10_p1_h = $_POST['v_e10_p1_h'];
$v_e111_p1_h = $_POST['v_e111_p1_h'];

#fila 2 panel 2
$v_e6_p2_h = $_POST['v_e6_p2_h'];
$v_e7_p2_h = $_POST['v_e7_p2_h'];
$v_e8_p2_h = $_POST['v_e8_p2_h'];
$v_e9_p2_h = $_POST['v_e9_p2_h'];
$v_e10_p2_h = $_POST['v_e10_p2_h'];
$v_e111_p2_h = $_POST['v_e111_p2_h'];

#fila 3 panel 2
$v_e6_p3_h = $_POST['v_e6_p3_h'];
$v_e7_p3_h = $_POST['v_e7_p3_h'];
$v_e8_p3_h = $_POST['v_e8_p3_h'];
$v_e9_p3_h = $_POST['v_e9_p3_h'];
$v_e10_p3_h = $_POST['v_e10_p3_h'];
$v_e111_p3_h = $_POST['v_e111_p3_h'];

#fila 4 panel 2
$v_e6_p4_h = $_POST['v_e6_p4_h'];
$v_e7_p4_h = $_POST['v_e7_p4_h'];
$v_e8_p4_h = $_POST['v_e8_p4_h'];
$v_e9_p4_h = $_POST['v_e9_p4_h'];
$v_e10_p4_h = $_POST['v_e10_p4_h'];
$v_e111_p4_h = $_POST['v_e111_p4_h'];

#fila 5 panel 2
$v_e6_p5_h = $_POST['v_e6_p5_h'];
$v_e7_p5_h = $_POST['v_e7_p5_h'];
$v_e8_p5_h = $_POST['v_e8_p5_h'];
$v_e9_p5_h = $_POST['v_e9_p5_h'];
$v_e10_p5_h = $_POST['v_e10_p5_h'];
$v_e111_p5_h = $_POST['v_e111_p5_h'];

#fila 6 panel 2
$v_e6_gi_h = $_POST['v_e6_gi_h'];
$v_e7_gi_h = $_POST['v_e7_gi_h'];
$v_e8_gi_h = $_POST['v_e8_gi_h'];
$v_e9_gi_h = $_POST['v_e9_gi_h'];
$v_e10_gi_h = $_POST['v_e10_gi_h'];
$v_e111_gi_h = $_POST['v_e111_gi_h'];

#fila 7 panel 2
$v_e6_gii_h = $_POST['v_e6_gii_h'];
$v_e7_gii_h = $_POST['v_e7_gii_h'];
$v_e8_gii_h = $_POST['v_e8_gii_h'];
$v_e9_gii_h = $_POST['v_e9_gii_h'];
$v_e10_gii_h = $_POST['v_e10_gii_h'];
$v_e111_gii_h = $_POST['v_e111_gii_h'];

#3

#fila 1 panel 3
$v_e12_p1_h = $_POST['v_e12_p1_h'];
$v_e13_p1_h = $_POST['v_e13_p1_h'];
$v_e14_p1_h = $_POST['v_e14_p1_h'];
$v_e15_p1_h = $_POST['v_e15_p1_h'];
$v_e16_p1_h = $_POST['v_e16_p1_h'];
$v_e17_p1_h = $_POST['v_e17_p1_h'];

#fila 2 panel 3
$v_e12_p2_h = $_POST['v_e12_p2_h'];
$v_e13_p2_h = $_POST['v_e13_p2_h'];
$v_e14_p2_h = $_POST['v_e14_p2_h'];
$v_e15_p2_h = $_POST['v_e15_p2_h'];
$v_e16_p2_h = $_POST['v_e16_p2_h'];
$v_e17_p2_h = $_POST['v_e17_p2_h'];

#fila 3 panel 3
$v_e12_p3_h = $_POST['v_e12_p3_h'];
$v_e13_p3_h = $_POST['v_e13_p3_h'];
$v_e14_p3_h = $_POST['v_e14_p3_h'];
$v_e15_p3_h = $_POST['v_e15_p3_h'];
$v_e16_p3_h = $_POST['v_e16_p3_h'];
$v_e17_p3_h = $_POST['v_e17_p3_h'];


#fila 4 panel 3
$v_e12_p4_h = $_POST['v_e12_p4_h'];
$v_e13_p4_h = $_POST['v_e13_p4_h'];
$v_e14_p4_h = $_POST['v_e14_p4_h'];
$v_e15_p4_h = $_POST['v_e15_p4_h'];
$v_e16_p4_h = $_POST['v_e16_p4_h'];
$v_e17_p4_h = $_POST['v_e17_p4_h'];

#fila 5 panel 3
$v_e12_p5_h = $_POST['v_e12_p5_h'];
$v_e13_p5_h = $_POST['v_e13_p5_h'];
$v_e14_p5_h = $_POST['v_e14_p5_h'];
$v_e15_p5_h = $_POST['v_e15_p5_h'];
$v_e16_p5_h = $_POST['v_e16_p5_h'];
$v_e17_p5_h = $_POST['v_e17_p5_h'];

#fila 6 panel 3
$v_e12_gi_h = $_POST['v_e12_gi_h'];
$v_e13_gi_h = $_POST['v_e13_gi_h'];
$v_e14_gi_h = $_POST['v_e14_gi_h'];
$v_e15_gi_h = $_POST['v_e15_gi_h'];
$v_e16_gi_h = $_POST['v_e16_gi_h'];
$v_e17_gi_h = $_POST['v_e17_gi_h'];

#fila 7 panel 3
$v_e12_gii_h = $_POST['v_e12_gii_h'];
$v_e13_gii_h = $_POST['v_e13_gii_h'];
$v_e14_gii_h = $_POST['v_e14_gii_h'];
$v_e15_gii_h = $_POST['v_e15_gii_h'];
$v_e16_gii_h = $_POST['v_e16_gii_h'];
$v_e17_gii_h = $_POST['v_e17_gii_h'];

mysql_query ("INSERT INTO total_visita_edad (id_sexo,id_periodo_escolar,id_mes,id_tipo_edad,p1,p2,p3,p4,p5,gi,gii) values ('1','$periodo_e','$mes','1','$v_e11_p1_h','$v_e11_p2_h','$v_e11_p3_h','$v_e11_p4_h','$v_e11_p5_h','$v_e11_gi_h','$v_e11_gii_h'),
#1año varones
	('2','$periodo_e','$mes','2','$v_e1_p1_h','$v_e1_p2_h','$v_e1_p3_h','$v_e1_p4_h','$v_e1_p5_h','$v_e1_gi_h','$v_e1_gii_h'),
#2año varones
	('2','$periodo_e','$mes','3','$v_e2_p1_h','$v_e2_p2_h','$v_e2_p3_h','$v_e2_p4_h','$v_e2_p5_h','$v_e2_gi_h','$v_e2_gii_h'),
#3año varones
	('2','$periodo_e','$mes','4','$v_e3_p1_h','$v_e3_p2_h','$v_e3_p3_h','$v_e3_p4_h','$v_e3_p5_h','$v_e3_gi_h','$v_e3_gii_h'),
#4año varones
	('2','$periodo_e','$mes','5','$v_e4_p1_h','$v_e4_p2_h','$v_e4_p3_h','$v_e4_p4_h','$v_e4_p5_h','$v_e4_gi_h','$v_e4_gii_h'),
#5año varones
	('2','$periodo_e','$mes','6','$v_e5_p1_h','$v_e5_p2_h','$v_e5_p3_h','$v_e5_p4_h','$v_e5_p5_h','$v_e5_gi_h','$v_e5_gii_h'),
#6año varones
	('2','$periodo_e','$mes','7','$v_e6_p1_h','$v_e6_p2_h','$v_e6_p3_h','$v_e6_p4_h','$v_e6_p5_h','$v_e6_gi_h','$v_e6_gii_h'),
#7año varones
	('2','$periodo_e','$mes','8','$v_e7_p1_h','$v_e7_p2_h','$v_e7_p3_h','$v_e7_p4_h','$v_e7_p5_h','$v_e7_gi_h','$v_e7_gii_h'),
#8año varones
	('2','$periodo_e','$mes','9','$v_e8_p1_h','$v_e8_p2_h','$v_e8_p3_h','$v_e8_p4_h','$v_e8_p5_h','$v_e8_gi_h','$v_e8_gii_h'),
#9año varones
	('2','$periodo_e','$mes','10','$v_e9_p1_h','$v_e9_p2_h','$v_e9_p3_h','$v_e9_p4_h','$v_e9_p5_h','$v_e9_gi_h','$v_e9_gii_h'),
#10año varones
	('2','$periodo_e','$mes','11','$v_e10_p1_h','$v_e10_p2_h','$v_e10_p3_h','$v_e10_p4_h','$v_e10_p5_h','$v_e10_gi_h','$v_e10_gii_h'),
#11año varones
	('2','$periodo_e','$mes','12','$v_e111_p1_h','$v_e111_p2_h','$v_e111_p3_h','$v_e111_p4_h','$v_e111_p5_h','$v_e111_gi_h','$v_e111_gii_h'),
#12año varones
	('2','$periodo_e','$mes','13','$v_e12_p1_h','$v_e12_p2_h','$v_e12_p3_h','$v_e12_p4_h','$v_e12_p5_h','$v_e12_gi_h','$v_e12_gii_h'),
#13año varones
	('2','$periodo_e','$mes','14','$v_e13_p1_h','$v_e13_p2_h','$v_e13_p3_h','$v_e13_p4_h','$v_e13_p5_h','$v_e13_gi_h','$v_e13_gii_h'),
#14año varones
	('2','$periodo_e','$mes','15','$v_e14_p1_h','$v_e14_p2_h','$v_e14_p3_h','$v_e14_p4_h','$v_e14_p5_h','$v_e14_gi_h','$v_e14_gii_h'),
#15año varones
	('2','$periodo_e','$mes','16','$v_e15_p1_h','$v_e15_p2_h','$v_e15_p3_h','$v_e15_p4_h','$v_e15_p5_h','$v_e15_gi_h','$v_e15_gii_h'),
#16año varones
	('2','$periodo_e','$mes','17','$v_e16_p1_h','$v_e16_p2_h','$v_e16_p3_h','$v_e16_p4_h','$v_e16_p5_h','$v_e16_gi_h','$v_e16_gii_h'),
#17+año varones
	('2','$periodo_e','$mes','18','$v_e17_p1_h','$v_e17_p2_h','$v_e17_p3_h','$v_e17_p4_h','$v_e17_p5_h','$v_e17_gi_h','$v_e17_gii_h')
	")

or die (mysql_error());






#------TIEMPO DE PERMANENCIA VARONES (por filas)

#fila 1 panel 1
$t_5_p1_v = $_POST['t_5_p1_v'];
$t_10_p1_v = $_POST['t_10_p1_v'];
$t_15_p1_v = $_POST['t_15_p1_v'];
$t_30_p1_v = $_POST['t_30_p1_v'];
$t_2_p1_v = $_POST['t_2_p1_v'];
$t_3_p1_v = $_POST['t_3_p1_v'];

#fila 2 panel 1
$t_5_p2_v = $_POST['t_5_p2_v'];
$t_10_p2_v = $_POST['t_10_p2_v'];
$t_15_p2_v = $_POST['t_15_p2_v'];
$t_30_p2_v = $_POST['t_30_p2_v'];
$t_2_p2_v = $_POST['t_2_p2_v'];
$t_3_p2_v = $_POST['t_3_p2_v'];

#fila 3 panel 1
$t_5_p3_v = $_POST['t_5_p3_v'];
$t_10_p3_v = $_POST['t_10_p3_v'];
$t_15_p3_v = $_POST['t_15_p3_v'];
$t_30_p3_v = $_POST['t_30_p3_v'];
$t_2_p3_v = $_POST['t_2_p3_v'];
$t_3_p3_v = $_POST['t_3_p3_v'];

#fila 4 panel 1
$t_5_p4_v = $_POST['t_5_p4_v'];
$t_10_p4_v = $_POST['t_10_p4_v'];
$t_15_p4_v = $_POST['t_15_p4_v'];
$t_30_p4_v = $_POST['t_30_p4_v'];
$t_2_p4_v = $_POST['t_2_p4_v'];
$t_3_p4_v = $_POST['t_3_p4_v'];

#fila 5 panel 1
$t_5_p5_v = $_POST['t_5_p5_v'];
$t_10_p5_v = $_POST['t_10_p5_v'];
$t_15_p5_v = $_POST['t_15_p5_v'];
$t_30_p5_v = $_POST['t_30_p5_v'];
$t_2_p5_v = $_POST['t_2_p5_v'];
$t_3_p5_v = $_POST['t_3_p5_v'];

#fila 6 panel 1
$t_5_gi_v = $_POST['t_5_gi_v'];
$t_10_gi_v = $_POST['t_10_gi_v'];
$t_15_gi_v = $_POST['t_15_gi_v'];
$t_30_gi_v = $_POST['t_30_gi_v'];
$t_2_gi_v = $_POST['t_2_gi_v'];
$t_3_gi_v = $_POST['t_3_gi_v'];

#fila 7 panel 1
$t_5_gii_v = $_POST['t_5_gii_v'];
$t_10_gii_v = $_POST['t_10_gii_v'];
$t_15_gii_v = $_POST['t_15_gii_v'];
$t_30_gii_v = $_POST['t_30_gii_v'];
$t_2_gii_v = $_POST['t_2_gii_v'];
$t_3_gii_v = $_POST['t_3_gii_v'];

#fila 1 panel 3 LARGA ESTADIA
$t_4_p1_v = $_POST['t_4_p1_v'];
$t_4_p2_v = $_POST['t_4_p2_v'];
$t_4_p3_v = $_POST['t_4_p3_v'];
$t_4_p4_v = $_POST['t_4_p4_v'];
$t_4_gi_v = $_POST['t_4_gi_v'];
$t_4_gii_v = $_POST['t_4_gii_v'];

mysql_query ("INSERT INTO total_tiempo_permanencia (id_sexo,id_periodo_escolar,id_mes,id_tipo_permanencia,p1,p2,p3,p4,p5,gi,gii) values ('1','$periodo_e','$mes','1','$t_5_p1_v','$t_5_p2_v','$t_5_p3_v','$t_5_p4_v','$t_5_p5_v','$t_5_gi_v','$t_5_gii_v'),
#0-5 D Timpo Permanencia 
	('1','$periodo_e','$mes','2','$t_10_p1_v','$t_10_p2_v','$t_10_p3_v','$t_10_p4_v','$t_10_p10_v','$t_10_gi_v','$t_10_gii_v'),
#0-5 D Timpo Permanencia 
	('1','$periodo_e','$mes','3','$t_15_p1_v','$t_15_p2_v','$t_15_p3_v','$t_15_p4_v','$t_15_p15_v','$t_15_gi_v','$t_15_gii_v'),
#0-5 D Timpo Permanencia 
	('1','$periodo_e','$mes','4','$t_30_p1_v','$t_30_p2_v','$t_30_p3_v','$t_30_p4_v','$t_30_p30_v','$t_30_gi_v','$t_30_gii_v'),
#0-5 D Timpo Permanencia 
	('1','$periodo_e','$mes','5','$t_2_p1_v','$t_2_p2_v','$t_2_p3_v','$t_2_p4_v','$t_2_p2_v','$t_2_gi_v','$t_2_gii_v'),
#0-5 D Timpo Permanencia 
	('1','$periodo_e','$mes','6','$t_3_p1_v','$t_3_p2_v','$t_3_p3_v','$t_3_p4_v','$t_3_p3_v','$t_3_gi_v','$t_3_gii_v'),
#0-5 D Timpo Permanencia 
	('1','$periodo_e','$mes','7','$t_4_p1_v','$t_4_p2_v','$t_4_p3_v','$t_4_p4_v','$t_4_p4_v','$t_4_gi_v','$t_4_gii_v')
	")

or die (mysql_error());




#TIEMPO DE PERMANENCIA HEMBRAS

#fila 1 panel 1
$t_5_p1_h = $_POST['t_5_p1_h'];
$t_10_p1_h = $_POST['t_10_p1_h'];
$t_15_p1_h = $_POST['t_15_p1_h'];
$t_30_p1_h = $_POST['t_30_p1_h'];
$t_2_p1_h = $_POST['t_2_p1_h'];
$t_3_p1_h = $_POST['t_3_p1_h'];

#fila 2 panel 1
$t_5_p2_h = $_POST['t_5_p2_h'];
$t_10_p2_h = $_POST['t_10_p2_h'];
$t_15_p2_h = $_POST['t_15_p2_h'];
$t_30_p2_h = $_POST['t_30_p2_h'];
$t_2_p2_h = $_POST['t_2_p2_h'];
$t_3_p2_h = $_POST['t_3_p2_h'];

#fila 3 panel 1
$t_5_p3_h = $_POST['t_5_p3_h'];
$t_10_p3_h = $_POST['t_10_p3_h'];
$t_15_p3_h = $_POST['t_15_p3_h'];
$t_30_p3_h = $_POST['t_30_p3_h'];
$t_2_p3_h = $_POST['t_2_p3_h'];
$t_3_p3_h = $_POST['t_3_p3_h'];

#fila 4 panel 1
$t_5_p4_h = $_POST['t_5_p4_h'];
$t_10_p4_h = $_POST['t_10_p4_h'];
$t_15_p4_h = $_POST['t_15_p4_h'];
$t_30_p4_h = $_POST['t_30_p4_h'];
$t_2_p4_h = $_POST['t_2_p4_h'];
$t_3_p4_h = $_POST['t_3_p4_h'];

#fila 5 panel 1
$t_5_p5_h = $_POST['t_5_p5_h'];
$t_10_p5_h = $_POST['t_10_p5_h'];
$t_15_p5_h = $_POST['t_15_p5_h'];
$t_30_p5_h = $_POST['t_30_p5_h'];
$t_2_p5_h = $_POST['t_2_p5_h'];
$t_3_p5_h = $_POST['t_3_p5_h'];

#fila 6 panel 1
$t_5_gi_h = $_POST['t_5_gi_h'];
$t_10_gi_h = $_POST['t_10_gi_h'];
$t_15_gi_h = $_POST['t_15_gi_h'];
$t_30_gi_h = $_POST['t_30_gi_h'];
$t_2_gi_h = $_POST['t_2_gi_h'];
$t_3_gi_h = $_POST['t_3_gi_h'];

#fila 7 panel 1
$t_5_gii_h = $_POST['t_5_gii_h'];
$t_10_gii_h = $_POST['t_10_gii_h'];
$t_15_gii_h = $_POST['t_15_gii_h'];
$t_30_gii_h = $_POST['t_30_gii_h'];
$t_2_gii_h = $_POST['t_2_gii_h'];
$t_3_gii_h = $_POST['t_3_gii_h'];

#fila 1 panel 3
$t_4_p1_h = $_POST['t_4_p1_h'];
$t_4_p2_h = $_POST['t_4_p2_h'];
$t_4_p3_h = $_POST['t_4_p3_h'];
$t_4_p4_h = $_POST['t_4_p4_h'];
$t_4_gi_h = $_POST['t_4_gi_h'];
$t_4_gii_h = $_POST['t_4_gii_h'];

mysql_query ("INSERT INTO total_tiempo_permanencia (id_sexo,id_periodo_escolar,id_mes,id_tipo_permanencia,p1,p2,p3,p4,p5,gi,gii) values ('2','$periodo_e','$mes','1','$t_5_p1_h','$t_5_p2_h','$t_5_p3_h','$t_5_p4_h','$t_5_p5_h','$t_5_gi_h','$t_5_gii_h'),
#0-5 D Timpo Permanencia 
	('2','$periodo_e','$mes','2','$t_10_p1_h','$t_10_p2_h','$t_10_p3_h','$t_10_p4_h','$t_10_p10_h','$t_10_gi_h','$t_10_gii_h'),
#0-5 D Timpo Permanencia 
	('2','$periodo_e','$mes','3','$t_15_p1_h','$t_15_p2_h','$t_15_p3_h','$t_15_p4_h','$t_15_p15_h','$t_15_gi_h','$t_15_gii_h'),
#0-5 D Timpo Permanencia 
	('2','$periodo_e','$mes','4','$t_30_p1_h','$t_30_p2_h','$t_30_p3_h','$t_30_p4_h','$t_30_p30_h','$t_30_gi_h','$t_30_gii_h'),
#0-5 D Timpo Permanencia 
	('2','$periodo_e','$mes','5','$t_2_p1_h','$t_2_p2_h','$t_2_p3_h','$t_2_p4_h','$t_2_p2_h','$t_2_gi_h','$t_2_gii_h'),
#0-5 D Timpo Permanencia 
	('2','$periodo_e','$mes','6','$t_3_p1_h','$t_3_p2_h','$t_3_p3_h','$t_3_p4_h','$t_3_p3_h','$t_3_gi_h','$t_3_gii_h'),
#0-5 D Timpo Permanencia 
	('2','$periodo_e','$mes','7','$t_4_p1_h','$t_4_p2_h','$t_4_p3_h','$t_4_p4_h','$t_4_p4_h','$t_4_gi_h','$t_4_gii_h')
	")

or die (mysql_error());





#
#
#
#---------POBLACION REFERIDA VARONES
#
#
# 

#fila 1 panel 1

$pr_r1_p1_v = $_POST['pr_r1_p1_v'];
$pr_r2_p1_v = $_POST['pr_r2_p1_v'];
$pr_r3_p1_v = $_POST['pr_r3_p1_v'];
$pr_r4_p1_v = $_POST['pr_r4_p1_v'];
$pr_r5_p1_v = $_POST['pr_r5_p1_v'];
$pr_r6_p1_v = $_POST['pr_r6_p1_v'];

#fila 2 panel 1

$pr_r1_p2_v = $_POST['pr_r1_p2_v'];
$pr_r2_p2_v = $_POST['pr_r2_p2_v'];
$pr_r3_p2_v = $_POST['pr_r3_p2_v'];
$pr_r4_p2_v = $_POST['pr_r4_p2_v'];
$pr_r5_p2_v = $_POST['pr_r5_p2_v'];
$pr_r6_p2_v = $_POST['pr_r6_p2_v'];

#fila 3 panel 1

$pr_r1_p3_v = $_POST['pr_r1_p3_v'];
$pr_r2_p3_v = $_POST['pr_r2_p3_v'];
$pr_r3_p3_v = $_POST['pr_r3_p3_v'];
$pr_r4_p3_v = $_POST['pr_r4_p3_v'];
$pr_r5_p3_v = $_POST['pr_r5_p3_v'];
$pr_r6_p3_v = $_POST['pr_r6_p3_v'];

#fila 4 panel 1

$pr_r1_p4_v = $_POST['pr_r1_p4_v'];
$pr_r2_p4_v = $_POST['pr_r2_p4_v'];
$pr_r3_p4_v = $_POST['pr_r3_p4_v'];
$pr_r4_p4_v = $_POST['pr_r4_p4_v'];
$pr_r5_p4_v = $_POST['pr_r5_p4_v'];
$pr_r6_p4_v = $_POST['pr_r6_p4_v'];

#fila 5 panel 1

$pr_r1_p5_v = $_POST['pr_r1_p5_v'];
$pr_r2_p5_v = $_POST['pr_r2_p5_v'];
$pr_r3_p5_v = $_POST['pr_r3_p5_v'];
$pr_r4_p5_v = $_POST['pr_r4_p5_v'];
$pr_r5_p5_v = $_POST['pr_r5_p5_v'];
$pr_r6_p5_v = $_POST['pr_r6_p5_v'];

#fila 6 panel 1

$pr_r1_gi_v = $_POST['pr_r1_gi_v'];
$pr_r2_gi_v = $_POST['pr_r2_gi_v'];
$pr_r3_gi_v = $_POST['pr_r3_gi_v'];
$pr_r4_gi_v = $_POST['pr_r4_gi_v'];
$pr_r5_gi_v = $_POST['pr_r5_gi_v'];
$pr_r6_gi_v = $_POST['pr_r6_gi_v'];

#fila 7 panel 1

$pr_r1_gii_v = $_POST['pr_r1_gii_v'];
$pr_r2_gii_v = $_POST['pr_r2_gii_v'];
$pr_r3_gii_v = $_POST['pr_r3_gii_v'];
$pr_r4_gii_v = $_POST['pr_r4_gii_v'];
$pr_r5_gii_v = $_POST['pr_r5_gii_v'];
$pr_r6_gii_v = $_POST['pr_r6_gii_v'];

#---------------------------------
#fila 1 panel 2

$pr_r7_p1_v = $_POST['pr_r7_p1_v'];
$pr_r8_p1_v = $_POST['pr_r8_p1_v'];
$pr_r9_p1_v = $_POST['pr_r9_p1_v'];
$pr_r10_p1_v = $_POST['pr_r10_p1_v'];
$pr_r11_p1_v = $_POST['pr_r11_p1_v'];
$pr_r12_p1_v = $_POST['pr_r12_p1_v'];

#fila 2 panel 2

$pr_r7_p2_v = $_POST['pr_r7_p2_v'];
$pr_r8_p2_v = $_POST['pr_r8_p2_v'];
$pr_r9_p2_v = $_POST['pr_r9_p2_v'];
$pr_r10_p2_v = $_POST['pr_r10_p2_v'];
$pr_r11_p2_v = $_POST['pr_r11_p2_v'];
$pr_r12_p2_v = $_POST['pr_r12_p2_v'];

#fila 3 panel 2

$pr_r7_p3_v = $_POST['pr_r7_p3_v'];
$pr_r8_p3_v = $_POST['pr_r8_p3_v'];
$pr_r9_p3_v = $_POST['pr_r9_p3_v'];
$pr_r10_p3_v = $_POST['pr_r10_p3_v'];
$pr_r11_p3_v = $_POST['pr_r11_p3_v'];
$pr_r12_p3_v = $_POST['pr_r12_p3_v'];

#fila 4 panel 2

$pr_r7_p4_v = $_POST['pr_r7_p4_v'];
$pr_r8_p4_v = $_POST['pr_r8_p4_v'];
$pr_r9_p4_v = $_POST['pr_r9_p4_v'];
$pr_r10_p4_v = $_POST['pr_r10_p4_v'];
$pr_r11_p4_v = $_POST['pr_r11_p4_v'];
$pr_r12_p4_v = $_POST['pr_r12_p4_v'];

#fila 5 panel 2

$pr_r7_p5_v = $_POST['pr_r7_p5_v'];
$pr_r8_p5_v = $_POST['pr_r8_p5_v'];
$pr_r9_p5_v = $_POST['pr_r9_p5_v'];
$pr_r10_p5_v = $_POST['pr_r10_p5_v'];
$pr_r11_p5_v = $_POST['pr_r11_p5_v'];
$pr_r12_p5_v = $_POST['pr_r12_p5_v'];

#fila 6 panel 2

$pr_r7_gi_v = $_POST['pr_r7_gi_v'];
$pr_r8_gi_v = $_POST['pr_r8_gi_v'];
$pr_r9_gi_v = $_POST['pr_r9_gi_v'];
$pr_r10_gi_v = $_POST['pr_r10_gi_v'];
$pr_r11_gi_v = $_POST['pr_r11_gi_v'];
$pr_r12_gi_v = $_POST['pr_r12_gi_v'];

#fila 7 panel 2

$pr_r7_gii_v = $_POST['pr_r7_gii_v'];
$pr_r8_gii_v = $_POST['pr_r8_gii_v'];
$pr_r9_gii_v = $_POST['pr_r9_gii_v'];
$pr_r10_gii_v = $_POST['pr_r10_gii_v'];
$pr_r11_gii_v = $_POST['pr_r11_gii_v'];
$pr_r12_gii_v = $_POST['pr_r12_gii_v'];

mysql_query ("INSERT INTO total_referidos (id_sexo,id_periodo_escolar,id_mes,id_tipo_referido,p1,p2,p3,p4,p5,gi,gii) values ('1','$periodo_e','$mes','1','$pr_r1_p1_v','$pr_r1_p2_v','$pr_r1_p3_v','$pr_r1_p4_v','$pr_r1_p5_v','$pr_r1_gi_v','$pr_r1_gii_v'),
#Referido CDI 
	('1','$periodo_e','$mes','2','$pr_r2_p1_v','$pr_r2_p2_v','$pr_r2_p3_v','$pr_r2_p4_v','$pr_r2_p5_v','$pr_r2_gi_v','$pr_r2_gii_v'),
#Referido Seguro Social 
	('1','$periodo_e','$mes','3','$pr_r3_p1_v','$pr_r3_p2_v','$pr_r3_p3_v','$pr_r3_p4_v','$pr_r3_p5_v','$pr_r3_gi_v','$pr_r3_gii_v'),
#Referido Psicologia 
	('1','$periodo_e','$mes','4','$pr_r4_p1_v','$pr_r4_p2_v','$pr_r4_p3_v','$pr_r4_p4_v','$pr_r4_p5_v','$pr_r4_gi_v','$pr_r4_gii_v'),
#Referido CAIPA 
	('1','$periodo_e','$mes','5','$pr_r5_p1_v','$pr_r5_p2_v','$pr_r5_p3_v','$pr_r5_p4_v','$pr_r5_p5_v','$pr_r5_gi_v','$pr_r5_gii_v'),
#Referido integracion 
	('1','$periodo_e','$mes','6','$pr_r6_p1_v','$pr_r6_p2_v','$pr_r6_p3_v','$pr_r6_p4_v','$pr_r6_p5_v','$pr_r6_gi_v','$pr_r6_gii_v'),
#Referido A integral 
	('1','$periodo_e','$mes','7','$pr_r7_p1_v','$pr_r7_p2_v','$pr_r7_p3_v','$pr_r7_p4_v','$pr_r7_p5_v','$pr_r7_gi_v','$pr_r7_gii_v'),
#Referido CENDA 
	('1','$periodo_e','$mes','8','$pr_r8_p1_v','$pr_r8_p2_v','$pr_r8_p3_v','$pr_r8_p4_v','$pr_r8_p5_v','$pr_r8_gi_v','$pr_r8_gii_v'),
#Referido UPE 
	('1','$periodo_e','$mes','9','$pr_r9_p1_v','$pr_r9_p2_v','$pr_r9_p3_v','$pr_r9_p4_v','$pr_r9_p5_v','$pr_r9_gi_v','$pr_r9_gii_v'),
#Referido Articulacion 
	('1','$periodo_e','$mes','10','$pr_r10_p1_v','$pr_r10_p2_v','$pr_r10_p3_v','$pr_r10_p4_v','$pr_r10_p5_v','$pr_r10_gi_v','$pr_r10_gii_v'),
#Referido Otros 
	('1','$periodo_e','$mes','11','$pr_r11_p1_v','$pr_r11_p2_v','$pr_r11_p3_v','$pr_r11_p4_v','$pr_r11_p5_v','$pr_r11_gi_v','$pr_r11_gii_v'),
#Referido Otros 
	('1','$periodo_e','$mes','12','$pr_12_p1_v','$pr_12_p2_v','$pr_12_p3_v','$pr_12_p4_v','$pr_12_p5_v','$pr_12_gi_v','$pr_12_gii_v')

")

or die (mysql_error());





#---------POBLACION REFERIDA HEMBRAS

#fila 1 panel 1

$pr_r1_p1_h = $_POST['pr_r1_p1_h'];
$pr_r2_p1_h = $_POST['pr_r2_p1_h'];
$pr_r3_p1_h = $_POST['pr_r3_p1_h'];
$pr_r4_p1_h = $_POST['pr_r4_p1_h'];
$pr_r5_p1_h = $_POST['pr_r5_p1_h'];
$pr_r6_p1_h = $_POST['pr_r6_p1_h'];

#fila 2 panel 1

$pr_r1_p2_h = $_POST['pr_r1_p2_h'];
$pr_r2_p2_h = $_POST['pr_r2_p2_h'];
$pr_r3_p2_h = $_POST['pr_r3_p2_h'];
$pr_r4_p2_h = $_POST['pr_r4_p2_h'];
$pr_r5_p2_h = $_POST['pr_r5_p2_h'];
$pr_r6_p2_h = $_POST['pr_r6_p2_h'];

#fila 3 panel 1

$pr_r1_p3_h = $_POST['pr_r1_p3_h'];
$pr_r2_p3_h = $_POST['pr_r2_p3_h'];
$pr_r3_p3_h = $_POST['pr_r3_p3_h'];
$pr_r4_p3_h = $_POST['pr_r4_p3_h'];
$pr_r5_p3_h = $_POST['pr_r5_p3_h'];
$pr_r6_p3_h = $_POST['pr_r6_p3_h'];

#fila 4 panel 1

$pr_r1_p4_h = $_POST['pr_r1_p4_h'];
$pr_r2_p4_h = $_POST['pr_r2_p4_h'];
$pr_r3_p4_h = $_POST['pr_r3_p4_h'];
$pr_r4_p4_h = $_POST['pr_r4_p4_h'];
$pr_r5_p4_h = $_POST['pr_r5_p4_h'];
$pr_r6_p4_h = $_POST['pr_r6_p4_h'];

#fila 5 panel 1

$pr_r1_p5_h = $_POST['pr_r1_p5_h'];
$pr_r2_p5_h = $_POST['pr_r2_p5_h'];
$pr_r3_p5_h = $_POST['pr_r3_p5_h'];
$pr_r4_p5_h = $_POST['pr_r4_p5_h'];
$pr_r5_p5_h = $_POST['pr_r5_p5_h'];
$pr_r6_p5_h = $_POST['pr_r6_p5_h'];

#fila 6 panel 1

$pr_r1_gi_h = $_POST['pr_r1_gi_h'];
$pr_r2_gi_h = $_POST['pr_r2_gi_h'];
$pr_r3_gi_h = $_POST['pr_r3_gi_h'];
$pr_r4_gi_h = $_POST['pr_r4_gi_h'];
$pr_r5_gi_h = $_POST['pr_r5_gi_h'];
$pr_r6_gi_h = $_POST['pr_r6_gi_h'];

#fila 7 panel 1

$pr_r1_gii_h = $_POST['pr_r1_gii_h'];
$pr_r2_gii_h = $_POST['pr_r2_gii_h'];
$pr_r3_gii_h = $_POST['pr_r3_gii_h'];
$pr_r4_gii_h = $_POST['pr_r4_gii_h'];
$pr_r5_gii_h = $_POST['pr_r5_gii_h'];
$pr_r6_gii_h = $_POST['pr_r6_gii_h'];

#---------------------------------
#fila 1 panel 2

$pr_r7_p1_h = $_POST['pr_r7_p1_h'];
$pr_r8_p1_h = $_POST['pr_r8_p1_h'];
$pr_r9_p1_h = $_POST['pr_r9_p1_h'];
$pr_r10_p1_h = $_POST['pr_r10_p1_h'];
$pr_r11_p1_h = $_POST['pr_r11_p1_h'];
$pr_r12_p1_h = $_POST['pr_r12_p1_h'];

#fila 2 panel 2

$pr_r7_p2_h = $_POST['pr_r7_p2_h'];
$pr_r8_p2_h = $_POST['pr_r8_p2_h'];
$pr_r9_p2_h = $_POST['pr_r9_p2_h'];
$pr_r10_p2_h = $_POST['pr_r10_p2_h'];
$pr_r11_p2_h = $_POST['pr_r11_p2_h'];
$pr_r12_p2_h = $_POST['pr_r12_p2_h'];

#fila 3 panel 2

$pr_r7_p3_h = $_POST['pr_r7_p3_h'];
$pr_r8_p3_h = $_POST['pr_r8_p3_h'];
$pr_r9_p3_h = $_POST['pr_r9_p3_h'];
$pr_r10_p3_h = $_POST['pr_r10_p3_h'];
$pr_r11_p3_h = $_POST['pr_r11_p3_h'];
$pr_r12_p3_h = $_POST['pr_r12_p3_h'];

#fila 4 panel 2

$pr_r7_p4_h = $_POST['pr_r7_p4_h'];
$pr_r8_p4_h = $_POST['pr_r8_p4_h'];
$pr_r9_p4_h = $_POST['pr_r9_p4_h'];
$pr_r10_p4_h = $_POST['pr_r10_p4_h'];
$pr_r11_p4_h = $_POST['pr_r11_p4_h'];
$pr_r12_p4_h = $_POST['pr_r12_p4_h'];

#fila 5 panel 2

$pr_r7_p5_h = $_POST['pr_r7_p5_h'];
$pr_r8_p5_h = $_POST['pr_r8_p5_h'];
$pr_r9_p5_h = $_POST['pr_r9_p5_h'];
$pr_r10_p5_h = $_POST['pr_r10_p5_h'];
$pr_r11_p5_h = $_POST['pr_r11_p5_h'];
$pr_r12_p5_h = $_POST['pr_r12_p5_h'];

#fila 6 panel 2

$pr_r7_gi_h = $_POST['pr_r7_gi_h'];
$pr_r8_gi_h = $_POST['pr_r8_gi_h'];
$pr_r9_gi_h = $_POST['pr_r9_gi_h'];
$pr_r10_gi_h = $_POST['pr_r10_gi_h'];
$pr_r11_gi_h = $_POST['pr_r11_gi_h'];
$pr_r12_gi_h = $_POST['pr_r12_gi_h'];

#fila 7 panel 2

$pr_r7_gii_h = $_POST['pr_r7_gii_h'];
$pr_r8_gii_h = $_POST['pr_r8_gii_h'];
$pr_r9_gii_h = $_POST['pr_r9_gii_h'];
$pr_r10_gii_h = $_POST['pr_r10_gii_h'];
$pr_r11_gii_h = $_POST['pr_r11_gii_h'];
$pr_r12_gii_h = $_POST['pr_r12_gii_h'];

mysql_query ("INSERT INTO total_referidos (id_sexo,id_periodo_escolar,id_mes,id_tipo_referido,p1,p2,p3,p4,p5,gi,gii) values ('2','$periodo_e','$mes','1','$pr_r1_p1_h','$pr_r1_p2_h','$pr_r1_p3_h','$pr_r1_p4_h','$pr_r1_p5_h','$pr_r1_gi_h','$pr_r1_gii_h'),
#Referido CDI 
	('2','$periodo_e','$mes','2','$pr_r2_p1_h','$pr_r2_p2_h','$pr_r2_p3_h','$pr_r2_p4_h','$pr_r2_p5_h','$pr_r2_gi_h','$pr_r2_gii_h'),
#Referido Seguro Social 
	('2','$periodo_e','$mes','3','$pr_r3_p1_h','$pr_r3_p2_h','$pr_r3_p3_h','$pr_r3_p4_h','$pr_r3_p5_h','$pr_r3_gi_h','$pr_r3_gii_h'),
#Referido Psicologia
	('2','$periodo_e','$mes','4','$pr_r4_p1_h','$pr_r4_p2_h','$pr_r4_p3_h','$pr_r4_p4_h','$pr_r4_p5_h','$pr_r4_gi_h','$pr_r4_gii_h'),
#Referido CAIPA
	('2','$periodo_e','$mes','5','$pr_r5_p1_h','$pr_r5_p2_h','$pr_r5_p3_h','$pr_r5_p4_h','$pr_r5_p5_h','$pr_r5_gi_h','$pr_r5_gii_h'),
#Referido integracion 
	('2','$periodo_e','$mes','6','$pr_r6_p1_h','$pr_r6_p2_h','$pr_r6_p3_h','$pr_r6_p4_h','$pr_r6_p5_h','$pr_r6_gi_h','$pr_r6_gii_h'),
#Referido A integral 
	('2','$periodo_e','$mes','7','$pr_r7_p1_h','$pr_r7_p2_h','$pr_r7_p3_h','$pr_r7_p4_h','$pr_r7_p5_h','$pr_r7_gi_h','$pr_r7_gii_h'),
#Referido cenda 
	('2','$periodo_e','$mes','8','$pr_r8_p1_h','$pr_r8_p2_h','$pr_r8_p3_h','$pr_r8_p4_h','$pr_r8_p5_h','$pr_r8_gi_h','$pr_r8_gii_h'),
#Referido Upe 
	('2','$periodo_e','$mes','9','$pr_r9_p1_h','$pr_r9_p2_h','$pr_r9_p3_h','$pr_r9_p4_h','$pr_r9_p5_h','$pr_r9_gi_h','$pr_r9_gii_h'),
#Referido Articulacion 
	('2','$periodo_e','$mes','10','$pr_r10_p1_h','$pr_r10_p2_h','$pr_r10_p3_h','$pr_r10_p4_h','$pr_r10_p5_h','$pr_r10_gi_h','$pr_r10_gii_h'),
#Referido Otros 
	('2','$periodo_e','$mes','11','$pr_r11_p1_h','$pr_r11_p2_h','$pr_r11_p3_h','$pr_r11_p4_h','$pr_r11_p5_h','$pr_r11_gi_h','$pr_r11_gii_h'),
#Referido Otros 
	('2','$periodo_e','$mes','12','$pr_12_p1_h','$pr_12_p2_h','$pr_12_p3_h','$pr_12_p4_h','$pr_12_p5_h','$pr_12_gi_h','$pr_12_gii_h')

")

or die (mysql_error());

#
#
#
#------ TIPO DE ATENCION
#
#
#
#----- VARONES
#fila 1 panel 1

$t_a1_p1_v = $_POST['t_a1_p1_v'];
$t_a2_p1_v = $_POST['t_a2_p1_v'];
$t_a3_p1_v = $_POST['t_a3_p1_v'];
$t_a4_p1_v = $_POST['t_a4_p1_v'];
$t_a5_p1_v = $_POST['t_a5_p1_v'];
$t_a6_p1_v = $_POST['t_a6_p1_v'];

#fila 2 panel 1

$t_a1_p2_v = $_POST['t_a1_p2_v'];
$t_a2_p2_v = $_POST['t_a2_p2_v'];
$t_a3_p2_v = $_POST['t_a3_p2_v'];
$t_a4_p2_v = $_POST['t_a4_p2_v'];
$t_a5_p2_v = $_POST['t_a5_p2_v'];
$t_a6_p2_v = $_POST['t_a6_p2_v'];

#fila 3 panel 1

$t_a1_p3_v = $_POST['t_a1_p3_v'];
$t_a2_p3_v = $_POST['t_a2_p3_v'];
$t_a3_p3_v = $_POST['t_a3_p3_v'];
$t_a4_p3_v = $_POST['t_a4_p3_v'];
$t_a5_p3_v = $_POST['t_a5_p3_v'];
$t_a6_p3_v = $_POST['t_a6_p3_v'];

#fila 4 panel 1

$t_a1_p4_v = $_POST['t_a1_p4_v'];
$t_a2_p4_v = $_POST['t_a2_p4_v'];
$t_a3_p4_v = $_POST['t_a3_p4_v'];
$t_a4_p4_v = $_POST['t_a4_p4_v'];
$t_a5_p4_v = $_POST['t_a5_p4_v'];
$t_a6_p4_v = $_POST['t_a6_p4_v'];

#fila 5 panel 1

$t_a1_p5_v = $_POST['t_a1_p5_v'];
$t_a2_p5_v = $_POST['t_a2_p5_v'];
$t_a3_p5_v = $_POST['t_a3_p5_v'];
$t_a4_p5_v = $_POST['t_a4_p5_v'];
$t_a5_p5_v = $_POST['t_a5_p5_v'];
$t_a6_p5_v = $_POST['t_a6_p5_v'];

#fila 6 panel 1

$t_a1_gi_v = $_POST['t_a1_gi_v'];
$t_a2_gi_v = $_POST['t_a2_gi_v'];
$t_a3_gi_v = $_POST['t_a3_gi_v'];
$t_a4_gi_v = $_POST['t_a4_gi_v'];
$t_a5_gi_v = $_POST['t_a5_gi_v'];
$t_a6_gi_v = $_POST['t_a6_gi_v'];

#fila 7 panel 1

$t_a1_gii_v = $_POST['t_a1_gii_v'];
$t_a2_gii_v = $_POST['t_a2_gii_v'];
$t_a3_gii_v = $_POST['t_a3_gii_v'];
$t_a4_gii_v = $_POST['t_a4_gii_v'];
$t_a5_gii_v = $_POST['t_a5_gii_v'];
$t_a6_gii_v = $_POST['t_a6_gii_v'];

#fila 1 panel 2

$t_a7_p1_v = $_POST['t_a7_p1_v'];
$t_a8_p1_v = $_POST['t_a8_p1_v'];
$t_a9_p1_v = $_POST['t_a9_p1_v'];
$t_a10_p1_v = $_POST['t_a10_p1_v'];
$t_a11_p1_v = $_POST['t_a11_p1_v'];
$t_a12_p1_v = $_POST['t_a12_p1_v'];

#fila 2 panel 2

$t_a7_p2_v = $_POST['t_a7_p2_v'];
$t_a8_p2_v = $_POST['t_a8_p2_v'];
$t_a9_p2_v = $_POST['t_a9_p2_v'];
$t_a10_p2_v = $_POST['t_a10_p2_v'];
$t_a11_p2_v = $_POST['t_a11_p2_v'];
$t_a12_p2_v = $_POST['t_a12_p2_v'];

#fila 3 panel 2

$t_a7_p3_v = $_POST['t_a7_p3_v'];
$t_a8_p3_v = $_POST['t_a8_p3_v'];
$t_a9_p3_v = $_POST['t_a9_p3_v'];
$t_a10_p3_v = $_POST['t_a10_p3_v'];
$t_a11_p3_v = $_POST['t_a11_p3_v'];
$t_a12_p3_v = $_POST['t_a12_p3_v'];

#fila 4 panel 2

$t_a7_p4_v = $_POST['t_a7_p4_v'];
$t_a8_p4_v = $_POST['t_a8_p4_v'];
$t_a9_p4_v = $_POST['t_a9_p4_v'];
$t_a10_p4_v = $_POST['t_a10_p4_v'];
$t_a11_p4_v = $_POST['t_a11_p4_v'];
$t_a12_p4_v = $_POST['t_a12_p4_v'];

#fila 5 panel 2

$t_a7_p5_v = $_POST['t_a7_p5_v'];
$t_a8_p5_v = $_POST['t_a8_p5_v'];
$t_a9_p5_v = $_POST['t_a9_p5_v'];
$t_a10_p5_v = $_POST['t_a10_p5_v'];
$t_a11_p5_v = $_POST['t_a11_p5_v'];
$t_a12_p5_v = $_POST['t_a12_p5_v'];

#fila 6 panel 2

$t_a7_gi_v = $_POST['t_a7_gi_v'];
$t_a8_gi_v = $_POST['t_a8_gi_v'];
$t_a9_gi_v = $_POST['t_a9_gi_v'];
$t_a10_gi_v = $_POST['t_a10_gi_v'];
$t_a11_gi_v = $_POST['t_a11_gi_v'];
$t_a12_gi_v = $_POST['t_a12_gi_v'];

#fila 7 panel 2

$t_a7_gii_v = $_POST['t_a7_gii_v'];
$t_a8_gii_v = $_POST['t_a8_gii_v'];
$t_a9_gii_v = $_POST['t_a9_gii_v'];
$t_a10_gii_v = $_POST['t_a10_gii_v'];
$t_a11_gii_v = $_POST['t_a11_gii_v'];
$t_a12_gii_v = $_POST['t_a12_gii_v'];

#fila 1 panel 3

$t_a13_p1_v = $_POST['t_a13_p1_v'];
$t_a14_p1_v = $_POST['t_a14_p1_v'];

#fila 2 panel 3

$t_a13_p2_v = $_POST['t_a13_p2_v'];
$t_a14_p2_v = $_POST['t_a14_p2_v'];

#fila 3 panel 3

$t_a13_p3_v = $_POST['t_a13_p3_v'];
$t_a14_p3_v = $_POST['t_a14_p3_v'];

#fila 4 panel 3

$t_a13_p4_v = $_POST['t_a13_p4_v'];
$t_a14_p4_v = $_POST['t_a14_p4_v'];

#fila 5 panel 3

$t_a13_p5_v = $_POST['t_a13_p5_v'];
$t_a14_p5_v = $_POST['t_a14_p5_v'];

#fila 6 panel 3

$t_a13_gi_v = $_POST['t_a13_gi_v'];
$t_a14_gi_v = $_POST['t_a14_gi_v'];

#fila 7 panel 3

$t_a13_gii_v = $_POST['t_a13_gii_v'];
$t_a14_gii_v = $_POST['t_a14_gii_v'];

mysql_query ("INSERT INTO total_atencion (id_sexo,id_periodo_escolar,id_mes,id_tipo_atencion,p1,p2,p3,p4,p5,gi,gii) values ('1','$periodo_e','$mes','1','$t_a1_p1_v','$t_a1_p2_v','$t_a1_p3_v','$t_a1_p4_v','$t_a1_p5_v','$t_a1_gi_v','$t_a1_gii_v'),
#Trauma 
	('1','$periodo_e','$mes','2','$t_a2_p1_v','$t_a2_p2_v','$t_a2_p3_v','$t_a2_p4_v','$t_a2_p5_v','$t_a2_gi_v','$t_a2_gii_v'),
#Otorrino 
	('1','$periodo_e','$mes','3','$t_a3_p1_v','$t_a3_p2_v','$t_a3_p3_v','$t_a3_p4_v','$t_a3_p5_v','$t_a3_gi_v','$t_a3_gii_v'),
#Pediatria 
	('1','$periodo_e','$mes','4','$t_a4_p1_v','$t_a4_p2_v','$t_a4_p3_v','$t_a4_p4_v','$t_a4_p5_v','$t_a4_gi_v','$t_a4_gii_v'),
#Neuro 
	('1','$periodo_e','$mes','5','$t_a5_p1_v','$t_a5_p2_v','$t_a5_p3_v','$t_a5_p4_v','$t_a5_p5_v','$t_a5_gi_v','$t_a5_gii_v'),
#Cardio
	('1','$periodo_e','$mes','6','$t_a6_p1_v','$t_a6_p2_v','$t_a6_p3_v','$t_a6_p4_v','$t_a6_p5_v','$t_a6_gi_v','$t_a6_gii_v'),
#Nefro
	('1','$periodo_e','$mes','7','$t_a7_p1_v','$t_a7_p2_v','$t_a7_p3_v','$t_a7_p4_v','$t_a7_p5_v','$t_a7_gi_v','$t_a7_gii_v'),
#Urolo
	('1','$periodo_e','$mes','8','$t_a8_p1_v','$t_a8_p2_v','$t_a8_p3_v','$t_a8_p4_v','$t_a8_p5_v','$t_a8_gi_v','$t_a8_gii_v'),
#Neumo
	('1','$periodo_e','$mes','9','$t_a9_p1_v','$t_a9_p2_v','$t_a9_p3_v','$t_a9_p4_v','$t_a9_p5_v','$t_a9_gi_v','$t_a9_gii_v'),
#Herma
	('1','$periodo_e','$mes','10','$t_a10_p1_v','$t_a10_p2_v','$t_a10_p3_v','$t_a10_p4_v','$t_a10_p5_v','$t_a10_gi_v','$t_a10_gii_v'),
#Onco
	('1','$periodo_e','$mes','11','$t_a11_p1_v','$t_a11_p2_v','$t_a11_p3_v','$t_a11_p4_v','$t_a11_p5_v','$t_a11_gi_v','$t_a11_gii_v'),
#Derma
	('1','$periodo_e','$mes','12','$t_a12_p1_v','$t_a12_p2_v','$t_a12_p3_v','$t_a12_p4_v','$t_a12_p5_v','$t_a12_gi_v','$t_a12_gii_v'),
#Gastro
	('1','$periodo_e','$mes','13','$t_a13_p1_v','$t_a13_p2_v','$t_a13_p3_v','$t_a13_p4_v','$t_a13_p5_v','$t_a13_gi_v','$t_a13_gii_v'),
#Infecto
	('1','$periodo_e','$mes','14','$t_a14_p1_v','$t_a14_p2_v','$t_a14_p3_v','$t_a14_p4_v','$t_a14_p5_v','$t_a14_gi_v','$t_a14_gii_v')

")

or die (mysql_error());


#----- HEMBRAS
#fila 1 panel 1

$t_a1_p1_h = $_POST['t_a1_p1_h'];
$t_a2_p1_h = $_POST['t_a2_p1_h'];
$t_a3_p1_h = $_POST['t_a3_p1_h'];
$t_a4_p1_h = $_POST['t_a4_p1_h'];
$t_a5_p1_h = $_POST['t_a5_p1_h'];
$t_a6_p1_h = $_POST['t_a6_p1_h'];

#fila 2 panel 1

$t_a1_p2_h = $_POST['t_a1_p2_h'];
$t_a2_p2_h = $_POST['t_a2_p2_h'];
$t_a3_p2_h = $_POST['t_a3_p2_h'];
$t_a4_p2_h = $_POST['t_a4_p2_h'];
$t_a5_p2_h = $_POST['t_a5_p2_h'];
$t_a6_p2_h = $_POST['t_a6_p2_h'];

#fila 3 panel 1

$t_a1_p3_h = $_POST['t_a1_p3_h'];
$t_a2_p3_h = $_POST['t_a2_p3_h'];
$t_a3_p3_h = $_POST['t_a3_p3_h'];
$t_a4_p3_h = $_POST['t_a4_p3_h'];
$t_a5_p3_h = $_POST['t_a5_p3_h'];
$t_a6_p3_h = $_POST['t_a6_p3_h'];

#fila 4 panel 1

$t_a1_p4_h = $_POST['t_a1_p4_h'];
$t_a2_p4_h = $_POST['t_a2_p4_h'];
$t_a3_p4_h = $_POST['t_a3_p4_h'];
$t_a4_p4_h = $_POST['t_a4_p4_h'];
$t_a5_p4_h = $_POST['t_a5_p4_h'];
$t_a6_p4_h = $_POST['t_a6_p4_h'];

#fila 5 panel 1

$t_a1_p5_h = $_POST['t_a1_p5_h'];
$t_a2_p5_h = $_POST['t_a2_p5_h'];
$t_a3_p5_h = $_POST['t_a3_p5_h'];
$t_a4_p5_h = $_POST['t_a4_p5_h'];
$t_a5_p5_h = $_POST['t_a5_p5_h'];
$t_a6_p5_h = $_POST['t_a6_p5_h'];

#fila 6 panel 1

$t_a1_gi_h = $_POST['t_a1_gi_h'];
$t_a2_gi_h = $_POST['t_a2_gi_h'];
$t_a3_gi_h = $_POST['t_a3_gi_h'];
$t_a4_gi_h = $_POST['t_a4_gi_h'];
$t_a5_gi_h = $_POST['t_a5_gi_h'];
$t_a6_gi_h = $_POST['t_a6_gi_h'];

#fila 7 panel 1

$t_a1_gii_h = $_POST['t_a1_gii_h'];
$t_a2_gii_h = $_POST['t_a2_gii_h'];
$t_a3_gii_h = $_POST['t_a3_gii_h'];
$t_a4_gii_h = $_POST['t_a4_gii_h'];
$t_a5_gii_h = $_POST['t_a5_gii_h'];
$t_a6_gii_h = $_POST['t_a6_gii_h'];

#fila 1 panel 2

$t_a7_p1_h = $_POST['t_a7_p1_h'];
$t_a8_p1_h = $_POST['t_a8_p1_h'];
$t_a9_p1_h = $_POST['t_a9_p1_h'];
$t_a10_p1_h = $_POST['t_a10_p1_h'];
$t_a11_p1_h = $_POST['t_a11_p1_h'];
$t_a12_p1_h = $_POST['t_a12_p1_h'];

#fila 2 panel 2

$t_a7_p2_h = $_POST['t_a7_p2_h'];
$t_a8_p2_h = $_POST['t_a8_p2_h'];
$t_a9_p2_h = $_POST['t_a9_p2_h'];
$t_a10_p2_h = $_POST['t_a10_p2_h'];
$t_a11_p2_h = $_POST['t_a11_p2_h'];
$t_a12_p2_h = $_POST['t_a12_p2_h'];

#fila 3 panel 2

$t_a7_p3_h = $_POST['t_a7_p3_h'];
$t_a8_p3_h = $_POST['t_a8_p3_h'];
$t_a9_p3_h = $_POST['t_a9_p3_h'];
$t_a10_p3_h = $_POST['t_a10_p3_h'];
$t_a11_p3_h = $_POST['t_a11_p3_h'];
$t_a12_p3_h = $_POST['t_a12_p3_h'];

#fila 4 panel 2

$t_a7_p4_h = $_POST['t_a7_p4_h'];
$t_a8_p4_h = $_POST['t_a8_p4_h'];
$t_a9_p4_h = $_POST['t_a9_p4_h'];
$t_a10_p4_h = $_POST['t_a10_p4_h'];
$t_a11_p4_h = $_POST['t_a11_p4_h'];
$t_a12_p4_h = $_POST['t_a12_p4_h'];

#fila 5 panel 2

$t_a7_p5_h = $_POST['t_a7_p5_h'];
$t_a8_p5_h = $_POST['t_a8_p5_h'];
$t_a9_p5_h = $_POST['t_a9_p5_h'];
$t_a10_p5_h = $_POST['t_a10_p5_h'];
$t_a11_p5_h = $_POST['t_a11_p5_h'];
$t_a12_p5_h = $_POST['t_a12_p5_h'];

#fila 6 panel 2

$t_a7_gi_h = $_POST['t_a7_gi_h'];
$t_a8_gi_h = $_POST['t_a8_gi_h'];
$t_a9_gi_h = $_POST['t_a9_gi_h'];
$t_a10_gi_h = $_POST['t_a10_gi_h'];
$t_a11_gi_h = $_POST['t_a11_gi_h'];
$t_a12_gi_h = $_POST['t_a12_gi_h'];

#fila 7 panel 2

$t_a7_gii_h = $_POST['t_a7_gii_h'];
$t_a8_gii_h = $_POST['t_a8_gii_h'];
$t_a9_gii_h = $_POST['t_a9_gii_h'];
$t_a10_gii_h = $_POST['t_a10_gii_h'];
$t_a11_gii_h = $_POST['t_a11_gii_h'];
$t_a12_gii_h = $_POST['t_a12_gii_h'];

#fila 1 panel 3

$t_a13_p1_h = $_POST['t_a13_p1_h'];
$t_a14_p1_h = $_POST['t_a14_p1_h'];

#fila 2 panel 3

$t_a13_p2_h = $_POST['t_a13_p2_h'];
$t_a14_p2_h = $_POST['t_a14_p2_h'];

#fila 3 panel 3

$t_a13_p3_h = $_POST['t_a13_p3_h'];
$t_a14_p3_h = $_POST['t_a14_p3_h'];

#fila 4 panel 3

$t_a13_p4_h = $_POST['t_a13_p4_h'];
$t_a14_p4_h = $_POST['t_a14_p4_h'];

#fila 5 panel 3

$t_a13_p5_h = $_POST['t_a13_p5_h'];
$t_a14_p5_h = $_POST['t_a14_p5_h'];

#fila 6 panel 3

$t_a13_gi_h = $_POST['t_a13_gi_h'];
$t_a14_gi_h = $_POST['t_a14_gi_h'];

#fila 7 panel 3

$t_a13_gii_h = $_POST['t_a13_gii_h'];
$t_a14_gii_h = $_POST['t_a14_gii_h'];

mysql_query ("INSERT INTO total_atencion (id_sexo,id_periodo_escolar,id_mes,id_tipo_atencion,p1,p2,p3,p4,p5,gi,gii) values ('2','$periodo_e','$mes','1','$t_a1_p1_h','$t_a1_p2_h','$t_a1_p3_h','$t_a1_p4_h','$t_a1_p5_h','$t_a1_gi_h','$t_a1_gii_h'),
#Trauma 
	('2','$periodo_e','$mes','2','$t_a2_p1_h','$t_a2_p2_h','$t_a2_p3_h','$t_a2_p4_h','$t_a2_p5_h','$t_a2_gi_h','$t_a2_gii_h'),
#Otorrino 
	('2','$periodo_e','$mes','3','$t_a3_p1_h','$t_a3_p2_h','$t_a3_p3_h','$t_a3_p4_h','$t_a3_p5_h','$t_a3_gi_h','$t_a3_gii_h'),
#Pediatria 
	('2','$periodo_e','$mes','4','$t_a4_p1_h','$t_a4_p2_h','$t_a4_p3_h','$t_a4_p4_h','$t_a4_p5_h','$t_a4_gi_h','$t_a4_gii_h'),
#Neuro 
	('2','$periodo_e','$mes','5','$t_a5_p1_h','$t_a5_p2_h','$t_a5_p3_h','$t_a5_p4_h','$t_a5_p5_h','$t_a5_gi_h','$t_a5_gii_h'),
#Cardio
	('2','$periodo_e','$mes','6','$t_a6_p1_h','$t_a6_p2_h','$t_a6_p3_h','$t_a6_p4_h','$t_a6_p5_h','$t_a6_gi_h','$t_a6_gii_h'),
#Nefro
	('2','$periodo_e','$mes','7','$t_a7_p1_h','$t_a7_p2_h','$t_a7_p3_h','$t_a7_p4_h','$t_a7_p5_h','$t_a7_gi_h','$t_a7_gii_h'),
#Urolo
	('2','$periodo_e','$mes','8','$t_a8_p1_h','$t_a8_p2_h','$t_a8_p3_h','$t_a8_p4_h','$t_a8_p5_h','$t_a8_gi_h','$t_a8_gii_h'),
#Neumo
	('2','$periodo_e','$mes','9','$t_a9_p1_h','$t_a9_p2_h','$t_a9_p3_h','$t_a9_p4_h','$t_a9_p5_h','$t_a9_gi_h','$t_a9_gii_h'),
#Herma
	('2','$periodo_e','$mes','10','$t_a10_p1_h','$t_a10_p2_h','$t_a10_p3_h','$t_a10_p4_h','$t_a10_p5_h','$t_a10_gi_h','$t_a10_gii_h'),
#Onco
	('2','$periodo_e','$mes','11','$t_a11_p1_h','$t_a11_p2_h','$t_a11_p3_h','$t_a11_p4_h','$t_a11_p5_h','$t_a11_gi_h','$t_a11_gii_h'),
#Derma
	('2','$periodo_e','$mes','12','$t_a12_p1_h','$t_a12_p2_h','$t_a12_p3_h','$t_a12_p4_h','$t_a12_p5_h','$t_a12_gi_h','$t_a12_gii_h'),
#Gastro
	('2','$periodo_e','$mes','13','$t_a13_p1_h','$t_a13_p2_h','$t_a13_p3_h','$t_a13_p4_h','$t_a13_p5_h','$t_a13_gi_h','$t_a13_gii_h'),
#Infecto
	('2','$periodo_e','$mes','14','$t_a14_p1_h','$t_a14_p2_h','$t_a14_p3_h','$t_a14_p4_h','$t_a14_p5_h','$t_a14_gi_h','$t_a14_gii_h')

")

or die (mysql_error());


#
#
#
#------ ASISTENCIA
#
#
#
#----- VARONES
#fila 1 panel 1
#----- VARONES
#semana 1 dia 1

$a_s1_d1_v = $_POST['a_s1_d1_v'];
$a_s1_d1_p1_v = $_POST['a_s1_d1_p1_v'];
$a_s1_d1_p2_v = $_POST['a_s1_d1_p2_v'];
$a_s1_d1_p3_v = $_POST['a_s1_d1_p3_v'];
$a_s1_d1_p4_v = $_POST['a_s1_d1_p4_v'];
$a_s1_d1_p5_v = $_POST['a_s1_d1_p5_v'];
$a_s1_d1_gi_v = $_POST['a_s1_d1_gi_v'];
$a_s1_d1_gii_v = $_POST['a_s1_d1_gii_v'];

#semana 1 dia 2

$a_s1_d2_v = $_POST['a_s1_d2_v'];
$a_s1_d2_p1_v = $_POST['a_s1_d2_p1_v'];
$a_s1_d2_p2_v = $_POST['a_s1_d2_p2_v'];
$a_s1_d2_p3_v = $_POST['a_s1_d2_p3_v'];
$a_s1_d2_p4_v = $_POST['a_s1_d2_p4_v'];
$a_s1_d2_p5_v = $_POST['a_s1_d2_p5_v'];
$a_s1_d2_gi_v = $_POST['a_s1_d2_gi_v'];
$a_s1_d2_gii_v = $_POST['a_s1_d2_gii_v'];

#semana 1 dia 3

$a_s1_d3_v = $_POST['a_s1_d3_v'];
$a_s1_d3_p1_v = $_POST['a_s1_d3_p1_v'];
$a_s1_d3_p2_v = $_POST['a_s1_d3_p2_v'];
$a_s1_d3_p3_v = $_POST['a_s1_d3_p3_v'];
$a_s1_d3_p4_v = $_POST['a_s1_d3_p4_v'];
$a_s1_d3_p5_v = $_POST['a_s1_d3_p5_v'];
$a_s1_d3_gi_v = $_POST['a_s1_d3_gi_v'];
$a_s1_d3_gii_v = $_POST['a_s1_d3_gii_v'];

#semana 1 dia 4

$a_s1_d4_v = $_POST['a_s1_d4_v'];
$a_s1_d4_p1_v = $_POST['a_s1_d4_p1_v'];
$a_s1_d4_p2_v = $_POST['a_s1_d4_p2_v'];
$a_s1_d4_p3_v = $_POST['a_s1_d4_p3_v'];
$a_s1_d4_p4_v = $_POST['a_s1_d4_p4_v'];
$a_s1_d4_p5_v = $_POST['a_s1_d4_p5_v'];
$a_s1_d4_gi_v = $_POST['a_s1_d4_gi_v'];
$a_s1_d4_gii_v = $_POST['a_s1_d4_gii_v'];

#semana 1 dia 5

$a_s1_d5_v = $_POST['a_s1_d5_v'];
$a_s1_d5_p1_v = $_POST['a_s1_d5_p1_v'];
$a_s1_d5_p2_v = $_POST['a_s1_d5_p2_v'];
$a_s1_d5_p3_v = $_POST['a_s1_d5_p3_v'];
$a_s1_d5_p4_v = $_POST['a_s1_d5_p4_v'];
$a_s1_d5_p5_v = $_POST['a_s1_d5_p5_v'];
$a_s1_d5_gi_v = $_POST['a_s1_d5_gi_v'];
$a_s1_d5_gii_v = $_POST['a_s1_d5_gii_v'];


#----- Hembras SEMANA 1


#semana 1 dia 1
$a_s1_d1_h = $_POST['a_s1_d1_h'];
$a_s1_d1_p1_h = $_POST['a_s1_d1_p1_h'];
$a_s1_d1_p2_h = $_POST['a_s1_d1_p2_h'];
$a_s1_d1_p3_h = $_POST['a_s1_d1_p3_h'];
$a_s1_d1_p4_h = $_POST['a_s1_d1_p4_h'];
$a_s1_d1_p5_h = $_POST['a_s1_d1_p5_h'];
$a_s1_d1_gi_h = $_POST['a_s1_d1_gi_h'];
$a_s1_d1_gii_h = $_POST['a_s1_d1_gii_h'];

#semana 1 dia 2

$a_s1_d2_h = $_POST['a_s1_d2_h'];
$a_s1_d2_p1_h = $_POST['a_s1_d2_p1_h'];
$a_s1_d2_p2_h = $_POST['a_s1_d2_p2_h'];
$a_s1_d2_p3_h = $_POST['a_s1_d2_p3_h'];
$a_s1_d2_p4_h = $_POST['a_s1_d2_p4_h'];
$a_s1_d2_p5_h = $_POST['a_s1_d2_p5_h'];
$a_s1_d2_gi_h = $_POST['a_s1_d2_gi_h'];
$a_s1_d2_gii_h = $_POST['a_s1_d2_gii_h'];

#semana 1 dia 3

$a_s1_d3_h = $_POST['a_s1_d3_h'];
$a_s1_d3_p1_h = $_POST['a_s1_d3_p1_h'];
$a_s1_d3_p2_h = $_POST['a_s1_d3_p2_h'];
$a_s1_d3_p3_h = $_POST['a_s1_d3_p3_h'];
$a_s1_d3_p4_h = $_POST['a_s1_d3_p4_h'];
$a_s1_d3_p5_h = $_POST['a_s1_d3_p5_h'];
$a_s1_d3_gi_h = $_POST['a_s1_d3_gi_h'];
$a_s1_d3_gii_h = $_POST['a_s1_d3_gii_h'];

#semana 1 dia 4

$a_s1_d4_h = $_POST['a_s1_d4_h'];
$a_s1_d4_p1_h = $_POST['a_s1_d4_p1_h'];
$a_s1_d4_p2_h = $_POST['a_s1_d4_p2_h'];
$a_s1_d4_p3_h = $_POST['a_s1_d4_p3_h'];
$a_s1_d4_p4_h = $_POST['a_s1_d4_p4_h'];
$a_s1_d4_p5_h = $_POST['a_s1_d4_p5_h'];
$a_s1_d4_gi_h = $_POST['a_s1_d4_gi_h'];
$a_s1_d4_gii_h = $_POST['a_s1_d4_gii_h'];

#semana 1 dia 5

$a_s1_d5_h = $_POST['a_s1_d5_h'];
$a_s1_d5_p1_h = $_POST['a_s1_d5_p1_h'];
$a_s1_d5_p2_h = $_POST['a_s1_d5_p2_h'];
$a_s1_d5_p3_h = $_POST['a_s1_d5_p3_h'];
$a_s1_d5_p4_h = $_POST['a_s1_d5_p4_h'];
$a_s1_d5_p5_h = $_POST['a_s1_d5_p5_h'];
$a_s1_d5_gi_h = $_POST['a_s1_d5_gi_h'];
$a_s1_d5_gii_h = $_POST['a_s1_d5_gii_h'];




# SEMANA 2

#----- VARONES
#semana 2 dia 1

$a_s2_d1_v = $_POST['a_s2_d1_v'];
$a_s2_d1_p1_v = $_POST['a_s2_d1_p1_v'];
$a_s2_d1_p2_v = $_POST['a_s2_d1_p2_v'];
$a_s2_d1_p3_v = $_POST['a_s2_d1_p3_v'];
$a_s2_d1_p4_v = $_POST['a_s2_d1_p4_v'];
$a_s2_d1_p5_v = $_POST['a_s2_d1_p5_v'];
$a_s2_d1_gi_v = $_POST['a_s2_d1_gi_v'];
$a_s2_d1_gii_v = $_POST['a_s2_d1_gii_v'];

#semana 2 dia 2

$a_s2_d2_v = $_POST['a_s2_d2_v'];
$a_s2_d2_p1_v = $_POST['a_s2_d2_p1_v'];
$a_s2_d2_p2_v = $_POST['a_s2_d2_p2_v'];
$a_s2_d2_p3_v = $_POST['a_s2_d2_p3_v'];
$a_s2_d2_p4_v = $_POST['a_s2_d2_p4_v'];
$a_s2_d2_p5_v = $_POST['a_s2_d2_p5_v'];
$a_s2_d2_gi_v = $_POST['a_s2_d2_gi_v'];
$a_s2_d2_gii_v = $_POST['a_s2_d2_gii_v'];

#semana 2 dia 3

$a_s2_d3_v = $_POST['a_s2_d3_v'];
$a_s2_d3_p1_v = $_POST['a_s2_d3_p1_v'];
$a_s2_d3_p2_v = $_POST['a_s2_d3_p2_v'];
$a_s2_d3_p3_v = $_POST['a_s2_d3_p3_v'];
$a_s2_d3_p4_v = $_POST['a_s2_d3_p4_v'];
$a_s2_d3_p5_v = $_POST['a_s2_d3_p5_v'];
$a_s2_d3_gi_v = $_POST['a_s2_d3_gi_v'];
$a_s2_d3_gii_v = $_POST['a_s2_d3_gii_v'];

#semana 2 dia 4

$a_s2_d4_v = $_POST['a_s2_d4_v'];
$a_s2_d4_p1_v = $_POST['a_s2_d4_p1_v'];
$a_s2_d4_p2_v = $_POST['a_s2_d4_p2_v'];
$a_s2_d4_p3_v = $_POST['a_s2_d4_p3_v'];
$a_s2_d4_p4_v = $_POST['a_s2_d4_p4_v'];
$a_s2_d4_p5_v = $_POST['a_s2_d4_p5_v'];
$a_s2_d4_gi_v = $_POST['a_s2_d4_gi_v'];
$a_s2_d4_gii_v = $_POST['a_s2_d4_gii_v'];

#semana 2 dia 5

$a_s2_d5_v = $_POST['a_s2_d5_v'];
$a_s2_d5_p1_v = $_POST['a_s2_d5_p1_v'];
$a_s2_d5_p2_v = $_POST['a_s2_d5_p2_v'];
$a_s2_d5_p3_v = $_POST['a_s2_d5_p3_v'];
$a_s2_d5_p4_v = $_POST['a_s2_d5_p4_v'];
$a_s2_d5_p5_v = $_POST['a_s2_d5_p5_v'];
$a_s2_d5_gi_v = $_POST['a_s2_d5_gi_v'];
$a_s2_d5_gii_v = $_POST['a_s2_d5_gii_v'];


#----- Hembras SEMANA 2


#semana 2 dia 1
$a_s2_d1_h = $_POST['a_s2_d1_h'];
$a_s2_d1_p1_h = $_POST['a_s2_d1_p1_h'];
$a_s2_d1_p2_h = $_POST['a_s2_d1_p2_h'];
$a_s2_d1_p3_h = $_POST['a_s2_d1_p3_h'];
$a_s2_d1_p4_h = $_POST['a_s2_d1_p4_h'];
$a_s2_d1_p5_h = $_POST['a_s2_d1_p5_h'];
$a_s2_d1_gi_h = $_POST['a_s2_d1_gi_h'];
$a_s2_d1_gii_h = $_POST['a_s2_d1_gii_h'];

#semana 2 dia 2

$a_s2_d2_h = $_POST['a_s2_d2_h'];
$a_s2_d2_p1_h = $_POST['a_s2_d2_p1_h'];
$a_s2_d2_p2_h = $_POST['a_s2_d2_p2_h'];
$a_s2_d2_p3_h = $_POST['a_s2_d2_p3_h'];
$a_s2_d2_p4_h = $_POST['a_s2_d2_p4_h'];
$a_s2_d2_p5_h = $_POST['a_s2_d2_p5_h'];
$a_s2_d2_gi_h = $_POST['a_s2_d2_gi_h'];
$a_s2_d2_gii_h = $_POST['a_s2_d2_gii_h'];

#semana 2 dia 3

$a_s2_d3_h = $_POST['a_s2_d3_h'];
$a_s2_d3_p1_h = $_POST['a_s2_d3_p1_h'];
$a_s2_d3_p2_h = $_POST['a_s2_d3_p2_h'];
$a_s2_d3_p3_h = $_POST['a_s2_d3_p3_h'];
$a_s2_d3_p4_h = $_POST['a_s2_d3_p4_h'];
$a_s2_d3_p5_h = $_POST['a_s2_d3_p5_h'];
$a_s2_d3_gi_h = $_POST['a_s2_d3_gi_h'];
$a_s2_d3_gii_h = $_POST['a_s2_d3_gii_h'];

#semana 2 dia 4

$a_s2_d4_h = $_POST['a_s2_d4_h'];
$a_s2_d4_p1_h = $_POST['a_s2_d4_p1_h'];
$a_s2_d4_p2_h = $_POST['a_s2_d4_p2_h'];
$a_s2_d4_p3_h = $_POST['a_s2_d4_p3_h'];
$a_s2_d4_p4_h = $_POST['a_s2_d4_p4_h'];
$a_s2_d4_p5_h = $_POST['a_s2_d4_p5_h'];
$a_s2_d4_gi_h = $_POST['a_s2_d4_gi_h'];
$a_s2_d4_gii_h = $_POST['a_s2_d4_gii_h'];

#semana 2 dia 5

$a_s2_d5_h = $_POST['a_s2_d5_h'];
$a_s2_d5_p1_h = $_POST['a_s2_d5_p1_h'];
$a_s2_d5_p2_h = $_POST['a_s2_d5_p2_h'];
$a_s2_d5_p3_h = $_POST['a_s2_d5_p3_h'];
$a_s2_d5_p4_h = $_POST['a_s2_d5_p4_h'];
$a_s2_d5_p5_h = $_POST['a_s2_d5_p5_h'];
$a_s2_d5_gi_h = $_POST['a_s2_d5_gi_h'];
$a_s2_d5_gii_h = $_POST['a_s2_d5_gii_h'];

# SEMANA 3

#----- VARONES
#Semana 3 dia 1

$a_s3_d1_v = $_POST['a_s3_d1_v'];
$a_s3_d1_p1_v = $_POST['a_s3_d1_p1_v'];
$a_s3_d1_p2_v = $_POST['a_s3_d1_p2_v'];
$a_s3_d1_p3_v = $_POST['a_s3_d1_p3_v'];
$a_s3_d1_p4_v = $_POST['a_s3_d1_p4_v'];
$a_s3_d1_p5_v = $_POST['a_s3_d1_p5_v'];
$a_s3_d1_gi_v = $_POST['a_s3_d1_gi_v'];
$a_s3_d1_gii_v = $_POST['a_s3_d1_gii_v'];

#Semana 3 dia 2

$a_s3_d2_v = $_POST['a_s3_d2_v'];
$a_s3_d2_p1_v = $_POST['a_s3_d2_p1_v'];
$a_s3_d2_p2_v = $_POST['a_s3_d2_p2_v'];
$a_s3_d2_p3_v = $_POST['a_s3_d2_p3_v'];
$a_s3_d2_p4_v = $_POST['a_s3_d2_p4_v'];
$a_s3_d2_p5_v = $_POST['a_s3_d2_p5_v'];
$a_s3_d2_gi_v = $_POST['a_s3_d2_gi_v'];
$a_s3_d2_gii_v = $_POST['a_s3_d2_gii_v'];

#Semana 3 dia 3

$a_s3_d3_v = $_POST['a_s3_d3_v'];
$a_s3_d3_p1_v = $_POST['a_s3_d3_p1_v'];
$a_s3_d3_p2_v = $_POST['a_s3_d3_p2_v'];
$a_s3_d3_p3_v = $_POST['a_s3_d3_p3_v'];
$a_s3_d3_p4_v = $_POST['a_s3_d3_p4_v'];
$a_s3_d3_p5_v = $_POST['a_s3_d3_p5_v'];
$a_s3_d3_gi_v = $_POST['a_s3_d3_gi_v'];
$a_s3_d3_gii_v = $_POST['a_s3_d3_gii_v'];

#Semana 3 dia 4

$a_s3_d4_v = $_POST['a_s3_d4_v'];
$a_s3_d4_p1_v = $_POST['a_s3_d4_p1_v'];
$a_s3_d4_p2_v = $_POST['a_s3_d4_p2_v'];
$a_s3_d4_p3_v = $_POST['a_s3_d4_p3_v'];
$a_s3_d4_p4_v = $_POST['a_s3_d4_p4_v'];
$a_s3_d4_p5_v = $_POST['a_s3_d4_p5_v'];
$a_s3_d4_gi_v = $_POST['a_s3_d4_gi_v'];
$a_s3_d4_gii_v = $_POST['a_s3_d4_gii_v'];

#Semana 3 dia 5

$a_s3_d5_v = $_POST['a_s3_d5_v'];
$a_s3_d5_p1_v = $_POST['a_s3_d5_p1_v'];
$a_s3_d5_p2_v = $_POST['a_s3_d5_p2_v'];
$a_s3_d5_p3_v = $_POST['a_s3_d5_p3_v'];
$a_s3_d5_p4_v = $_POST['a_s3_d5_p4_v'];
$a_s3_d5_p5_v = $_POST['a_s3_d5_p5_v'];
$a_s3_d5_gi_v = $_POST['a_s3_d5_gi_v'];
$a_s3_d5_gii_v = $_POST['a_s3_d5_gii_v'];


#----- Hembras Semana 3


#Semana 3 dia 1
$a_s3_d1_h = $_POST['a_s3_d1_h'];
$a_s3_d1_p1_h = $_POST['a_s3_d1_p1_h'];
$a_s3_d1_p2_h = $_POST['a_s3_d1_p2_h'];
$a_s3_d1_p3_h = $_POST['a_s3_d1_p3_h'];
$a_s3_d1_p4_h = $_POST['a_s3_d1_p4_h'];
$a_s3_d1_p5_h = $_POST['a_s3_d1_p5_h'];
$a_s3_d1_gi_h = $_POST['a_s3_d1_gi_h'];
$a_s3_d1_gii_h = $_POST['a_s3_d1_gii_h'];

#Semana 3 dia 2

$a_s3_d2_h = $_POST['a_s3_d2_h'];
$a_s3_d2_p1_h = $_POST['a_s3_d2_p1_h'];
$a_s3_d2_p2_h = $_POST['a_s3_d2_p2_h'];
$a_s3_d2_p3_h = $_POST['a_s3_d2_p3_h'];
$a_s3_d2_p4_h = $_POST['a_s3_d2_p4_h'];
$a_s3_d2_p5_h = $_POST['a_s3_d2_p5_h'];
$a_s3_d2_gi_h = $_POST['a_s3_d2_gi_h'];
$a_s3_d2_gii_h = $_POST['a_s3_d2_gii_h'];

#Semana 3 dia 3

$a_s3_d3_h = $_POST['a_s3_d3_h'];
$a_s3_d3_p1_h = $_POST['a_s3_d3_p1_h'];
$a_s3_d3_p2_h = $_POST['a_s3_d3_p2_h'];
$a_s3_d3_p3_h = $_POST['a_s3_d3_p3_h'];
$a_s3_d3_p4_h = $_POST['a_s3_d3_p4_h'];
$a_s3_d3_p5_h = $_POST['a_s3_d3_p5_h'];
$a_s3_d3_gi_h = $_POST['a_s3_d3_gi_h'];
$a_s3_d3_gii_h = $_POST['a_s3_d3_gii_h'];

#Semana 3 dia 4

$a_s3_d4_h = $_POST['a_s3_d4_h'];
$a_s3_d4_p1_h = $_POST['a_s3_d4_p1_h'];
$a_s3_d4_p2_h = $_POST['a_s3_d4_p2_h'];
$a_s3_d4_p3_h = $_POST['a_s3_d4_p3_h'];
$a_s3_d4_p4_h = $_POST['a_s3_d4_p4_h'];
$a_s3_d4_p5_h = $_POST['a_s3_d4_p5_h'];
$a_s3_d4_gi_h = $_POST['a_s3_d4_gi_h'];
$a_s3_d4_gii_h = $_POST['a_s3_d4_gii_h'];

#Semana 3 dia 5

$a_s3_d5_h = $_POST['a_s3_d5_h'];
$a_s3_d5_p1_h = $_POST['a_s3_d5_p1_h'];
$a_s3_d5_p2_h = $_POST['a_s3_d5_p2_h'];
$a_s3_d5_p3_h = $_POST['a_s3_d5_p3_h'];
$a_s3_d5_p4_h = $_POST['a_s3_d5_p4_h'];
$a_s3_d5_p5_h = $_POST['a_s3_d5_p5_h'];
$a_s3_d5_gi_h = $_POST['a_s3_d5_gi_h'];
$a_s3_d5_gii_h = $_POST['a_s3_d5_gii_h'];


#------------
# SEMANA 4

#----- VARONES
#Semana 4 dia 1

$a_s4_d1_v = $_POST['a_s4_d1_v'];
$a_s4_d1_p1_v = $_POST['a_s4_d1_p1_v'];
$a_s4_d1_p2_v = $_POST['a_s4_d1_p2_v'];
$a_s4_d1_p3_v = $_POST['a_s4_d1_p3_v'];
$a_s4_d1_p4_v = $_POST['a_s4_d1_p4_v'];
$a_s4_d1_p5_v = $_POST['a_s4_d1_p5_v'];
$a_s4_d1_gi_v = $_POST['a_s4_d1_gi_v'];
$a_s4_d1_gii_v = $_POST['a_s4_d1_gii_v'];

#Semana 4 dia 2

$a_s4_d2_v = $_POST['a_s4_d2_v'];
$a_s4_d2_p1_v = $_POST['a_s4_d2_p1_v'];
$a_s4_d2_p2_v = $_POST['a_s4_d2_p2_v'];
$a_s4_d2_p3_v = $_POST['a_s4_d2_p3_v'];
$a_s4_d2_p4_v = $_POST['a_s4_d2_p4_v'];
$a_s4_d2_p5_v = $_POST['a_s4_d2_p5_v'];
$a_s4_d2_gi_v = $_POST['a_s4_d2_gi_v'];
$a_s4_d2_gii_v = $_POST['a_s4_d2_gii_v'];

#Semana 4 dia 3

$a_s4_d3_v = $_POST['a_s4_d3_v'];
$a_s4_d3_p1_v = $_POST['a_s4_d3_p1_v'];
$a_s4_d3_p2_v = $_POST['a_s4_d3_p2_v'];
$a_s4_d3_p3_v = $_POST['a_s4_d3_p3_v'];
$a_s4_d3_p4_v = $_POST['a_s4_d3_p4_v'];
$a_s4_d3_p5_v = $_POST['a_s4_d3_p5_v'];
$a_s4_d3_gi_v = $_POST['a_s4_d3_gi_v'];
$a_s4_d3_gii_v = $_POST['a_s4_d3_gii_v'];

#Semana 4 dia 4

$a_s4_d4_v = $_POST['a_s4_d4_v'];
$a_s4_d4_p1_v = $_POST['a_s4_d4_p1_v'];
$a_s4_d4_p2_v = $_POST['a_s4_d4_p2_v'];
$a_s4_d4_p3_v = $_POST['a_s4_d4_p3_v'];
$a_s4_d4_p4_v = $_POST['a_s4_d4_p4_v'];
$a_s4_d4_p5_v = $_POST['a_s4_d4_p5_v'];
$a_s4_d4_gi_v = $_POST['a_s4_d4_gi_v'];
$a_s4_d4_gii_v = $_POST['a_s4_d4_gii_v'];

#Semana 4 dia 5

$a_s4_d5_v = $_POST['a_s4_d5_v'];
$a_s4_d5_p1_v = $_POST['a_s4_d5_p1_v'];
$a_s4_d5_p2_v = $_POST['a_s4_d5_p2_v'];
$a_s4_d5_p3_v = $_POST['a_s4_d5_p3_v'];
$a_s4_d5_p4_v = $_POST['a_s4_d5_p4_v'];
$a_s4_d5_p5_v = $_POST['a_s4_d5_p5_v'];
$a_s4_d5_gi_v = $_POST['a_s4_d5_gi_v'];
$a_s4_d5_gii_v = $_POST['a_s4_d5_gii_v'];


#----- Hembras Semana 4


#Semana 4 dia 1
$a_s4_d1_h = $_POST['a_s4_d1_h'];
$a_s4_d1_p1_h = $_POST['a_s4_d1_p1_h'];
$a_s4_d1_p2_h = $_POST['a_s4_d1_p2_h'];
$a_s4_d1_p3_h = $_POST['a_s4_d1_p3_h'];
$a_s4_d1_p4_h = $_POST['a_s4_d1_p4_h'];
$a_s4_d1_p5_h = $_POST['a_s4_d1_p5_h'];
$a_s4_d1_gi_h = $_POST['a_s4_d1_gi_h'];
$a_s4_d1_gii_h = $_POST['a_s4_d1_gii_h'];

#Semana 4 dia 2

$a_s4_d2_h = $_POST['a_s4_d2_h'];
$a_s4_d2_p1_h = $_POST['a_s4_d2_p1_h'];
$a_s4_d2_p2_h = $_POST['a_s4_d2_p2_h'];
$a_s4_d2_p3_h = $_POST['a_s4_d2_p3_h'];
$a_s4_d2_p4_h = $_POST['a_s4_d2_p4_h'];
$a_s4_d2_p5_h = $_POST['a_s4_d2_p5_h'];
$a_s4_d2_gi_h = $_POST['a_s4_d2_gi_h'];
$a_s4_d2_gii_h = $_POST['a_s4_d2_gii_h'];

#Semana 4 dia 3

$a_s4_d3_h = $_POST['a_s4_d3_h'];
$a_s4_d3_p1_h = $_POST['a_s4_d3_p1_h'];
$a_s4_d3_p2_h = $_POST['a_s4_d3_p2_h'];
$a_s4_d3_p3_h = $_POST['a_s4_d3_p3_h'];
$a_s4_d3_p4_h = $_POST['a_s4_d3_p4_h'];
$a_s4_d3_p5_h = $_POST['a_s4_d3_p5_h'];
$a_s4_d3_gi_h = $_POST['a_s4_d3_gi_h'];
$a_s4_d3_gii_h = $_POST['a_s4_d3_gii_h'];

#Semana 4 dia 4

$a_s4_d4_h = $_POST['a_s4_d4_h'];
$a_s4_d4_p1_h = $_POST['a_s4_d4_p1_h'];
$a_s4_d4_p2_h = $_POST['a_s4_d4_p2_h'];
$a_s4_d4_p3_h = $_POST['a_s4_d4_p3_h'];
$a_s4_d4_p4_h = $_POST['a_s4_d4_p4_h'];
$a_s4_d4_p5_h = $_POST['a_s4_d4_p5_h'];
$a_s4_d4_gi_h = $_POST['a_s4_d4_gi_h'];
$a_s4_d4_gii_h = $_POST['a_s4_d4_gii_h'];

#Semana 4 dia 5

$a_s4_d5_h = $_POST['a_s4_d5_h'];
$a_s4_d5_p1_h = $_POST['a_s4_d5_p1_h'];
$a_s4_d5_p2_h = $_POST['a_s4_d5_p2_h'];
$a_s4_d5_p3_h = $_POST['a_s4_d5_p3_h'];
$a_s4_d5_p4_h = $_POST['a_s4_d5_p4_h'];
$a_s4_d5_p5_h = $_POST['a_s4_d5_p5_h'];
$a_s4_d5_gi_h = $_POST['a_s4_d5_gi_h'];
$a_s4_d5_gii_h = $_POST['a_s4_d5_gii_h'];

mysql_query ("INSERT INTO total_atencion (id_sexo,id_periodo_escolar,id_mes,id_tipo_atencion,p1,p2,p3,p4,p5,gi,gii) values ('1','$periodo_e','$mes','$a_s1_d1_v','$a_s1_d1_p1_v','$a_s1_d1_p2_v','$a_s1_d1_p3_v','$a_s1_d1_p4_v','$a_s1_d1_p5_v','$a_s1_d1_gi_v','$a_s1_d1_gii_v'),
# Semana 1 dia 2 Varones 
	('1','$periodo_e','$mes','$a_s1_d2_v','$a_s1_d2_p1_v','$a_s1_d2_p2_v','$a_s1_d2_p3_v','$a_s1_d2_p4_v','$a_s1_d2_p5_v','$a_s1_d2_gi_v','$a_s1_d2_gii_v'),
# Semana 1 dia 3 Varones 
	('1','$periodo_e','$mes','$a_s1_d3_v','$a_s1_d3_p1_v','$a_s1_d3_p2_v','$a_s1_d3_p3_v','$a_s1_d3_p4_v','$a_s1_d3_p5_v','$a_s1_d3_gi_v','$a_s1_d3_gii_v'),
# Semana 1 dia 4 Varones 
	('1','$periodo_e','$mes','$a_s1_d4_v','$a_s1_d4_p1_v','$a_s1_d4_p2_v','$a_s1_d4_p3_v','$a_s1_d4_p4_v','$a_s1_d4_p5_v','$a_s1_d4_gi_v','$a_s1_d4_gii_v'),
# Semana 1 dia 5 Varones 
	('1','$periodo_e','$mes','$a_s1_d5_v','$a_s1_d5_p1_v','$a_s1_d5_p2_v','$a_s1_d5_p3_v','$a_s1_d5_p4_v','$a_s1_d5_p5_v','$a_s1_d5_gi_v','$a_s1_d5_gii_v'),

# Semana 2 dia 1 Varones 
	('1','$periodo_e','$mes','$a_s2_d1_v','$a_s2_d1_p1_v','$a_s2_d1_p2_v','$a_s2_d1_p3_v','$a_s2_d1_p4_v','$a_s2_d1_p5_v','$a_s2_d1_gi_v','$a_s2_d1_gii_v'),
# Semana 2 dia 2 Varones 
	('1','$periodo_e','$mes','$a_s2_d2_v','$a_s2_d2_p1_v','$a_s2_d2_p2_v','$a_s2_d2_p3_v','$a_s2_d2_p4_v','$a_s2_d2_p5_v','$a_s2_d2_gi_v','$a_s2_d2_gii_v'),
# Semana 2 dia 3 Varones 
	('1','$periodo_e','$mes','$a_s2_d3_v','$a_s2_d3_p1_v','$a_s2_d3_p2_v','$a_s2_d3_p3_v','$a_s2_d3_p4_v','$a_s2_d3_p5_v','$a_s2_d3_gi_v','$a_s2_d3_gii_v'),
# Semana 2 dia 4 Varones 
	('1','$periodo_e','$mes','$a_s2_d4_v','$a_s2_d4_p1_v','$a_s2_d4_p2_v','$a_s2_d4_p3_v','$a_s2_d4_p4_v','$a_s2_d4_p5_v','$a_s2_d4_gi_v','$a_s2_d4_gii_v'),
# Semana 2 dia 5 Varones 
	('1','$periodo_e','$mes','$a_s2_d5_v','$a_s2_d5_p1_v','$a_s2_d5_p2_v','$a_s2_d5_p3_v','$a_s2_d5_p4_v','$a_s2_d5_p5_v','$a_s2_d5_gi_v','$a_s2_d5_gii_v'),

# Semana 3 dia 1 Varones 
	('1','$periodo_e','$mes','$a_s3_d1_v','$a_s3_d1_p1_v','$a_s3_d1_p2_v','$a_s3_d1_p3_v','$a_s3_d1_p4_v','$a_s3_d1_p5_v','$a_s3_d1_gi_v','$a_s3_d1_gii_v'),
# Semana 3 dia 2 Varones 
	('1','$periodo_e','$mes','$a_s3_s2_v','$a_s3_s2_p1_v','$a_s3_s2_p2_v','$a_s3_s2_p3_v','$a_s3_s2_p4_v','$a_s3_s2_p5_v','$a_s3_s2_gi_v','$a_s3_s2_gii_v'),
# Semana 3 dia 3 Varones 
	('1','$periodo_e','$mes','$a_s3_d3_v','$a_s3_d3_p1_v','$a_s3_d3_p2_v','$a_s3_d3_p3_v','$a_s3_d3_p4_v','$a_s3_d3_p5_v','$a_s3_d3_gi_v','$a_s3_d3_gii_v'),
# Semana 3 dia 4 Varones 
	('1','$periodo_e','$mes','$a_s3_d4_v','$a_s3_d4_p1_v','$a_s3_d4_p2_v','$a_s3_d4_p3_v','$a_s3_d4_p4_v','$a_s3_d4_p5_v','$a_s3_d4_gi_v','$a_s3_d4_gii_v'),
# Semana 3 dia 5 Varones 
	('1','$periodo_e','$mes','$a_s3_d5_v','$a_s3_d5_p1_v','$a_s3_d5_p2_v','$a_s3_d5_p3_v','$a_s3_d5_p4_v','$a_s3_d5_p5_v','$a_s3_d5_gi_v','$a_s3_d5_gii_v'),

# Semana 4 dia 1 Varones 
	('1','$periodo_e','$mes','$a_s4_d1_v','$a_s4_d1_p1_v','$a_s4_d1_p2_v','$a_s4_d1_p3_v','$a_s4_d1_p4_v','$a_s4_d1_p5_v','$a_s4_d1_gi_v','$a_s4_d1_gii_v'),
# Semana 4 dia 2 Varones 
	('1','$periodo_e','$mes','$a_s4_d2_v','$a_s4_d2_p1_v','$a_s4_d2_p2_v','$a_s4_d2_p3_v','$a_s4_d2_p4_v','$a_s4_d2_p5_v','$a_s4_d2_gi_v','$a_s4_d2_gii_v'),
# Semana 4 dia 3 Varones 
	('1','$periodo_e','$mes','$a_s4_d3_v','$a_s4_d3_p1_v','$a_s4_d3_p2_v','$a_s4_d3_p3_v','$a_s4_d3_p4_v','$a_s4_d3_p5_v','$a_s4_d3_gi_v','$a_s4_d3_gii_v'),
# Semana 4 dia 4 Varones 
	('1','$periodo_e','$mes','$a_s4_d4_v','$a_s4_d4_p1_v','$a_s4_d4_p2_v','$a_s4_d4_p3_v','$a_s4_d4_p4_v','$a_s4_d4_p5_v','$a_s4_d4_gi_v','$a_s4_d4_gii_v'),
# Semana 4 dia 5 Varones 
	('1','$periodo_e','$mes','$a_s4_d5_v','$a_s4_d5_p1_v','$a_s4_d5_p2_v','$a_s4_d5_p3_v','$a_s4_d5_p4_v','$a_s4_d5_p5_v','$a_s4_d5_gi_v','$a_s4_d5_gii_v'),

#--------- HEMBRAS --------------

# Semana 1 dia 2 HEMBRAS 
	('1','$periodo_e','$mes','$a_s1_d2_h','$a_s1_d2_p1_h','$a_s1_d2_p2_h','$a_s1_d2_p3_h','$a_s1_d2_p4_h','$a_s1_d2_p5_h','$a_s1_d2_gi_h','$a_s1_d2_gii_h'),
# Semana 1 dia 3 HEMBRAS 
	('1','$periodo_e','$mes','$a_s1_d3_h','$a_s1_d3_p1_h','$a_s1_d3_p2_h','$a_s1_d3_p3_h','$a_s1_d3_p4_h','$a_s1_d3_p5_h','$a_s1_d3_gi_h','$a_s1_d3_gii_h'),
# Semana 1 dia 4 HEMBRAS 
	('1','$periodo_e','$mes','$a_s1_d4_h','$a_s1_d4_p1_h','$a_s1_d4_p2_h','$a_s1_d4_p3_h','$a_s1_d4_p4_h','$a_s1_d4_p5_h','$a_s1_d4_gi_h','$a_s1_d4_gii_h'),
# Semana 1 dia 5 HEMBRAS 
	('1','$periodo_e','$mes','$a_s1_d5_h','$a_s1_d5_p1_h','$a_s1_d5_p2_h','$a_s1_d5_p3_h','$a_s1_d5_p4_h','$a_s1_d5_p5_h','$a_s1_d5_gi_h','$a_s1_d5_gii_h'),

# Semana 2 dia 1 HEMBRAS 
	('1','$periodo_e','$mes','$a_s2_d1_h','$a_s2_d1_p1_h','$a_s2_d1_p2_h','$a_s2_d1_p3_h','$a_s2_d1_p4_h','$a_s2_d1_p5_h','$a_s2_d1_gi_h','$a_s2_d1_gii_h'),
# Semana 2 dia 2 HEMBRAS 
	('1','$periodo_e','$mes','$a_s2_d2_h','$a_s2_d2_p1_h','$a_s2_d2_p2_h','$a_s2_d2_p3_h','$a_s2_d2_p4_h','$a_s2_d2_p5_h','$a_s2_d2_gi_h','$a_s2_d2_gii_h'),
# Semana 2 dia 3 HEMBRAS 
	('1','$periodo_e','$mes','$a_s2_d3_h','$a_s2_d3_p1_h','$a_s2_d3_p2_h','$a_s2_d3_p3_h','$a_s2_d3_p4_h','$a_s2_d3_p5_h','$a_s2_d3_gi_h','$a_s2_d3_gii_h'),
# Semana 2 dia 4 HEMBRAS 
	('1','$periodo_e','$mes','$a_s2_d4_h','$a_s2_d4_p1_h','$a_s2_d4_p2_h','$a_s2_d4_p3_h','$a_s2_d4_p4_h','$a_s2_d4_p5_h','$a_s2_d4_gi_h','$a_s2_d4_gii_h'),
# Semana 2 dia 5 HEMBRAS 
	('1','$periodo_e','$mes','$a_s2_d5_h','$a_s2_d5_p1_h','$a_s2_d5_p2_h','$a_s2_d5_p3_h','$a_s2_d5_p4_h','$a_s2_d5_p5_h','$a_s2_d5_gi_h','$a_s2_d5_gii_h'),

# Semana 3 dia 1 HEMBRAS 
	('1','$periodo_e','$mes','$a_s3_d1_h','$a_s3_d1_p1_h','$a_s3_d1_p2_h','$a_s3_d1_p3_h','$a_s3_d1_p4_h','$a_s3_d1_p5_h','$a_s3_d1_gi_h','$a_s3_d1_gii_h'),
# Semana 3 dia 2 HEMBRAS 
	('1','$periodo_e','$mes','$a_s3_s2_h','$a_s3_s2_p1_h','$a_s3_s2_p2_h','$a_s3_s2_p3_h','$a_s3_s2_p4_h','$a_s3_s2_p5_h','$a_s3_s2_gi_h','$a_s3_s2_gii_h'),
# Semana 3 dia 3 HEMBRAS 
	('1','$periodo_e','$mes','$a_s3_d3_h','$a_s3_d3_p1_h','$a_s3_d3_p2_h','$a_s3_d3_p3_h','$a_s3_d3_p4_h','$a_s3_d3_p5_h','$a_s3_d3_gi_h','$a_s3_d3_gii_h'),
# Semana 3 dia 4 HEMBRAS 
	('1','$periodo_e','$mes','$a_s3_d4_h','$a_s3_d4_p1_h','$a_s3_d4_p2_h','$a_s3_d4_p3_h','$a_s3_d4_p4_h','$a_s3_d4_p5_h','$a_s3_d4_gi_h','$a_s3_d4_gii_h'),
# Semana 3 dia 5 HEMBRAS 
	('1','$periodo_e','$mes','$a_s3_d5_h','$a_s3_d5_p1_h','$a_s3_d5_p2_h','$a_s3_d5_p3_h','$a_s3_d5_p4_h','$a_s3_d5_p5_h','$a_s3_d5_gi_h','$a_s3_d5_gii_h'),

# Semana 4 dia 1 HEMBRAS 
	('1','$periodo_e','$mes','$a_s4_d1_h','$a_s4_d1_p1_h','$a_s4_d1_p2_h','$a_s4_d1_p3_h','$a_s4_d1_p4_h','$a_s4_d1_p5_h','$a_s4_d1_gi_h','$a_s4_d1_gii_h'),
# Semana 4 dia 2 HEMBRAS 
	('1','$periodo_e','$mes','$a_s4_d2_h','$a_s4_d2_p1_h','$a_s4_d2_p2_h','$a_s4_d2_p3_h','$a_s4_d2_p4_h','$a_s4_d2_p5_h','$a_s4_d2_gi_h','$a_s4_d2_gii_h'),
# Semana 4 dia 3 HEMBRAS 
	('1','$periodo_e','$mes','$a_s4_d3_h','$a_s4_d3_p1_h','$a_s4_d3_p2_h','$a_s4_d3_p3_h','$a_s4_d3_p4_h','$a_s4_d3_p5_h','$a_s4_d3_gi_h','$a_s4_d3_gii_h'),
# Semana 4 dia 4 HEMBRAS 
	('1','$periodo_e','$mes','$a_s4_d4_h','$a_s4_d4_p1_h','$a_s4_d4_p2_h','$a_s4_d4_p3_h','$a_s4_d4_p4_h','$a_s4_d4_p5_h','$a_s4_d4_gi_h','$a_s4_d4_gii_h'),
# Semana 4 dia 5 HEMBRAS 
	('1','$periodo_e','$mes','$a_s4_d5_h','$a_s4_d5_p1_h','$a_s4_d5_p2_h','$a_s4_d5_p3_h','$a_s4_d5_p4_h','$a_s4_d5_p5_h','$a_s4_d5_gi_h','$a_s4_d5_gii_h')
")

or die (mysql_error());
*/


#conexion la base de datos



#consulta para corroborar no dublicidad de ci_escolar

			#REGISTRO DOCENTE
			#mysql_query("INSERT INTO usuario (nombre_usuario, email, clave, pregunta_secreta, respuesta_secreta) VALUES ('$nombre','$email','$clave','$pregunta','$respuesta')") or die (mysql_error());
			
			
			
			mysql_close($link);
			#header('location: emergente/registro_alumno.php');
			echo "Se a Registrado la estadistica";
			##echo "<html><br><html>";
			##echo "<html><a href='../../index.html'>inicio</a><html>";









?>

