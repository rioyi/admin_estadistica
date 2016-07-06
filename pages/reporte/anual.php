

<?php

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
$pdf->Cell(0,4,'PERIODO ESCOLAR:  2015 - 2016     ',0,0,'L');
$pdf->Cell(-60); //Mueve el cursor a la posición -60 de DER a IZQ "Valor 0 a la derecha"
$pdf->Cell(0,4,'ESTADO    '.$adscrito_rfc,0,1,'L');
$pdf->Cell(0,4,'      ',0,1,'L');

$pdf->Cell(0,4,'       ',0,1,'L');


$pdf->SetFont('Times','B',12);
//Ancho Alto Cadena, Borde, Ln, Alineación, Relleno, Link
$pdf->Cell(0,4,utf8_decode('ESTADÍSTICA GENERAL ANUAL AH DR. LUIS RAZETTI'),0,1,'C');
$pdf->Cell(0,4,utf8_decode('PERIODO ESCOLAR: 2015-2016'),0,1,'C');
$pdf->Ln(2);


$pdf->SetFont('Times','',9);
$pdf->Cell(70);
$pdf->Cell(40,5,"VARONES",1,0,'C');
$pdf->Cell(40,5,"HEMBRA",1,0,'C');
$pdf->Cell(40,5,"TOTAL",1,0,'C');

$pdf->Ln();
$pdf->Cell(70);
$pdf->Cell(40,5,"### ",1,0,'C');
$pdf->Cell(40,5,"###",1,0,'C');
$pdf->Cell(40,5,"###",1,0,'C');
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
$pdf->Cell(15,5,utf8_decode("###"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("###"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("###"),1,0,'C');
$pdf->Cell(15,5,utf8_decode("###"),1,0,'C');
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
$pdf->Cell(15,5,utf8_decode("HEMBRAS"),1,0,'C');
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
$pdf->Cell(19,5,utf8_decode("HEMBRAS"),1,0,'C');
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
$pdf->Cell(26,5,utf8_decode("0 - 5 Días"),1,0,'C');
$pdf->Cell(26,5,utf8_decode("6 - 10 Días"),1,0,'C');
$pdf->Cell(26,5,utf8_decode("11 - 15 Días"),1,0,'C');
$pdf->Cell(40,5,utf8_decode("16 - 30 Días"),1,0,'C');
$pdf->Cell(37,5,utf8_decode("2 Meses"),1,0,'C');
$pdf->Cell(37,5,utf8_decode("3 Meses"),1,0,'C');
$pdf->Cell(41,5,utf8_decode("+ 3 Meses"),1,0,'C');
$pdf->Ln();
$pdf->Cell(22,5,utf8_decode("HEMBRAS"),1,0,'C');
$pdf->Cell(26,5,utf8_decode("0 - 5 Días"),1,0,'C');
$pdf->Cell(26,5,utf8_decode("6 - 10 Días"),1,0,'C');
$pdf->Cell(26,5,utf8_decode("11 - 15 Días"),1,0,'C');
$pdf->Cell(40,5,utf8_decode("16 - 30 Días"),1,0,'C');
$pdf->Cell(37,5,utf8_decode("2 Meses"),1,0,'C');
$pdf->Cell(37,5,utf8_decode("3 Meses"),1,0,'C');
$pdf->Cell(41,5,utf8_decode("+ 3 Meses"),1,0,'C');

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
$pdf->Cell(30,5,"Aula",1,0,'C');
$pdf->Cell(30,5,utf8_decode("Habitación"),1,0,'C');
$pdf->Cell(30,5,"TOTAL",1,0,'C');

$pdf->Ln();

$pdf->Cell(70);
$pdf->Cell(30,5,"HEMBRAS",1,0,'C');
$pdf->Cell(30,5,"Aula",1,0,'C');
$pdf->Cell(30,5,utf8_decode("Habitación"),1,0,'C');
$pdf->Cell(30,5,"TOTAL",1,0,'C');
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
$pdf->Cell(0,4,'PERIODO ESCOLAR:  2015 - 2016     ',0,0,'L');
$pdf->Cell(-60); //Mueve el cursor a la posición -60 de DER a IZQ "Valor 0 a la derecha"
$pdf->Cell(0,4,'ESTADO    '.$adscrito_rfc,0,1,'L');
$pdf->Cell(0,4,'      ',0,1,'L');

$pdf->Cell(0,4,'       ',0,1,'L');


$pdf->SetFont('Times','B',12);
//Ancho Alto Cadena, Borde, Ln, Alineación, Relleno, Link
$pdf->Cell(0,4,utf8_decode('ESTADÍSTICA GENERAL AH DR. LUIS RAZETTI'),0,1,'C');
$pdf->Cell(0,4,utf8_decode('PERIODO ESCOLAR: 2015-2016'),0,1,'C');
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
$pdf->Cell(22,5,utf8_decode("HEMBRAS"),1,0,'C');
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
$pdf->Cell(23,5,utf8_decode("VARONES"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("HEMBRAS"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("TOTAL"),1,0,'C');
$pdf->Cell(5);
$pdf->Cell(55,5,utf8_decode("Piso 1"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("VARONES"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("HEMBRAS"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("TOTAL"),1,0,'C');
$pdf->Ln();
$pdf->Cell(55,5,utf8_decode("Traumatología"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("VARONES"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("HEMBRAS"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("TOTAL"),1,0,'C');
$pdf->Cell(5);
$pdf->Cell(55,5,utf8_decode("Piso 2"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("VARONES"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("HEMBRAS"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("TOTAL"),1,0,'C');
$pdf->Ln();
$pdf->Cell(55,5,utf8_decode("Otorrinolaringologo"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("VARONES"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("HEMBRAS"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("TOTAL"),1,0,'C');
$pdf->Cell(5);
$pdf->Cell(55,5,utf8_decode("Piso 3"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("VARONES"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("HEMBRAS"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("TOTAL"),1,0,'C');
$pdf->Ln();
$pdf->Cell(55,5,utf8_decode("Pediatría"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("VARONES"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("HEMBRAS"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("TOTAL"),1,0,'C');
$pdf->Cell(5);
$pdf->Cell(55,5,utf8_decode("Piso 4"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("VARONES"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("HEMBRAS"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("TOTAL"),1,0,'C');
$pdf->Ln();
$pdf->Cell(55,5,utf8_decode("Nerología"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("VARONES"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("HEMBRAS"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("TOTAL"),1,0,'C');
$pdf->Cell(5);
$pdf->Cell(55,5,utf8_decode("Piso 5"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("VARONES"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("HEMBRAS"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("TOTAL"),1,0,'C');
$pdf->Ln();
$pdf->Cell(55,5,utf8_decode("Cadiología"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("VARONES"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("HEMBRAS"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("TOTAL"),1,0,'C');
$pdf->Cell(5);
$pdf->Cell(55,5,utf8_decode("Las Garzas I"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("VARONES"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("HEMBRAS"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("TOTAL"),1,0,'C');
$pdf->Ln();
$pdf->Cell(55,5,utf8_decode("Nefrología"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("VARONES"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("HEMBRAS"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("TOTAL"),1,0,'C');
$pdf->Cell(5);
$pdf->Cell(55,5,utf8_decode("Las Garzas II"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("VARONES"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("HEMBRAS"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("TOTAL"),1,0,'C');
$pdf->Ln();
$pdf->Cell(55,5,utf8_decode("Urología"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("VARONES"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("HEMBRAS"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("TOTAL"),1,0,'C');
$pdf->Ln();
$pdf->Cell(55,5,utf8_decode("Neumonología"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("VARONES"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("HEMBRAS"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("TOTAL"),1,0,'C');
$pdf->Ln();
$pdf->Cell(55,5,utf8_decode("Hermatología"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("VARONES"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("HEMBRAS"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("TOTAL"),1,0,'C');
$pdf->Ln();
$pdf->Cell(55,5,utf8_decode("Oncología"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("VARONES"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("HEMBRAS"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("TOTAL"),1,0,'C');
$pdf->Ln();
$pdf->Cell(55,5,utf8_decode("Dermatología"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("VARONES"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("HEMBRAS"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("TOTAL"),1,0,'C');
$pdf->Ln();
$pdf->Cell(55,5,utf8_decode("Gastrología"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("VARONES"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("HEMBRAS"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("TOTAL"),1,0,'C');
$pdf->Ln();
$pdf->Cell(55,5,utf8_decode("Infectología"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("VARONES"),1,0,'C');
$pdf->Cell(23,5,utf8_decode("HEMBRAS"),1,0,'C');
$pdf->Cell(24,5,utf8_decode("TOTAL"),1,0,'C');
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
