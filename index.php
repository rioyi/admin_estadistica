<?php


session_start();
//manejamos en sesion el nombre del usuario que se ha logeado
if (!isset($_SESSION["nombre_usuario"])){
    header("location:login.php");
    
}
$id_user = $_SESSION["nombre_usuario"];
require ("pages/control/conexion_bd.php");
$consulta = "SELECT * FROM usuario WHERE id_usuario ='$id_user'";
$query = mysql_query($consulta,$link);
$arreglo = mysql_fetch_array($query);

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema | Estadistico</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- daterange picker -->
        <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- iCheck for checkboxes and radio inputs -->
        <link href="css/iCheck/all.css" rel="stylesheet" type="text/css" />
        <!-- Bootstrap Color Picker -->
        <link href="css/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet"/>
        <!-- Bootstrap time Picker -->
        <link href="css/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

        

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <!-- lo necesario para char.js -->
        <script src="Chartjs/dist/Chart.bundle.js"></script>
        
        <style>
        canvas {
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }
        </style>



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
                                <span>BIENVENIDO <?php echo $arreglo['nombre_usuario']  ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        <?php echo $arreglo['nombre_usuario']  ?> - Tipo de Cuenta <?php echo $arreglo['roles'] ?>                                       
                                    </p>
                                </li>
                                
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Perfil</a>
                                    </div>
                                    <div class="pull-right">                                    
                                        <a href="logout.php" class="btn btn-default btn-flat">Salir</a>
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
                            <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hola, <?php echo $arreglo['nombre_usuario'];  ?></p>
                            <p><?php echo $arreglo['roles'];  ?></p>                            
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
<!-- Menu lateral izquierdo -->                    
<?php 
    include("pages/menu.php");
?>

                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Contenido de los paneles -->
            <!-- Realizar consulta de la base de datos -->
            
            <!-- Finalizado la consulta de la base de datos -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Menú Princiapl
                        <small>Panel de Control</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                        <li class="active">Menú Principal</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Fecha) -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    
                                       <?php
                                       	$dia =  date("d");
                                        $mes =  date("m");
                                        $año = date ("Y");                                       	
                                       ?>
                                    
                                        <h3>
                                            <?php echo "$dia"; ?>
                                            <?php echo "$mes"; ?>
                                            <?php echo "$año"; ?>
                                        </h3>
                                   
                                    <p>                                   	
                                        FECHA DE HOY                                        
                                    </p>    
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a class="small-box-footer">
                                    Fecha Actual <i class="fa fa-calendar"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->

                        <!-- Consulta de la db del ultimo perio registrado "Periodo escolar Actual"-->
                        <?php 
				            require ("pages/control/conexion_bd.php"); 
				            $ultimo = "SELECT * FROM periodo_escolar ORDER BY id_periodo_escolar DESC LIMIT 1";
				            $res_ultimo = mysql_query($ultimo,$link);
				            $renglon = mysql_fetch_array($res_ultimo);
                            $periodo_escolar = $renglon['id_periodo_escolar'];

				        ?>
                        <div class="col-lg-3 col-xs-6">										
                            <!-- small box (Mostrar año escolar actual)-->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        <?php
                                        	echo $renglon['inicio'];
                                        	echo " - ";
                                        	echo $renglon['fin'];
                                        ?>
                                    </h3>
                                    <p>
                                        PERIODO ESCOLAR
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="pages/forms/form_periodo.php" class="small-box-footer">
                                    Periodo escolar actual <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                        <!--Consulta y sumatorio de niños por edad para calcular el total del año escolar -->
                            <?php 
                                
                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='1'");

                                $resultado1 = mysql_result($query,0);
                                                     
                                
                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='2'");
                                $resultado2 = mysql_result($query,0);

                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='3'");
                                $resultado3 = mysql_result($query,0);

                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='4'");
                                $resultado4 = mysql_result($query,0);

                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='5'");
                                $resultado5 = mysql_result($query,0);

                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='6'");
                                $resultado6 = mysql_result($query,0);

                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='7'");
                                $resultado7 = mysql_result($query,0);

                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='8'");
                                $resultado8 = mysql_result($query,0);

                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='9'");
                                $resultado9 = mysql_result($query,0);

                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='10'");
                                $resultado10 = mysql_result($query,0);

                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='11'");
                                $resultado11 = mysql_result($query,0);

                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='12'");
                                $resultado12 = mysql_result($query,0);

                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='13'");
                                $resultado13 = mysql_result($query,0);

                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='14'");
                                $resultado14 = mysql_result($query,0);

                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='15'");
                                $resultado15 = mysql_result($query,0);

                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='16'");
                                $resultado16 = mysql_result($query,0);

                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='17'");
                                $resultado17 = mysql_result($query,0);

                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='18'");
                                $resultado18 = mysql_result($query,0);

                                

                                $sum = $resultado1 + $resultado2 + $resultado3 + $resultado4 + $resultado5 + $resultado6 + $resultado7 + $resultado8 + $resultado9 + $resultado10 + $resultado11 + $resultado12 + $resultado13 + $resultado14 + $resultado15 + $resultado16 + $resultado17 + $resultado18;

                            ?>
                            
                            <!-- small box (Mostrar cantidad NIÑOS registrado periodo escolar)-->
                        <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        <?php
                                            echo "$sum";                                            
                                        ?>
                                    </h3>
                                    <p>
                                        VARONES REGISTRADOS
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    Varones en este Periodo Escolar <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                        <!--Consulta y sumatorio de niños por edad para calcular el total del año escolar -->
                            <?php 
                                
                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='1'");

                                $resultado1 = mysql_result($query,0);
                                                     
                                
                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='2'");
                                $resultado2 = mysql_result($query,0);

                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='3'");
                                $resultado3 = mysql_result($query,0);

                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='4'");
                                $resultado4 = mysql_result($query,0);

                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='5'");
                                $resultado5 = mysql_result($query,0);

                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='6'");
                                $resultado6 = mysql_result($query,0);

                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='7'");
                                $resultado7 = mysql_result($query,0);

                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='8'");
                                $resultado8 = mysql_result($query,0);

                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='9'");
                                $resultado9 = mysql_result($query,0);

                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='10'");
                                $resultado10 = mysql_result($query,0);

                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '1' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='11'");
                                $resultado11 = mysql_result($query,0);

                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='12'");
                                $resultado12 = mysql_result($query,0);

                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='13'");
                                $resultado13 = mysql_result($query,0);

                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='14'");
                                $resultado14 = mysql_result($query,0);

                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='15'");
                                $resultado15 = mysql_result($query,0);

                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='16'");
                                $resultado16 = mysql_result($query,0);

                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='17'");
                                $resultado17 = mysql_result($query,0);

                                $query = mysql_query("SELECT SUM(p1+p2+p3+p4+p5+gi+gii) FROM total_visita_edad WHERE id_sexo = '2' AND id_periodo_escolar='$periodo_escolar' AND id_tipo_edad='18'");
                                $resultado18 = mysql_result($query,0);

                                

                                $sum2 = $resultado1 + $resultado2 + $resultado3 + $resultado4 + $resultado5 + $resultado6 + $resultado7 + $resultado8 + $resultado9 + $resultado10 + $resultado11 + $resultado12 + $resultado13 + $resultado14 + $resultado15 + $resultado16 + $resultado17 + $resultado18;

                            ?>
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <p>
                                    <h3>
                                        <?php 
                                            echo "$sum2";
                                        ?>
                                    </h3>
                                    <p>
                                        HEMBRAS REGISTRADAS
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    Hembras en este Periodo Escolar <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->

                                       

                    <div class="row">
                        <div class="col-md-6">

                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Grafico de proporcion de Niños y Niñas</h3>
                                </div>
                            <!-- inicio de form -->
                        <div>
                             
                             <div id="canvas-holder" style="width:110%">
        <canvas id="chart-area" />
    </div>
    
    <script>

    var sumav ="<?php echo $sum; ?>";
    var sumah ="<?php echo $sum2; ?>"; 

    var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
    };
    var randomColorFactor = function() {
        return Math.round(Math.random() * 255);
    };
    var randomColor = function(opacity) {
        return 'rgba(' + randomColorFactor() + ',' + randomColorFactor() + ',' + randomColorFactor() + ',' + (opacity || '.3') + ')';
    };

    var config = {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [
                    sumah,sumav,
                ],
                backgroundColor: [
                    "#F7464A",
                    "#46BFBD",
                    "#FDB45C",
                    "#949FB1",
                    "#4D5360",
                ],
                label: 'Dataset 1'
            }],
            labels: [
                "Hembras",
                "Varones",
                
            ]
        },
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'GRAFICA POR GENERO'
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    };

    window.onload = function() {
        var ctx = document.getElementById("chart-area").getContext("2d");
        window.myDoughnut = new Chart(ctx, config);
    };

    $('#randomizeData').click(function() {
        $.each(config.data.datasets, function(i, dataset) {
            dataset.data = dataset.data.map(function() {
                return randomScalingFactor();
            });

            dataset.backgroundColor = dataset.backgroundColor.map(function() {
                return randomColor(0.7);
            });
        });

        window.myDoughnut.update();
    });

    $('#addDataset').click(function() {
        var newDataset = {
            backgroundColor: [],
            data: [],
            label: 'New dataset ' + config.data.datasets.length,
        };

        for (var index = 0; index < config.data.labels.length; ++index) {
            newDataset.data.push(randomScalingFactor());
            newDataset.backgroundColor.push(randomColor(0.7));
        }

        config.data.datasets.push(newDataset);
        window.myDoughnut.update();
    });

    $('#addData').click(function() {
        if (config.data.datasets.length > 0) {
            config.data.labels.push('data #' + config.data.labels.length);

            $.each(config.data.datasets, function(index, dataset) {
                dataset.data.push(randomScalingFactor());
                dataset.backgroundColor.push(randomColor(0.7));
            });

            window.myDoughnut.update();
        }
    });

    $('#removeDataset').click(function() {
        config.data.datasets.splice(0, 1);
        window.myDoughnut.update();
    });

    $('#removeData').click(function() {
        config.data.labels.splice(-1, 1); // remove the label first

        config.data.datasets.forEach(function(dataset, datasetIndex) {
            dataset.data.pop();
            dataset.backgroundColor.pop();
        });

        window.myDoughnut.update();
    });
    </script>


                        </div>














                            </div><!-- /.box-body -->
                           
                           
                        </div><!-- /.col (left) -->




                        <div class="col-md-6">
                            <div class="box box-success">
                                <div class="box-header">
                                     <h3 class="box-title">Accesos directos</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                
<!--INICIO OJO!!!!! CONSULTAR ULTIMO REGISTRO DEL PERIODO ESCOLAR-->
                             
<!--FIN OJO!!!!! CONSULTAR ULTIMO REGISTRO DEL PERIODO ESCOLAR-->


                        <p>
                            <a href="pages/forms/form_verificar.php">
                                <button type="button" class="btn btn-info btn-lg btn-block">
                                <h4><span class="glyphicon glyphicon glyphicon-calendar" aria-hidden="true"></span> Registro Estadistico del Mes</h4></button>
                            </a>
                        </p>
                        <p> <a href="pages/forms/form_piso.php">
                                <button type="button" class="btn btn-success btn-lg btn-block">
                                <h4><span class="glyphicon glyphicon glyphicon-eye-open" aria-hidden="true"></span> Consulta De información Mensual</h4></button>
                            </a>
                        </p>
                        <p> <a href="pages/forms/form_docente.php">
                                <button type="button" class="btn btn-warning btn-lg btn-block">
                                <h4><span class="glyphicon glyphicon glyphicon-briefcase" aria-hidden="true"></span> Registro de Docentes</h4></button>
                            </a>
                        </p>
                        <p>
                            <a href="pages/forms/form_usuario.php">
                                <button type="button" class="btn btn-danger btn-lg btn-block">
                                <h4><span class="glyphicon glyphicon glyphicon-user" aria-hidden="true"></span> Registro de Usuarios</h4></button>
                            </a>
                        </p>



                            
                            




                            

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            
                        </div><!-- /.col (right) -->
                    

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


       <!-- jQuery 2.0.2 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script> -->
        <script src="js/jquery-2.2.0.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- InputMask -->
        <script src="js/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
        <script src="js/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
        <script src="js/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
        <!-- date-range-picker -->
        <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- bootstrap color picker -->
        <script src="js/plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>
        <!-- bootstrap time picker -->
        <script src="js/plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
               

    </body>
</html>