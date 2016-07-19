<?php 
/*Formato creado y compartido por José Alberto Chablé de la cruz
  Contacto: cable369@yahoo.com.mx
  Uso sencillo de líneas, cuadros y texto.
  Visita http://laterminal.wordpress.com (blog abandonado =()
*/
require('fpdf/fpdf.php');

//orientación, unidad, formato
$pdf=new FPDF('P','mm','Letter');
$pdf->AddPage();

////Ruta de la imagen "imgs/ver.jpg" modificar función para recuperar el nombre con extensión.
//abcisa, ordenada, ancho, aimgs/ver.jpglto, type, link_url
$pdf->Image('imgs/ver.jpg',10,10,17,0,'','http://www.fpdf.org');
$suscrito = 'C.P. Paco Remes Frias';
$suscrito_puesto = 'SUBDIRECTOR DE REC. FIN.';
$solicita_autorice = 'WAR4412 UNIDAD DE RECURSOS FINANCIEROS';
$solicita_puesto = 'AUXILIAR ADMINISTRATIVO';
$adscrito = 'DEPARTAMENTO DE CONTABILIDAD';
$adscrito_rfc = 'MOAR035941FR001';
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
$pdf->SetFont('Times','B',9);
//Ancho Alto Cadena, Borde, Ln, Alineación, Relleno, Link
$pdf->Cell(0,4,'SERVICIOS DE SALUD DE VERACRUZ',0,1,'C');
$pdf->Cell(0,4,'VIÁTICOS NACIONALES',0,1,'C');
$pdf->Cell(0,4,'AUTORIZACIÓN DE COMISIÓN.',0,1,'C');

$pdf->SetFont('Times','',8);
$pdf->Ln(2);
$pdf->Cell(0,4,'EL SUSCRITO     '.$suscrito,0,0,'L');//
$pdf->Cell(-60); //Mueve el cursor a la posición -60 de DER a IZQ "Valor 0 a la derecha"
$pdf->Cell(0,4,'PUESTO     '.$suscrito_puesto,0,1,'L');
$pdf->Cell(0,4,'SOLICITA SE AUTORICE A      '.$solicita_autorice,0,0,'L');
$pdf->Cell(-60); //Mueve el cursor a la posición -60 de DER a IZQ "Valor 0 a la derecha"
$pdf->Cell(0,4,'PUESTO     '.$solicita_puesto,0,1,'L');
$pdf->Cell(0,4,'ADSCRITO A      '.$adscrito,0,0,'L');
$pdf->Cell(-60); //Mueve el cursor a la posición -60 de DER a IZQ "Valor 0 a la derecha"
$pdf->Cell(0,4,'R.F.C.    '.$adscrito_rfc,0,1,'L');
$pdf->Cell(0,4,'OBJETO DE LA COMISIÓN       '.$objeto_comision,0,1,'L');
$pdf->Ln();	
$pdf->Cell(0,4,'LUGAR(ES) DE COMISIÓN       '.$lugar_comision,0,1,'L');

$pdf->Cell(112); //Mueve el cursor a la posición 112 después de la linea "lugar de comision2"
$pdf->Cell(0,4,'PRESUPUESTO:',0,0,'L');
if(strcasecmp($tipo_presupuesto, 'ESTATAL') == 0){
	$pdf->Cell(-59.5); //Mueve el cursor a la posición -59.5 de DER a IZQ "Valor 0 a la derecha" Marca ESTATAL
}
	else{
		$pdf->Cell(-33.5); //Mueve el cursor a la posición -33.4 de DER a IZQ "Valor 0 a la derecha" Marca FEDERAL
	}
$pdf->Cell(0,4,$presupuesto,0,0,'L');

$pdf->Cell(-55); //Mueve el cursor a la posición -55 de DER a IZQ "Valor 0 a la derecha"
$pdf->Cell(0,4,'ESTATAL',0,0,'L');
$pdf->Cell(-29); //Mueve el cursor a la posición -29 de DER a IZQ "Valor 0 a la derecha"
$pdf->Cell(0,4,'FEDERAL',0,1,'L');
$pdf->Cell(0,4,'CON CARGO AL SUBPROGRAMA O UNIDAD PRESUPUESTAL',0,0,'L');
$pdf->Cell(-65); //Mueve el cursor a la posición -65 de DER a IZQ "Valor 0 a la derecha"
$pdf->Cell(0,4,'OFICIO DE COMISIÓN No '.$oficio_comision,0,1,'L');

$pdf->Ln(5);
$pdf->SetFont('Times','B',7);
$pdf->Cell(0,4,'PERIODO DE COMISIÓN',0,0,'L');
$pdf->Cell(-160); //Mueve el cursor a la posición -160 de DER a IZQ "Valor 0 a la derecha"
$pdf->Cell(0,4,'DÍAS',0,0,'L');
$pdf->Cell(-147); //Mueve el cursor a la posición -147 de DER a IZQ "Valor 0 a la derecha"
$pdf->Cell(0,4,'CUOTA DIARIA',0,0,'L');
$pdf->Cell(-118); //Mueve el cursor a la posición -120 de DER a IZQ "Valor 0 a la derecha"
$pdf->Cell(0,4,'PARCIAL',0,0,'L');

$pdf->Cell(-93); //Mueve el cursor a la posición -65 de DER a IZQ "Valor 0 a la derecha"
$pdf->Cell(0,4,'TOTAL ANTICIPO',0,0,'L');
$pdf->Cell(-60); //Mueve el cursor a la posición -65 de DER a IZQ "Valor 0 a la derecha"
$pdf->Cell(0,4,'COMPROBACIÓN',0,0,'L');
$pdf->Cell(-25); //Mueve el cursor a la posición -65 de DER a IZQ "Valor 0 a la derecha"
$pdf->Cell(0,4,'DIFERENCIA',0,1,'L');

/**********************       Inicio Con Cargo al Subprograma o Unidad Presupuestal       **********************/
$pdf->SetFont('Times','',6.5);	
$pdf->Cell(0.5);		$pdf->Cell(0,4,$periodo_comision,0,0,'L'); //periodo de comision1
$pdf->SetFont('Times','',7);	
$pdf->Cell(-158);		$pdf->Cell(0,4,$dias[0],0,0,'L'); //días1
/*Periodo de Comisión, Días, Signo de moneda+Cuota Diaria, Signo de moneda+Parcial*/
$pdf->SetFont('Times','B',7);
//$pdf->Cell(-149);	$pdf->Cell(0,4,'$           '.number_format($cuota_diaria[0],2,'.',','),0,0,'L'); //cuota diaria1 (47)
$pdf->Cell(-149);	$pdf->Cell(0,4,'$           '.$cuota_diaria[0],0,0,'L'); //cuota diaria1 (47)
$pdf->Cell(-124);	$pdf->Cell(0,4,'$           '.$parcial[0],0,1,'L'); //parcial1 (-124)

$pdf->SetFont('Times','',6.5);	
$pdf->Cell(0.5);		$pdf->Cell(0,4,$periodo_comision,0,0,'L'); //periodo de comision1
$pdf->SetFont('Times','',7);	
$pdf->Cell(-158);		$pdf->Cell(0,4,$dias[1],0,0,'L'); //días1
/*Periodo de Comisión, Días, Signo de moneda+Cuota Diaria, Signo de moneda+Parcial*/
$pdf->SetFont('Times','B',7);
$pdf->Cell(-149);	$pdf->Cell(0,4,'$           '.$cuota_diaria[1],0,0,'L'); //cuota diaria2 (47)
$pdf->Cell(-124);	$pdf->Cell(0,4,'$           '.$parcial[1],0,1,'L'); //parcial2 (-124)

$pdf->SetFont('Times','',6.5);	
$pdf->Cell(0.5);		$pdf->Cell(0,4,$periodo_comision,0,0,'L'); //periodo de comision1
$pdf->SetFont('Times','',7);	
$pdf->Cell(-158);		$pdf->Cell(0,4,$dias[2],0,0,'L'); //días1
/*Periodo de Comisión, Días, Signo de moneda+Cuota Diaria, Signo de moneda+Parcial*/
$pdf->SetFont('Times','B',7);
$pdf->Cell(-149);	$pdf->Cell(0,4,'$           '.$cuota_diaria[2],0,0,'L'); //cuota diaria3 (47)
$pdf->Cell(-124);	$pdf->Cell(0,4,'$           '.$parcial[2],0,0,'L'); //parcial3 (-124)
/**********************       Fin Con Cargo al Subprograma o Unidad Presupuestal       **********************/

$pdf->Cell(-96);	$pdf->Cell(0,4,'$               '.$total_anticipo[0],0,0,'L'); //Total Anticipo
$pdf->Cell(-63);	$pdf->Cell(0,4,'$               '.$comprobacion[0],0,0,'L'); //Comprobación
$pdf->Cell(-30);	$pdf->Cell(0,4,'$               '.$diferencia[0],0,1,'L'); //Diferencia

$pdf->Ln(2);
$fecha = date("j /F /Y");
$fecha = split('/',$fecha);
$fecha = implode('de ',$fecha);
$pdf->Cell(15);		$pdf->Cell(0,4,$lugar.$fecha,0,0,'L'); //Descripción Lugar y Fecha
$pdf->Cell(-123);	$pdf->Cell(0,4,'COMBUSTIBLES',0,1,'L'); //Combustibles y Peajes 1
$pdf->Cell(25);		$pdf->Cell(0,4,'LUGAR Y FECHA',0,0,'L'); //Lugar y Fecha
$pdf->Cell(-118.5);	$pdf->Cell(0,4,'Y PEAJES',0,0,'L'); //Combustibles y Peajes 2
//	 											$combustible_peaje = array('ta'=>5154.54,'comprobacion'=>3531.14);
$pdf->Cell(-96);	$pdf->Cell(0,4,'$               '.$combustible_peaje['ta'],0,0,'L'); //Total Anticipo Combustible
$pdf->Cell(-63);	$pdf->Cell(0,4,'$               '.$combustible_peaje['comprobacion'],0,0,'L'); //Comprobación Combustible
$pdf->Cell(-30);	$pdf->Cell(0,4,'$                ',0,1,'L'); //Diferencia Combustible

$pdf->Cell(74);	$pdf->Cell(20,4,'  VEHICULOS:',1,1,'L'); //Diferencia Combustible
$pdf->SetFont('Times','',7);
$pdf->Ln(1);

if(strcasecmp($tipo_pago, 'EFECTIVO') == 0){
	$efectivo = '                             X';
}
	else{
		$tarjeta = '                                 X';
	}

$pdf->Cell(0,4,'PAGO REALIZADO',0,0,'L'); 
$pdf->Cell(-137);	$pdf->Cell(0,4,'MARCA:             '.$marca_vehiculo,0,1,'L'); 
$pdf->Cell(0,4,'EN EFECTIVO'.$efectivo,0,0,'L'); 
$pdf->Cell(-137);	$pdf->Cell(0,4,'TIPO:                   '.$tipo_vehiculo,0,1,'L'); 
$pdf->Cell(59);	$pdf->Cell(0,4,'PLACAS:            '.$placas_vehiculo,0,1,'L'); 
$pdf->Cell(0,4,'PAGO ABONADO',0,0,'L'); 
$pdf->Cell(-137);	$pdf->Cell(0,4,'Nº ECON:           '.$economico_vehiculo,0,1,'L'); 
$pdf->Cell(0,4,'EN TARJETA',0,1,'L'); 
$pdf->Cell(0,4,'DE DÉBITO'.$tarjeta,0,0,'L'); 
$pdf->SetFont('Times','B',7);
$pdf->Cell(-122);	$pdf->Cell(20,4,'      PASAJES:',1,1,'L'); //Diferencia Combustible
$pdf->SetFont('Times','',7);
$pdf->Ln(1);
$pdf->Cell(0,4,'TARJETA BITAL NUM.      '.$tarjeta_bital,0,0,'L'); 

$pdf->Cell(-122);	$pdf->Cell(0,4,'TERRESTRE',0,0,'L'); 
$pdf->Cell(-96);	$pdf->Cell(0,4,'$',0,0,'L'); //Total Anticipo Pasaje Terrestre 1
$pdf->Cell(-63);	$pdf->Cell(0,4,'$',0,0,'L'); //Comprobación Pasaje Terrestre 2
$pdf->Cell(-30);	$pdf->Cell(0,4,'$',0,1,'L'); //Diferencia Pasaje Terrestre 3

$pdf->Cell(74);	$pdf->Cell(0,4,'AÉREO',0,0,'L'); 
$pdf->Cell(-96);	$pdf->Cell(0,4,'$',0,0,'L'); //Total Anticipo Pasaje Aéreo 1
$pdf->Cell(-63);	$pdf->Cell(0,4,'$',0,0,'L'); //Comprobación Pasaje Aéreo 2
$pdf->Cell(-30);	$pdf->Cell(0,4,'$',0,1,'L'); //Diferencia Pasaje Aéreo 3

$pdf->Cell(60);		$pdf->Cell(0,4,'OTROS',0,0,'L');
$pdf->Cell(-96);	$pdf->Cell(0,4,'$',0,0,'L'); //Total Anticipo Otros 1
$pdf->Cell(-63);	$pdf->Cell(0,4,'$',0,0,'L'); //Comprobación Otros 2
$pdf->Cell(-30);	$pdf->Cell(0,4,'$',0,1,'L'); //Diferencia Otros 3

$pdf->Cell(74);	$pdf->Cell(0,4,'TOTAL',0,0,'L'); 
$pdf->Cell(-96);	$pdf->Cell(0,4,'$',0,0,'L'); //Total Suma 1
$pdf->Cell(-63);	$pdf->Cell(0,4,'$',0,0,'L'); //Comprobación Suma 2
$pdf->Cell(-30);	$pdf->Cell(0,4,'$',0,1,'L'); //Diferencia Suma 3

/*********************** Recepción del Anticipo  ***************************/
$pdf->Ln(2);	$pdf->Cell(0,4,'RECIBÍ EL ANTICIPO',0,1,'C'); 
$pdf->Ln(16.5);	$pdf->Cell(0,4,'FIRMA AUTOGRÁFA',0,1,'C'); 
$pdf->SetFont('Times','',5);
$pdf->Cell(0,3,'CONCLUIDA LA COMISIÓN, ME COMPROMETO A EFECTUAR LA COMPROBACIÓN CORRESPONDIENTE EN UN',0,1,'C'); 
$pdf->Cell(0,3,'TÉRMINO NO MAYOR DE TRES DÍAS, EN CASO CONTRARIO REINTEGRARE EL IMPORTE DE ESTE ANTICIPO',0,1,'C'); 

/*********************** Ampliación y Modificación *************************/
$pdf->Ln(9.5);	$pdf->SetFont('Times','B',7);
$pdf->Cell(0,4,'AMPLIACIÓN DE:',0,1,'C'); 
$pdf->Ln(1);	$pdf->SetFont('Times','',7);					//-------------------------------------------------------------
$pdf->Cell(5);	$pdf->Cell(0,4,'VIÁTICO',0,0,'L'); 
$pdf->Cell(-160);	$pdf->Cell(0,4,'VIAT-24 HRS',0,0,'L'); 
$pdf->Cell(-125);	$pdf->Cell(0,4,'GASOLINA',0,0,'L'); 
$pdf->Cell(-90);	$pdf->Cell(0,4,'PEAJE',0,0,'L'); 
$pdf->Cell(-60);	$pdf->Cell(0,4,'PASAJE',0,0,'L'); 
$pdf->Cell(-25);	$pdf->Cell(0,4,'OTROS',0,1,'L'); 

$pdf->Ln(2);		$pdf->SetFont('Times','B',7);
$pdf->Cell(0,4,'MODIFICACIÓN',0,1,'C'); 
$pdf->Ln(1);	$pdf->SetFont('Times','',7);
$pdf->Cell(48);		$pdf->Cell(0,4,'DÍAS DE COMISIÓN',0,0,'L'); //Texto Cuadro de selección 28
$pdf->Cell(-70);	$pdf->Cell(0,4,'LUGAR',0,1,'L'); //Texto Cuadro de selección			-90

$pdf->Cell(5);		$pdf->Cell(0,4,'IMPORTE'."\t\t\t$".$importe_modificacion,0,1,'L'); 
$pdf->Cell(5);		$pdf->Cell(0,4,'LUGAR(ES) COMISIÓN'."\t\t\t\t".$lugar_modificacion,0,1,'L'); 
$pdf->Cell(5);		$pdf->Cell(0,4,'DÍAS'."\t\t\t\t\t".$dias_modificacion,0,1,'L'); 
$pdf->Cell(5);		$pdf->Cell(0,4,'FECHA'."\t\t\t".$fecha_modificacion,0,1,'L'); 
$pdf->Ln(6);		$pdf->Cell(0,4,$nombre_autoriza,0,1,'C');//Nombre de la persona que autoriza -NOMBRE (OK) O FIRMA (ELIMINAR LINEA Y RESTAURAR SALTO A 11)-
$pdf->Cell(0,4,'AUTORIZÓ',0,1,'C');//Salto de página (11)

/*********************** Firmas del Documento ***************************/
$pdf->Ln(1);
$pdf->Cell(23);		$pdf->Cell(0,3,'SOLICITANTE',0,0,'L'); 
$pdf->Cell(-49);	$pdf->Cell(0,3,'COMISIÓN AUTORIZADA POR',0,1,'L'); 

$pdf->Ln(2);
$pdf->Cell(8);		$pdf->Cell(0,4,$solicitante,0,0,'L'); //Nombre Solicitante
$pdf->Cell(-49);	$pdf->Cell(0,4,$autoriza_comision,0,1,'L'); //Nombre Persona Autoriza Comisión

$pdf->Ln(4);
$pdf->Cell(26);		$pdf->Cell(0,2,'REGISTRO',0,0,'L'); 	
$pdf->Cell(-35);	$pdf->Cell(0,2,'Vo.Bo.',0,1,'L'); 
$pdf->Cell(5);		$pdf->Cell(0,3,'DEPARTAMENTO DE RECURSOS FINANCIEROS',0,0,'L');
$pdf->Cell(-49);	$pdf->Cell(0,3,'EL SUBJEFE ADMINISTRATIVO',0,1,'L'); 

$pdf->Ln(2);
$pdf->Cell(8);		$pdf->Cell(0,4,$responsable_registro,0,0,'L'); //Nombre Responsable Registro Depto R.H.
$pdf->Cell(-49);	$pdf->Cell(0,4,$subjefe_administrativo,0,1,'L'); //Nombre Subjefe Admtivo.

$pdf->Ln(2);		$pdf->SetFont('Times','',5);
$pdf->Cell(2);		$pdf->Cell(0,2,'AL COMPROBAR ANEXAR INFORME DE ACTIVIDADES Y RELACIÓN DE COMPROBANTES',0,1,'L'); 
$pdf->Cell(2);		$pdf->Cell(0,2,'ESTE DOCUMENTO NO ES VÁLIDO CON TACHADURAS Y/O ENMENDADURAS',0,1,'L'); 
/*********************** FIN TEXTO **********************************/

/*********************** INICIO LINEAS ******************************/
//abcisaX1, ordenadaY1, abcisaX2, ordenadaY2
$pdf->Line(32, 27.5, 145, 27.5); //suscrito
$pdf->Line(161, 27.5, 200, 27.5); //suscrito-puesto
$pdf->Line(50, 31.5, 145, 31.5); //solicita
$pdf->Line(161, 31.5, 200, 31.5); //solicita-puesto
$pdf->Line(32, 35.5, 145, 35.5); //adscrito
$pdf->Line(157, 35.5, 200, 35.5); //adscrito-rfc
$pdf->Line(50, 39.5, 200, 39.5); //objeto comisión
$pdf->Line(11, 43.5, 200, 43.5); //objeto comisión2
$pdf->Line(50, 47.5, 200, 47.5); //lugar de comisión
$pdf->Line(11, 51.5, 120, 51.5); //lugar de comisión2
$pdf->Line(110, 56, 200, 56); //oficio de comisión

$pdf->Line(11, 68.5, 41, 68.5); //periodo de comisión1
$pdf->Line(11, 72.5, 41, 72.5); //periodo de comisión2
$pdf->Line(11, 76.5, 41, 76.5); //periodo de comisión3

$pdf->Line(46, 68.5, 55, 68.5); //días1
$pdf->Line(46, 72.5, 55, 72.5); //días2
$pdf->Line(46, 76.5, 55, 76.5); //días2

$pdf->Line(60, 68.5, 79, 68.5); //cuota diaria1
$pdf->Line(60, 72.5, 79, 72.5); //cuota diaria2
$pdf->Line(60, 76.5, 79, 76.5); //cuota diaria3

$pdf->Line(85, 68.5, 104, 68.5); //parcial1
$pdf->Line(85, 72.5, 104, 72.5); //parcial2
$pdf->Line(85, 76.5, 104, 76.5); //parcial3

$pdf->Line(114, 76.5, 136, 76.5); //Total Anticipo Parciales(22)
$pdf->Line(147, 76.5, 169, 76.5); //Comprobación Parciales(22)
$pdf->Line(180, 76.5, 200, 76.5); //Diferencia Parciales(20)

$pdf->Line(11, 82.5, 79, 82.5); //Lugar y Fecha

$pdf->Line(114, 86.5, 136, 86.5); //Total Anticipo Combustible (22)
$pdf->Line(147, 86.5, 169, 86.5); //Comprobación Combustible (22)
$pdf->Line(180, 86.5, 200, 86.5); //Diferencia Combustible (20)

$pdf->Line(85, 95.5, 104, 95.5); //Vehículos Marca
$pdf->Line(85, 99.5, 104, 99.5); //Vehículos Tipo
$pdf->Line(85, 103.5, 104, 103.5); //Vehículos Placas
$pdf->Line(85, 107.5, 104, 107.5); //Vehículos No Económico

$pdf->Line(38, 120.5, 68, 120.5); //Tarjeta BITAL Num

$pdf->Line(114, 120.5, 136, 120.5); //Total Anticipo Terrestre
$pdf->Line(147, 120.5, 169, 120.5); //Comprobación Terrestre(22)
$pdf->Line(180, 120.5, 200, 120.5); //Diferencia Terrestre(20)

$pdf->Line(114, 124.5, 136, 124.5); //Total Anticipo Aéreo
$pdf->Line(147, 124.5, 169, 124.5); //Comprobación Aéreo(22)
$pdf->Line(180, 124.5, 200, 124.5); //Diferencia Aéreo(20)

$pdf->Line(80, 128.5, 100, 128.5); //Total Anticipo Otros
$pdf->Line(114, 128.5, 136, 128.5); //Total Anticipo Otros
$pdf->Line(147, 128.5, 169, 128.5); //Comprobación Otros(22)
$pdf->Line(180, 128.5, 200, 128.5); //Diferencia Otros(20)

$pdf->Line(114, 132.5, 136, 132.5); //Total Suma
$pdf->Line(147, 132.5, 169, 132.5); //Comprobación Suma(22)
$pdf->Line(180, 132.5, 200, 132.5); //Diferencia Suma(20)

$pdf->Line(114, 133, 136, 133); //Total Suma Doble Raya
$pdf->Line(147, 133, 169, 133); //Comprobación Suma Doble Raya(22)
$pdf->Line(180, 133, 200, 133); //Diferencia Suma Doble Raya(20)

$pdf->Line(55, 155.5, 160, 155.5); //Firma Autográfa Superior 160.5 - 164.5
$pdf->Line(55, 159.5, 160, 159.5); //Firma Autográfa Inferior

/*********************** Ampliación y Modificación ***************************/
$pdf->Line(13, 178.5, 203, 178.5); //"Ampliación de" Inferior

$pdf->Line(13, 185.5, 203, 185.5); //"Modificación de" Superior 188.5
$pdf->Line(13, 189.5, 203, 189.5); //"Modificación de" Inferior

$pdf->Line(28, 198.5, 200, 198.5); //Importe - Modificación 201.5 + 4
$pdf->Line(43, 202.5, 200, 202.5); //Lugar de Comision - Modificación
$pdf->Line(24, 206.5, 200, 206.5); //Días - Modificación
$pdf->Line(25, 210.5, 200, 210.5); //Fecha - Modificación
$pdf->Line(75, 220.5, 140, 220.5); //Firma de Autorización

/*********************** Firmas del Documento ***************************/
$pdf->Line(13, 234.5, 69, 234.5); //Solicitante (241.5)
$pdf->Line(147, 234.5, 203, 234.5); //Comisión Autorizada por

$pdf->Line(13, 249.5, 69, 249.5); //Registro Departamento de Recursos Financieros (261.5)
$pdf->Line(147, 249.5, 203, 249.5); //Subjefe Administrativo

/*********************** FIN LINEAS *******************************/

/*********************** INICIO RECTÁNGULOS ***********************/
//Rectángulo  izq sup der inf
$pdf->Rect(147, 48.5, 3, 3); //Cuadro1 Presupuesto Estatal [*]
$pdf->Rect(173, 48.5, 3, 3); //Cuadro2 Presupuesto Federal [*]

$pdf->Rect(44, 96, 3, 3); //Cuadro1 Pago Efectivo 	[*]
$pdf->Rect(43.5, 112, 3, 3); //Cuadro2 pago Tarjeta	[*]

$pdf->Rect( 34, 180.5, 3, 3); //Cuadro 1 Viático 		Tipo de Ampliación	[*]
$pdf->Rect( 74, 180.5, 3, 3); //Cuadro 2 Viat-24hrs 	Tipo de Ampliación	[*]
$pdf->Rect(104, 180.5, 3, 3); //Cuadro 3 Gasolina 	Tipo de Ampliación	[*]
$pdf->Rect(134, 180.5, 3, 3); //Cuadro 4 Peaje		Tipo de Ampliación	[*]
$pdf->Rect(164, 180.5, 3, 3); //Cuadro 5 Pasaje		Tipo de Ampliación	[*]
$pdf->Rect(194, 180.5, 3, 3); //Cuadro 6 Otros		Tipo de Ampliación	[*]

$pdf->Rect(89, 191.5, 3, 3); //Cuadro 1 Día Comisión	Tipo de Modificación	[*]
$pdf->Rect(154, 191.5, 3, 3); //Cuadro 2 Lugar		Tipo de Modificación	[*]

$pdf->Rect(55, 135, 105, 30);//Recibo el Anticipo - Rectangulo central [ ] (35)
$pdf->Rect(13, 175, 190, 50);//Descripción de Ampliación [    ] (55)

/*********************** FIN RECTÁNGULOS *************************/
$pdf->Output();
?>