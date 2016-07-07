
<?php
require ("../control/conexion_bd.php");



$periodo_escolar = $_POST['periodo_escolar'];


?>
<!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8">
        <title>Sistema | Estadistico</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../../css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- daterange picker -->
        <link href="../../css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- iCheck for checkboxes and radio inputs -->
        <link href="../../css/iCheck/all.css" rel="stylesheet" type="text/css" />
        <!-- Bootstrap Color Picker -->
        <link href="../../css/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet"/>
        <!-- Bootstrap time Picker -->
        <link href="../../css/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>
        <!-- Theme style -->
        <link href="../../css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
     <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Sistema Estadistico
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">


                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Nombre Usuario <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="../../img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        Nombre Usuario - Maestra Piso 1

                                    </p>
                                </li>

                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Perfil</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Salir</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="../../img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hola, Usuario</p>
                        </div>
                    </div>
                    <!-- formulario del Buscador -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Buscar..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.formulario del buscado -->
                    <!-- sidebar del menu: el estilo puedeo ser encontrado en sidebar.less -->
<?php
    include("menu_reporte.php")
?>


                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Consulta estadistica por mes
                        <small>Registro - Vista</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                        <li><a href="#">Formularios</a></li>
                        <li class="active">Consulta del mes</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                     <section class="content">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="box box-info">
                                <div class="box-header">
                                    <p><h3 class="box-title">Resultado de consulta del mes</h3></p>
                                </div>

                            <!-- inicio de form -->
                            <form action="../control/registro_piso.php" method="post" >


                                <div id="#top" class="box-body">
                                   <?php
                                        $sql = "SELECT * FROM periodo_escolar WHERE id_periodo_escolar = '$periodo_escolar'";
                                        $query = mysql_query($sql,$link);
                                        $arreglo = mysql_fetch_array($query);
                                   ?>
                                    <p>
                                        <h1>PERIODO ESCOLAR <span class="label label-info"><?php echo $arreglo['inicio']; echo " - "; echo $arreglo['fin'];  ?></span></h1>
                                      </p>


                                      <a href="#resumen"><button type="button" class="btn btn-success"><b>VER RESUMEN</b></button></a>




                                    <!-- Apellido -->

                                <div class="page-header">
                                  <h1>TOTAL POR EDAD <small>Niños, niñas y adolencentes vistados en las habitaciones, agrupados por edad</small></h1>
                                </div>

                                <!-- Inicio Tabale Por edad -->
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>EDAD</th>
                                                <th>VARONES</th>
                                                <th>HEMBRAS</th>
                                                <th>TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>0 - 11 Meses</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii)FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad = '1'");
                                                    $edad_cero_v = mysql_result($query, 0);
                                                    echo "$edad_cero_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii)FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad = '1'");
                                                    $edad_cero_h = mysql_result($query, 0); echo "$edad_cero_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_edad_cero = $edad_cero_v + $edad_cero_h; echo "$sum_edad_cero";  ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1 Año</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='2'");
                                                    $edad_uno_v = mysql_result($query, 0);
                                                    echo "$edad_uno_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='2'");
                                                    $edad_uno_h = mysql_result($query, 0); echo "$edad_uno_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_edad_uno = $edad_uno_v + $edad_uno_h; echo "$sum_edad_uno";  ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2 Años</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='3'");
                                                    $edad_dos_v = mysql_result($query, 0);
                                                    echo "$edad_dos_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='3'");
                                                    $edad_dos_h = mysql_result($query, 0); echo "$edad_dos_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_edad_dos = $edad_dos_v + $edad_dos_h; echo "$sum_edad_dos";  ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3 Años</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='4'");
                                                    $edad_tres_v = mysql_result($query, 0);
                                                    echo "$edad_tres_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='4'");
                                                    $edad_tres_h = mysql_result($query, 0); echo "$edad_tres_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_edad_tres = $edad_tres_v + $edad_tres_h; echo "$sum_edad_tres";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>4 Años</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='5'");
                                                    $edad_cuatro_v = mysql_result($query, 0);
                                                    echo "$edad_cuatro_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='5'");
                                                    $edad_cuatro_h = mysql_result($query, 0); echo "$edad_cuatro_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_edad_cuatro = $edad_cuatro_v + $edad_cuatro_h; echo "$sum_edad_cuatro";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>5 años</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='6'");
                                                    $edad_cinco_v = mysql_result($query, 0);
                                                    echo "$edad_cinco_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='6'");
                                                    $edad_cinco_h = mysql_result($query, 0); echo "$edad_cinco_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_edad_cinco = $edad_cinco_v + $edad_cinco_h; echo "$sum_edad_cinco";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>6 Años</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='7'");
                                                    $edad_seis_v = mysql_result($query, 0);
                                                    echo "$edad_seis_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='7'");
                                                    $edad_seis_h = mysql_result($query, 0); echo "$edad_seis_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_edad_seis = $edad_seis_v + $edad_seis_h; echo "$sum_edad_seis";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>7 Años</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='8'");
                                                    $edad_siete_v = mysql_result($query, 0);
                                                    echo "$edad_siete_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='8'");
                                                    $edad_siete_h = mysql_result($query, 0); echo "$edad_siete_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_edad_siete = $edad_siete_v + $edad_siete_h; echo "$sum_edad_siete";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>8 Años</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='9'");
                                                    $edad_ocho_v = mysql_result($query, 0);
                                                    echo "$edad_ocho_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='9'");
                                                    $edad_ocho_h = mysql_result($query, 0); echo "$edad_ocho_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_edad_ocho = $edad_ocho_v + $edad_ocho_h; echo "$sum_edad_ocho";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>9 Años</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='10'");
                                                    $edad_nueve_v = mysql_result($query, 0);
                                                    echo "$edad_nueve_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='10'");
                                                    $edad_nueve_h = mysql_result($query, 0); echo "$edad_nueve_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_edad_nueve = $edad_nueve_v + $edad_nueve_h; echo "$sum_edad_nueve";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>10 Años</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='11'");
                                                    $edad_diez_v = mysql_result($query, 0);
                                                    echo "$edad_diez_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='11'");
                                                    $edad_diez_h = mysql_result($query, 0); echo "$edad_diez_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_edad_diez = $edad_diez_v + $edad_diez_h; echo "$sum_edad_diez";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>11 Años</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='12'");
                                                    $edad_once_v = mysql_result($query, 0);
                                                    echo "$edad_once_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='12'");
                                                    $edad_once_h = mysql_result($query, 0); echo "$edad_once_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_edad_once = $edad_once_v + $edad_once_h; echo "$sum_edad_once";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>12 Años</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='13'");
                                                    $edad_doce_v = mysql_result($query, 0);
                                                    echo "$edad_doce_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='13'");
                                                    $edad_doce_h = mysql_result($query, 0); echo "$edad_doce_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_edad_doce = $edad_doce_v + $edad_doce_h; echo "$sum_edad_doce";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>13 Años</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='14'");
                                                    $edad_trece_v = mysql_result($query, 0);
                                                    echo "$edad_trece_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='14'");
                                                    $edad_trece_h = mysql_result($query, 0); echo "$edad_trece_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_edad_trece = $edad_trece_v + $edad_trece_h; echo "$sum_edad_trece";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>14 Años</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='15'");
                                                    $edad_catorce_v = mysql_result($query, 0);
                                                    echo "$edad_catorce_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='15'");
                                                    $edad_catorce_h = mysql_result($query, 0); echo "$edad_catorce_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_edad_catorce = $edad_catorce_v + $edad_catorce_h; echo "$sum_edad_catorce";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>15 Años</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='16'");
                                                    $edad_quince_v = mysql_result($query, 0);
                                                    echo "$edad_quince_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='16'");
                                                    $edad_quince_h = mysql_result($query, 0); echo "$edad_quince_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_edad_quince = $edad_quince_v + $edad_quince_h; echo "$sum_edad_quince";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>16 Años</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='17'");
                                                    $edad_dieciseis_v = mysql_result($query, 0);
                                                    echo "$edad_dieciseis_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='17'");
                                                    $edad_dieciseis_h = mysql_result($query, 0); echo "$edad_dieciseis_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_edad_dieciseis = $edad_dieciseis_v + $edad_dieciseis_h; echo "$sum_edad_dieciseis";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>17 Años</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='18'");
                                                    $edad_diecisiete_v = mysql_result($query, 0);
                                                    echo "$edad_diecisiete_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='18'");
                                                    $edad_diecisiete_h = mysql_result($query, 0); echo "$edad_diecisiete_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_edad_diecisiete = $edad_diecisiete_v + $edad_diecisiete_h; echo "$sum_edad_diecisiete";  ?>
                                                </td>
                                            </tr>

                                    </table>
                                    <h3>TOTAL VARONES <span class="label label-info  "><?php echo $total_edad_v = $edad_cero_v+$edad_uno_v+$edad_dos_v+$edad_tres_v+$edad_cuatro_v+$edad_cinco_v+$edad_seis_v+$edad_siete_v+$edad_ocho_v+$edad_nueve_v+$edad_diez_v+$edad_once_v+$edad_doce_v+$edad_trece_v+$edad_catorce_v+$edad_quince_v+$edad_dieciseis_v+$edad_diecisiete_v;  ?> </span></h3>
                                    <h3>TOTAL HEMBRAS <span class="label label-danger  "><?php echo $total_edad_h = $edad_cero_h+$edad_uno_h+$edad_dos_h+$edad_tres_h+$edad_cuatro_h+$edad_cinco_h+$edad_seis_h+$edad_siete_h+$edad_ocho_h+$edad_nueve_h+$edad_diez_h+$edad_once_h+$edad_doce_h+$edad_trece_h+$edad_catorce_h+$edad_quince_h+$edad_dieciseis_h+$edad_diecisiete_h;  ?> </span>
                                    </h3>
                                    <h3>TOTAL <span class="label label-success  "><?php echo $total_edad_h+$total_edad_v;  ?> </span></h3>


                                    <!-- /Table Por edad-->

                                    <!-- Inicio tabla escolaridad  -->
                                    <div class="page-header">
                                        <h1>TOTAL ESCOLARIDAD
                                            <small>Agrupados por grado de estudio</small>
                                        </h1>
                                    </div>
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>ESCOLARIDAD</th>
                                                <th>VARONES</th>
                                                <th>HEMBRAS</th>
                                                <th>TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>MATERNAL</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='1'");
                                                    $maternal_v = mysql_result($query, 0);
                                                    echo "$maternal_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='1'");
                                                    $maternal_h = mysql_result($query, 0); echo "$maternal_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_maternal = $maternal_v + $maternal_h; echo "$sum_maternal";  ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>I NIVEL</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='2'");
                                                    $nivel_uno_v = mysql_result($query, 0);
                                                    echo "$nivel_uno_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='2'");
                                                    $nivel_uno_h = mysql_result($query, 0); echo "$nivel_uno_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_nivel_uno = $nivel_uno_v + $nivel_uno_h; echo "$sum_nivel_uno";  ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>II NIVEL</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='3'");
                                                    $nivel_dos_v = mysql_result($query, 0);
                                                    echo "$nivel_dos_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='3'");
                                                    $nivel_dos_h = mysql_result($query, 0); echo "$nivel_dos_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_nivel_dos = $nivel_dos_v + $nivel_dos_h; echo "$sum_nivel_dos";  ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>III NIVEL</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='4'");
                                                    $nivel_tres_v = mysql_result($query, 0);
                                                    echo "$nivel_tres_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='4'");
                                                    $nivel_tres_h = mysql_result($query, 0); echo "$nivel_tres_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_nivel_tres = $nivel_tres_v + $nivel_tres_h; echo "$sum_nivel_tres";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>1° GRADO</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='5'");
                                                    $grado_uno_v = mysql_result($query, 0);
                                                    echo "$grado_uno_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='5'");
                                                    $grado_uno_h = mysql_result($query, 0); echo "$grado_uno_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_grado_uno = $grado_uno_v + $grado_uno_h; echo "$sum_grado_uno";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>2° GRADO</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='6'");
                                                    $grado_dos_v = mysql_result($query, 0);
                                                    echo "$grado_dos_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='6'");
                                                    $grado_dos_h = mysql_result($query, 0); echo "$grado_dos_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_grado_dos = $grado_dos_v + $grado_dos_h; echo "$sum_grado_dos";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>3° GRADO</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='7'");
                                                    $grado_tres_v = mysql_result($query, 0);
                                                    echo "$grado_tres_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='7'");
                                                    $grado_tres_h = mysql_result($query, 0); echo "$grado_tres_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_grado_tres = $grado_tres_v + $grado_tres_h; echo "$sum_grado_tres";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>4° GRADO</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='8'");
                                                    $grado_cuatro_v = mysql_result($query, 0);
                                                    echo "$grado_cuatro_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='8'");
                                                    $grado_cuatro_h = mysql_result($query, 0); echo "$grado_cuatro_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_grado_cuatro = $grado_cuatro_v + $grado_cuatro_h; echo "$sum_grado_cuatro";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>5° GRADO</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='9'");
                                                    $grado_cinco_v = mysql_result($query, 0);
                                                    echo "$grado_cinco_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='9'");
                                                    $grado_cinco_h = mysql_result($query, 0); echo "$grado_cinco_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_grado_cinco = $grado_cinco_v + $grado_cinco_h; echo "$sum_grado_cinco";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>6° GRADO</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='10'");
                                                    $grado_seis_v = mysql_result($query, 0);
                                                    echo "$grado_seis_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='10'");
                                                    $grado_seis_h = mysql_result($query, 0); echo "$grado_seis_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_grado_sies = $grado_seis_v + $grado_seis_h; echo "$sum_grado_sies";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>1er AÑO</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='11'");
                                                    $grado_siete_v = mysql_result($query, 0);
                                                    echo "$grado_siete_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='11'");
                                                    $grado_siete_h = mysql_result($query, 0); echo "$grado_siete_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_grado_siente = $grado_siete_v + $grado_siete_h; echo "$sum_grado_siente";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>2do AÑO</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='12'");
                                                    $grado_ocho_v = mysql_result($query, 0);
                                                    echo "$grado_ocho_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='12'");
                                                    $grado_ocho_h = mysql_result($query, 0); echo "$grado_ocho_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res12 = $grado_ocho_v + $grado_ocho_h; echo "$res12";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>3er AÑO</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='13'");
                                                    $grado_nueve_v = mysql_result($query, 0);
                                                    echo "$grado_nueve_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='13'");
                                                    $grado_nueve_h = mysql_result($query, 0); echo "$grado_nueve_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_grado_nueve = $grado_nueve_v + $grado_nueve_h; echo "$sum_grado_nueve";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>4to AÑO</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='14'");
                                                    $grado_diez_v = mysql_result($query, 0);
                                                    echo "$grado_diez_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='14'");
                                                    $grado_diez_h = mysql_result($query, 0); echo "$grado_diez_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_grado_diez = $grado_diez_v + $grado_diez_h; echo "$sum_grado_diez";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>5 AÑO</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='15'");
                                                    $grado_once_v = mysql_result($query, 0);
                                                    echo "$grado_once_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='15'");
                                                    $grado_once_h = mysql_result($query, 0); echo "$grado_once_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_grado_once = $grado_once_v + $grado_once_h; echo "$sum_grado_once";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>S/E</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='16'");
                                                    $grado_sin_v = mysql_result($query, 0);
                                                    echo "$grado_sin_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='16'");
                                                    $grado_sin_h = mysql_result($query, 0); echo "$grado_sin_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_grado_sin = $grado_sin_v + $grado_sin_h; echo "$sum_grado_sin";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>E/E</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='17'");
                                                    $grado_especial_v = mysql_result($query, 0);
                                                    echo "$grado_especial_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='17'");
                                                    $grado_especial_h = mysql_result($query, 0); echo "$grado_especial_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_grado_especial = $grado_especial_v + $grado_especial_h; echo "$sum_grado_especial";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>6to AÑO</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='18'");
                                                    $grado_doce_v = mysql_result($query, 0);
                                                    echo "$grado_doce_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_escolaridad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='18'");
                                                    $grado_doce_h = mysql_result($query, 0); echo "$grado_doce_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_grado_doce = $grado_doce_v + $grado_doce_h; echo "$sum_grado_doce";  ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ESCOLARIDAD</th>
                                                <th>VARONES</th>
                                                <th>HEMBRAS</th>
                                                <th>TOTAL</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <h3>TOTAL VARONES <span class="label label-info  "><?php echo $total_escolar_v = $maternal_v+$nivel_uno_v+$nivel_dos_v+$nivel_tres_v+$grado_uno_v+$grado_dos_v+$grado_tres_v+$grado_cuatro_v+$grado_cinco_v+$grado_seis_v+$grado_siete_v+$grado_ocho_v+$grado_nueve_v+$grado_diez_v+$grado_once_v+$grado_sin_v+$grado_especial_v+$grado_doce_v;  ?> </span></h3>
                                    <h3>TOTAL HEMBRAS <span class="label label-danger  "><?php echo $total_escolar_h = $maternal_h+$nivel_uno_h+$nivel_dos_h+$nivel_tres_h+$grado_uno_h+$grado_dos_h+$grado_tres_h+$grado_cuatro_h+$grado_cinco_h+$grado_seis_h+$grado_siete_h+$grado_ocho_h+$grado_nueve_h+$grado_diez_h+$grado_once_h+$grado_sin_h+$grado_especial_h+$grado_doce_h;  ?> </span>
                                    </h3>
                                    <h3>TOTAL <span class="label label-success  "><?php echo $total_escolar_h+$total_escolar_v;  ?> </span></h3>

                                    <!-- / Escolaridad  -->

                                    <!-- Inicio tabla tiempo de permanencia  -->
                                    <div class="page-header">
                                        <h1>TOTAL TIEMPO DE PERMANENCIA
                                            <small>Agrupados por días y meses</small>
                                        </h1>
                                    </div>
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>TIEMPO DE PERMANENCIA</th>
                                                <th>VARONES</th>
                                                <th>HEMBRAS</th>
                                                <th>TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>0 - 5 Días</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_tiempo_permanencia WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_permanencia='1'");
                                                    $permanencia_cinco_v = mysql_result($query, 0);
                                                    echo "$permanencia_cinco_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_tiempo_permanencia WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_permanencia='1'");
                                                    $permanencia_cinco_h = mysql_result($query, 0); echo "$permanencia_cinco_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_permanencia_cinco = $permanencia_cinco_v + $permanencia_cinco_h; echo "$sum_permanencia_cinco";  ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6 - 10 Días</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_tiempo_permanencia WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_permanencia='2'");
                                                    $permanencia_diez_v = mysql_result($query, 0);
                                                    echo "$permanencia_diez_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_tiempo_permanencia WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_permanencia='2'");
                                                    $permanencia_diez_h = mysql_result($query, 0); echo "$permanencia_diez_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_permanencia_diez = $permanencia_diez_v + $permanencia_diez_h; echo "$sum_permanencia_diez";  ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>11 - 15 Días</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_tiempo_permanencia WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_permanencia='3'");
                                                    $permanencia_quince_v = mysql_result($query, 0);
                                                    echo "$permanencia_quince_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_tiempo_permanencia WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_permanencia='3'");
                                                    $permanencia_quice_h = mysql_result($query, 0); echo "$permanencia_quice_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_permanencia_quice = $permanencia_quince_v + $permanencia_quice_h; echo "$sum_permanencia_quice";  ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>16 - 30 Días</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_tiempo_permanencia WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_permanencia='4'");
                                                    $permanencia_trainta_v = mysql_result($query, 0);
                                                    echo "$permanencia_trainta_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_tiempo_permanencia WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_permanencia='4'");
                                                    $permanencia_trainta_h = mysql_result($query, 0); echo "$permanencia_trainta_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_permanencia_trainta = $permanencia_trainta_v + $permanencia_trainta_h; echo "$sum_permanencia_trainta";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>2 Meses</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_tiempo_permanencia WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_permanencia='5'");
                                                    $permanencia_dosmeses_v = mysql_result($query, 0);
                                                    echo "$permanencia_dosmeses_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_tiempo_permanencia WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_permanencia='5'");
                                                    $permanencia_dosmeses_h = mysql_result($query, 0); echo "$permanencia_dosmeses_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_permanencia_dosmeses = $permanencia_dosmeses_v + $permanencia_dosmeses_h; echo "$sum_permanencia_dosmeses";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>3 Meses</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_tiempo_permanencia WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_permanencia='6'");
                                                    $permanencia_tresmeses_v = mysql_result($query, 0);
                                                    echo "$permanencia_tresmeses_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_tiempo_permanencia WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_permanencia='6'");
                                                    $permanencia_tresmeses_h = mysql_result($query, 0); echo "$permanencia_tresmeses_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_permanencia_tresmeses = $permanencia_tresmeses_v + $permanencia_tresmeses_h; echo "$sum_permanencia_tresmeses";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>+ de 3 Meses</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_tiempo_permanencia WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_permanencia='7'");
                                                    $permanencia_masmeses_v = mysql_result($query, 0);
                                                    echo "$permanencia_masmeses_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_tiempo_permanencia WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_permanencia='7'");
                                                    $permanencia_masmeses_h = mysql_result($query, 0); echo "$permanencia_masmeses_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_permanencia_masmeses = $permanencia_masmeses_v + $permanencia_masmeses_h; echo "$sum_permanencia_masmeses";  ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>TIEMPO DE PERMANENCIA</th>
                                                <th>VARONES</th>
                                                <th>HEMBRAS</th>
                                                <th>TOTAL</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <h3>TOTAL VARONES <span class="label label-info  "><?php echo $total_permanencia_v = $permanencia_cinco_v+$permanencia_diez_v+$permanencia_quince_v+$permanencia_trainta_v+$permanencia_dosmeses_v+$permanencia_tresmeses_v+$permanencia_masmeses_v;  ?> </span></h3>
                                    <h3>TOTAL HEMBRAS <span class="label label-danger  "><?php echo $total_permanencia_h = $permanencia_cinco_h+$permanencia_diez_h+$permanencia_quince_h+$permanencia_trainta_h+$permanencia_dosmeses_h+$permanencia_tresmeses_h+$permanencia_masmeses_h;  ?> </span>
                                    </h3>
                                    <h3>TOTAL <span class="label label-success  "><?php echo $total_permanencia_h+$total_permanencia_v;  ?> </span></h3>
                                    <!-- / Tiempo de permanencia  -->


                                    <!-- Inicio tabla Poblacion Atendida  -->
                                    <div class="page-header">
                                        <h1>TOTAL POBLACION ATENDIDA
                                            <small>Agrupados por Aulas y Habitación</small>
                                        </h1>
                                    </div>
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>LUGAR DE ATENCIÓN</th>
                                                <th>VARONES</th>
                                                <th>HEMBRAS</th>
                                                <th>TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>En Aula</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_poblacion_atendida WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_poblacion_atendida='1'");
                                                    $poblacion_a_aula_v = mysql_result($query, 0);
                                                    echo "$poblacion_a_aula_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_poblacion_atendida WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_poblacion_atendida='1'");
                                                    $poblacion_a_aula_h = mysql_result($query, 0); echo "$poblacion_a_aula_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_poblacion_a_aula = $poblacion_a_aula_v + $poblacion_a_aula_h; echo "$sum_poblacion_a_aula";  ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>En Habitación</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_poblacion_atendida WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_poblacion_atendida='2'");
                                                    $poblacion_a_habitacion_v = mysql_result($query, 0);
                                                    echo "$poblacion_a_habitacion_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_poblacion_atendida WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_poblacion_atendida='2'");
                                                    $poblacion_a_habitacion_h = mysql_result($query, 0); echo "$poblacion_a_habitacion_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_poblacion_a_habitacion = $poblacion_a_habitacion_v + $poblacion_a_habitacion_h; echo "$sum_poblacion_a_habitacion";  ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>TIEMPO DE PERMANENCIA</th>
                                                <th>VARONES</th>
                                                <th>HEMBRAS</th>
                                                <th>TOTAL</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <h3>TOTAL VARONES <span class="label label-info  "><?php echo $total_atendida_v = $poblacion_a_aula_v+$poblacion_a_habitacion_v;  ?> </span></h3>
                                    <h3>TOTAL HEMBRAS <span class="label label-danger  "><?php echo $total_atendida_h = $poblacion_a_aula_h+$poblacion_a_habitacion_h;  ?> </span>
                                    </h3>
                                    <h3>TOTAL <span class="label label-success  "><?php echo $total_atendida_h+$total_atendida_v;  ?> </span>
                                    </h3>
                                    <!-- / Tabla Poblacion Atendida  -->

                                <!-- Inicio tabla Poblacion Referida  -->
                                    <div class="page-header">
                                        <h1>TOTAL POBLACION REFERIDA
                                            <small>Agrupados por Servicios</small>
                                        </h1>
                                    </div>
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>SERVICIO DE REFERENCIA</th>
                                                <th>VARONES</th>
                                                <th>HEMBRAS</th>
                                                <th>TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Defensoria</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_referidos WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_referido='1'");
                                                    $poblacion_r_defen_v = mysql_result($query, 0);
                                                    echo "$poblacion_r_defen_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_referidos WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_referido='1'");
                                                    $poblacion_r_defen_h = mysql_result($query, 0); echo "$poblacion_r_defen_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_poblacion_r_defen = $poblacion_r_defen_v + $poblacion_r_defen_h; echo "$sum_poblacion_r_defen";  ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>CDI</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_referidos WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_referido='2'");
                                                    $poblacion_r_cdi_v = mysql_result($query, 0);
                                                    echo "$poblacion_r_cdi_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_referidos WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_referido='2'");
                                                    $poblacion_r_cdi_h = mysql_result($query, 0); echo "$poblacion_r_cdi_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_poblacion_r_cdi = $poblacion_r_cdi_v + $poblacion_r_cdi_h; echo "$sum_poblacion_r_cdi";  ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Seguro Social</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_referidos WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_referido='3'");
                                                    $poblacion_r_social_v = mysql_result($query, 0);
                                                    echo "$poblacion_r_social_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_referidos WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_referido='3'");
                                                    $poblacion_r_social_h = mysql_result($query, 0); echo "$poblacion_r_social_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_poblacion_r_social = $poblacion_r_social_v + $poblacion_r_social_h; echo "$sum_poblacion_r_social";  ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Psicologia</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_referidos WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_referido='4'");
                                                    $poblacion_r_psicologia_v = mysql_result($query, 0);
                                                    echo "$poblacion_r_psicologia_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_referidos WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_referido='4'");
                                                    $poblacion_r_psicologia_h = mysql_result($query, 0); echo "$poblacion_r_psicologia_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_poblacion_r_psicologia = $poblacion_r_psicologia_v + $poblacion_r_psicologia_h; echo "$sum_poblacion_r_psicologia";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>CAIPA</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_referidos WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_referido='6'");
                                                    $poblacion_r_caipa_v = mysql_result($query, 0);
                                                    echo "$poblacion_r_caipa_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_referidos WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_referido='6'");
                                                    $poblacion_r_caipa_h = mysql_result($query, 0); echo "$poblacion_r_caipa_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_poblacion_r_caipa = $poblacion_r_caipa_v + $poblacion_r_caipa_h; echo "$sum_poblacion_r_caipa";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Integración</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_referidos WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_referido='7'");
                                                    $poblacion_r_integracion_v = mysql_result($query, 0);
                                                    echo "$poblacion_r_integracion_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_referidos WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_referido='7'");
                                                    $poblacion_r_integracion_h = mysql_result($query, 0); echo "$poblacion_r_integracion_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_poblacion_r_integracion = $poblacion_r_integracion_v + $poblacion_r_integracion_h; echo "$sum_poblacion_r_integracion";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>A. Integral</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_referidos WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_referido='8'");
                                                    $poblacion_r_integral_v = mysql_result($query, 0);
                                                    echo "$poblacion_r_integral_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_referidos WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_referido='8'");
                                                    $poblacion_r_integral_h = mysql_result($query, 0); echo "$poblacion_r_integral_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_poblacion_r_integral = $poblacion_r_integral_v + $poblacion_r_integral_h; echo "$sum_poblacion_r_integral";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>CENDA</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_referidos WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_referido='9'");
                                                    $poblacion_r_cenda_v = mysql_result($query, 0);
                                                    echo "$poblacion_r_cenda_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_referidos WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_referido='9'");
                                                    $poblacion_r_cenda_h = mysql_result($query, 0); echo "$poblacion_r_cenda_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_poblacion_r_cenda = $poblacion_r_cenda_v + $poblacion_r_cenda_h; echo "$sum_poblacion_r_cenda";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>UPE</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_referidos WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_referido='10'");
                                                    $poblacion_r_upe_v = mysql_result($query, 0);
                                                    echo "$poblacion_r_upe_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_referidos WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_referido='10'");
                                                    $poblacion_r_upe_h = mysql_result($query, 0); echo "$poblacion_r_upe_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_poblacion_r_upe = $poblacion_r_upe_v + $poblacion_r_upe_h; echo "$sum_poblacion_r_upe";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Articulación</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_referidos WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_referido='11'");
                                                    $poblacion_r_arti_v = mysql_result($query, 0);
                                                    echo "$poblacion_r_arti_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_referidos WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_referido='11'");
                                                    $poblacion_r_arti_h = mysql_result($query, 0); echo "$poblacion_r_arti_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_poblacion_r_arti = $poblacion_r_arti_v + $poblacion_r_arti_h; echo "$sum_poblacion_r_arti";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Otros</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_referidos WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_referido='12'");
                                                    $poblacion_r_otros_v = mysql_result($query, 0);
                                                    echo "$poblacion_r_otros_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_referidos WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_referido='12'");
                                                    $poblacion_r_otros_h = mysql_result($query, 0); echo "$poblacion_r_otros_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_poblacion_r_otros = $poblacion_r_otros_v + $poblacion_r_otros_h; echo "$sum_poblacion_r_otros";  ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>SERVICIO DE REFERENCIA</th>
                                                <th>VARONES</th>
                                                <th>HEMBRAS</th>
                                                <th>TOTAL</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <h3>TOTAL VARONES <span class="label label-info  "><?php echo $total_referido_v = $poblacion_r_defen_v+$poblacion_r_cdi_v+$poblacion_r_social_v+$poblacion_r_psicologia_v+$poblacion_r_caipa_v+$poblacion_r_integracion_v+$poblacion_r_integral_v+$poblacion_r_cenda_v+$poblacion_r_upe_v+$poblacion_r_arti_v+$poblacion_r_otros_v;  ?> </span></h3>
                                    <h3>TOTAL HEMBRAS <span class="label label-danger  "><?php echo $total_referido_h = $poblacion_r_defen_h+$poblacion_r_cdi_h+$poblacion_r_social_h+$poblacion_r_psicologia_h+$poblacion_r_caipa_h+$poblacion_r_integracion_h+$poblacion_r_integral_h+$poblacion_r_cenda_h+$poblacion_r_upe_h+$poblacion_r_arti_h+$poblacion_r_otros_h;  ?> </span>
                                    </h3>
                                    <h3>TOTAL <span class="label label-success  "><?php echo $total_referido_h+$total_referido_v;  ?> </span>
                                    </h3>
                                    <!-- / Tabla Poblacion Referida  -->

                                <!-- Inicio Tabla tipo de atención  -->
                                    <div class="page-header">
                                        <h1>TOTAL TIPO DE ATENCIÓN
                                            <small>Agrupados por Servicios</small>
                                        </h1>
                                    </div>
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>SERVICIO DE ATENCIÓN</th>
                                                <th>VARONES</th>
                                                <th>HEMBRAS</th>
                                                <th>TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Cirugía</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_atencion WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_atencion  ='1'");
                                                    $tipo_a_cirugia_v = mysql_result($query, 0);
                                                    echo "$tipo_a_cirugia_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_atencion WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_atencion='1'");
                                                    $tipo_a_cirugia_h = mysql_result($query, 0); echo "$tipo_a_cirugia_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_tipo_a_cirugia = $tipo_a_cirugia_v + $tipo_a_cirugia_h; echo "$sum_tipo_a_cirugia";  ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Traumatología</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_atencion WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_atencion='2'");
                                                    $tipo_a_trauma_v = mysql_result($query, 0);
                                                    echo "$tipo_a_trauma_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_atencion WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_atencion='2'");
                                                    $tipo_a_trauma_h = mysql_result($query, 0); echo "$tipo_a_trauma_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_tipo_a_trauma = $tipo_a_trauma_v + $tipo_a_trauma_h; echo "$sum_tipo_a_trauma";  ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Otorrinolaringologo</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_atencion WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_atencion='3'");
                                                    $tipo_a_oto_v = mysql_result($query, 0);
                                                    echo "$tipo_a_oto_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_atencion WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_atencion='3'");
                                                    $tipo_a_oto_h = mysql_result($query, 0); echo "$tipo_a_oto_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_tipo_a_oto = $tipo_a_oto_v + $tipo_a_oto_h; echo "$sum_tipo_a_oto";  ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Pediatría</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_atencion WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_atencion='4'");
                                                    $tipo_a_pedia_v = mysql_result($query, 0);
                                                    echo "$tipo_a_pedia_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_atencion WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_atencion='4'");
                                                    $tipo_a_pedia_h = mysql_result($query, 0); echo "$tipo_a_pedia_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_tipo_a_pedia = $tipo_a_pedia_v + $tipo_a_pedia_h; echo "$sum_tipo_a_pedia";  ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Nerología</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_atencion WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_atencion='5'");
                                                    $tipo_a_nero_v = mysql_result($query, 0);
                                                    echo "$tipo_a_nero_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_atencion WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_atencion='5'");
                                                    $tipo_a_nero_h = mysql_result($query, 0); echo "$tipo_a_nero_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_tipo_a_nero = $tipo_a_nero_v + $tipo_a_nero_h; echo "$sum_tipo_a_nero";  ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Cadiología</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_atencion WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_atencion='6'");
                                                    $tipo_a_cardio_v = mysql_result($query, 0);
                                                    echo "$tipo_a_cardio_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_atencion WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_atencion='6'");
                                                    $tipo_a_cardio_h = mysql_result($query, 0); echo "$tipo_a_cardio_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_tipo_a_cardio = $tipo_a_cardio_v + $tipo_a_cardio_h; echo "$sum_tipo_a_cardio";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Nefrología</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_atencion WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_atencion='7'");
                                                    $tipo_a_nefro_v = mysql_result($query, 0);
                                                    echo "$tipo_a_nefro_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_atencion WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_atencion='7'");
                                                    $tipo_a_nefro_h = mysql_result($query, 0); echo "$tipo_a_nefro_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_tipo_a_nefro = $tipo_a_nefro_v + $tipo_a_nefro_h; echo "$sum_tipo_a_nefro";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Urología</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_atencion WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_atencion='8'");
                                                    $tipo_a_uro_v = mysql_result($query, 0);
                                                    echo "$tipo_a_uro_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_atencion WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_atencion='8'");
                                                    $tipo_a_uro_h = mysql_result($query, 0); echo "$tipo_a_uro_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_tipo_a_uro = $tipo_a_uro_v + $tipo_a_uro_h; echo "$sum_tipo_a_uro";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Neumonología</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_atencion WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_atencion='9'");
                                                    $tipo_a_neumo_v = mysql_result($query, 0);
                                                    echo "$tipo_a_neumo_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_atencion WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_atencion='9'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_tipo_a_neumo = $tipo_a_neumo_v + $resultado_h; echo "$sum_tipo_a_neumo";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Hermatología</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_atencion WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_atencion='10'");
                                                    $tipo_a_herma_v = mysql_result($query, 0);
                                                    echo "$tipo_a_herma_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_atencion WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_atencion='10'");
                                                    $tipo_a_herma_h = mysql_result($query, 0); echo "$tipo_a_herma_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_tipo_a_herma = $tipo_a_herma_v + $tipo_a_herma_h; echo "$sum_tipo_a_herma";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Oncología</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_atencion WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_atencion='11'");
                                                    $tipo_a_onco_v = mysql_result($query, 0);
                                                    echo "$tipo_a_onco_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_atencion WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_atencion='11'");
                                                    $tipo_a_onco_h = mysql_result($query, 0); echo "$tipo_a_onco_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_tipo_a_onco = $tipo_a_onco_v + $tipo_a_onco_h; echo "$sum_tipo_a_onco";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Dermatología</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_atencion WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_atencion='12'");
                                                    $tipo_a_derma_v = mysql_result($query, 0);
                                                    echo "$tipo_a_derma_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_atencion WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_atencion='12'");
                                                    $tipo_a_derma_h = mysql_result($query, 0); echo "$tipo_a_derma_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_tipo_a_derma = $tipo_a_derma_v + $tipo_a_derma_h; echo "$sum_tipo_a_derma";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Gastrología</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_atencion WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_atencion='13'");
                                                    $tipo_a_gastro_v = mysql_result($query, 0);
                                                    echo "$tipo_a_gastro_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_atencion WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_atencion='13'");
                                                    $tipo_a_gastro_h = mysql_result($query, 0); echo "$tipo_a_gastro_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_tipo_a_gastro = $tipo_a_gastro_v + $tipo_a_gastro_h; echo "$sum_tipo_a_gastro";  ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Infectología</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_atencion WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_atencion='14'");
                                                    $tipo_a_infecto_v = mysql_result($query, 0);
                                                    echo "$tipo_a_infecto_v";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_atencion WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_atencion='14'");
                                                    $tipo_a_infecto_h = mysql_result($query, 0); echo "$tipo_a_infecto_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $sum_tipo_a_infecto = $tipo_a_infecto_v + $tipo_a_infecto_h; echo "$sum_tipo_a_infecto";  ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>SERVICIO DE ATENCIÓN</th>
                                                <th>VARONES</th>
                                                <th>HEMBRAS</th>
                                                <th>TOTAL</th>
                                            </tr>
                                        </tfoot>
                                    </table>

                                    <!-- / Tabla tipo de atención  -->



                                <!-- Inicio total asistencia -->
                                <div class="page-header">
                                  <h1>TOTAL ASISTENCIA <small>Agrupado el total del todo el mes</small></h1>
                                </div>
                                <!-- Inicio Tabale asistencia   -->

                                    <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>PISO</th>
                                                <th>VARONES</th>
                                                <th>HEMBRAS</th>
                                                <th>TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Piso 1</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p1) FROM total_asistencia WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar'");
                                $asistencia_p1_v = mysql_result($query, 0);
                                echo "$asistencia_p1_v";   ?></td>
                                                 <td><?php $query = mysql_query("SELECT SUM(p1) FROM total_asistencia WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'");
                                $asistencia_p1_h = mysql_result($query, 0); echo "$asistencia_p1_h";  ?></td>
                                                <td><?php $asistencia_p1 = $asistencia_p1_v + $asistencia_p1_h; echo "$asistencia_p1";  ?></td>

                                            </tr>
                                            <tr>
                                                <td>Piso 2</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p2) FROM total_asistencia WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar'");
                                $asistencia_p2_v = mysql_result($query, 0); echo "$asistencia_p2_v";  ?></td>
                                                 <td><?php $query = mysql_query("SELECT SUM(p2) FROM total_asistencia WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'");
                                $asistencia_p2_h = mysql_result($query, 0); echo "$asistencia_p2_h";  ?></td>
                                                <td><?php $asistencia_p2 = $asistencia_p2_v + $asistencia_p2_h; echo "$asistencia_p2";  ?></td>

                                            </tr>
                                            <tr>
                                                <td>Piso 3</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p3) FROM total_asistencia WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar'");
                                $asistencia_p3_v = mysql_result($query, 0); echo "$asistencia_p3_v";  ?></td>
                                                <td><?php $query = mysql_query("SELECT SUM(p3) FROM total_asistencia WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'");
                                $asistencia_p3_h = mysql_result($query, 0); echo "$asistencia_p3_h";  ?></td>
                                                <td><?php $asistencia_p3 = $asistencia_p3_v + $asistencia_p3_h; echo "$asistencia_p3";  ?></td>

                                            </tr>
                                            <tr>
                                                <td>Piso 4</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p4) FROM total_asistencia WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar'");
                                $asistencia_p4_v = mysql_result($query, 0); echo "$asistencia_p4_v";  ?></td>
                                                <td><?php $query = mysql_query("SELECT SUM(p4) FROM total_asistencia WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'");
                                $asistencia_p4_h = mysql_result($query, 0); echo "$asistencia_p4_h";  ?></td>
                                                <td><?php $asistencia_p4 = $asistencia_p4_v + $asistencia_p4_h; echo "$asistencia_p4";  ?></td>
                                            </tr>

                                            <tr>
                                                <td>Piso5</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p5) FROM total_asistencia WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar'");
                                $asistencia_p5_v = mysql_result($query, 0); echo "$asistencia_p5_v";  ?></td>
                                                <td><?php $query = mysql_query("SELECT SUM(p5) FROM total_asistencia WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'");
                                $asistencia_p5_h = mysql_result($query, 0); echo "$asistencia_p5_h";  ?></td>
                                                <td><?php $asistencia_p5 = $asistencia_p5_v + $asistencia_p5_h; echo "$asistencia_p5";  ?></td>
                                            </tr>

                                            <tr>
                                                <td>Garzas I</td>
                                                <td><?php $query = mysql_query("SELECT SUM(gi) FROM total_asistencia WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar'");
                                $asistencia_gi_v = mysql_result($query, 0); echo "$asistencia_gi_v";  ?></td>
                                                <td><?php $query = mysql_query("SELECT SUM(gi) FROM total_asistencia WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'");
                                $asistencia_gi_h = mysql_result($query, 0); echo "$asistencia_gi_h";  ?></td>
                                                <td><?php $asistencia_gi = $asistencia_gi_v + $asistencia_gi_h; echo "$asistencia_gi";  ?></td>
                                            </tr>

                                            <tr>
                                                <td>Garzas II</td>
                                                <td><?php $query = mysql_query("SELECT SUM(gii) FROM total_asistencia WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar'");
                                $asistencia_gii_v = mysql_result($query, 0); echo "$asistencia_gii_v";  ?></td>
                                                <td><?php $query = mysql_query("SELECT SUM(gii) FROM total_asistencia WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar'");
                                $asistencia_gii_h = mysql_result($query, 0); echo "$asistencia_gii_h";  ?></td>
                                                <td><?php $asistencia_gii = $asistencia_gii_v + $asistencia_gii_h; echo "$asistencia_gii";  ?></td>
                                            </tr>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>PISO</th>
                                                <th>VARONES</th>
                                                <th>HEMBRAS</th>
                                                <th>TOTAL</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <!-- /Table asistencia-->

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            <div id="resumen">
                                aca se mostrara un resumen del reporte

                            </div>


                            <a href="anual.php"><button type="button" class="btn btn-info"><b><span class="glyphicon glyphicon-print" aria-hidden="true"></span> IMPRIMIR</b></button></a>
                            <a href="#top"><button type="button" class="btn btn-success"><b><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span> IR A TOP</b></button></a>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            </form>

                        </div><!-- /.col (left) -->



                                </div><!-- /.box-body -->
                            </div><!-- /.box -->


                        </div><!-- /.col (right) -->
                    </div><!-- /.row -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
         <script src="../../js/jquery-2.2.0.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="../../js/bootstrap.min.js" type="text/javascript"></script>
        <!-- InputMask -->
        <script src="../../js/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
        <script src="../../js/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
        <script src="../../js/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
        <!-- date-range-picker -->
        <script src="../../js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- bootstrap color picker -->
        <script src="../../js/plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>
        <!-- bootstrap time picker -->
        <script src="../../js/plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../../js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- Page script -->

    </body>
</html>
