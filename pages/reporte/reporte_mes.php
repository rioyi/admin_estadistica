
<?php
require ("../control/conexion_bd.php");


$mes = $_POST['mes'];
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
                        Sección Pisos o Departamentos
                        <small>Registro - Vista</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                        <li><a href="#">Formularios</a></li>
                        <li class="active">Formulario Pisos/Departamento</li>
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
                                    <h3 class="box-title">Menú Registro Periodo Escolar</h3>
                                </div>                                                        
                                
                            </div><!-- /.box -->                       
                        </div><!-- /.col (left) -->
                        <div class="col-md-12">                            
                            <div class="box box-info">
                                <div class="box-header">
                                    <p><h3 class="box-title">Resultado de consulta del mes</h3></p>                                    
                                </div>
                                
                            <!-- inicio de form -->
                            <form action="../control/registro_piso.php" method="post" >


                                <div class="box-body">
                                   
                                    <label>Datos consultados</label>
                                    <p>
                                      Periodo Escolar consultado: <?php  echo $periodo_escolar; ?></p>
                                      <p>Mes consultado: <?php  echo $mes; ?></p>


                                   

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
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='1'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='1'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td>1 Año</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='2'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='2'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td>2 Años</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='3'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='3'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td>3 Años</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='4'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='4'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>4 Años</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='5'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='5'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>5 años</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='6'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='6'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>6 Años</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='7'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='7'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>7 Años</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='8'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='8'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>8 Años</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='9'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='9'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>9 Años</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='10'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='10'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>10 Años</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='11'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='11'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>11 Años</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='12'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='12'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>12 Años</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='13'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='13'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>13 Años</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='14'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='14'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>14 Años</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='15'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='15'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>15 Años</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='16'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='16'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>16 Años</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='17'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='17'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>17 Años</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='18'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_visita_edad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_edad='18'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            
                                          
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>EDAD</th>
                                                <th>VARONES</th>
                                                <th>HEMBRAS</th>
                                                <th>TOTAL</th>                                                
                                            </tr>
                                        </tfoot>
                                    </table>
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
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='1'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='1'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td>I NIVEL</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='2'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='2'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td>II NIVEL</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='3'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='3'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td>III NIVEL</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='4'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='4'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>1° GRADO</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='5'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='5'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>2° GRADO</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='6'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='6'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>3° GRADO</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='7'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='7'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>4° GRADO</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='8'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='8'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>5° GRADO</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='9'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='9'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>6° GRADO</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='10'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='10'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>1er AÑO</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='11'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='11'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>2do AÑO</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='12'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='12'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>3er AÑO</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='13'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='13'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>4to AÑO</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='14'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='14'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>5 AÑO</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='15'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='15'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>S/E</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='16'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='16'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>E/E</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='17'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='17'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>6to AÑO</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_escolaridad='18'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_escolaridad WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_escolaridad='18'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
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
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_tiempo_permanencia WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_permanencia='1'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_tiempo_permanencia WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_permanencia='1'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td>6 - 10 Días</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_tiempo_permanencia WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_permanencia='2'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_tiempo_permanencia WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_permanencia='2'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td>11 - 15 Días</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_tiempo_permanencia WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_permanencia='3'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_tiempo_permanencia WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_permanencia='3'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td>16 - 30 Días</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_tiempo_permanencia WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_permanencia='4'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_tiempo_permanencia WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_permanencia='4'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>2 Meses</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_tiempo_permanencia WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_permanencia='5'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_tiempo_permanencia WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_permanencia='5'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>3 Meses</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_tiempo_permanencia WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_permanencia='6'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_tiempo_permanencia WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_permanencia='6'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>+ de 3 Meses</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_tiempo_permanencia WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_permanencia='7'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_tiempo_permanencia WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_permanencia='7'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
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
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_poblacion_atendida WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_poblacion_atendida='1'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_poblacion_atendida WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_poblacion_atendida='1'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td>En Habitación</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_poblacion_atendida WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_poblacion_atendida='2'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_poblacion_atendida WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_poblacion_atendida='2'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
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
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_referidos WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_referido='1'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_referidos WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_referido='1'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td>CDI</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_referidos WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_referido='2'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_referidos WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_referido='2'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td>Seguro Social</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_referidos WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_referido='3'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_referidos WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_referido='3'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td>Psicologia</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_referidos WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_referido='4'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_referidos WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_referido='4'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td>Psicologia</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_referidos WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_referido='5'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_referidos WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_referido='5'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td>CAIPA</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_referidos WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_referido='6'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_referidos WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_referido='6'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>Integración</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_referidos WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_referido='7'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_referidos WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_referido='7'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>  

                                            <tr>
                                                <td>A. Integral</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_referidos WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_referido='8'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_referidos WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_referido='8'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>  

                                            <tr>
                                                <td>CENDA</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_referidos WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_referido='9'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_referidos WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_referido='9'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>UPE</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_referidos WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_referido='10'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_referidos WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_referido='10'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>Articulación</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_referidos WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_referido='11'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_referidos WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_referido='11'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>Otros</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_referidos WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_referido='12'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_referidos WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_referido='12'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
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
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_atencion WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_atencion  ='1'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_atencion WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_atencion='1'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td>Traumatología</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_atencion WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_atencion='2'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_atencion WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_atencion='2'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td>Otorrinolaringologo</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_atencion WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_atencion='3'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_atencion WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_atencion='3'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td>Pediatría</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_atencion WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_atencion='4'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_atencion WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_atencion='4'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td>Nerología</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_atencion WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_atencion='5'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_atencion WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_atencion='5'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td>Cadiología</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_atencion WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_atencion='6'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_atencion WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_atencion='6'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>Nefrología</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_atencion WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_atencion='7'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_atencion WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_atencion='7'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>  

                                            <tr>
                                                <td>Urología</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_atencion WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_atencion='8'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_atencion WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_atencion='8'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>  

                                            <tr>
                                                <td>Neumonología</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_atencion WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_atencion='9'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_atencion WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_atencion='9'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>Hermatología</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_atencion WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_atencion='10'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_atencion WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_atencion='10'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>Oncología</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_atencion WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_atencion='11'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_atencion WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_atencion='11'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>Dermatología</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_atencion WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_atencion='12'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_atencion WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_atencion='12'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>Gastrología</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_atencion WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_atencion='13'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_atencion WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_atencion='13'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
                                                </td>                                                
                                            </tr>

                                            <tr>
                                                <td>Infectología</td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_atencion WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar' AND  id_tipo_atencion='14'");
                                                    $resultado = mysql_result($query, 0);
                                                    echo "$resultado";   ?>
                                                </td>
                                                <td><?php $query = mysql_query("SELECT p1+p2+p3+p4+p5+gi+gii FROM total_atencion WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'  AND id_tipo_atencion='14'");
                                                    $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?>
                                                </td>
                                                <td>
                                                    <?php $res = $resultado + $resultado_h; echo "$res";  ?>
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
                                                <td><?php $query = mysql_query("SELECT SUM(p1) FROM total_asistencia WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'");
                                $resultado = mysql_result($query, 0);
                                echo "$resultado";   ?></td>
                                                 <td><?php $query = mysql_query("SELECT SUM(p1) FROM total_asistencia WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'");
                                $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?></td>
                                                <td><?php $res = $resultado + $resultado_h; echo "$res";  ?></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Piso 2</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p2) FROM total_asistencia WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'");
                                $resultado = mysql_result($query, 0); echo "$resultado";  ?></td>
                                                 <td><?php $query = mysql_query("SELECT SUM(p2) FROM total_asistencia WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'");
                                $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?></td>
                                                <td><?php $res = $resultado + $resultado_h; echo "$res";  ?></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Piso 3</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p3) FROM total_asistencia WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'");
                                $resultado = mysql_result($query, 0); echo "$resultado";  ?></td>
                                                <td><?php $query = mysql_query("SELECT SUM(p3) FROM total_asistencia WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'");
                                $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?></td>
                                                <td><?php $res = $resultado + $resultado_h; echo "$res";  ?></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Piso 4</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p4) FROM total_asistencia WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'");
                                $resultado = mysql_result($query, 0); echo "$resultado";  ?></td>
                                                <td><?php $query = mysql_query("SELECT SUM(p4) FROM total_asistencia WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'");
                                $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?></td>
                                                <td><?php $res = $resultado + $resultado_h; echo "$res";  ?></td>             
                                            </tr>

                                            <tr>
                                                <td>Piso5</td>
                                                <td><?php $query = mysql_query("SELECT SUM(p5) FROM total_asistencia WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'");
                                $resultado = mysql_result($query, 0); echo "$resultado";  ?></td>
                                                <td><?php $query = mysql_query("SELECT SUM(p5) FROM total_asistencia WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'");
                                $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?></td>
                                                <td><?php $res = $resultado + $resultado_h; echo "$res";  ?></td>             
                                            </tr>

                                            <tr>
                                                <td>Garzas I</td>
                                                <td><?php $query = mysql_query("SELECT SUM(gi) FROM total_asistencia WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'");
                                $resultado = mysql_result($query, 0); echo "$resultado";  ?></td>
                                                <td><?php $query = mysql_query("SELECT SUM(gi) FROM total_asistencia WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'");
                                $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?></td>
                                                <td><?php $res = $resultado + $resultado_h; echo "$res";  ?></td>             
                                            </tr>

                                            <tr>
                                                <td>Garzas II</td>
                                                <td><?php $query = mysql_query("SELECT SUM(gii) FROM total_asistencia WHERE id_sexo = '1'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'");
                                $resultado = mysql_result($query, 0); echo "$resultado";  ?></td>
                                                <td><?php $query = mysql_query("SELECT SUM(gii) FROM total_asistencia WHERE id_sexo = '2'AND id_mes='$mes' AND id_periodo_escolar='$periodo_escolar'");
                                $resultado_h = mysql_result($query, 0); echo "$resultado_h";  ?></td>
                                                <td><?php $res = $resultado + $resultado_h; echo "$res";  ?></td>             
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



















                                    <button type="submit" class="btn btn-primary">REGISTRAR</button>

                                   

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
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
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
        <script type="text/javascript">
            $(function() {
                //Datemask dd/mm/yyyy
                $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
                //Datemask2 mm/dd/yyyy
                $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
                //Money Euro
                $("[data-mask]").inputmask();

                //Date range picker
                $('#reservation').daterangepicker();
                //Date range picker with time picker
                $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
                //Date range as a button
                $('#daterange-btn').daterangepicker(
                        {
                            ranges: {
                                'Today': [moment(), moment()],
                                'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                                'Last 7 Days': [moment().subtract('days', 6), moment()],
                                'Last 30 Days': [moment().subtract('days', 29), moment()],
                                'This Month': [moment().startOf('month'), moment().endOf('month')],
                                'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                            },
                            startDate: moment().subtract('days', 29),
                            endDate: moment()
                        },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                }
                );

                //iCheck for checkbox and radio inputs
                $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                    checkboxClass: 'icheckbox_minimal',
                    radioClass: 'iradio_minimal'
                });
                //Red color scheme for iCheck
                $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                    checkboxClass: 'icheckbox_minimal-red',
                    radioClass: 'iradio_minimal-red'
                });
                //Flat red color scheme for iCheck
                $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                    checkboxClass: 'icheckbox_flat-red',
                    radioClass: 'iradio_flat-red'
                });

                //Colorpicker
                $(".my-colorpicker1").colorpicker();
                //color picker with addon
                $(".my-colorpicker2").colorpicker();

                //Timepicker
                $(".timepicker").timepicker({
                    showInputs: false
                });
            });
        </script>

    </body>
</html>