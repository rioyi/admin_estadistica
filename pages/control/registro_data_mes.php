 <?php

require ("../control/conexion_bd.php");



#seccion de mes tab1 
$periodo_e = $_POST['periodo_e'];
$mes = $_POST['mes'];

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

echo "$maternal_p1_v";
echo "$maternal_p2_v";
echo "$maternal_p3_v";
echo "$maternal_p4_v";
echo "$maternal_p5_v";
echo "$maternal_gi_v";
echo "$maternal_gii_v";


#NIVEL I
$nivel1_p1_v = $_POST['nivel1_p1_v'];
$nivel1_p2_v = $_POST['nivel1_p2_v'];
$nivel1_p3_v = $_POST['nivel1_p3_v'];
$nivel1_p4_v = $_POST['nivel1_p4_v'];
$nivel1_p5_v = $_POST['nivel1_p5_v'];
$nivel1_gi_v = $_POST['nivel1_gi_v'];
$nivel1_gii_v = $_POST['nivel1_gii_v'];

echo "$nivel1_p1_v";
echo "$nivel1_p2_v";
echo "$nivel1_p3_v";
echo "$nivel1_p4_v";
echo "$nivel1_p5_v";
echo "$nivel1_gi_v";
echo "$nivel1_gii_v";

#NIVEL II
$nivel2_p1_v = $_POST['nivel2_p1_v'];
$nivel2_p2_v = $_POST['nivel2_p2_v'];
$nivel2_p3_v = $_POST['nivel2_p3_v'];
$nivel2_p4_v = $_POST['nivel2_p4_v'];
$nivel2_p5_v = $_POST['nivel2_p5_v'];
$nivel2_gi_v = $_POST['nivel2_gi_v'];
$nivel2_gii_v = $_POST['nivel2_gii_v'];

echo "$nivel2_p1_v";
echo "$nivel2_p2_v";
echo "$nivel2_p3_v";
echo "$nivel2_p4_v";

#NIVEL III
$nivel3_p1_v = $_POST['nivel3_p1_v'];
$nivel3_p2_v = $_POST['nivel3_p2_v'];
$nivel3_p3_v = $_POST['nivel3_p3_v'];
$nivel3_p4_v = $_POST['nivel3_p4_v'];
$nivel3_p5_v = $_POST['nivel3_p5_v'];
$nivel3_gi_v = $_POST['nivel3_gi_v'];
$nivel3_gii_v = $_POST['nivel3_gii_v'];

echo "$nivel3_p1_v";
echo "$nivel3_p2_v";
echo "$nivel3_p3_v";
echo "$nivel3_p4_v";

#1 GRADO
$g1_p1_v = $_POST['g1_p1_v'];
$g1_p2_v = $_POST['g1_p2_v'];
$g1_p3_v = $_POST['g1_p3_v'];
$g1_p4_v = $_POST['g1_p4_v'];
$g1_p5_v = $_POST['g1_p5_v'];
$g1_gi_v = $_POST['g1_gi_v'];
$g1_gii_v = $_POST['g1_gii_v'];

echo "$g1_p1_v";
echo "$g1_p2_v";
echo "$g1_p3_v";
echo "$g1_p4_v";

#2 GRADO
$g2_p1_v = $_POST['g2_p1_v'];
$g2_p2_v = $_POST['g2_p2_v'];
$g2_p3_v = $_POST['g2_p3_v'];
$g2_p4_v = $_POST['g2_p4_v'];
$g2_p5_v = $_POST['g2_p5_v'];
$g2_gi_v = $_POST['g2_gi_v'];
$g2_gii_v = $_POST['g2_gii_v'];

echo "$g2_p1_v";
echo "$g2_p2_v";
echo "$g2_p3_v";
echo "$g2_p4_v";

#3 GRADO
$g3_p1_v = $_POST['g3_p1_v'];
$g3_p2_v = $_POST['g3_p2_v'];
$g3_p3_v = $_POST['g3_p3_v'];
$g3_p4_v = $_POST['g3_p4_v'];
$g3_p5_v = $_POST['g3_p5_v'];
$g3_gi_v = $_POST['g3_gi_v'];
$g3_gii_v = $_POST['g3_gii_v'];

echo "$g3_p1_v";
echo "$g3_p2_v";
echo "$g3_p3_v";
echo "$g3_p4_v";

#4 GRADO
$g4_p1_v = $_POST['g4_p1_v'];
$g4_p2_v = $_POST['g4_p2_v'];
$g4_p3_v = $_POST['g4_p3_v'];
$g4_p4_v = $_POST['g4_p4_v'];
$g4_p5_v = $_POST['g4_p5_v'];
$g4_gi_v = $_POST['g4_gi_v'];
$g4_gii_v = $_POST['g4_gii_v'];

echo "$g4_p1_v";
echo "$g4_p2_v";
echo "$g4_p3_v";
echo "$g4_p4_v";

#5 GRADO
$g5_p1_v = $_POST['g5_p1_v'];
$g5_p2_v = $_POST['g5_p2_v'];
$g5_p3_v = $_POST['g5_p3_v'];
$g5_p4_v = $_POST['g5_p4_v'];
$g5_p5_v = $_POST['g5_p5_v'];
$g5_gi_v = $_POST['g5_gi_v'];
$g5_gii_v = $_POST['g5_gii_v'];

echo "$g5_p1_v";
echo "$g5_p2_v";
echo "$g5_p3_v";
echo "$g5_p4_v";

#6 GRADO
$g6_p1_v = $_POST['g6_p1_v'];
$g6_p2_v = $_POST['g6_p2_v'];
$g6_p3_v = $_POST['g6_p3_v'];
$g6_p4_v = $_POST['g6_p4_v'];
$g6_p5_v = $_POST['g6_p5_v'];
$g6_gi_v = $_POST['g6_gi_v'];
$g6_gii_v = $_POST['g6_gii_v'];

echo "$g6_p1_v";
echo "$g6_p2_v";
echo "$g6_p3_v";
echo "$g6_p4_v";

#7 GRADO
$g7_p1_v = $_POST['g7_p1_v'];
$g7_p2_v = $_POST['g7_p2_v'];
$g7_p3_v = $_POST['g7_p3_v'];
$g7_p4_v = $_POST['g7_p4_v'];
$g7_p5_v = $_POST['g7_p5_v'];
$g7_gi_v = $_POST['g7_gi_v'];
$g7_gii_v = $_POST['g7_gii_v'];

echo "$g7_p1_v";
echo "$g7_p2_v";
echo "$g7_p3_v";
echo "$g7_p4_v";

#8 GRADO
$g8_p1_v = $_POST['g8_p1_v'];
$g8_p2_v = $_POST['g8_p2_v'];
$g8_p3_v = $_POST['g8_p3_v'];
$g8_p4_v = $_POST['g8_p4_v'];
$g8_p5_v = $_POST['g8_p5_v'];
$g8_gi_v = $_POST['g8_gi_v'];
$g8_gii_v = $_POST['g8_gii_v'];

echo "$g8_p1_v";
echo "$g8_p2_v";
echo "$g8_p3_v";
echo "$g8_p4_v";

#9 GRADO
$g9_p1_v = $_POST['g9_p1_v'];
$g9_p2_v = $_POST['g9_p2_v'];
$g9_p3_v = $_POST['g9_p3_v'];
$g9_p4_v = $_POST['g9_p4_v'];
$g9_p5_v = $_POST['g9_p5_v'];
$g9_gi_v = $_POST['g9_gi_v'];
$g9_gii_v = $_POST['g9_gii_v'];

echo "$g9_p1_v";
echo "$g9_p2_v";
echo "$g9_p3_v";
echo "$g9_p4_v";

#10 4to Año
$g10_p1_v = $_POST['g10_p1_v'];
$g10_p2_v = $_POST['g10_p2_v'];
$g10_p3_v = $_POST['g10_p3_v'];
$g10_p4_v = $_POST['g10_p4_v'];
$g10_p5_v = $_POST['g10_p5_v'];
$g10_gi_v = $_POST['g10_gi_v'];
$g10_gii_v = $_POST['g10_gii_v'];

echo "$g10_p1_v";
echo "$g10_p2_v";
echo "$g10_p3_v";
echo "$g10_p4_v";

#11 5to Año
$g11_p1_v = $_POST['g11_p1_v'];
$g11_p2_v = $_POST['g11_p2_v'];
$g11_p3_v = $_POST['g11_p3_v'];
$g11_p4_v = $_POST['g11_p4_v'];
$g11_p5_v = $_POST['g11_p5_v'];
$g11_gi_v = $_POST['g11_gi_v'];
$g11_gii_v = $_POST['g11_gii_v'];

echo "$g11_p1_v";
echo "$g11_p2_v";
echo "$g11_p3_v";
echo "$g11_p4_v";

#12 6to Año
$g12_p1_v = $_POST['g12_p1_v'];
$g12_p2_v = $_POST['g12_p2_v'];
$g12_p3_v = $_POST['g12_p3_v'];
$g12_p4_v = $_POST['g12_p4_v'];
$g12_p5_v = $_POST['g12_p5_v'];
$g12_gi_v = $_POST['g12_gi_v'];
$g12_gii_v = $_POST['g12_gii_v'];

echo "$g12_p1_v";
echo "$g12_p2_v";
echo "$g12_p3_v";
echo "$g12_p4_v";

#13 S/E
$g13_p1_v = $_POST['g13_p1_v'];
$g13_p2_v = $_POST['g13_p2_v'];
$g13_p3_v = $_POST['g13_p3_v'];
$g13_p4_v = $_POST['g13_p4_v'];
$g13_p5_v = $_POST['g13_p5_v'];
$g13_gi_v = $_POST['g13_gi_v'];
$g13_gii_v = $_POST['g13_gii_v'];

echo "$g12_p1_v";
echo "$g12_p2_v";
echo "$g12_p3_v";
echo "$g12_p4_v";

#14 E/E
$g14_p1_v = $_POST['g14_p1_v'];
$g14_p2_v = $_POST['g14_p2_v'];
$g14_p3_v = $_POST['g14_p3_v'];
$g14_p4_v = $_POST['g14_p4_v'];
$g14_p5_v = $_POST['g14_p5_v'];
$g14_gi_v = $_POST['g14_gi_v'];
$g14_gii_v = $_POST['g14_gii_v'];

echo "$g12_p1_v";
echo "$g12_p2_v";
echo "$g12_p3_v";
echo "$g12_p4_v";        

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

echo "$g1_p1_v";
echo "$g1_p2_v";
echo "$g1_p3_v";
echo "$g1_p4_v";

#2 GRADO
$g2_p1_h = $_POST['g2_p1_h'];
$g2_p2_h = $_POST['g2_p2_h'];
$g2_p3_h = $_POST['g2_p3_h'];
$g2_p4_h = $_POST['g2_p4_h'];
$g2_p5_h = $_POST['g2_p5_h'];
$g2_gi_h = $_POST['g2_gi_h'];
$g2_gii_h = $_POST['g2_gii_h'];

echo "$g2_p1_v";
echo "$g2_p2_v";
echo "$g2_p3_v";
echo "$g2_p4_v";

#3 GRADO
$g3_p1_h = $_POST['g3_p1_h'];
$g3_p2_h = $_POST['g3_p2_h'];
$g3_p3_h = $_POST['g3_p3_h'];
$g3_p4_h = $_POST['g3_p4_h'];
$g3_p5_h = $_POST['g3_p5_h'];
$g3_gi_h = $_POST['g3_gi_h'];
$g3_gii_h = $_POST['g3_gii_h'];

echo "$g3_p1_v";
echo "$g3_p2_v";
echo "$g3_p3_v";
echo "$g3_p4_v";

#4 GRADO
$g4_p1_h = $_POST['g4_p1_h'];
$g4_p2_h = $_POST['g4_p2_h'];
$g4_p3_h = $_POST['g4_p3_h'];
$g4_p4_h = $_POST['g4_p4_h'];
$g4_p5_h = $_POST['g4_p5_h'];
$g4_gi_h = $_POST['g4_gi_h'];
$g4_gii_h = $_POST['g4_gii_h'];

echo "$g4_p1_h";
echo "$g4_p2_h";
echo "$g4_p3_h";
echo "$g4_p4_h";

#5 GRADO
$g5_p1_h = $_POST['g5_p1_h'];
$g5_p2_h = $_POST['g5_p2_h'];
$g5_p3_h = $_POST['g5_p3_h'];
$g5_p4_h = $_POST['g5_p4_h'];
$g5_p5_h = $_POST['g5_p5_h'];
$g5_gi_h = $_POST['g5_gi_h'];
$g5_gii_h = $_POST['g5_gii_h'];

echo "$g5_p1_h";
echo "$g5_p2_h";
echo "$g5_p3_h";
echo "$g5_p4_h";

#6 GRADO
$g6_p1_h = $_POST['g6_p1_h'];
$g6_p2_h = $_POST['g6_p2_h'];
$g6_p3_h = $_POST['g6_p3_h'];
$g6_p4_h = $_POST['g6_p4_h'];
$g6_p5_h = $_POST['g6_p5_h'];
$g6_gi_h = $_POST['g6_gi_h'];
$g6_gii_h = $_POST['g6_gii_h'];

echo "$g6_p1_h";
echo "$g6_p2_h";
echo "$g6_p3_h";
echo "$g6_p4_h";

#7 GRADO
$g7_p1_h = $_POST['g7_p1_h'];
$g7_p2_h = $_POST['g7_p2_h'];
$g7_p3_h = $_POST['g7_p3_h'];
$g7_p4_h = $_POST['g7_p4_h'];
$g7_p5_h = $_POST['g7_p5_h'];
$g7_gi_h = $_POST['g7_gi_h'];
$g7_gii_h = $_POST['g7_gii_h'];

echo "$g7_p1_h";
echo "$g7_p2_h";
echo "$g7_p3_h";
echo "$g7_p4_h";

#8 GRADO
$g8_p1_h = $_POST['g8_p1_h'];
$g8_p2_h = $_POST['g8_p2_h'];
$g8_p3_h = $_POST['g8_p3_h'];
$g8_p4_h = $_POST['g8_p4_h'];
$g8_p5_h = $_POST['g8_p5_h'];
$g8_gi_h = $_POST['g8_gi_h'];
$g8_gii_h = $_POST['g8_gii_h'];

echo "$g8_p1_h";
echo "$g8_p2_h";
echo "$g8_p3_h";
echo "$g8_p4_h";

#9 GRADO
$g9_p1_h = $_POST['g9_p1_h'];
$g9_p2_h = $_POST['g9_p2_h'];
$g9_p3_h = $_POST['g9_p3_h'];
$g9_p4_h = $_POST['g9_p4_h'];
$g9_p5_h = $_POST['g9_p5_h'];
$g9_gi_h = $_POST['g9_gi_h'];
$g9_gii_h = $_POST['g9_gii_h'];

echo "$g9_p1_h";
echo "$g9_p2_h";
echo "$g9_p3_h";
echo "$g9_p4_h";

#10 4to Año
$g10_p1_h = $_POST['g10_p1_h'];
$g10_p2_h = $_POST['g10_p2_h'];
$g10_p3_h = $_POST['g10_p3_h'];
$g10_p4_h = $_POST['g10_p4_h'];
$g10_p5_h = $_POST['g10_p5_h'];
$g10_gi_h = $_POST['g10_gi_h'];
$g10_gii_h = $_POST['g10_gii_h'];

echo "$g10_p1_h";
echo "$g10_p2_h";
echo "$g10_p3_h";
echo "$g10_p4_h";

#11 5to Año
$g11_p1_h = $_POST['g11_p1_h'];
$g11_p2_h = $_POST['g11_p2_h'];
$g11_p3_h = $_POST['g11_p3_h'];
$g11_p4_h = $_POST['g11_p4_h'];
$g11_p5_h = $_POST['g11_p5_h'];
$g11_gi_h = $_POST['g11_gi_h'];
$g11_gii_h = $_POST['g11_gii_h'];

echo "$g11_p1_h";
echo "$g11_p2_h";
echo "$g11_p3_h";
echo "$g11_p4_h";

#12 6to Año
$g12_p1_h = $_POST['g12_p1_h'];
$g12_p2_h = $_POST['g12_p2_h'];
$g12_p3_h = $_POST['g12_p3_h'];
$g12_p4_h = $_POST['g12_p4_h'];
$g12_p5_h = $_POST['g12_p5_h'];
$g12_gi_h = $_POST['g12_gi_h'];
$g12_gii_h = $_POST['g12_gii_h'];

echo "$g12_p1_h";
echo "$g12_p2_h";
echo "$g12_p3_h";
echo "$g12_p4_h";

#13 S/E
$g13_p1_h = $_POST['g13_p1_h'];
$g13_p2_h = $_POST['g13_p2_h'];
$g13_p3_h = $_POST['g13_p3_h'];
$g13_p4_h = $_POST['g13_p4_h'];
$g13_p5_h = $_POST['g13_p5_h'];
$g13_gi_h = $_POST['g13_gi_h'];
$g13_gii_h = $_POST['g13_gii_h'];

echo "$g12_p1_h";
echo "$g12_p2_h";
echo "$g12_p3_h";
echo "$g12_p4_h";

#14 E/E
$g14_p1_h = $_POST['g14_p1_h'];
$g14_p2_h = $_POST['g14_p2_h'];
$g14_p3_h = $_POST['g14_p3_h'];
$g14_p4_h = $_POST['g14_p4_h'];
$g14_p5_h = $_POST['g14_p5_h'];
$g14_gi_h = $_POST['g14_gi_h'];
$g14_gii_h = $_POST['g14_gii_h'];

echo "$g12_p1_h";
echo "$g12_p2_h";
echo "$g12_p3_h";
echo "$g12_p4_h";    



#Seccion de POBLACION ATENDIDA

#EN AULA VARONES

$p_a_a_p1_v = $_POST['p_a_a_p1_v'];
$p_a_a_p2_v = $_POST['p_a_a_p2_v'];
$p_a_a_p3_v = $_POST['p_a_a_p3_v'];
$p_a_a_p4_v = $_POST['p_a_a_p4_v'];
$p_a_a_p5_v = $_POST['p_a_a_p5_v'];
$p_a_a_gi_v = $_POST['p_a_a_gi_v'];
$p_a_a_gii_v = $_POST['p_a_a_gii_v'];


#EN HABITACION VARONES

$p_a_h_p1_v = $_POST['p_a_h_p1_v'];
$p_a_h_p2_v = $_POST['p_a_h_p2_v'];
$p_a_h_p3_v = $_POST['p_a_h_p3_v'];
$p_a_h_p4_v = $_POST['p_a_h_p4_v'];
$p_a_h_p5_v = $_POST['p_a_h_p5_v'];
$p_a_h_gi_v = $_POST['p_a_h_gi_v'];
$p_a_h_gii_v = $_POST['p_a_h_gii_v'];


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
$v_e11_p2_v = $_POST['v_e11_p2_v'];
$v_e1_p2_v = $_POST['v_e1_p2_v'];
$v_e2_p2_v = $_POST['v_e2_p2_v'];
$v_e3_p2_v = $_POST['v_e3_p2_v'];
$v_e4_p2_v = $_POST['v_e4_p2_v'];
$v_e5_p2_v = $_POST['v_e5_p2_v'];

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
$v_e6_p1_v = $_POST['v_e6_p1_v'];
$v_e7_p1_v = $_POST['v_e7_p1_v'];
$v_e8_p1_v = $_POST['v_e8_p1_v'];
$v_e9_p1_v = $_POST['v_e9_p1_v'];
$v_e10_p1_v = $_POST['v_e10_p1_v'];
$v_e111_p1_v = $_POST['v_e111_p1_v'];

#fila 2 panel 3
$v_e6_p2_v = $_POST['v_e6_p2_v'];
$v_e7_p2_v = $_POST['v_e7_p2_v'];
$v_e8_p2_v = $_POST['v_e8_p2_v'];
$v_e9_p2_v = $_POST['v_e9_p2_v'];
$v_e10_p2_v = $_POST['v_e10_p2_v'];
$v_e111_p2_v = $_POST['v_e111_p2_v'];

#fila 3 panel 3
$v_e6_p3_v = $_POST['v_e6_p3_v'];
$v_e7_p3_v = $_POST['v_e7_p3_v'];
$v_e8_p3_v = $_POST['v_e8_p3_v'];
$v_e9_p3_v = $_POST['v_e9_p3_v'];
$v_e10_p3_v = $_POST['v_e10_p3_v'];
$v_e111_p3_v = $_POST['v_e111_p3_v'];

#fila 4 panel 3
$v_e6_p4_v = $_POST['v_e6_p4_v'];
$v_e7_p4_v = $_POST['v_e7_p4_v'];
$v_e8_p4_v = $_POST['v_e8_p4_v'];
$v_e9_p4_v = $_POST['v_e9_p4_v'];
$v_e10_p4_v = $_POST['v_e10_p4_v'];
$v_e111_p4_v = $_POST['v_e111_p4_v'];

#fila 5 panel 3
$v_e6_p5_v = $_POST['v_e6_p5_v'];
$v_e7_p5_v = $_POST['v_e7_p5_v'];
$v_e8_p5_v = $_POST['v_e8_p5_v'];
$v_e9_p5_v = $_POST['v_e9_p5_v'];
$v_e10_p5_v = $_POST['v_e10_p5_v'];
$v_e111_p5_v = $_POST['v_e111_p5_v'];

#fila 6 panel 3
$v_e6_gi_v = $_POST['v_e6_gi_v'];
$v_e7_gi_v = $_POST['v_e7_gi_v'];
$v_e8_gi_v = $_POST['v_e8_gi_v'];
$v_e9_gi_v = $_POST['v_e9_gi_v'];
$v_e10_gi_v = $_POST['v_e10_gi_v'];
$v_e111_gi_v = $_POST['v_e111_gi_v'];

#fila 7 panel 3
$v_e6_gii_v = $_POST['v_e6_gii_v'];
$v_e7_gii_v = $_POST['v_e7_gii_v'];
$v_e8_gii_v = $_POST['v_e8_gii_v'];
$v_e9_gii_v = $_POST['v_e9_gii_v'];
$v_e10_gii_v = $_POST['v_e10_gii_v'];
$v_e111_gii_v = $_POST['v_e111_gii_v'];




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

