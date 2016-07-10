<?php

#periodo escolar
$inicio  = $_POST['inicio'];
$fin  = $_POST['fin'];




#0
$edad_cero_v = $_POST['edad_cero_v'];
$edad_cero_h = $_POST['edad_cero_h'];
$sum_edad_cero = $_POST['sum_edad_cero'];
#1
$edad_uno_v = $_POST['edad_uno_v'];
$edad_uno_h = $_POST['edad_uno_h'];
$sum_edad_uno = $_POST['sum_edad_uno'];
#2
$edad_dos_v = $_POST['edad_dos_v'];
$edad_dos_h = $_POST['edad_dos_h'];
$sum_edad_dos = $_POST['sum_edad_dos'];
#3
$edad_tres_v = $_POST['edad_tres_v'];
$edad_tres_h = $_POST['edad_tres_h'];
$sum_edad_tres = $_POST['sum_edad_tres'];
#4
$edad_cuatro_v = $_POST['edad_cuatro_v'];
$edad_cuatro_h = $_POST['edad_cuatro_h'];
$sum_edad_cuatro = $_POST['sum_edad_cuatro'];
#5
$edad_cinco_v = $_POST['edad_cinco_v'];
$edad_cinco_h = $_POST['edad_cinco_h'];
$sum_edad_cinco = $_POST['sum_edad_cinco'];
#6
$edad_seis_v = $_POST['edad_seis_v'];
$edad_seis_h = $_POST['edad_seis_h'];
$sum_edad_seis = $_POST['sum_edad_seis'];
#7
$edad_siete_v = $_POST['edad_siete_v'];
$edad_siete_h = $_POST['edad_siete_h'];
$sum_edad_siete = $_POST['sum_edad_siete'];
#8
$edad_ocho_v = $_POST['edad_ocho_v'];
$edad_ocho_h = $_POST['edad_ocho_h'];
$sum_edad_ocho = $_POST['sum_edad_ocho'];
#9
$edad_nueve_v = $_POST['edad_nueve_v'];
$edad_nueve_h = $_POST['edad_nueve_h'];
$sum_edad_nueve = $_POST['sum_edad_nueve'];
#10
$edad_diez_v = $_POST['edad_diez_v'];
$edad_diez_h = $_POST['edad_diez_h'];
$sum_edad_diez = $_POST['sum_edad_diez'];
#11
$edad_once_v = $_POST['edad_once_v'];
$edad_once_h = $_POST['edad_once_h'];
$sum_edad_once = $_POST['sum_edad_once'];
#12
$edad_doce_v = $_POST['edad_doce_v'];
$edad_doce_h = $_POST['edad_doce_h'];
$sum_edad_doce = $_POST['sum_edad_doce'];
#13
$edad_trece_v = $_POST['edad_trece_v'];
$edad_trece_h = $_POST['edad_trece_h'];
$sum_edad_trece = $_POST['sum_edad_trece'];
#14
$edad_catorce_v = $_POST['edad_catorce_v'];
$edad_catorce_h = $_POST['edad_catorce_h'];
$sum_edad_catorce = $_POST['sum_edad_catorce'];
#15
$edad_quince_v = $_POST['edad_quince_v'];
$edad_quince_h = $_POST['edad_quince_h'];
$sum_edad_quince = $_POST['sum_edad_quince'];
#16
$edad_dieciseis_v = $_POST['edad_dieciseis_v'];
$edad_dieciseis_h = $_POST['edad_dieciseis_h'];
$sum_edad_dieciseis = $_POST['sum_edad_dieciseis'];
#17
$edad_diecisiete_v = $_POST['edad_diecisiete_v'];
$edad_diecisiete_h = $_POST['edad_diecisiete_h'];
$sum_edad_diecisiete = $_POST['sum_edad_diecisiete'];
#total por edad
$total_edad_v = $_POST['total_edad_v'];
$total_edad_h = $_POST['total_edad_h'];
$total_edad = $_POST['total_edad'];

#promedio por edad

$promedio_v = $total_edad_v/12;
$promedio_h = $total_edad_h/12;
$promedio = $total_edad/12;

#Escolaridad

#maternal
$maternal_v = $_POST['maternal_v'];
$maternal_h = $_POST['maternal_h'];
$sum_maternal = $_POST['sum_maternal'];
#nivel 1
$nivel_uno_v = $_POST['nivel_uno_v'];
$nivel_uno_h = $_POST['nivel_uno_h'];
$sum_nivel_uno = $_POST['sum_nivel_uno'];
#nivel 2
$nivel_dos_v = $_POST['nivel_dos_v'];
$nivel_dos_h = $_POST['nivel_dos_h'];
$sum_nivel_dos = $_POST['sum_nivel_dos'];
#nivel 3
$nivel_tres_v = $_POST['nivel_tres_v'];
$nivel_tres_h = $_POST['nivel_tres_h'];
$sum_nivel_tres = $_POST['sum_nivel_tres'];
#grado 1
$grado_uno_v = $_POST['grado_uno_v'];
$grado_uno_h = $_POST['grado_uno_h'];
$sum_grado_uno = $_POST['sum_grado_uno'];
#grado 2
$grado_dos_v = $_POST['grado_dos_v'];
$grado_dos_h = $_POST['grado_dos_h'];
$sum_grado_dos = $_POST['sum_grado_dos'];
#grado 3
$grado_tres_v = $_POST['grado_tres_v'];
$grado_tres_h = $_POST['grado_tres_h'];
$sum_grado_tres = $_POST['sum_grado_tres'];
#grado 4
$grado_cuatro_v = $_POST['grado_cuatro_v'];
$grado_cuatro_h = $_POST['grado_cuatro_h'];
$sum_grado_cuatro = $_POST['sum_grado_cuatro'];
#grado 5
$grado_cinco_v = $_POST['grado_cinco_v'];
$grado_cinco_h = $_POST['grado_cinco_h'];
$sum_grado_cinco = $_POST['sum_grado_cinco'];
#grado 6
$grado_seis_v = $_POST['grado_seis_v'];
$grado_seis_h = $_POST['grado_seis_h'];
$sum_grado_sies = $_POST['sum_grado_sies'];
#grado 7
$grado_siete_v = $_POST['grado_siete_v'];
$grado_siete_h = $_POST['grado_siete_h'];
$sum_grado_siente = $_POST['sum_grado_siente'];
#grado 8
$grado_ocho_v = $_POST['grado_ocho_v'];
$grado_ocho_h = $_POST['grado_ocho_h'];
$sum_grado_ocho = $_POST['sum_grado_ocho'];
#grado 9
$grado_nueve_v = $_POST['grado_nueve_v'];
$grado_nueve_h = $_POST['grado_nueve_h'];
$sum_grado_nueve = $_POST['sum_grado_nueve'];
#grado 10
$grado_diez_v = $_POST['grado_diez_v'];
$grado_diez_h = $_POST['grado_diez_h'];
$sum_grado_diez = $_POST['sum_grado_diez'];
#grado 11
$grado_once_v = $_POST['grado_once_v'];
$grado_once_h = $_POST['grado_once_h'];
$sum_grado_once = $_POST['sum_grado_once'];
#grado S/E
$grado_sin_v = $_POST['grado_sin_v'];
$grado_sin_h = $_POST['grado_sin_h'];
$sum_grado_sin = $_POST['sum_grado_sin'];
#grado E/E
$grado_especial_v = $_POST['grado_especial_v'];
$grado_especial_h = $_POST['grado_especial_h'];
$sum_grado_especial = $_POST['sum_grado_especial'];
#grado 12
$grado_doce_v = $_POST['grado_doce_v'];
$grado_doce_h = $_POST['grado_doce_h'];
$sum_grado_doce = $_POST['sum_grado_doce'];

#Tiempo de Permanencia
#5
$permanencia_cinco_v = $_POST['permanencia_cinco_v'];
$permanencia_cinco_h = $_POST['permanencia_cinco_h'];
$sum_permanencia_cinco = $_POST['sum_permanencia_cinco'];
#10
$permanencia_diez_v = $_POST['permanencia_diez_v'];
$permanencia_diez_h = $_POST['permanencia_diez_h'];
$sum_permanencia_diez = $_POST['sum_permanencia_diez'];
#15
$permanencia_quince_v = $_POST['permanencia_quince_v'];
$permanencia_quice_h = $_POST['permanencia_quice_h'];
$sum_permanencia_quice = $_POST['sum_permanencia_quice'];
#30
$permanencia_trainta_v = $_POST['permanencia_trainta_v'];
$permanencia_trainta_h = $_POST['permanencia_trainta_h'];
$sum_permanencia_trainta = $_POST['sum_permanencia_trainta'];
#2M
$permanencia_dosmeses_v = $_POST['permanencia_dosmeses_v'];
$permanencia_dosmeses_h = $_POST['permanencia_dosmeses_h'];
$sum_permanencia_dosmeses = $_POST['sum_permanencia_dosmeses'];
#3M
$permanencia_tresmeses_v = $_POST['permanencia_tresmeses_v'];
$permanencia_tresmeses_h = $_POST['permanencia_tresmeses_h'];
$sum_permanencia_tresmeses = $_POST['sum_permanencia_tresmeses'];
#+3M
$permanencia_masmeses_v = $_POST['permanencia_masmeses_v'];
$permanencia_masmeses_h = $_POST['permanencia_masmeses_h'];
$sum_permanencia_masmeses = $_POST['sum_permanencia_masmeses'];

#Poblacion Atendida

#En Aula
$poblacion_a_aula_v = $_POST['poblacion_a_aula_v'];
$poblacion_a_aula_h = $_POST['poblacion_a_aula_h'];
$sum_poblacion_a_aula = $_POST['sum_poblacion_a_aula'];
#En Habitacion
$poblacion_a_habitacion_v = $_POST['poblacion_a_aula_v'];
$poblacion_a_habitacion_h = $_POST['poblacion_a_aula_h'];
$sum_poblacion_a_habitacion = $_POST['sum_poblacion_a_aula'];

#Poblacion Referida


#Defensoria
$poblacion_r_defen_v = $_POST['poblacion_r_defen_v'];
$poblacion_r_defen_h = $_POST['poblacion_r_defen_h'];
$sum_poblacion_r_defen = $_POST['sum_poblacion_r_defen'];
#cdi
$poblacion_r_cdi_v = $_POST['poblacion_r_cdi_v'];
$poblacion_r_cdi_h = $_POST['poblacion_r_cdi_h'];
$sum_poblacion_r_cdi = $_POST['sum_poblacion_r_cdi'];
#Seguro Social
$poblacion_r_social_v = $_POST['poblacion_r_social_v'];
$poblacion_r_social_h = $_POST['poblacion_r_social_h'];
$sum_poblacion_r_social = $_POST['sum_poblacion_r_social'];
#Psicologia
$poblacion_r_psicologia_v = $_POST['poblacion_r_psicologia_v'];
$poblacion_r_psicologia_h = $_POST['poblacion_r_psicologia_h'];
$sum_poblacion_r_psicologia = $_POST['sum_poblacion_r_psicologia'];
#CAIPA
$poblacion_r_caipa_v = $_POST['poblacion_r_caipa_v'];
$poblacion_r_caipa_h = $_POST['poblacion_r_caipa_h'];
$sum_poblacion_r_caipa = $_POST['sum_poblacion_r_caipa'];
#Integración
$poblacion_r_integracion_v = $_POST['poblacion_r_integracion_v'];
$poblacion_r_integracion_h = $_POST['poblacion_r_integracion_h'];
$sum_poblacion_r_integracion = $_POST['sum_poblacion_r_integracion'];
#A. Integral
$poblacion_r_integral_v = $_POST['poblacion_r_integral_v'];
$poblacion_r_integral_h = $_POST['poblacion_r_integral_h'];
$sum_poblacion_r_integral = $_POST['sum_poblacion_r_integral'];
#CENDA
$poblacion_r_cenda_v = $_POST['poblacion_r_cenda_v'];
$poblacion_r_cenda_h = $_POST['poblacion_r_cenda_h'];
$sum_poblacion_r_cenda = $_POST['sum_poblacion_r_cenda'];
#UPE
$poblacion_r_upe_v = $_POST['poblacion_r_upe_v'];
$poblacion_r_upe_h = $_POST['poblacion_r_upe_h'];
$sum_poblacion_r_upe = $_POST['sum_poblacion_r_upe'];
#Articulación
$poblacion_r_arti_v = $_POST['poblacion_r_arti_v'];
$poblacion_r_arti_h = $_POST['poblacion_r_arti_h'];
$sum_poblacion_r_arti = $_POST['sum_poblacion_r_arti'];
#Otros
$poblacion_r_otros_v = $_POST['poblacion_r_otros_v'];
$poblacion_r_otros_h = $_POST['poblacion_r_otros_h'];
$sum_poblacion_r_otros = $_POST['sum_poblacion_r_otros'];



#Tiempo de Atencion

#Cirugía
$tipo_a_cirugia_v = $_POST['tipo_a_cirugia_v'];
$tipo_a_cirugia_h = $_POST['tipo_a_cirugia_h'];
$sum_tipo_a_cirugia = $_POST['sum_tipo_a_cirugia'];
#Traumatología 
$tipo_a_trauma_v = $_POST['tipo_a_trauma_v'];
$tipo_a_trauma_h = $_POST['tipo_a_trauma_h'];
$sum_tipo_a_trauma = $_POST['sum_tipo_a_trauma'];
#Otorrinolaringologo
$tipo_a_oto_v = $_POST['tipo_a_oto_v'];
$tipo_a_oto_h = $_POST['tipo_a_oto_h'];
$sum_tipo_a_oto = $_POST['sum_tipo_a_oto'];
#Pediatría 
$tipo_a_pedia_v = $_POST['tipo_a_pedia_v'];
$tipo_a_pedia_h = $_POST['tipo_a_pedia_h'];
$sum_tipo_a_pedia = $_POST['sum_tipo_a_pedia'];
#Nerología 
$tipo_a_nero_v = $_POST['tipo_a_nero_v'];
$tipo_a_nero_h = $_POST['tipo_a_nero_h'];
$sum_tipo_a_nero = $_POST['sum_tipo_a_nero'];
#Cadiología 
$tipo_a_cardio_v = $_POST['tipo_a_cardio_v'];
$tipo_a_cardio_h = $_POST['tipo_a_cardio_h'];
$sum_tipo_a_cardio = $_POST['sum_tipo_a_cardio'];
#Nefrología 
$tipo_a_nefro_v = $_POST['tipo_a_nefro_v'];
$tipo_a_nefro_h = $_POST['tipo_a_nefro_h'];
$sum_tipo_a_nefro = $_POST['sum_tipo_a_nefro'];
#Urología 
$tipo_a_uro_v = $_POST['tipo_a_uro_v'];
$tipo_a_uro_h = $_POST['tipo_a_uro_h'];
$sum_tipo_a_uro = $_POST['sum_tipo_a_uro'];
#Neumonología 
$tipo_a_neumo_v = $_POST['tipo_a_neumo_v'];
$resultado_h = $_POST['resultado_h'];
$sum_tipo_a_neumo = $_POST['sum_tipo_a_neumo'];
#Hermatología 
$tipo_a_herma_v = $_POST['tipo_a_herma_v'];
$tipo_a_herma_h = $_POST['tipo_a_herma_h'];
$sum_tipo_a_herma = $_POST['sum_tipo_a_herma'];
#Oncología 
$tipo_a_onco_v = $_POST['tipo_a_onco_v'];
$tipo_a_onco_h = $_POST['tipo_a_onco_h'];
$sum_tipo_a_onco = $_POST['sum_tipo_a_onco'];
#Dermatología 
$tipo_a_derma_v = $_POST['tipo_a_derma_v'];
$tipo_a_derma_h = $_POST['tipo_a_derma_h'];
$sum_tipo_a_derma = $_POST['sum_tipo_a_derma'];
#Gastrología 
$tipo_a_gastro_v = $_POST['tipo_a_gastro_v'];
$tipo_a_gastro_h = $_POST['tipo_a_gastro_h'];
$sum_tipo_a_gastro = $_POST['sum_tipo_a_gastro'];
#Infectología 
$tipo_a_infecto_v = $_POST['tipo_a_infecto_v'];
$tipo_a_infecto_h = $_POST['tipo_a_infecto_h'];
$sum_tipo_a_infecto = $_POST['sum_tipo_a_infecto'];





#piso 1 
$asistencia_p1_v = $_POST['asistencia_p1_v'];
$asistencia_p1_h = $_POST['asistencia_p1_h'];
$asistencia_p1 = $_POST['asistencia_p1'];
#Piso 2 
$asistencia_p2_v = $_POST['asistencia_p2_v'];
$asistencia_p2_h = $_POST['asistencia_p2_h'];
$asistencia_p2 = $_POST['asistencia_p2'];
#piso 3 
$asistencia_p3_v = $_POST['asistencia_p3_v'];
$asistencia_p3_h = $_POST['asistencia_p3_h'];
$asistencia_p3 = $_POST['asistencia_p3'];
#Piso 4 
$asistencia_p4_v = $_POST['asistencia_p4_v'];
$asistencia_p4_h = $_POST['asistencia_p4_h'];
$asistencia_p4 = $_POST['asistencia_p4'];
#Piso 5 
$asistencia_p5_v = $_POST['asistencia_p5_v'];
$asistencia_p5_h = $_POST['asistencia_p5_h'];
$asistencia_p5 = $_POST['asistencia_p5'];
#Piso gi
$asistencia_gi_v = $_POST['asistencia_gi_v'];
$asistencia_gi_h = $_POST['asistencia_gi_h'];
$asistencia_gi = $_POST['asistencia_gi'];
#Piso gii
$asistencia_gii_v = $_POST['asistencia_gii_v'];
$asistencia_gii_h = $_POST['asistencia_gii_h'];
$asistencia_gii = $_POST['asistencia_gii'];









 $dia =  date("d");
 $mes =  date("m");
 $año = date ("Y");

require('fpdf/fpdf.php');

$pdf=new FPDF('L','mm','Letter');
$pdf->AddPage();

////Ruta de la imagen "imgs/ver.jpg" modificar función para recuperar el nombre con extensión.
//abcisa, ordenada, ancho, aimgs/ver.jpglto, type, link_url
$pdf->Image('../../img/logo_aulas.png',250,05,20,0,'');
$suscrito = 'C.P. Paco Remes Frias';
$suscrito_puesto = '006810041';
$solicita_autorice = 'WAR4412 UNIDAD DE RECURSOS FINANCIEROS';
$solicita_puesto = 'BARCELONA';
$adscrito = 'DEPARTAMENTO DE CONTABILIDAD';
$adscrito_rfc =utf8_decode('Edo. Anzoátegui');
$objeto_comision = 'ENTREGA DE DOCUMENTOS';
$lugar_comision = 'Saltillo, Tabasco';
$tipo_presupuesto = 'FEDERAL';
$presupuesto = 'X';
$oficio_comision = '1003';
$periodo_comision = '31 DE SEPTIEMBRE DE 2005';
$dias = array(31,31,31);
$cuota_diaria = array(9999.99,8888.88,7777.77);
$parcial = array($dias[0]*$cuota_diaria[0], $dias[1]*$cuota_diaria[1],$dias[2]*$cuota_diaria[2]);
$total_anticipo = array($parcial[0]+$parcial[1]+$parcial[2]);
$comprobacion = array(76804);
$diferencia = array($total_anticipo[0]-$comprobacion[0]);
$combustible_peaje = array('ta'=>9999.99,'comprobacion'=>8999.99);
//---------------------------------
$pasajes = array('ta'=>5154.54,'comprobacion'=>3531.14);
$lugar = 'Xalapa, Ver., a ';
$tipo_pago = 'TARJETA';
$marca_vehiculo = 'VOLSKWAGEN';
$tipo_vehiculo = 'FAMILIAR';
$placas_vehiculo = 'EWEW4545';
$economico_vehiculo = '321';
$tarjeta_bital = 'ZZZZ ZZZZ ZZZZ ZZZZ';
$importe_modificacion = number_format(9999.99,2,'.',',');
$lugar_modificacion = 'COFRE DE PEROTE, ORIZABA, PAPANTLA';
$dias_modificacion = '3 DÍAS EXTRAS POR EXCESO DE GENTE PARA ATENCIÓN Y BLOQUEO DE CAMINOS POR DESLAVES';
$fecha_modificacion = '20 DE JUNIO DE 2007';
$nombre_autoriza = 'JULIO ALBERTO TRINIDAD VICENTE MÉNDEZ';
$solicitante = 'DR. JOSE GUSTAVO REYES SEMERIO';
$autoriza_comision = 'C.P. BIOGENES CAMPOMANES LÓPEZ';
$responsable_registro = 'C.P. RAFAEL MORALES COVARRUBIAS';
$subjefe_administrativo = 'C.P. CARLOS GOMEZ CASARES';

/*********************** INICIO TEXTO *********************************/
//Familia, Estilo, Tamaño
$pdf->SetFont('Times','B',12);
//Ancho Alto Cadena, Borde, Ln, Alineación, Relleno, Link
$pdf->Cell(0,4,'Republica Bolivariana de Venezuela',0,1,'C');
$pdf->Cell(0,4,utf8_decode('Ministerio del poder popular para la educación'),0,1,'C');
$pdf->Cell(0,4,utf8_decode('Modalidad de educación especial'),0,1,'C');
$pdf->Cell(0,4,'Impedimento Fisico',0,1,'C');

$pdf->SetFont('Times','',8);
$pdf->Ln(2);
$pdf->Cell(0,4,'    ',0,0,'L');//
$pdf->Cell(-60); //Mueve el cursor a la posición -60 de DER a IZQ "Valor 0 a la derecha"
$pdf->Cell(0,4,'CODIGO     '.$suscrito_puesto,0,1,'L');
$pdf->Cell(0,4,'MES: TODO EL PERIODO ESCOLAR     ',0,0,'L');
$pdf->Cell(-60); //Mueve el cursor a la posición -60 de DER a IZQ "Valor 0 a la derecha"
$pdf->Cell(0,4,'CIUDAD     '.$solicita_puesto,0,1,'L');
$pdf->Cell(0,4,'PERIODO ESCOLAR: '.$inicio." - ".$fin,0,0,'L');
$pdf->Cell(-60); //Mueve el cursor a la posición -60 de DER a IZQ "Valor 0 a la derecha"
$pdf->Cell(0,4,'ESTADO    '.$adscrito_rfc,0,1,'L');
$pdf->Cell(0,4,'      ',0,1,'L');

$pdf->Cell(0,4,'       ',0,1,'L');


$pdf->SetFont('Times','B',12);
//Ancho Alto Cadena, Borde, Ln, Alineación, Relleno, Link
$pdf->Cell(0,4,utf8_decode('ESTADÍSTICA GENERAL ANUAL AH DR. LUIS RAZETTI'),0,1,'C');
$pdf->Cell(0,4,utf8_decode('PERIODO ESCOLAR: '.$inicio." - ".$fin),0,1,'C');
$pdf->Ln(2);


$pdf->SetFont('Times','',9);
$pdf->Cell(70);
$pdf->Cell(40,5,"VARONES",1,0,'C');
$pdf->Cell(40,5,"HEMBRA",1,0,'C');
$pdf->Cell(40,5,"TOTAL",1,0,'C');

$pdf->Ln();
$pdf->Cell(70);
$pdf->Cell(40,5,"$total_edad_v",1,0,'C');
$pdf->Cell(40,5,"$total_edad_h",1,0,'C');
$pdf->Cell(40,5,"$total_edad",1,0,'C');
$pdf->Ln();
$pdf->Ln();

#Por edad

$pdf->Cell(255,5,utf8_decode("Niños, niñas y adolencentes visitados por habitaciones agrupados por edad"),1,0,'C');
$pdf->Ln();
$pdf->Cell(15,5,utf8_decode("EDAD"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("0-11Meses"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("1 año"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("2 años"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("3 años"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("4 años"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("5 años"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("6 años"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("7 años"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("8 años"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("9 años"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("10 años"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("11 años"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("12 años"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("13 años"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("14 años"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("+15 años"),1,0,'C');
$pdf->Ln();
$pdf->Cell(15,5,utf8_decode("VARONES"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$edad_cero_v"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$edad_uno_v"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$edad_dos_v"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$edad_tres_v"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$edad_cuatro_v"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$edad_cinco_v"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$edad_seis_v"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$edad_siete_v"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$edad_ocho_v"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$edad_nueve_v"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$edad_diez_v"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$edad_once_v"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$edad_doce_v"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$edad_trece_v"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$edad_catorce_v"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$edad_quince_v"),1,0,'C');

$pdf->Ln();
$pdf->Cell(15,5,utf8_decode("HEMBRAS"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$edad_cero_h"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$edad_uno_h"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$edad_dos_h"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$edad_tres_h"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$edad_cuatro_h"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$edad_cinco_h"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$edad_seis_h"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$edad_siete_h"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$edad_ocho_h"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$edad_nueve_h"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$edad_diez_h"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$edad_once_h"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$edad_doce_h"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$edad_trece_h"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$edad_catorce_h"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$edad_quince_h"),1,0,'C');

#Escolaridad

$pdf->Ln();
$pdf->Ln();
$pdf->Cell(255,5,utf8_decode("Escolaridad"),1,0,'C');
$pdf->Ln();
$pdf->Cell(19,5,utf8_decode("Grados"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("Maternal"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("1 Nivel"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("2 Nivel"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("3 Nivel"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("1° G"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("2° G"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("3° G"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("4° G"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("5° G"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("6° G"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("7mo"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("8vo"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("9no"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("4to Año"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("5to Año"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("6to Años"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("S/E"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("E/E"),1,0,'C');
$pdf->Ln();
$pdf->Cell(19,5,utf8_decode("VARONES"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$maternal_v"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$nivel_uno_v"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$nivel_dos_v"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$nivel_tres_v"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$grado_uno_v"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$grado_dos_v"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$grado_tres_v"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$grado_cuatro_v"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$grado_cinco_v"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$grado_seis_v"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$grado_siete_v"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$grado_ocho_v"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$grado_nueve_v"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$grado_diez_v"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$grado_once_v"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$grado_doce_v"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$grado_sin_v"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$grado_especial_v"),1,0,'C');
$pdf->Ln();
$pdf->Cell(19,5,utf8_decode("HEMBRAS"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("$maternal_h"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$nivel_uno_h"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$nivel_dos_h"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$nivel_tres_h"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$grado_uno_h"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$grado_dos_h"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$grado_tres_h"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$grado_cuatro_h"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$grado_cinco_h"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$grado_seis_h"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$grado_siete_h"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$grado_ocho_h"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$grado_nueve_h"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$grado_diez_h"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$grado_once_h"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$grado_doce_h"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$grado_sin_h"),1,0,'C');
$pdf->Cell(13,5,utf8_decode("$grado_especial_h"),1,0,'C');

#Tiempo de Permanencia

$pdf->Ln();
$pdf->Ln();
$pdf->Cell(255,5,utf8_decode("Tiempo de Permanencia en el Hospital"),1,0,'C');
$pdf->Ln();
$pdf->Cell(22,5,utf8_decode("Periodos"),1,0,'C');
$pdf->Cell(78,5,utf8_decode("Corta Estadia"),1,0,'C');
$pdf->Cell(40,5,utf8_decode("Media Estadia"),1,0,'C');
$pdf->Cell(115,5,utf8_decode("Larga Estadia"),1,0,'C');
$pdf->Ln();
$pdf->Cell(22,5,utf8_decode("Tiempo"),1,0,'C');
$pdf->Cell(26,5,utf8_decode("0 - 5 Días"),1,0,'C');
$pdf->Cell(26,5,utf8_decode("6 - 10 Días"),1,0,'C');
$pdf->Cell(26,5,utf8_decode("11 - 15 Días"),1,0,'C');
$pdf->Cell(40,5,utf8_decode("16 - 30 Días"),1,0,'C');
$pdf->Cell(37,5,utf8_decode("2 Meses"),1,0,'C');
$pdf->Cell(37,5,utf8_decode("3 Meses"),1,0,'C');
$pdf->Cell(41,5,utf8_decode("+ 3 Meses"),1,0,'C');
$pdf->Ln();
$pdf->Cell(22,5,utf8_decode("VARONES"),1,0,'C');
$pdf->Cell(26,5,utf8_decode("$permanencia_cinco_v"),1,0,'C');
$pdf->Cell(26,5,utf8_decode("$permanencia_diez_v"),1,0,'C');
$pdf->Cell(26,5,utf8_decode("$permanencia_quince_v"),1,0,'C');
$pdf->Cell(40,5,utf8_decode("$permanencia_trainta_v"),1,0,'C');
$pdf->Cell(37,5,utf8_decode("$permanencia_dosmeses_v"),1,0,'C');
$pdf->Cell(37,5,utf8_decode("$permanencia_tresmeses_v"),1,0,'C');
$pdf->Cell(41,5,utf8_decode("$permanencia_masmeses_v"),1,0,'C');
$pdf->Ln();
$pdf->Cell(22,5,utf8_decode("HEMBRAS"),1,0,'C');
$pdf->Cell(26,5,utf8_decode("$permanencia_cinco_h"),1,0,'C');
$pdf->Cell(26,5,utf8_decode("$permanencia_diez_h"),1,0,'C');
$pdf->Cell(26,5,utf8_decode("$permanencia_quice_h"),1,0,'C');
$pdf->Cell(40,5,utf8_decode("$permanencia_trainta_h"),1,0,'C');
$pdf->Cell(37,5,utf8_decode("$permanencia_dosmeses_h"),1,0,'C');
$pdf->Cell(37,5,utf8_decode("$permanencia_tresmeses_h"),1,0,'C');
$pdf->Cell(41,5,utf8_decode("$permanencia_masmeses_h"),1,0,'C');

$pdf->Ln();
$pdf->Ln();
#Poblacion Atendida

$pdf->Cell(70);
$pdf->Cell(120,5,utf8_decode("Población Atendida"),1,0,'C');
$pdf->Ln();
$pdf->Cell(70);
$pdf->Cell(30,5,"",1,0,'C');
$pdf->Cell(30,5,"Aula",1,0,'C');
$pdf->Cell(30,5,utf8_decode("Habitación"),1,0,'C');
$pdf->Cell(30,5,"TOTAL",1,0,'C');

$pdf->Ln();
$pdf->Cell(70);
$pdf->Cell(30,5,"VARONES",1,0,'C');
$pdf->Cell(30,5,"$poblacion_a_aula_v",1,0,'C');
$pdf->Cell(30,5,utf8_decode("$poblacion_a_aula_v"),1,0,'C');
$pdf->Cell(30,5,"$sum_poblacion_a_aula",1,0,'C');

$pdf->Ln();

$pdf->Cell(70);
$pdf->Cell(30,5,"HEMBRAS",1,0,'C');
$pdf->Cell(30,5,"$poblacion_a_aula_h",1,0,'C');
$pdf->Cell(30,5,utf8_decode("$poblacion_a_aula_h"),1,0,'C');
$pdf->Cell(30,5,"$sum_poblacion_a_aula",1,0,'C');
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();




#fecha y firma de entrega
$pdf->Cell(0,4,utf8_decode("FECHA DE IMPRESIÓN: ").$dia.'/'.$mes.'/'.$año,0,0,'L');
$pdf->Cell(-65); //Mueve el cursor a la posición -65 de DER a IZQ "Valor 0 a la derecha"
$pdf->Cell(0,4,'FIRMA AUTORIZADA ',0,1,'L');
$pdf->Ln(5);




//Familia, Estilo, Tamaño
$pdf->SetFont('Times','B',12);
//Ancho Alto Cadena, Borde, Ln, Alineación, Relleno, Link

$pdf->Cell(0,4,'Republica Bolivariana de Venezuela',0,1,'C');
$pdf->Cell(0,4,utf8_decode('Ministerio del poder popular para la educación'),0,1,'C');
$pdf->Cell(0,4,utf8_decode('Modalidad de educación especial'),0,1,'C');
$pdf->Cell(0,4,'Impedimento Fisico',0,1,'C');
$pdf->Cell(0,4,''.$pdf->Image('../../img/logo_aulas.png',250,05,20,0,''),0,1,'C');
$pdf->SetFont('Times','',8);
$pdf->Ln(2);
$pdf->Cell(0,4,'    ',0,0,'L');//
$pdf->Cell(-60); //Mueve el cursor a la posición -60 de DER a IZQ "Valor 0 a la derecha"
$pdf->Cell(0,4,'CODIGO     '.$suscrito_puesto,0,1,'L');
$pdf->Cell(0,4,'MES: TODO EL PERIODO ESCOLAR     ',0,0,'L');
$pdf->Cell(-60); //Mueve el cursor a la posición -60 de DER a IZQ "Valor 0 a la derecha"
$pdf->Cell(0,4,'CIUDAD     '.$solicita_puesto,0,1,'L');
$pdf->Cell(0,4,'PERIODO ESCOLAR: '.$inicio." - ".$fin,0,0,'L');
$pdf->Cell(-60); //Mueve el cursor a la posición -60 de DER a IZQ "Valor 0 a la derecha"
$pdf->Cell(0,4,'ESTADO    '.$adscrito_rfc,0,1,'L');
$pdf->Cell(0,4,'      ',0,1,'L');

$pdf->Cell(0,4,'       ',0,1,'L');


$pdf->SetFont('Times','B',12);
//Ancho Alto Cadena, Borde, Ln, Alineación, Relleno, Link
$pdf->Cell(0,4,utf8_decode('ESTADÍSTICA GENERAL AH DR. LUIS RAZETTI'),0,1,'C');
$pdf->Cell(0,4,utf8_decode('PERIODO ESCOLAR: '.$inicio." - ".$fin),0,1,'C');
$pdf->Ln(2);


$pdf->SetFont('Times','',9);

#Poblacion referida

$pdf->Cell(255,5,utf8_decode("Población Referida"),1,0,'C');
$pdf->Ln();
$pdf->Cell(22,5,utf8_decode("Institución"),1,0,'C');
$pdf->Cell(21,5,utf8_decode("Defensoria"),1,0,'C');
$pdf->Cell(21,5,utf8_decode("CDI"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("Seguro Social"),1,0,'C');
$pdf->Cell(21,5,utf8_decode("Psicologia"),1,0,'C');
$pdf->Cell(21,5,utf8_decode("CAIPA"),1,0,'C');
$pdf->Cell(21,5,utf8_decode("Integración"),1,0,'C');
$pdf->Cell(21,5,utf8_decode("A. Integral"),1,0,'C');
$pdf->Cell(21,5,utf8_decode("CENDA"),1,0,'C');
$pdf->Cell(21,5,utf8_decode("UPE"),1,0,'C');
$pdf->Cell(21,5,utf8_decode("Articulación"),1,0,'C');
$pdf->Cell(21,5,utf8_decode("Otros"),1,0,'C');

$pdf->Ln();

$pdf->Cell(22,5,utf8_decode("VARONES"),1,0,'C');
$pdf->Cell(21,5,utf8_decode("$poblacion_r_defen_v"),1,0,'C');
$pdf->Cell(21,5,utf8_decode("$poblacion_r_cdi_v"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$poblacion_r_social_v"),1,0,'C');
$pdf->Cell(21,5,utf8_decode("$poblacion_r_psicologia_v"),1,0,'C');
$pdf->Cell(21,5,utf8_decode("$poblacion_r_caipa_v"),1,0,'C');
$pdf->Cell(21,5,utf8_decode("$poblacion_r_integracion_v"),1,0,'C');
$pdf->Cell(21,5,utf8_decode("$poblacion_r_integral_v"),1,0,'C');
$pdf->Cell(21,5,utf8_decode("$poblacion_r_cenda_v"),1,0,'C');
$pdf->Cell(21,5,utf8_decode("$poblacion_r_upe_v"),1,0,'C');
$pdf->Cell(21,5,utf8_decode("$poblacion_r_arti_v"),1,0,'C');
$pdf->Cell(21,5,utf8_decode("$poblacion_r_otros_v"),1,0,'C');
$pdf->Ln();
$pdf->Cell(22,5,utf8_decode("HEMBRAS"),1,0,'C');
$pdf->Cell(21,5,utf8_decode("$poblacion_r_defen_h"),1,0,'C');
$pdf->Cell(21,5,utf8_decode("$poblacion_r_cdi_h"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$poblacion_r_social_h"),1,0,'C');
$pdf->Cell(21,5,utf8_decode("$poblacion_r_psicologia_h"),1,0,'C');
$pdf->Cell(21,5,utf8_decode("$poblacion_r_caipa_h"),1,0,'C');
$pdf->Cell(21,5,utf8_decode("$poblacion_r_integracion_h"),1,0,'C');
$pdf->Cell(21,5,utf8_decode("$poblacion_r_integral_h"),1,0,'C');
$pdf->Cell(21,5,utf8_decode("$poblacion_r_cenda_h"),1,0,'C');
$pdf->Cell(21,5,utf8_decode("$poblacion_r_upe_h"),1,0,'C');
$pdf->Cell(21,5,utf8_decode("$poblacion_r_arti_h"),1,0,'C');
$pdf->Cell(21,5,utf8_decode("$poblacion_r_otros_h"),1,0,'C');


$pdf->Ln(5);
$pdf->Ln(5);

#Tipo de Atención y asistencia


$pdf->Cell(125,5,utf8_decode("Tipo de Atención"),1,0,'C');
$pdf->Cell(5);
$pdf->Cell(125,5,utf8_decode("Total Asistencia"),1,0,'C');
$pdf->Ln();
$pdf->Cell(55,5,utf8_decode("Servicio de Atención"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("VARONES"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("HEMBRAS"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("TOTAL"),1,0,'C');
$pdf->Cell(5);
$pdf->Cell(55,5,utf8_decode("Piso"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("VARONES"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("HEMBRAS"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("TOTAL"),1,0,'C');
$pdf->Ln();
$pdf->Cell(55,5,utf8_decode("Cirugía"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$tipo_a_cirugia_v"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$tipo_a_cirugia_h"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("$sum_tipo_a_cirugia"),1,0,'C');
$pdf->Cell(5);
$pdf->Cell(55,5,utf8_decode("Piso 1"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$asistencia_p1_v"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$asistencia_p1_h"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("$asistencia_p1"),1,0,'C');
$pdf->Ln();
$pdf->Cell(55,5,utf8_decode("Traumatología"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$tipo_a_trauma_v"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$tipo_a_trauma_h"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("$sum_tipo_a_trauma"),1,0,'C');
$pdf->Cell(5);
$pdf->Cell(55,5,utf8_decode("Piso 2"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$asistencia_p2_v"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$asistencia_p2_h"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("$asistencia_p2"),1,0,'C');
$pdf->Ln();
$pdf->Cell(55,5,utf8_decode("Otorrinolaringologo"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$tipo_a_oto_v"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$tipo_a_oto_h"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("$sum_tipo_a_oto"),1,0,'C');
$pdf->Cell(5);
$pdf->Cell(55,5,utf8_decode("Piso 3"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$asistencia_p3_v"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$asistencia_p3_h"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("$asistencia_p3"),1,0,'C');
$pdf->Ln();
$pdf->Cell(55,5,utf8_decode("Pediatría"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$tipo_a_pedia_v"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$tipo_a_pedia_h"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("$sum_tipo_a_pedia"),1,0,'C');
$pdf->Cell(5);
$pdf->Cell(55,5,utf8_decode("Piso 4"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$asistencia_p4_v"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$asistencia_p4_h"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("$asistencia_p4"),1,0,'C');
$pdf->Ln();
$pdf->Cell(55,5,utf8_decode("Neurología"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$tipo_a_nero_v"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$tipo_a_nero_h"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("$sum_tipo_a_nero"),1,0,'C');
$pdf->Cell(5);
$pdf->Cell(55,5,utf8_decode("Piso 5"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$asistencia_p5_v"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$asistencia_p5_h"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("$asistencia_p5"),1,0,'C');
$pdf->Ln();
$pdf->Cell(55,5,utf8_decode("Cadiología"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$tipo_a_cardio_v"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$tipo_a_cardio_h"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("$sum_tipo_a_cardio"),1,0,'C');
$pdf->Cell(5);
$pdf->Cell(55,5,utf8_decode("Las Garzas I"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$asistencia_gi_v"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$asistencia_gi_h"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("$asistencia_gi"),1,0,'C');
$pdf->Ln();
$pdf->Cell(55,5,utf8_decode("Nefrología"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$tipo_a_nefro_v"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$tipo_a_nefro_h"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("$sum_tipo_a_nefro"),1,0,'C');
$pdf->Cell(5);
$pdf->Cell(55,5,utf8_decode("Las Garzas II"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$asistencia_gii_v"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$asistencia_gii_h"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("$asistencia_gii"),1,0,'C');
$pdf->Ln();
$pdf->Cell(55,5,utf8_decode("Urología"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$tipo_a_uro_v"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$tipo_a_uro_h"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("$sum_tipo_a_uro"),1,0,'C');
$pdf->Ln();
$pdf->Cell(55,5,utf8_decode("Neumonología"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$tipo_a_neumo_v"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$resultado_h"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("$sum_tipo_a_neumo"),1,0,'C');
$pdf->Ln();
$pdf->Cell(55,5,utf8_decode("Hermatología"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$tipo_a_herma_v"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$tipo_a_herma_h"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("$sum_tipo_a_herma"),1,0,'C');
$pdf->Ln();
$pdf->Cell(55,5,utf8_decode("Oncología"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$tipo_a_onco_v"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$tipo_a_onco_h"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("$sum_tipo_a_onco"),1,0,'C');
$pdf->Ln();
$pdf->Cell(55,5,utf8_decode("Dermatología"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$tipo_a_derma_v"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$tipo_a_derma_h"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("$sum_tipo_a_derma"),1,0,'C');
$pdf->Ln();
$pdf->Cell(55,5,utf8_decode("Gastrología"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$tipo_a_gastro_v"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$tipo_a_gastro_h"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("$sum_tipo_a_gastro"),1,0,'C');
$pdf->Ln();
$pdf->Cell(55,5,utf8_decode("Infectología"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$tipo_a_infecto_v"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("$tipo_a_infecto_h"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("$sum_tipo_a_infecto"),1,0,'C');
$pdf->Ln();

$pdf->Ln(5);
$pdf->Ln(5);
#fecha y firma de entrega
$pdf->Cell(0,4,utf8_decode("FECHA DE IMPRESIÓN: ").$dia.'/'.$mes.'/'.$año,0,0,'L');
$pdf->Cell(-65); //Mueve el cursor a la posición -65 de DER a IZQ "Valor 0 a la derecha"
$pdf->Cell(0,4,'FIRMA AUTORIZADA ',0,1,'L');
$pdf->Ln(5);

/*********************** FIN RECTÁNGULOS *************************/
$pdf->Output();
?>
