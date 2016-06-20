

<?php

require('fpdf/fpdf.php');

$pdf=new FPDF('L','mm','Letter');
$pdf->AddPage();
 
////Ruta de la imagen "imgs/ver.jpg" modificar función para recuperar el nombre con extensión.
//abcisa, ordenada, ancho, aimgs/ver.jpglto, type, link_url
$pdf->Image('../../img/logo.png',10,10,40,0,'');
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
$pdf->Cell(0,4,'MES: JUNIO     ',0,0,'L');
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
$pdf->Cell(0,4,utf8_decode('MES: JUNIO - PERIODO ESCOLAR: 2015-2016'),0,1,'C');

 

 $pdf->SetFont('Times','',8);
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
$pdf->Cell(0.5);                $pdf->Cell(0,4,$periodo_comision,0,0,'L'); //periodo de comision1
$pdf->SetFont('Times','',7);   
$pdf->Cell(-158);               $pdf->Cell(0,4,$dias[0],0,0,'L'); //días1
/*Periodo de Comisión, Días, Signo de moneda+Cuota Diaria, Signo de moneda+Parcial*/
$pdf->SetFont('Times','B',7);
//$pdf->Cell(-149);     $pdf->Cell(0,4,'$           '.number_format($cuota_diaria[0],2,'.',','),0,0,'L'); //cuota diaria1 (47)
$pdf->Cell(-149);       $pdf->Cell(0,4,'$           '.$cuota_diaria[0],0,0,'L'); //cuota diaria1 (47)
$pdf->Cell(-124);       $pdf->Cell(0,4,'$           '.$parcial[0],0,1,'L'); //parcial1 (-124)
 
$pdf->SetFont('Times','',6.5); 
$pdf->Cell(0.5);                $pdf->Cell(0,4,$periodo_comision,0,0,'L'); //periodo de comision1
$pdf->SetFont('Times','',7);   
$pdf->Cell(-158);               $pdf->Cell(0,4,$dias[1],0,0,'L'); //días1
/*Periodo de Comisión, Días, Signo de moneda+Cuota Diaria, Signo de moneda+Parcial*/
$pdf->SetFont('Times','B',7);
$pdf->Cell(-149);       $pdf->Cell(0,4,'$           '.$cuota_diaria[1],0,0,'L'); //cuota diaria2 (47)
$pdf->Cell(-124);       $pdf->Cell(0,4,'$           '.$parcial[1],0,1,'L'); //parcial2 (-124)
 
$pdf->SetFont('Times','',6.5); 
$pdf->Cell(0.5);                $pdf->Cell(0,4,$periodo_comision,0,0,'L'); //periodo de comision1
$pdf->SetFont('Times','',7);   
$pdf->Cell(-158);               $pdf->Cell(0,4,$dias[2],0,0,'L'); //días1
/*Periodo de Comisión, Días, Signo de moneda+Cuota Diaria, Signo de moneda+Parcial*/
$pdf->SetFont('Times','B',7);
$pdf->Cell(-149);       $pdf->Cell(0,4,'$           '.$cuota_diaria[2],0,0,'L'); //cuota diaria3 (47)
$pdf->Cell(-124);       $pdf->Cell(0,4,'$           '.$parcial[2],0,0,'L'); //parcial3 (-124)
/**********************       Fin Con Cargo al Subprograma o Unidad Presupuestal       **********************/
 
$pdf->Cell(-96);        $pdf->Cell(0,4,'$               '.$total_anticipo[0],0,0,'L'); //Total Anticipo
$pdf->Cell(-63);        $pdf->Cell(0,4,'$               '.$comprobacion[0],0,0,'L'); //Comprobación
$pdf->Cell(-30);        $pdf->Cell(0,4,'$               '.$diferencia[0],0,1,'L'); //Diferencia
 
$pdf->Ln(2);
$fecha = date("j /F /Y");
$fecha = split('/',$fecha);
$fecha = implode('de ',$fecha);
$pdf->Cell(15);         $pdf->Cell(0,4,$lugar.$fecha,0,0,'L'); //Descripción Lugar y Fecha
$pdf->Cell(-123);       $pdf->Cell(0,4,'COMBUSTIBLES',0,1,'L'); //Combustibles y Peajes 1
$pdf->Cell(25);         $pdf->Cell(0,4,'LUGAR Y FECHA',0,0,'L'); //Lugar y Fecha
$pdf->Cell(-118.5);     $pdf->Cell(0,4,'Y PEAJES',0,0,'L'); //Combustibles y Peajes 2
//                                                                                              $combustible_peaje = array('ta'=>5154.54,'comprobacion'=>3531.14);
$pdf->Cell(-96);        $pdf->Cell(0,4,'$               '.$combustible_peaje['ta'],0,0,'L'); //Total Anticipo Combustible
$pdf->Cell(-63);        $pdf->Cell(0,4,'$               '.$combustible_peaje['comprobacion'],0,0,'L'); //Comprobación Combustible
$pdf->Cell(-30);        $pdf->Cell(0,4,'$                ',0,1,'L'); //Diferencia Combustible
 
$pdf->Cell(74); $pdf->Cell(20,4,'  VEHICULOS:',1,1,'L'); //Diferencia Combustible
$pdf->SetFont('Times','',7);
$pdf->Ln(1);
 
if(strcasecmp($tipo_pago, 'EFECTIVO') == 0){
        $efectivo = '                             X';
}
        else{
                $tarjeta = '                                 X';
        }
 
$pdf->Cell(0,4,'PAGO REALIZADO',0,0,'L');
$pdf->Cell(-137);       $pdf->Cell(0,4,'MARCA:             '.$marca_vehiculo,0,1,'L');
$pdf->Cell(0,4,'EN EFECTIVO'.$efectivo,0,0,'L');
$pdf->Cell(-137);       $pdf->Cell(0,4,'TIPO:                   '.$tipo_vehiculo,0,1,'L');
$pdf->Cell(59); $pdf->Cell(0,4,'PLACAS:            '.$placas_vehiculo,0,1,'L');
$pdf->Cell(0,4,'PAGO ABONADO',0,0,'L');
$pdf->Cell(-137);       $pdf->Cell(0,4,'Nº ECON:           '.$economico_vehiculo,0,1,'L');
$pdf->Cell(0,4,'EN TARJETA',0,1,'L');
$pdf->Cell(0,4,'DE DÉBITO'.$tarjeta,0,0,'L');
$pdf->SetFont('Times','B',7);
$pdf->Cell(-122);       $pdf->Cell(20,4,'      PASAJES:',1,1,'L'); //Diferencia Combustible
$pdf->SetFont('Times','',7);
$pdf->Ln(1);
$pdf->Cell(0,4,'TARJETA BITAL NUM.      '.$tarjeta_bital,0,0,'L');
 
$pdf->Cell(-122);       $pdf->Cell(0,4,'TERRESTRE',0,0,'L');
$pdf->Cell(-96);        $pdf->Cell(0,4,'$',0,0,'L'); //Total Anticipo Pasaje Terrestre 1
$pdf->Cell(-63);        $pdf->Cell(0,4,'$',0,0,'L'); //Comprobación Pasaje Terrestre 2
$pdf->Cell(-30);        $pdf->Cell(0,4,'$',0,1,'L'); //Diferencia Pasaje Terrestre 3
 
$pdf->Cell(74); $pdf->Cell(0,4,'AÉREO',0,0,'L');
$pdf->Cell(-96);        $pdf->Cell(0,4,'$',0,0,'L'); //Total Anticipo Pasaje Aéreo 1
$pdf->Cell(-63);        $pdf->Cell(0,4,'$',0,0,'L'); //Comprobación Pasaje Aéreo 2
$pdf->Cell(-30);        $pdf->Cell(0,4,'$',0,1,'L'); //Diferencia Pasaje Aéreo 3
 
$pdf->Cell(60);         $pdf->Cell(0,4,'OTROS',0,0,'L');
$pdf->Cell(-96);        $pdf->Cell(0,4,'$',0,0,'L'); //Total Anticipo Otros 1
$pdf->Cell(-63);        $pdf->Cell(0,4,'$',0,0,'L'); //Comprobación Otros 2
$pdf->Cell(-30);        $pdf->Cell(0,4,'$',0,1,'L'); //Diferencia Otros 3
 
$pdf->Cell(74); $pdf->Cell(0,4,'TOTAL',0,0,'L');
$pdf->Cell(-96);        $pdf->Cell(0,4,'$',0,0,'L'); //Total Suma 1
$pdf->Cell(-63);        $pdf->Cell(0,4,'$',0,0,'L'); //Comprobación Suma 2
$pdf->Cell(-30);        $pdf->Cell(0,4,'$',0,1,'L'); //Diferencia Suma 3
 
/*********************** Recepción del Anticipo  ***************************/
$pdf->Ln(2);    $pdf->Cell(0,4,'RECIBÍ EL ANTICIPO',0,1,'C');
$pdf->Ln(16.5); $pdf->Cell(0,4,utf8_decode('FIRMA AUTOGRÁFA'),0,1,'C');
$pdf->SetFont('Times','',5);
$pdf->Cell(0,3,'CONCLUIDA LA COMISIÓN, ME COMPROMETO A EFECTUAR LA COMPROBACIÓN CORRESPONDIENTE EN UN',0,1,'C');
$pdf->Cell(0,3,'TÉRMINO NO MAYOR DE TRES DÍAS, EN CASO CONTRARIO REINTEGRARE EL IMPORTE DE ESTE ANTICIPO',0,1,'C');
 

 
/*********************** FIN RECTÁNGULOS *************************/
$pdf->Output();
?>

