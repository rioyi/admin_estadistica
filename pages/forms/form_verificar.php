
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
                                    <img src="img/avatar3.png" class="img-circle" alt="User Image" />
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
                            <img src="../img/avatar3.png" class="img-circle" alt="User Image" />
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
    include("menu_form.php")
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
                        Sección Resgistro Mensual                     <small>Registro - Verificación</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                        <li><a href="#">Formularios</a></li>
                        <li class="active">Formulario Registro Mensual</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Menú Registro Periodo Escolar</h3>
                                </div>                                                        
                                <div class="box-body">                                
                                
                                    <!-- inicio div pills nav -->
                                   
                                         <ul class="nav nav-pills nav-stacked">
                                            <li role="presentation" class="active"><a href="#tab1" data-toggle="tab"> PERIODO Y MES ESCOLAR</a></li>
                                            <li class="divider" role="presentation"><a href="#tab2" data-toggle="tab">ESCOLARIDAD</a></li>
                                            <li role="presentation" ><a href="#tab3" data-toggle="tab">POBLACIÓN ATENDIDA</a></li>
                                            <li role="presentation"><a href="#tab4" data-toggle="tab"> VISITA POR EDADES</a></li>
                                            <li class="divider" role="presentation"><a href="#tab5" data-toggle="tab">TIEMPO DE PERMANENCIA</a></li>
                                            <li role="presentation" ><a href="#tab6" data-toggle="tab">POBLACIÓN REFERIDA</a></li>
                                            <li role="presentation"><a href="#tab7" data-toggle="tab"> TIPO DE ATENCIÓN</a></li>
                                            <!-- <li class="divider" role="presentation"><a href="#tab8" data-toggle="tab">AREA DE ATENCIÓN</a></li> -->
                                            <li role="presentation" ><a href="#tab8" data-toggle="tab">ASISTENCIA</a></li>

                                        </ul>                                       
                                    <!-- cierre del div container-->                                    
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->                       
                        </div><!-- /.col (left) -->
						<form action="../control/registro_data_mes.php" method="POST">	
                        <div class="tab-content">
<!-- INICIO TAB1 -->            <div class="tab-pane active" id="tab1">
                                    <div class="col-md-8">
                                        <div class="box box-success">
                                            <div class="box-header">
                                                 <h3 class="box-title">Periodo y Mes Escolar</h3>
                                            </div><!-- /.box-header -->
                                            <div class="box-body">                                
                                            <!-- PERIODO ESCOLAR -->
                                                <div class="alert alert-success" role="alert">
                                                    <CENTER>
                                                        <H2>
                                                            <span class="glyphicon gl$periodo_e = $_POST['periodo_e'];
yphicon-calendar" aria-hidden="true"></span>
                                                            Periodo Escolar Actual
                                                            <!--INICIO OJO!!!!! CONSULTAR ULTIMO REGISTRO DEL PERIODO ESCOLAR-->
                                                                <?php
                                                                require ("../control/conexion_bd.php");
                                                                $ultimo="SELECT * FROM periodo_escolar order by id_periodo_escolar desc limit 1";
                                                                $res_ultimo = mysql_query($ultimo,$link);
                                                                $renglon=mysql_fetch_array($res_ultimo);

                                                                echo $renglon['inicio'];
                                                                echo "-";
                                                                echo $renglon['fin'];
                                                                ?><!--FIN OJO!!!!! CONSULTAR ULTIMO REGISTRO DEL PERIODO ESCOLAR-->  
                                                                <input type="hidden" name="periodo_e" value="<?php echo $renglon['id_periodo_escolar']; ?>" />
                                                                    
                                                                
                                                        </H2>
                                                    </CENTER>
                                                </div> <!-- /.alert -->                                  
                                                    <!-- select dinamico -->
                                                    <div class="form-group">
                                                        <h3>SELECCIONAR MES</h3>
                                                        <select class="form-control" name="mes">
                                                            <option value="1">Enero</option>
                                                            <option value="2">Febrero</option>
                                                            <option value="3">Marzo</option>
                                                            <option value="4">Abril</option>
                                                            <option value="5">Mayo</option>
                                                            <option value="6">Junio</option>
                                                            <option value="7">Julio</option>
                                                            <option value="8">Agosto</option>
                                                            <option value="9">Septiembre</option>
                                                            <option value="10">Octubre</option>
                                                            <option value="11">Noviembre</option>
                                                            <option value="12">Diciembre</option>                       
                                                        </select>
                                                    </div>  <!-- /.form-group   Select Dinamico -->                             
                                            </div><!-- /.box-body -->                           
                                    </div><!-- /.col (right) -->
                            </div> <!-- ./tab-pane--> 

                                </div><!-- /div tab1 -->

<!--* INICIO TAB2 -->            <div class="tab-pane" id="tab2">

                                            <div class="col-md-8">                                               
                                                <div class="box box-success">
                                                    <div class="box-header">
                                                         <h3 class="box-title">ESCOLARIDAD</h3>
                                                    </div><!-- /.box-header -->
                                                        <div class="box-body">                                       
                                                            <div class="alert alert-success" role="alert">          
                                                                <CENTER>
                                                                    <H2>
                                                                        <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                                                                        Escolaridad                                  
                                                                    </H2>
                                                                </CENTER>
                                                                </div>
                                                                
                                                            </div> <!-- /.alert -->                                      
                                                        </div><!-- /.box-body -->
                                                </div> <!-- ./box box-success-->
                                                <!-- inicio panel 2 -->
                                                <div class="col-md-8">                                               
                                                    <div class="box box-success">
                                                        <div class="box-header">
                                                             <h3 class="box-title">Escolaridad </h3>
                                                        </div><!-- /.box-header -->
                                                            <div class="box-body">
                                                                <div class="alert alert-info" role="alert">
                                                                    <CENTER>
                                                                        <H3>
                                                                            <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                                                                            VARONES
                                                                            
                                                                        </H3>
                                                                    </CENTER>
                                                                </div> <!-- /.alert -->
                                                                <div class="row">
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label>Maternal</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="maternal_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Nivel 1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="nivel1_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Nivel 2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="nivel2_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Nivel 3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="nivel3_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>1° Grado</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="g1_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>2° Grado</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="g2_p1_v">
                                                <!-- P2 -->         </div><!-- .col-xs-3 P2 -->
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="maternal_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="nivel1_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="nivel2_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="nivel3_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="g1_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="g2_p2_v">
                                                    <!-- P3 -->     </div><!-- .col-xs-3 p2-->
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="maternal_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="nivel1_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="nivel2_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="nivel3_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="g1_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="g2_p3_v">
                                                <!-- P3 -->         </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="maternal_p4_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="nivel1_p4_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="nivel2_p4_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="nivel3_p4_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="g1_p4_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="g2_p4_v">
                                                <!-- P4 -->         </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="maternal_p5_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="nivel1_p5_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="nivel2_p5_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="nivel3_p5_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="g1_p5_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="g2_p5_v">
                                                <!-- P5 -->         </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="gi" name="maternal_gi_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="gi" name="nivel1_gi_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="gi" name="nivel2_gi_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="gi" name="nivel3_gi_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="gi" name="g1_gi_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="gi" name="g2_gi_v">
                                                <!-- gi -->         </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="gii" name="maternal_gii_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="gii" name="nivel1_gii_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="gii" name="nivel2_gii_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="gii" name="nivel3_gii_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="gii" name="g1_gii_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="gii" name="g2_gii_v">
                                                <!-- gii -->         </div><!-- .col-xs-3 -->  

                                                                    
                                                                    

                                                                </div><!-- ./row -->
                                                            </div><!-- /.box-body -->                               
                                                </div><!-- /.col-med-8 -->                                    

                                            </div> <!-- ./tab-pane-->

                                                        <div class="col-md-6">                                      
                                                            <div class="box box-success">
                                                                <div class="box-header">
                                                                     <h3 class="box-title">ESCOLARIDAD</h3>
                                                                </div><!-- /.box-header -->
                                                                    <div class="box-body">                           
                                                                        <div class="alert alert-info" role="alert"> 
                                                                            <CENTER>
                                                                                <H3>
                                                                                    <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                                                                                    VARONES                             
                                                                                </H3>
                                                                            </CENTER>                                
                                                                        </div> <!-- /.alert -->
                                                                        <div class="row">
                                                                   <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label>3°do</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="g3_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>4°do</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="g4_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>5°do</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="g5_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>6°do</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="g6_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>7°mo</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="g7_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>8°vo</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="g8_p1_v">
                                                <!-- P2 -->         </div><!-- .col-xs-3 P2 -->
                                                                     <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="g3_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="g4_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="g5_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="g6_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="g7_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="g8_p2_v">
                                                <!-- P3 -->         </div><!-- .col-xs-3 P2 -->
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="g3_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="g4_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="g5_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="g6_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="g7_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="g8_p3_v">
                                                <!-- P4 -->         </div><!-- .col-xs-3 P2 -->
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="g3_p4_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="g4_p4_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="g5_p4_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="g6_p4_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="g7_p4_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="g8_p4_v">
                                                <!-- P5 -->         </div><!-- .col-xs-3 P2 -->  
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="g3_p5_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="g4_p5_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="g5_p5_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="g6_p5_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="g7_p5_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="g8_p5_v">
                                                <!-- gi -->         </div><!-- .col-xs-3 P2 -->
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="g3_gi_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="g4_gi_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="g5_gi_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="g6_gi_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="g7_gi_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="g8_gi_v">
                                                <!-- gii -->         </div><!-- .col-xs-3 P2 -->
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="g3_gii_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="g4_gii_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="g5_gii_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="g6_gii_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="g7_gii_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="g8_gii_v">
                                                <!-- gii -->         </div><!-- .col-xs-3 P2 -->

                                                                </div><!-- ./row -->
                                                                    </div><!-- /.box-body -->
                                                            </div> <!-- ./box box-success-->
                                                        </div> <!-- /.col-med-7 -->


                                                        <div class="col-md-6">                                      
                                                            <div class="box box-success">
                                                                <div class="box-header">
                                                                     <h3 class="box-title">ESCOLARIDAD</h3>
                                                                </div><!-- /.box-header -->
                                                                    <div class="box-body">                           
                                                                        <div class="alert alert-info" role="alert"> 
                                                                            <CENTER>
                                                                                <H3>
                                                                                    <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                                                                                    VARONES                             
                                                                                </H3>
                                                                            </CENTER>                                
                                                                        </div> <!-- /.alert -->
                                                                        <div class="row">
                                                                   <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label>9°no</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="g9_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>1Año</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="g10_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>2Año</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="g11_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>3Año</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="g12_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>S/E</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="g13_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>E/E</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="g14_p1_v">
                                                <!-- P2 -->         </div><!-- .col-xs-3 P2 -->
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="g9_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="g10_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="g11_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="g12_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="g13_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="g14_p2_v">
                                                <!-- P3 -->         </div><!-- .col-xs-3 P2 -->
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="g9_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="g10_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="g11_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="g12_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="g13_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="g14_p3_v">
                                                <!-- P2 -->         </div><!-- .col-xs-3 P2 -->
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="g9_p4_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="g10_p4_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="g11_p4_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="g12_p4_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="g13_p4_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="g14_p4_v">
                                                <!-- P2 -->         </div><!-- .col-xs-3 P2 -->
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="g9_p5_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="g10_p5_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="g11_p5_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="g12_p5_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="g13_p5_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="g14_p5_v">
                                                <!-- gi -->         </div><!-- .col-xs-3 P2 -->
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="g9_gi_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="g10_gi_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="g11_gi_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="g12_gi_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="g13_gi_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="g14_gi_v">
                                                <!-- P2 -->         </div><!-- .col-xs-3 P2 -->
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="g9_gii_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="g10_gii_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="g11_gii_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="g12_gii_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="g13_gii_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="g14_gii_v">
                                                <!-- P2 -->         </div><!-- .col-xs-3 P2 -->



                                                                   
                                                                                         
                                                                </div><!-- ./row -->
                                                                    </div><!-- /.box-body -->
                                                            </div> <!-- ./box box-success-->
                                                        </div> <!-- /.col-med-6 -->

                                                <!-- inicio panel 2 -->
                                                <div class="col-md-6">                                               
                                                    <div class="box box-success">
                                                        <div class="box-header">
                                                             <h3 class="box-title">Escolaridad </h3>
                                                        </div><!-- /.box-header -->
                                                            <div class="box-body">
                                                                <div class="alert alert-danger" role="alert">
                                                                    <CENTER>
                                                                        <H3>
                                                                            <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                                                            HEMBRAS
                                                                            
                                                                        </H3>
                                                                    </CENTER>
                                                                </div> <!-- /.alert -->
                                                                <div class="row">
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label>Maternal</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="maternal_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Nivel 1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="nivel1_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Nivel 2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="nivel2_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Nivel 3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="nivel3_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>1° Grado</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="g1_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>2° Grado</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="g2_p1_h">
                                                <!-- P2 -->         </div><!-- .col-xs-3 P2 -->
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="maternal_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="nivel1_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="nivel2_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="nivel3_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="g1_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="g2_p2_h">
                                                    <!-- P3 -->     </div><!-- .col-xs-3 p2-->
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="maternal_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="nivel1_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="nivel2_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="nivel3_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="g1_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="g2_p3_h">
                                                <!-- P3 -->         </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="maternal_p4_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="nivel1_p4_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="nivel2_p4_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="nivel3_p4_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="g1_p4_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="g2_p4_h">
                                                <!-- P4 -->         </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="maternal_p5_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="nivel1_p5_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="nivel2_p5_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="nivel3_p5_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="g1_p5_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="g2_p5_h">
                                                <!-- P5 -->         </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="gi" name="maternal_gi_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="gi" name="nivel1_gi_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="gi" name="nivel2_gi_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="gi" name="nivel3_gi_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="gi" name="g1_gi_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="gi" name="g2_gi_h">
                                                <!-- gi -->         </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="gii" name="maternal_gii_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="gii" name="nivel1_gii_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="gii" name="nivel2_gii_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="gii" name="nivel3_gii_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="gii" name="g1_gii_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="gii" name="g2_gii_h">
                                                <!-- gii -->         </div><!-- .col-xs-3 -->  

                                                                    
                                                                    

                                                                </div><!-- ./row -->
                                                            </div><!-- /.box-body -->                               
                                                </div><!-- /.col-med-8 -->                                    

                                            </div> <!-- ./tab-pane-->

                                                        <div class="col-md-6">                                      
                                                            <div class="box box-success">
                                                                <div class="box-header">
                                                                     <h3 class="box-title">ESCOLARIDAD</h3>
                                                                </div><!-- /.box-header -->
                                                                    <div class="box-body">                           
                                                                        <div class="alert alert-danger" role="alert"> 
                                                                            <CENTER>
                                                                                <H3>
                                                                                    <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                                                                    HEMBRAS                             
                                                                                </H3>
                                                                            </CENTER>                                
                                                                        </div> <!-- /.alert -->
                                                                        <div class="row">
                                                                   <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label>3°do</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="g3_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>4°do</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="g4_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>5°do</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="g5_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>6°do</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="g6_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>7°mo</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="g7_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>8°vo</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="g8_p1_h">
                                                <!-- P2 -->         </div><!-- .col-xs-3 P2 -->
                                                                     <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="g3_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="g4_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="g5_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="g6_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="g7_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="g8_p2_h">
                                                <!-- P3 -->         </div><!-- .col-xs-3 P2 -->
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="g3_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="g4_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="g5_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="g6_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="g7_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="g8_p3_h">
                                                <!-- P4 -->         </div><!-- .col-xs-3 P2 -->
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="g3_p4_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="g4_p4_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="g5_p4_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="g6_p4_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="g7_p4_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="g8_p4_h">
                                                <!-- P5 -->         </div><!-- .col-xs-3 P2 -->  
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="g3_p5_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="g4_p5_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="g5_p5_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="g6_p5_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="g7_p5_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="g8_p5_h">
                                                <!-- gi -->         </div><!-- .col-xs-3 P2 -->
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="g3_gi_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="g4_gi_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="g5_gi_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="g6_gi_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="g7_gi_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="g8_gi_h">
                                                <!-- gii -->         </div><!-- .col-xs-3 P2 -->
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="g3_gii_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="g4_gii_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="g5_gii_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="g6_gii_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="g7_gii_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="g8_gii_h">
                                                <!-- gii -->         </div><!-- .col-xs-3 P2 -->

                                                                </div><!-- ./row -->
                                                                    </div><!-- /.box-body -->
                                                            </div> <!-- ./box box-success-->
                                                        </div> <!-- /.col-med-7 -->


                                                        <div class="col-md-6">                                      
                                                            <div class="box box-success">
                                                                <div class="box-header">
                                                                     <h3 class="box-title">ESCOLARIDAD</h3>
                                                                </div><!-- /.box-header -->
                                                                    <div class="box-body">                           
                                                                        <div class="alert alert-danger" role="alert"> 
                                                                            <CENTER>
                                                                                <H3>
                                                                                    <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                                                                    VARONES                             
                                                                                </H3>
                                                                            </CENTER>                                
                                                                        </div> <!-- /.alert -->
                                                                        <div class="row">
                                                                   <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label>9°no</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="g9_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>1Año</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="g10_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>2Año</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="g11_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>3Año</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="g12_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>S/E</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="g13_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>E/E</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="g14_p1_h">
                                                <!-- P2 -->         </div><!-- .col-xs-3 P2 -->
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="g9_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="g10_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="g11_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="g12_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="g13_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="g14_p2_h">
                                                <!-- P3 -->         </div><!-- .col-xs-3 P2 -->
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="g9_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="g10_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="g11_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="g12_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="g13_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="g14_p3_h">
                                                <!-- P2 -->         </div><!-- .col-xs-3 P2 -->
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="g9_p4_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="g10_p4_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="g11_p4_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="g12_p4_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="g13_p4_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="g14_p4_h">
                                                <!-- P2 -->         </div><!-- .col-xs-3 P2 -->
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="g9_p5_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="g10_p5_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="g11_p5_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="g12_p5_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="g13_p5_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="g14_p5_h">
                                                <!-- gi -->         </div><!-- .col-xs-3 P2 -->
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="g9_gi_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="g10_gi_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="g11_gi_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="g12_gi_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="g13_gi_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="g14_gi_h">
                                                <!-- P2 -->         </div><!-- .col-xs-3 P2 -->
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="g9_gii_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="g10_gii_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="g11_gii_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="g12_gii_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="g13_gii_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="g14_gii_h">
                                                <!-- P2 -->         </div><!-- .col-xs-3 P2 -->                                                                   
                                                                                         
                                                                </div><!-- ./row -->
                                                            </div><!-- /.box-body -->
                                                        </div> <!-- ./box box-success-->
                                                        </div> <!-- /.col-med-6 -->

                                  
                                </div> <!-- cierre del tab 2 ??? buscar donde inicia -->
<!--* INICIO TAB3 -->            <div class="tab-pane" id="tab3">

                                	<div class="tab-pane" id="tab2">

                                            <div class="col-md-8">                                               
                                                <div class="box box-success">
                                                    <div class="box-header">
                                                         <h3 class="box-title">ATENCIÓN</h3>
                                                    </div><!-- /.box-header -->
                                                        <div class="box-body">                                       
                                                            <div class="alert alert-success" role="alert">          
                                                                <CENTER>
                                                                    <H2>
                                                                        <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                                                                        Atención                                  
                                                                    </H2>
                                                                </CENTER>
                                                                </div>
                                                                
                                                            </div> <!-- /.alert -->             
                                                            <img src="../../img/demo.jpg">
                                                            <br>
                                                            <br>
                                                            <br>
                                                            <br>
                                                            <br>
                                                            <br>                         
                                                        </div><!-- /.box-body -->
                                                </div> <!-- ./box box-success-->
                                                <!-- inicio panel 2 -->
                                                <div class="col-md-6">                                               
                                                    <div class="box box-success">
                                                        <div class="box-header">
                                                             <h3 class="box-title">ATENCIÓN VARONES </h3>
                                                        </div><!-- /.box-header -->
                                                            <div class="box-body">
                                                                <div class="alert alert-info" role="alert">
                                                                    <CENTER>
                                                                        <H3>
                                                                            <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                                                                            VARONES
                                                                            
                                                                        </H3>
                                                                    </CENTER>
                                                                </div> <!-- /.alert -->
                                                                <div class="row">
                                                                    <div class="col-xs-6">       
                                                                        <center>
                                                                            <label>En Aula</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="p_a_a_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-6">
                                                                        <center>
                                                                            <label>En Habitación</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="p_a_h_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-6">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="p_a_a_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-6">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="p_a_h_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-6">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="p_a_a_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-6">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="p_a_h_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-6">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="p_a_a_p4_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-6">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="p_a_h_p4_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-6">
                                                                        <center>
                                                                           <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="p_a_a_p5_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-6">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="p_a_h_p5_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-6">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="p_a_a_gi_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-6">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="p_a_h_gi_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-6">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="p_a_a_gii_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-6">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="p_a_h_gii_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                </div><!-- ./row -->
                                                            </div><!-- /.box-body -->           
                                                </div><!-- /.col-med-8 -->
                                            </div> <!-- ./tab-pane-->
                                                                 

                                                        <div class="col-md-6">                                      
                                                            <div class="box box-success">
                                                                <div class="box-header">
                                                                     <h3 class="box-title">ATENCIÓN HEMBRAS</h3>
                                                                </div><!-- /.box-header -->
                                                                    <div class="box-body">                           
                                                                        <div class="alert alert-danger" role="alert"> 
                                                                            <CENTER>
                                                                                <H3>
                                                                                    <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                                                                    HEMBRAS                             
                                                                                </H3>
                                                                            </CENTER>                                
                                                                        </div> <!-- /.alert -->
                                                                <div class="row">
                                                                <div class="col-xs-6">       
                                                                        <center>
                                                                            <label>En Aula</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="p_a_a_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-6">
                                                                        <center>
                                                                            <label>En Habitación</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="p_a_h_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-6">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="p_a_a_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-6">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="p_a_h_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-6">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="p_a_a_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-6">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="p_a_h_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-6">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="p_a_a_p4_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-6">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="p_a_h_p4_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-6">
                                                                        <center>
                                                                           <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="p_a_a_p5_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-6">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="p_a_h_p5_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-6">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="p_a_a_gi_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-6">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="p_a_h_gi_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-6">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="p_a_a_gii_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-6">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="p_a_h_gii_h">
                                                                    </div><!-- .col-xs-3 -->   
                                                                   
                                                                                         
                                                                </div><!-- ./row -->
                                                                    </div><!-- /.box-body -->
                                                            </div> <!-- ./box box-success-->
                                                        </div> <!-- /.col-med-6 -->           
                                </div> <!-- cierre del tab 3 ??? buscar donde inicia -->
                                </div><!-- /div tab3 -->

<!--* INICIO TAB4 -->            <div class="tab-pane" id="tab4">

                                            <div class="col-md-8">                                               
                                                <div class="box box-success">
                                                    <div class="box-header">
                                                         <h3 class="box-title">Visita agrupado por edad</h3>
                                                    </div><!-- /.box-header -->
                                                        <div class="box-body">                                       
                                                            <div class="alert alert-success" role="alert">          
                                                                <CENTER>
                                                                    <H2>
                                                                        <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                                                                        VISITA AGRUPADO POR EDAD                                  
                                                                    </H2>
                                                                </CENTER>
                                                                </div>
                                                                
                                                            </div> <!-- /.alert -->                                      
                                                        </div><!-- /.box-body -->
                                                </div> <!-- ./box box-success-->
                                                <!-- inicio panel 2 -->
                                                <div class="col-md-8">                                               
                                                    <div class="box box-success">
                                                        <div class="box-header">
                                                             <h3 class="box-title">VISITA POR EDADES</h3>
                                                        </div><!-- /.box-header -->
                                                            <div class="box-body">
                                                                <div class="alert alert-info" role="alert">
                                                                    <CENTER>
                                                                        <H3>
                                                                            <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                                                                            VARONES
                                                                            
                                                                        </H3>
                                                                    </CENTER>
                                                                </div> <!-- /.alert -->
                                                                <div class="row">
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label>0-11 M</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="v_e11_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>1 A</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="v_e1_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>2 A</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="v_e2_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>3 A</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="v_e3_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>4 A</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="v_e4_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>5 A</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="v_e5_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e11_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e1_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e2_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e3_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e4_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e5_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e11_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e1_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e2_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e3_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e4_p3_v">
                                                                    </div><!-- .col-xs-3 -->  
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e5_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e11_p4_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e1_p4_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e2_p4_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e3_p4_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e4_p4_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e5_p4_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e11_p5_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e1_p5_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e2_p5_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e3_p5_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e4_p5_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e5_p5_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e11_gi_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e1_gi_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e2_gi_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e3_gi_v">
                                                                    </div><!-- .col-xs-3 -->                             
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e4_gi_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e5_gi_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e11_gii_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e1_gii_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e2_gii_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e3_gii_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e4_gii_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e5_gii_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    
                                                                    

                                                                </div><!-- ./row -->
                                                            </div><!-- /.box-body -->                               
                                                </div><!-- /.col-med-8 -->                                    

                                            </div> <!-- ./tab-pane-->
<!--* inicio panel 3 -->
                                                        <div class="col-md-6">                                      
                                                            <div class="box box-success">
                                                                <div class="box-header">
                                                                     <h3 class="box-title">VISITA POR EDADES</h3>
                                                                </div><!-- /.box-header -->
                                                                    <div class="box-body">                           
                                                                        <div class="alert alert-info" role="alert"> 
                                                                            <CENTER>
                                                                                <H3>
                                                                                    <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                                                                                    VARONES                             
                                                                                </H3>
                                                                            </CENTER>                                
                                                                        </div> <!-- /.alert -->
                                                                        <div class="row">
                                                                   <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label>6 A</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="v_e6_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>7 A</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="v_e7_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>8 A</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="v_e8_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>9 A</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="v_e9_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>10 A</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="v_e10_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>11 A</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="v_e111_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e6_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e7_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e8_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e9_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e10_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e111_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e6_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e7_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e8_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e9_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e10_p3_v">
                                                                    </div><!-- .col-xs-3 -->  
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e111_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e6_p4_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e7_p4_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e8_p4_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e9_p4_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e10_p4_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e111_p4_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e6_p5_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e7_p5_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e8_p5_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e9_p5_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e10_p5_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e111_p5_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e6_gi_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e7_gi_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e8_gi_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e9_gi_v">
                                                                    </div><!-- .col-xs-3 -->                             
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e10_gi_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e111_gi_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e6_gii_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e7_gii_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e8_gii_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e9_gii_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e10_gii_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e111_gii_v">
                                                                    </div><!-- .col-xs-3 -->  
                                                                   
                                                                                         
                                                                </div><!-- ./row -->
                                                                    </div><!-- /.box-body -->
                                                            </div> <!-- ./box box-success-->
                                                        </div> <!-- /.col-med-7 -->


                                                        <div class="col-md-6">                                      
                                                            <div class="box box-success">
                                                                <div class="box-header">
                                                                     <h3 class="box-title">VISITA POR EDADES</h3>
                                                                </div><!-- /.box-header -->
                                                                    <div class="box-body">                           
                                                                        <div class="alert alert-info" role="alert"> 
                                                                            <CENTER>
                                                                                <H3>
                                                                                    <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                                                                                    VARONES                             
                                                                                </H3>
                                                                            </CENTER>                                
                                                                        </div> <!-- /.alert -->
                                                                        <div class="row">
                                                                   <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label>12 A</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="v_e12_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>13 A</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="v_e13_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>14 A</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="v_e14_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>15 A</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="v_e15_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>16 A</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="v_e16_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>+17 A</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="v_e17_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e12_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e13_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e14_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e15_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e16_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e17_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e12_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e13_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e14_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e15_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e16_p3_v">
                                                                    </div><!-- .col-xs-3 -->  
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e17_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e12_p4_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e13_p4_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e14_p4_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e15_p4_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e16_p4_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e17_p4_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e12_p5_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e13_p5_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e14_p5_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e15_p5_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e16_p5_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e17_p5_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e12_gi_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e13_gi_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e14_gi_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e15_gi_v">
                                                                    </div><!-- .col-xs-3 -->                             
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e16_gi_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e17_gi_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e12_gii_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e13_gii_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e14_gii_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e15_gii_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e16_gii_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e17_gii_v">
                                                                    </div><!-- .col-xs-3 -->  
                                                                   
                                                                                         
                                                                </div><!-- ./row -->
                                                                    </div><!-- /.box-body -->
                                                            </div> <!-- ./box box-success-->
                                                        </div> <!-- /.col-med-6 -->

                                                        <div class="col-md-6">                                      
                                                            <div class="box box-success">
                                                                <div class="box-header">
                                                                     <h3 class="box-title">VISITA POR EDADES</h3>
                                                                </div><!-- /.box-header -->
                                                                    <div class="box-body">                           
                                                                        <div class="alert alert-danger" role="alert"> 
                                                                            <CENTER>
                                                                                <H3>
                                                                                    <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                                                                    HEMBRAS                             
                                                                                </H3>
                                                                            </CENTER>                                
                                                                        </div> <!-- /.alert -->
                                                                        <div class="row">
                                                                   <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label>11 Meses</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="v_e11_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>1 Año</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="v_e1_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>2 Años</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="v_e2_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>3 Años</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="v_e3_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>4 Años</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="v_e4_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>5 Años</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="v_e5_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e11_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e1_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e2_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e3_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e4_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e5_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e11_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e1_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e2_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e3_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e4_p3_h">
                                                                    </div><!-- .col-xs-3 -->  
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e5_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e11_p4_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e1_p4_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e2_p4_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e3_p4_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e4_p4_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e5_p4_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e11_p5_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e1_p5_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e2_p5_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e3_p5_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e4_p5_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e5_p5_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e11_gi_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e1_gi_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e2_gi_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e3_gi_h">
                                                                    </div><!-- .col-xs-3 -->                             
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e4_gi_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e5_gi_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e11_gii_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e1_gii_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e2_gii_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e3_gii_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e4_gii_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e5_gii_h">
                                                                    </div><!-- .col-xs-3 -->  
                                                                   
                                                                                         
                                                                </div><!-- ./row -->
                                                                    </div><!-- /.box-body -->
                                                            </div> <!-- ./box box-success-->
                                                        </div> <!-- /.col-med-6 -->

                                                        <div class="col-md-6">                                      
                                                            <div class="box box-success">
                                                                <div class="box-header">
                                                                     <h3 class="box-title">VISITA POR EDADES</h3>
                                                                </div><!-- /.box-header -->
                                                                    <div class="box-body">                           
                                                                        <div class="alert alert-danger" role="alert"> 
                                                                            <CENTER>
                                                                                <H3>
                                                                                    <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                                                                    HEMBRAS                             
                                                                                </H3>
                                                                            </CENTER>                                
                                                                        </div> <!-- /.alert -->
                                                                        <div class="row">
                                                                   <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label>6 Años</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="v_e6_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>7 Años</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="v_e7_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>8 Años</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="v_e8_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>9 Años</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="v_e9_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>10 Años</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="v_e10_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>11 Años</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="v_e111_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e6_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e7_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e8_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e9_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e10_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e111_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e6_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e7_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e8_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e9_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e10_p3_h">
                                                                    </div><!-- .col-xs-3 -->  
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e111_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e6_p4_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e7_p4_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e8_p4_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e9_p4_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e10_p4_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e111_p4_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e6_p5_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e7_p5_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e8_p5_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e9_p5_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e10_p5_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e111_p5_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e6_gi_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e7_gi_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e8_gi_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e9_gi_h">
                                                                    </div><!-- .col-xs-3 -->                             
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e10_gi_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e111_gi_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e6_gii_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e7_gii_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e8_gii_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e9_gii_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e10_gii_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e111_gii_h">
                                                                    </div><!-- .col-xs-3 -->  
                                                                   
                                                                                         
                                                                </div><!-- ./row -->
                                                                    </div><!-- /.box-body -->
                                                            </div> <!-- ./box box-success-->
                                                        </div> <!-- /.col-med-6 -->

                                                        <div class="col-md-6">                                      
                                                            <div class="box box-success">
                                                                <div class="box-header">
                                                                     <h3 class="box-title">VISITA POR EDADES</h3>
                                                                </div><!-- /.box-header -->
                                                                    <div class="box-body">                           
                                                                        <div class="alert alert-danger" role="alert"> 
                                                                            <CENTER>
                                                                                <H3>
                                                                                    <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                                                                    HEMBRAS                             
                                                                                </H3>
                                                                            </CENTER>                                
                                                                        </div> <!-- /.alert -->
                                                                        <div class="row">
                                                                   <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label>12 Años</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="v_e12_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>13 Años</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="v_e13_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>2° Año</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="v_e14_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>14 Años</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="v_e15_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>15 Años</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="v_e16_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>+16 Años</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 1" name="v_e17_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e12_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e13_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e14_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e15_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e16_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 2" name="v_e17_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e12_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e13_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e14_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e15_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e16_p3_h">
                                                                    </div><!-- .col-xs-3 -->  
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="v_e17_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e12_p4_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e13_p4_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e14_p4_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e15_p4_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e16_p4_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="v_e17_p4_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e12_p5_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e13_p5_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e14_p5_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e15_p5_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e16_p5_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="v_e17_p5_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e12_gi_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e13_gi_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e14_gi_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e15_gi_h">
                                                                    </div><!-- .col-xs-3 -->                             
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e16_gi_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="v_e17_gi_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e12_gii_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e13_gii_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e14_gii_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e15_gii_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e16_gii_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="v_e17_gii_h">
                                                                    </div><!-- .col-xs-3 -->  
                                                                   
                                                                                         
                                                                </div><!-- ./row -->
                                                                    </div><!-- /.box-body -->
                                                            </div> <!-- ./box box-success-->
                                                        </div> <!-- /.col-med-6 -->                                 
                                </div> <!-- cierre del tab 2 ??? buscar donde inicia -->
<!--* INICIO TAB5 -->                                <div class="tab-pane" id="tab5">

                                            <div class="col-md-8">                                               
                                                <div class="box box-success">
                                                    <div class="box-header">
                                                         <h3 class="box-title">Tiempo de Permanencia</h3>
                                                    </div><!-- /.box-header -->
                                                        <div class="box-body">
                                                        	<div class="alert alert-success" role="alert">          
                                                                <CENTER>
                                                                    <H2>
                                                                        <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                                                                        TIEMPO DE PERMANENCIA                                  
                                                                    </H2>
                                                                </CENTER>
                                                                </div>
                                                                
                                                            </div> <!-- /.alert -->             
                                                            <img src="../../img/demo.jpg">
                                                            <br>
                                                            <br>
                                                            <br>
                                                            <br>
                                                            <br>
                                                            <br>                         
                                                        </div><!-- /.box-body -->
                                                </div> <!-- ./box box-success-->
                                                <!-- inicio panel 2 -->
                                                <div class="col-md-6">                                               
                                                    <div class="box box-success">
                                                        <div class="box-header">
                                                             <h3 class="box-title">PERMANENCIA VARONES </h3>
                                                        </div><!-- /.box-header -->
                                                            <div class="box-body">
                                                                <div class="alert alert-info" role="alert">
                                                                    <CENTER>
                                                                        <H3>
                                                                            <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                                                                            VARONES
                                                                            
                                                                        </H3>
                                                                    </CENTER>
                                                                </div> <!-- /.alert -->
                                                                <div class="row">
                                                                    <div class="col-xs-2">       
                                                                        <center>
                                                                            <label>0-5 D</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="t_5_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>6-10 D</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="t_10_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>11-15 D</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="t_15_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>16-30 D</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="t_30_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>2 M</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="t_2_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>3 M</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="t_3_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="t_3_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="t_3_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                           <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="t_3_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="t_3_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="t_3_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="t_3_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="t_3_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="t_3_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="t_3_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="t_3_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="t_3_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="t_3_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="t_3_p4_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="t_3_p4_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="t_3_p4_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="t_3_p4_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="t_3_p4_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="t_3_p4_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="t_3_p5_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="t_3_p5_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="t_3_p5_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="t_3_p5_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="t_3_p5_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="t_3_p5_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="t_3_gi_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="t_3_gi_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="t_3_gi_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="t_3_gi_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="t_3_gi_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="t_3_gi_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="t_3_gii_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="t_3_gii_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="t_3_gii_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="t_3_gii_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="t_3_gii_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="t_3_gii_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                </div><!-- ./row -->
                                                            </div><!-- /.box-body -->           
                                                </div><!-- /.col-med-8 -->
                                            </div> <!-- ./tab-pane-->
                                                                 

                                                        <div class="col-md-6">                
                                                            <div class="box box-success">
                                                                <div class="box-header">
                                                                     <h3 class="box-title">PERMANENCIA HEMBRAS</h3>
                                                                </div><!-- /.box-header -->
                                                                    <div class="box-body">                           
                                                                        <div class="alert alert-danger" role="alert"> 
                                                                            <CENTER>
                                                                                <H3>
                                                                                    <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                                                                    HEMBRAS                             
                                                                                </H3>
                                                                            </CENTER>                                
                                                                        </div> <!-- /.alert -->
                                                                <div class="row">
                                                                <div class="col-xs-2">       
                                                                        <center>
                                                                            <label>0-5 D</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="t_5_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>6-10 D</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="t_10_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>11-15 D</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="t_15_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>16-30 D</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="t_30_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>2 M</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="t_2_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>3 M</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="t_3_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="t_3_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="t_3_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                           <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="t_3_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="t_3_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="t_3_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="t_3_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="t_3_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="t_3_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="t_3_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="t_3_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="t_3_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 3" name="t_3_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="t_3_p4_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="t_3_p4_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="t_3_p4_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="t_3_p4_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="t_3_p4_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 4" name="t_3_p4_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="t_3_p5_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="t_3_p5_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="t_3_p5_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="t_3_p5_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="t_3_p5_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Piso 5" name="t_3_p5_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="t_3_gi_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="t_3_gi_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="t_3_gi_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="t_3_gi_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="t_3_gi_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas I" name="t_3_gi_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="t_3_gii_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="t_3_gii_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="t_3_gii_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="t_3_gii_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="t_3_gii_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="t_3_gii_h">
                                                                    </div><!-- .col-xs-3 -->  
                                                                   
                                                                                         
                                                                </div><!-- ./row -->
                                                                    </div><!-- /.box-body -->
                                                            </div> <!-- ./box box-success-->
                                                        </div> <!-- /.col-med-6 --> 
                                                        
                                                        <div class="col-md-3"> <!-- inicio vista por edad hembra-->                 
                                                            <div class="box box-success">
                                                                <div class="box-header">
                                                                     <h3 class="box-title">PERMANENCIA VARONES LARGA ESTADIA</h3>
                                                                </div><!-- /.box-header -->
                                                                    <div class="box-body">                           
                                                                        <div class="alert alert-info" role="alert"> 
                                                                            <CENTER>
                                                                                <H3>
                                                                                    <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                                                                                    VARONES                             
                                                                                </H3>
                                                                            </CENTER>                                
                                                                        </div> <!-- /.alert -->
                                                               	<div class="row">             
                                                                   <div class="col-xs-12">      
                                                                        <center>
                                                                            <label>+3 Meses</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="t_4_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-12">      
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="t_4_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-12">      
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="t_4_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-12">      
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="t_4_p4_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-12">      
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="t_4_p5_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-12">      
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="t_4_gi_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-12">      
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII"  name="t_4_gii_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                </div><!-- ./row -->
                                                                    </div><!-- /.box-body -->
                                                            </div> <!-- ./box box-success-->
                                                        </div> <!-- /.col-med-6 -->

                                                        <div class="col-md-3"> <!-- inicio vista por edad hembra-->                 
                                                            <div class="box box-success">
                                                                <div class="box-header">
                                                                     <h3 class="box-title">PERMANENCIA HEMBRAS LARGA ESTADIA</h3>
                                                                </div><!-- /.box-header -->
                                                                    <div class="box-body">                           
                                                                        <div class="alert alert-danger" role="alert"> 
                                                                            <CENTER>
                                                                                <H3>
                                                                                    <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                                                                    HEMBRAS                             
                                                                                </H3>
                                                                            </CENTER>                                
                                                                        </div> <!-- /.alert -->
                                                               	<div class="row">             
                                                                   <div class="col-xs-12">      
                                                                        <center>
                                                                            <label>+3 Meses</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="t_4_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-12">      
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="t_4_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-12">      
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="t_4_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-12">      
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="t_4_p4_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-12">      
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="t_4_p5_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-12">      
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="t_4_gi_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-12">      
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="t_4_gii_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                </div><!-- ./row -->
                                                                    </div><!-- /.box-body -->
                                                            </div> <!-- ./box box-success-->
                                                        </div> <!-- /.col-med-6 -->                
         										</div><!-- ./tab-pane id tab4 -->

<!-- INICIO TAB6 -->
							     <div class="tab-pane" id="tab6">

                                            <div class="col-md-8">                                               
                                                <div class="box box-success">
                                                    <div class="box-header">
                                                         <h3 class="box-title">POBLACIÓN REFERIDA</h3>
                                                    </div><!-- /.box-header -->
                                                        <div class="box-body">                                       
                                                            <div class="alert alert-success" role="alert">          
                                                                <CENTER>
                                                                    <H2>
                                                                        <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                                                                        Población Referida                                  
                                                                    </H2>
                                                                </CENTER>
                                                                </div>
                                                                
                                                            </div> <!-- /.alert -->                                      
                                                        </div><!-- /.box-body -->
                                                </div> <!-- ./box box-success-->
                                                <!-- inicio panel 2 -->
                                                <div class="col-md-8">                                               
                                                    <div class="box box-success">
                                                        <div class="box-header">
                                                             <h3 class="box-title">Población Referida </h3>
                                                        </div><!-- /.box-header -->
                                                            <div class="box-body">
                                                                <div class="alert alert-info" role="alert">
                                                                    <CENTER>
                                                                        <H3>
                                                                            <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                                                                            VARONES
                                                                            
                                                                        </H3>
                                                                    </CENTER>
                                                                </div> <!-- /.alert -->
                                                                <div class="row">
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label>Defensoria</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="pr_r1_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>CDI</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="pr_r2_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>S. Social</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="pr_r3_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Psicologia</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="pr_r4_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>CAIPA</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="pr_r5_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Integr</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="pr_r6_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="pr_r1_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="pr_r2_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="pr_r3_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="pr_r4_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="pr_r5_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="pr_r6_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="pr_r1_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="pr_r2_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="pr_r3_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="pr_r4_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="pr_r5_p3_v">
                                                                    </div><!-- .col-xs-3 -->  
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="pr_r6_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="pr_r1_p4_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="pr_r2_p4_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="pr_r3_p4_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="pr_r4_p4_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="pr_r5_p4_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="pr_r6_p4_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="pr_r1_p5_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="pr_r2_p5_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="pr_r3_p5_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="pr_r4_p5_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="pr_r5_p5_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="pr_r6_p5_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="pr_r1_gi_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="pr_r2_gi_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="pr_r3_gi_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="pr_r4_gi_v">
                                                                    </div><!-- .col-xs-3 -->                             
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="pr_r5_gi_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="pr_r6_gi_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="pr_r1_gii_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="pr_r2_gii_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="pr_r3_gii_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="pr_r4_gii_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="pr_r5_gii_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="pr_r6_gii_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    
                                                                    

                                                                </div><!-- ./row -->
                                                            </div><!-- /.box-body -->                               
                                                </div><!-- /.col-med-8 -->                                    

                                            </div> <!-- ./tab-pane-->
<!-- inicio panel 3 -->
                                                        <div class="col-md-6">                                      
                                                            <div class="box box-success">
                                                                <div class="box-header">
                                                                     <h3 class="box-title">Población Referida</h3>
                                                                </div><!-- /.box-header -->
                                                                    <div class="box-body">                           
                                                                        <div class="alert alert-info" role="alert"> 
                                                                            <CENTER>
                                                                                <H3>
                                                                                    <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                                                                                    VARONES                             
                                                                                </H3>
                                                                            </CENTER>                                
                                                                        </div> <!-- /.alert -->
                                                                        <div class="row">
                                                                   <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label>AI</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="pr_r7_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>CENDA</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="pr_r8_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>UPE</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="pr_r9_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Articulación</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="pr_r10_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Otros</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="pr_r11_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Otros</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="pr_r12_p1_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="pr_r7_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="pr_r8_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="pr_r9_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="pr_r10_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="pr_r11_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="pr_r12_p2_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="pr_r7_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="pr_r8_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="pr_r9_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="pr_r10_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="pr_r11_p3_v">
                                                                    </div><!-- .col-xs-3 -->  
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="pr_r12_p3_v">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="pr_r7_p4_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="pr_r8_p4_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="pr_r9_p4_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="pr_r10_p4_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="pr_r11_p4_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="pr_r12_p4_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="pr_r7_p5_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="pr_r8_p5_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="pr_r9_p5_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="pr_r10_p5_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="pr_r11_p5_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="pr_r12_p5_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="pr_r7_gi_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="pr_r8_gi_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="pr_r9_gi_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="pr_r10_gi_v">
                                                                    </div><!-- .col-xs-3 -->                             
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="pr_r11_gi_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="pr_r12_gi_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="pr_r7_gii_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="pr_r8_gii_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="pr_r9_gii_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="pr_r10_gii_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="pr_r11_gii_v">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="Garzas II" name="pr_r12_gii_v">
                                                                    </div><!-- .col-xs-3 -->  
                                                                   
                                                                                         
                                                                </div><!-- ./row -->
                                                                    </div><!-- /.box-body -->
                                                            </div> <!-- ./box box-success-->
                                                        </div> <!-- /.col-med-7 -->


                                                        

                                                        <div class="col-md-6">                                      
                                                            <div class="box box-success">
                                                                <div class="box-header">
                                                                     <h3 class="box-title">Población Referida</h3>
                                                                </div><!-- /.box-header -->
                                                                    <div class="box-body">                           
                                                                        <div class="alert alert-danger" role="alert"> 
                                                                            <CENTER>
                                                                                <H3>
                                                                                    <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                                                                    HEMBRAS                             
                                                                                </H3>
                                                                            </CENTER>                                
                                                                        </div> <!-- /.alert -->
                                                                        <div class="row">
                                                                   <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label>Defensoria</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="pr_r1_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>CDI</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="pr_r2_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>S. Social</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="pr_r3_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Psicologia</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="pr_r4_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>CAIPA</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="pr_r5_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Integr</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="pr_r6_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="pr_r1_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="pr_r2_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="pr_r3_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="pr_r4_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="pr_r5_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="pr_r6_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="pr_r1_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="pr_r2_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="pr_r3_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="pr_r4_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="pr_r5_p3_h">
                                                                    </div><!-- .col-xs-3 -->  
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="pr_r6_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="pr_r1_p4_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="pr_r2_p4_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="pr_r3_p4_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="pr_r4_p4_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="pr_r5_p4_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="pr_r6_p4_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="pr_r1_p5_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="pr_r2_p5_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="pr_r3_p5_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="pr_r4_p5_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="pr_r5_p5_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="pr_r6_p5_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="pr_r1_gi_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="pr_r2_gi_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="pr_r3_gi_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="pr_r4_gi_h">
                                                                    </div><!-- .col-xs-3 -->                             
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="pr_r5_gi_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="pr_r6_gi_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="pr_r1_gii_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="pr_r2_gii_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="pr_r3_gii_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="pr_r4_gii_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="pr_r5_gii_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="pr_r6_gii_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                   
                                                                                         
                                                                </div><!-- ./row -->
                                                                    </div><!-- /.box-body -->
                                                            </div> <!-- ./box box-success-->
                                                        </div> <!-- /.col-med-6 -->

                                                        <div class="col-md-6">                                      
                                                            <div class="box box-success">
                                                                <div class="box-header">
                                                                     <h3 class="box-title">Población Referida</h3>
                                                                </div><!-- /.box-header -->
                                                                    <div class="box-body">                           
                                                                        <div class="alert alert-danger" role="alert"> 
                                                                            <CENTER>
                                                                                <H3>
                                                                                    <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                                                                    HEMBRAS                             
                                                                                </H3>
                                                                            </CENTER>                                
                                                                        </div> <!-- /.alert -->
                                                                        <div class="row">
                                                                   <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label>AI</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="pr_r7_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>CENDA</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="pr_r8_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>UPE</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="pr_r9_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Articulación</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="pr_r10_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Otros</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="pr_r11_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Otros</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1" name="pr_r12_p1_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder=" 2" name="pr_r7_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder=" 2" name="pr_r8_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder=" 2" name="pr_r9_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="pr_r10_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="pr_r11_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2" name="pr_r12_p2_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="pr_r7_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="pr_r8_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="pr_r9_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="pr_r10_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="pr_r11_p3_h">
                                                                    </div><!-- .col-xs-3 -->  
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3" name="pr_r12_p3_h">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="pr_r7_p4_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="pr_r8_p4_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="pr_r9_p4_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="pr_r10_p4_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="pr_r11_p4_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4" name="pr_r12_p4_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="pr_r7_p5_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="pr_r8_p5_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="pr_r9_p5_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="pr_r10_p5_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="pr_r11_p5_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5" name="pr_r12_p5_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="pr_r7_gi_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="pr_r8_gi_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="pr_r9_gi_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="pr_r10_gi_h">
                                                                    </div><!-- .col-xs-3 -->                             
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="pr_r11_gi_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI" name="pr_r12_gi_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="pr_r7_gii_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="pr_r8_gii_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="pr_r9_gii_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="pr_r10_gii_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="pr_r11_gii_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII" name="pr_r12_gii_h">
                                                                    </div><!-- .col-xs-3 --> 
                                                                   
                                                                                         
                                                                </div><!-- ./row -->
                                                                    </div><!-- /.box-body -->
                                                            </div> <!-- ./box box-success-->
                                                        </div> <!-- /.col-med-6 -->         
                                </div> <!-- cierre del tab 2 ??? buscar donde inicia -->
<!-- INICIO TAB7 -->
                                <div class="tab-pane" id="tab7">

                                            <div class="col-md-8">                                               
                                                <div class="box box-success">
                                                    <div class="box-header">
                                                         <h3 class="box-title">TIPO DE ATENCIÓN</h3>
                                                    </div><!-- /.box-header -->
                                                        <div class="box-body">                                       
                                                            <div class="alert alert-success" role="alert">          
                                                                <CENTER>
                                                                    <H2>
                                                                        <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                                                                        Tipo de Atención                                  
                                                                    </H2>
                                                                </CENTER>
                                                                </div>
                                                                
                                                            </div> <!-- /.alert -->                                      
                                                        </div><!-- /.box-body -->
                                                </div> <!-- ./box box-success-->
                                                <!-- inicio panel 2 -->
                                                <div class="col-md-8">                                               
                                                    <div class="box box-success">
                                                        <div class="box-header">
                                                             <h3 class="box-title">Tipo de Atención</h3>
                                                        </div><!-- /.box-header -->
                                                            <div class="box-body">
                                                                <div class="alert alert-info" role="alert">
                                                                    <CENTER>
                                                                        <H3>
                                                                            <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                                                                            VARONES
                                                                            
                                                                        </H3>
                                                                    </CENTER>
                                                                </div> <!-- /.alert -->
                                                                <div class="row">
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label>Cirugia</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Trauma</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Orl</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Pediatría</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Neumo</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Cardio</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3">
                                                                    </div><!-- .col-xs-3 -->  
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI">
                                                                    </div><!-- .col-xs-3 -->                             
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    
                                                                    

                                                                </div><!-- ./row -->
                                                            </div><!-- /.box-body -->                               
                                                </div><!-- /.col-med-8 -->                                    

                                            </div> <!-- ./tab-pane-->
<!-- inicio panel 3 -->
                                                        <div class="col-md-8">                                      
                                                            <div class="box box-success">
                                                                <div class="box-header">
                                                                     <h3 class="box-title">TIPO DE ATENCIÓN</h3>
                                                                </div><!-- /.box-header -->
                                                                    <div class="box-body">                           
                                                                        <div class="alert alert-info" role="alert"> 
                                                                            <CENTER>
                                                                                <H3>
                                                                                    <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                                                                                    VARONES                             
                                                                                </H3>
                                                                            </CENTER>                                
                                                                        </div> <!-- /.alert -->
                                                                        <div class="row">
                                                                   <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label>Nefro</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Urología</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Neuro</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Hermato</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Oncología</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Dermato</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3">
                                                                    </div><!-- .col-xs-3 -->  
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI">
                                                                    </div><!-- .col-xs-3 -->                             
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->  
                                                                   
                                                                                         
                                                                </div><!-- ./row -->
                                                                    </div><!-- /.box-body -->
                                                            </div> <!-- ./box box-success-->
                                                        </div> <!-- /.col-med-7 -->


                                                        <div class="col-md-4">                                      
                                                            <div class="box box-success">
                                                                <div class="box-header">
                                                                     <h3 class="box-title">TIPO DE ATENCIÓN</h3>
                                                                </div><!-- /.box-header -->
                                                                    <div class="box-body">                           
                                                                        <div class="alert alert-info" role="alert"> 
                                                                            <CENTER>
                                                                                <H3>
                                                                                    <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                                                                                    VARONES                             
                                                                                </H3>
                                                                            </CENTER>                                
                                                                        </div> <!-- /.alert -->
                                                                        <div class="row">
                                                                           <div class="col-md-6">                           
                                                                                <center>
                                                                                    <label>Gastro</label>
                                                                                </center>
                                                                                <input type="text" class="form-control" placeholder="P1">
                                                                            </div><!-- .col-xs-3 -->
                                                                            <div class="col-md-6">                           
                                                                                <center>
                                                                                    <label>Infecto</label>
                                                                                </center>
                                                                                <input type="text" class="form-control" placeholder="P1">
                                                                            </div><!-- .col-xs-3 -->
                                                                            <div class="col-md-6">                           
                                                                                <center>
                                                                                    <label></label>
                                                                                </center>
                                                                                <input type="text" class="form-control" placeholder="P2">
                                                                            </div><!-- .col-xs-3 -->
                                                                            <div class="col-md-6">                           
                                                                                <center>
                                                                                    <label></label>
                                                                                </center>
                                                                                <input type="text" class="form-control" placeholder="P2">
                                                                            </div><!-- .col-xs-3 -->
                                                                            <div class="col-md-6">                           
                                                                                <center>
                                                                                    <label></label>
                                                                                </center>
                                                                                <input type="text" class="form-control" placeholder="P3">
                                                                            </div><!-- .col-xs-3 -->
                                                                            <div class="col-md-6">                           
                                                                                <center>
                                                                                    <label></label>
                                                                                </center>
                                                                                <input type="text" class="form-control" placeholder="P3">
                                                                            </div><!-- .col-xs-3 -->
                                                                            <div class="col-md-6">                           
                                                                                <center>
                                                                                    <label></label>
                                                                                </center>
                                                                                <input type="text" class="form-control" placeholder="P4">
                                                                            </div><!-- .col-xs-3 -->
                                                                            <div class="col-md-6">                           
                                                                                <center>
                                                                                    <label></label>
                                                                                </center>
                                                                                <input type="text" class="form-control" placeholder="P4">
                                                                            </div><!-- .col-xs-3 -->
                                                                            <div class="col-md-6">                           
                                                                                <center>
                                                                                    <label></label>
                                                                                </center>
                                                                                <input type="text" class="form-control" placeholder="P5">
                                                                            </div><!-- .col-xs-3 -->
                                                                            <div class="col-md-6">                           
                                                                                <center>
                                                                                    <label></label>
                                                                                </center>
                                                                                <input type="text" class="form-control" placeholder="P5">
                                                                            </div><!-- .col-xs-3 -->
                                                                            <div class="col-md-6">                           
                                                                                <center>
                                                                                    <label></label>
                                                                                </center>
                                                                                <input type="text" class="form-control" placeholder="GI">
                                                                            </div><!-- .col-xs-3 -->
                                                                            <div class="col-md-6">                           
                                                                                <center>
                                                                                    <label></label>
                                                                                </center>
                                                                                <input type="text" class="form-control" placeholder="GI">
                                                                            </div><!-- .col-xs-3 -->
                                                                            <div class="col-md-6">                           
                                                                                <center>
                                                                                    <label></label>
                                                                                </center>
                                                                                <input type="text" class="form-control" placeholder="GII">
                                                                            </div><!-- .col-xs-3 -->
                                                                            <div class="col-md-6">                           
                                                                                <center>
                                                                                    <label></label>
                                                                                </center>
                                                                                <input type="text" class="form-control" placeholder="GII">
                                                                            </div><!-- .col-xs-3 -->
                                                                     
                                                                   
                                                                                         
                                                                </div><!-- ./row -->
                                                                    </div><!-- /.box-body -->
                                                            </div> <!-- ./box box-success-->
                                                        </div> <!-- /.col-med-6 -->

                                                       	<div class="col-md-8">                                               
                                                    		<div class="box box-success">
                                                        <div class="box-header">
                                                             <h3 class="box-title">Tipo de Atención</h3>
                                                        </div><!-- /.box-header -->
                                                            <div class="box-body">
                                                                <div class="alert alert-danger" role="alert">
                                                                    <CENTER>
                                                                        <H3>
                                                                            <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                                                            HEMBRAS
                                                                            
                                                                        </H3>
                                                                    </CENTER>
                                                                </div> <!-- /.alert -->
                                                                <div class="row">
                                                                    <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label>Cirugia</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Trauma</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Orl</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Pediatría</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Neumo</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Cardio</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3">
                                                                    </div><!-- .col-xs-3 -->  
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI">
                                                                    </div><!-- .col-xs-3 -->                             
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    
                                                                    

                                                                </div><!-- ./row -->
                                                            </div><!-- /.box-body -->                               
                                                		</div><!-- /.col-med-8 -->                                    

                                            </div> <!-- ./tab-pane-->

                                            <div class="col-md-4">                                      
                                                            <div class="box box-success">
                                                                <div class="box-header">
                                                                     <h3 class="box-title">TIPO DE ATENCIÓN</h3>
                                                                </div><!-- /.box-header -->
                                                                    <div class="box-body">                           
                                                                        <div class="alert alert-danger" role="alert"> 
                                                                            <CENTER>
                                                                                <H3>
                                                                                    <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                                                                    HEMBRAS                             
                                                                                </H3>
                                                                            </CENTER>                                
                                                                        </div> <!-- /.alert -->
                                                                        <div class="row">
                                                                           <div class="col-md-6">                           
                                                                                <center>
                                                                                    <label>Gastro</label>
                                                                                </center>
                                                                                <input type="text" class="form-control" placeholder="P1">
                                                                            </div><!-- .col-xs-3 -->
                                                                            <div class="col-md-6">                           
                                                                                <center>
                                                                                    <label>Infecto</label>
                                                                                </center>
                                                                                <input type="text" class="form-control" placeholder="P1">
                                                                            </div><!-- .col-xs-3 -->
                                                                            <div class="col-md-6">                           
                                                                                <center>
                                                                                    <label></label>
                                                                                </center>
                                                                                <input type="text" class="form-control" placeholder="P2">
                                                                            </div><!-- .col-xs-3 -->
                                                                            <div class="col-md-6">                           
                                                                                <center>
                                                                                    <label></label>
                                                                                </center>
                                                                                <input type="text" class="form-control" placeholder="P2">
                                                                            </div><!-- .col-xs-3 -->
                                                                            <div class="col-md-6">                           
                                                                                <center>
                                                                                    <label></label>
                                                                                </center>
                                                                                <input type="text" class="form-control" placeholder="P3">
                                                                            </div><!-- .col-xs-3 -->
                                                                            <div class="col-md-6">                           
                                                                                <center>
                                                                                    <label></label>
                                                                                </center>
                                                                                <input type="text" class="form-control" placeholder="P3">
                                                                            </div><!-- .col-xs-3 -->
                                                                            <div class="col-md-6">                           
                                                                                <center>
                                                                                    <label></label>
                                                                                </center>
                                                                                <input type="text" class="form-control" placeholder="P4">
                                                                            </div><!-- .col-xs-3 -->
                                                                            <div class="col-md-6">                           
                                                                                <center>
                                                                                    <label></label>
                                                                                </center>
                                                                                <input type="text" class="form-control" placeholder="P4">
                                                                            </div><!-- .col-xs-3 -->
                                                                            <div class="col-md-6">                           
                                                                                <center>
                                                                                    <label></label>
                                                                                </center>
                                                                                <input type="text" class="form-control" placeholder="P5">
                                                                            </div><!-- .col-xs-3 -->
                                                                            <div class="col-md-6">                           
                                                                                <center>
                                                                                    <label></label>
                                                                                </center>
                                                                                <input type="text" class="form-control" placeholder="P5">
                                                                            </div><!-- .col-xs-3 -->
                                                                            <div class="col-md-6">                           
                                                                                <center>
                                                                                    <label></label>
                                                                                </center>
                                                                                <input type="text" class="form-control" placeholder="GI">
                                                                            </div><!-- .col-xs-3 -->
                                                                            <div class="col-md-6">                           
                                                                                <center>
                                                                                    <label></label>
                                                                                </center>
                                                                                <input type="text" class="form-control" placeholder="GI">
                                                                            </div><!-- .col-xs-3 -->
                                                                            <div class="col-md-6">                           
                                                                                <center>
                                                                                    <label></label>
                                                                                </center>
                                                                                <input type="text" class="form-control" placeholder="GII">
                                                                            </div><!-- .col-xs-3 -->
                                                                            <div class="col-md-6">                           
                                                                                <center>
                                                                                    <label></label>
                                                                                </center>
                                                                                <input type="text" class="form-control" placeholder="GII">
                                                                            </div><!-- .col-xs-3 -->
                                                                     
                                                                   
                                                                                         
                                                                </div><!-- ./row -->
                                                                    </div><!-- /.box-body -->
                                                            </div> <!-- ./box box-success-->
                                                        </div> <!-- /.col-med-6 -->

<!-- inicio panel 3 -->
                                                        <div class="col-md-8">                                      
                                                            <div class="box box-success">
                                                                <div class="box-header">
                                                                     <h3 class="box-title">TIPO DE ATENCIÓN</h3>
                                                                </div><!-- /.box-header -->
                                                                    <div class="box-body">                           
                                                                        <div class="alert alert-danger" role="alert"> 
                                                                            <CENTER>
                                                                                <H3>
                                                                                    <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                                                                    HEMBRAS                             
                                                                                </H3>
                                                                            </CENTER>                                
                                                                        </div> <!-- /.alert -->
                                                                        <div class="row">
                                                                   <div class="col-xs-2">                           
                                                                        <center>
                                                                            <label>Nefro</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Urología</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Neuro</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Hermato</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Oncología</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label>Dermato</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P2">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3">
                                                                    </div><!-- .col-xs-3 -->  
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P3">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P4">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P5">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI">
                                                                    </div><!-- .col-xs-3 -->                             
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GI">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-xs-2">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->                               
                                                                </div><!-- ./row -->
                                                                    </div><!-- /.box-body -->
                                                            </div> <!-- ./box box-success-->
                                                        </div> <!-- /.col-med-7 -->                        
                                </div> <!-- cierre del tab 2 ??? buscar donde inicia -->


<!-- INICIO TAB8 -->                                <div class="tab-pane" id="tab8">

                                            <div class="col-md-8">                                               
                                                <div class="box box-success">
                                                    <div class="box-header">
                                                         <h3 class="box-title">Asitencia</h3>
                                                    </div><!-- /.box-header -->
                                                        <div class="box-body">                                       
                                                            <div class="alert alert-success" role="alert">          
                                                                <CENTER>
                                                                    <H2>
                                                                        <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                                                                        Asistencia                                  
                                                                    </H2>
                                                                </CENTER>
                                                                </div>
                                                                <br>
                                                                <br>
                                                                <br>
                                                                <br>
                                                                <br>
                                                                <br>
                                                                <br>
                                                                <br>
                                                                <br>
                                                                <br>
                                                                <br>
                                                            </div> <!-- /.alert -->                                      
                                                        </div><!-- /.box-body -->
                                                </div> <!-- ./box box-success-->
                                                <!-- inicio panel 2 -->
                                                <div class="col-md-6">                                               
                                                    <div class="box box-success">
                                                        <div class="box-header">
                                                             <h3 class="box-title">Asistencia Semana 1</h3>
                                                        </div><!-- /.box-header -->
                                                            <div class="box-body">
                                                                <div class="alert alert-info" role="alert">
                                                                    <CENTER>
                                                                        <H3>
                                                                        SEMANA 1<br>
                                                                            <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                                                                            VARONES
                                                                            
                                                                        </H3>
                                                                    </CENTER>
                                                                </div> <!-- /.alert -->
                                                                <div class="row">
                                                                    <div class="col-xs-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="1,2,3...">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="1,2,3...">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="1,2,3...">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="1,2,3...">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="1,2,3..">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->                                                                                                                       

                                                                </div><!-- ./row -->
                                                            </div><!-- /.box-body -->                               
                                                </div><!-- /.col-med-8 -->
                                                </div>
<!-- panel 2 de asistencia piso 2 -->
                                                <div class="col-md-6">                                               
                                                    <div class="box box-success">
                                                        <div class="box-header">
                                                             <h3 class="box-title">Asistencia Semana 1</h3>
                                                        </div><!-- /.box-header -->
                                                            <div class="box-body">
                                                                <div class="alert alert-danger" role="alert">
                                                                    <CENTER>
                                                                        <H3>
                                                                        SEMANA 1<br>
                                                                            <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                                                            HEMBRAS
                                                                            
                                                                        </H3>
                                                                    </CENTER>
                                                                </div> <!-- /.alert -->
                                                                <div class="row">
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="1,2,3...">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="1,2,3...">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="1,2,3...">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="1,2,3...">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="1,2,3...">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->                                                                    
                                                                                                                                     

                                                                </div><!-- ./row -->
                                                            </div><!-- /.box-body -->                               
                                                </div><!-- /.col-med-8 -->
                                                </div>

                                                <div class="col-md-6">                                               
                                                    <div class="box box-success">
                                                        <div class="box-header">
                                                             <h3 class="box-title">Asistencia Semana 2</h3>
                                                        </div><!-- /.box-header -->
                                                            <div class="box-body">
                                                                <div class="alert alert-info" role="alert">
                                                                    <CENTER>
                                                                        <H3>
                                                                        SEMANA 1<br>
                                                                            <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                                                                            VARONES
                                                                            
                                                                        </H3>
                                                                    </CENTER>
                                                                </div> <!-- /.alert -->
                                                                <div class="row">
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="1,2,3...">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="1,2,3...">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->                                                                                                                       

                                                                </div><!-- ./row -->
                                                            </div><!-- /.box-body -->                               
                                                </div><!-- /.col-med-8 -->
                                                </div>
<!-- panel 2 de asistencia piso 2 -->
                                                <div class="col-md-6">                                               
                                                    <div class="box box-success">
                                                        <div class="box-header">
                                                             <h3 class="box-title">Asistencia Semana 2</h3>
                                                        </div><!-- /.box-header -->
                                                            <div class="box-body">
                                                                <div class="alert alert-danger" role="alert">
                                                                    <CENTER>
                                                                        <H3>
                                                                        SEMANA 1<br>
                                                                            <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                                                            HEMBRAS
                                                                            
                                                                        </H3>
                                                                    </CENTER>
                                                                </div> <!-- /.alert -->
                                                                <div class="row">
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->                                                                    
                                                                                                                                     

                                                                </div><!-- ./row -->
                                                            </div><!-- /.box-body -->                               
                                                </div><!-- /.col-med-8 -->
                                                </div>

                                                <div class="col-md-6">                                               
                                                    <div class="box box-success">
                                                        <div class="box-header">
                                                             <h3 class="box-title">Asistencia Semana 3</h3>
                                                        </div><!-- /.box-header -->
                                                            <div class="box-body">
                                                                <div class="alert alert-info" role="alert">
                                                                    <CENTER>
                                                                        <H3>
                                                                        SEMANA 1<br>
                                                                            <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                                                                            VARONES
                                                                            
                                                                        </H3>
                                                                    </CENTER>
                                                                </div> <!-- /.alert -->
                                                                <div class="row">
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->                                                                                                                       

                                                                </div><!-- ./row -->
                                                            </div><!-- /.box-body -->                               
                                                </div><!-- /.col-med-8 -->
                                                </div>
<!-- panel 2 de asistencia piso 2 -->
                                                <div class="col-md-6">                                               
                                                    <div class="box box-success">
                                                        <div class="box-header">
                                                             <h3 class="box-title">Asistencia Semana 3</h3>
                                                        </div><!-- /.box-header -->
                                                            <div class="box-body">
                                                                <div class="alert alert-danger" role="alert">
                                                                    <CENTER>
                                                                        <H3>
                                                                        SEMANA 1<br>
                                                                            <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                                                            HEMBRAS
                                                                            
                                                                        </H3>
                                                                    </CENTER>
                                                                </div> <!-- /.alert -->
                                                                <div class="row">
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->                                                                    
                                                                                                                                     

                                                                </div><!-- ./row -->
                                                            </div><!-- /.box-body -->                               
                                                </div><!-- /.col-med-8 -->
                                                </div>

                                                <div class="col-md-6">                                               
                                                    <div class="box box-success">
                                                        <div class="box-header">
                                                             <h3 class="box-title">Asistencia Semana 4</h3>
                                                        </div><!-- /.box-header -->
                                                            <div class="box-body">
                                                                <div class="alert alert-info" role="alert">
                                                                    <CENTER>
                                                                        <H3>
                                                                        SEMANA 1<br>
                                                                            <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                                                                            VARONES
                                                                            
                                                                        </H3>
                                                                    </CENTER>
                                                                </div> <!-- /.alert -->
                                                                <div class="row">
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->                                                                                                                       

                                                                </div><!-- ./row -->
                                                            </div><!-- /.box-body -->                               
                                                </div><!-- /.col-med-8 -->
                                                </div>
<!-- panel 2 de asistencia piso 2 -->
                                                <div class="col-md-6">                                               
                                                    <div class="box box-success">
                                                        <div class="box-header">
                                                             <h3 class="box-title">Asistencia Semana 4</h3>
                                                        </div><!-- /.box-header -->
                                                            <div class="box-body">
                                                                <div class="alert alert-danger" role="alert">
                                                                    <CENTER>
                                                                        <H3>
                                                                        SEMANA 1<br>
                                                                            <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                                                            HEMBRAS
                                                                            
                                                                        </H3>
                                                                    </CENTER>
                                                                </div> <!-- /.alert -->
                                                                <div class="row">
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-3">                           
                                                                        <center>
                                                                            <label>Día</label>                                                                            
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P1</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="GII">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P2</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P3</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P4</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                     <div class="col-md-3">
                                                                        <center>
                                                                            <label></label>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>P5</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>Gi</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 --> 
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <label>GII</label>
                                                                        </center>
                                                                        <input type="text" class="form-control" placeholder="P1">
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->
                                                                    <div class="col-md-2">
                                                                        <center>
                                                                            <hr>
                                                                        </center>                                                                        
                                                                    </div><!-- .col-xs-3 -->                                                                 
                                                                                                                                     
												
                                                                </div><!-- ./row -->
                                                            </div><!-- /.box-body -->                               
                                                </div><!-- /.col-med-8 -->
                                                </div>

                                                <div class="col-md-12">                                               
                                                    <div class="box box-success">
                                                        <div class="box-header">
                                                             <h3 class="box-title">Asistencia Semana 4</h3>
                                                        </div><!-- /.box-header -->
                                                            <div class="box-body">                                                                
                                                                	<button  type="submit" class="btn btn-primary btn-lg btn-block">
													                    <H1>
													                        <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> REGISTRAR
													                    </H1>
													                </button>                                                               
                                                                                                                                     
												
                                                                </div><!-- ./row -->
                                                            </div><!-- /.box-body -->                               
                                                </div><!-- /.col-med-8 -->
                                                </div>                                               

								                                
                                </div> <!-- cierre del tab 2 ??? buscar donde inicia -->





                        </div> <!-- /.tab-content -->
<!-- FIN FORM -->   </form> <!-- /FORM -->
                    </div><!-- /.row -->                    

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script> -->
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