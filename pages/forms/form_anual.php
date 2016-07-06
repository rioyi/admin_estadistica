<?php


session_start();
//manejamos en sesion el nombre del usuario que se ha logeado
if (!isset($_SESSION["nombre_usuario"])){
    header("location:../../login.php");

}
$id_user = $_SESSION["nombre_usuario"];
require ("../control/conexion_bd.php");
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

        <script type="text/javascript" src="../../js/valida/lib/jquery-1.11.1.js"></script>
        <script src="../../js/valida/lib/jquery.js"></script>
        <script src="../../js/valida/lib/jquery.mockjax.js"></script>
        <script src="../../js/valida/lib/jquery.form.js"></script>
        <script src="../../js/valida/dist/jquery.validate.js"></script>
        <script src="../../js/valida/lib/jquery-1.11.1.js"></script>
        <script src="../../js/valida/dist/jquery.validate.js"></script>
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
                                    <img src="../../img/avatar3.png" class="img-circle" alt="User Image" />
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
                                        <a href="../../logout.php" class="btn btn-default btn-flat">Salir</a>
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
                        Consulta de registros mensuales
                        <small>Consulta - Vista</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                        <li><a href="#">Formularios</a></li>
                        <li class="active">Formulario Consulta Registros Mensuales</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Busquedad de registro mensual</h3>
                                </div>
                            <!-- inicio de form -->
                            <form action="../reporte/reporte_anual.php" method="post" >

                                <div class="box-body">
                                    <!-- Nombre -->


                                    <div class="form-group">
                                        <label>Indique el Mes a aconsultar:</label>
                                        <div class="form-group">
                                                        <h3>SELECCIONAR PERIODO ESCOLAR</h3>
                                                        <select class="form-control" name="periodo_escolar">
                                                        <OPTION>SELECCIONE EL PERIODO ESCOLAR</OPTION>

<?php
require ("../control/conexion_bd.php");
$query = 'SELECT * FROM periodo_escolar';
$result= mysql_query($query, $link);

?>

    <?php
    while ( $row = mysql_fetch_array($result) )
    {
        ?>

        <option value=" <?php echo $row['id_periodo_escolar'] ?> " >
        <?php echo $row['inicio']; echo "-"; echo $row['fin']; ?>
        </option>

        <?php
    }
    ?>
</select>

                                                    </div>  <!-- /.form-group   Select Dinamico -->
                                    </div><!-- /.form group -->


                                    <button  type="submit" class="btn btn-primary btn-lg btn-block">
                                                                        <H1>
                                                                            <span class="glyphicon glyphicon-send" aria-hidden="true"></span> CONSULTAR
                                                                        </H1>
                                                                    </button>
                                    <!-- Apellido -->


                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            </form>

                        </div><!-- /.col (left) -->
                        <div class="col-md-6">
                            <div class="box box-success">
                                <div class="box-header">
                                     <h3 class="box-title">Informació sobre la consulta</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                <div class="alert alert-info" role="alert">
                                    <CENTER>
                                        <H2>PERIODO ESCOLAR ACTUAL</H2>
                                    </CENTER>
                                </div><!-- /.box-body -->

                            </div><!-- /.form group -->

                    </div><!-- /.row -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


         <!-- jQuery 2.0.2 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="../../js/jquery-2.2.0.min.js" type="text/javascript"></script>

        -->

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
