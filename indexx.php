<?php
session_start();
//manejamos en sesion el nombre del usuario que se ha logeado
if (!isset($_SESSION["nombre_usuario"])){
    header("location:login.php");
    
}
$_SESSION["nombre_usuario"];
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
                        Sección Docentes
                        <small>Registro - Vista</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                        <li><a href="#">Formularios</a></li>
                        <li class="active">Formulario Docente</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Registrar Docente</h3>
                                </div>
                            <!-- inicio de form -->
                            <form action="../control/registro_docente.php" method="post" >

                                <div class="box-body">
                                    <!-- Nombre -->
                                    <div class="form-group">
                                        <label>NOMBRE:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <input type="text" name="nombre" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <!-- Apellido -->
                                    <label>APELLLIDO</label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <input type="text" name="apellido" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <!-- phone mask -->
                                    <div class="form-group">
                                        <label>TELÉFONO:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <input type="text" name="telefono" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <!-- phone mask -->
                                    <div class="form-group">
                                        <label>DIRECCIÓN</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="glyphicon glyphicon-home"></i>
                                            </div>
                                            <input type="text-area" name="direccion" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <!-- phone mask -->
                                    <div class="form-group">
                                        <label>PISO</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="glyphicon glyphicon-sort"></i>
                                            </div>
                                            <input type="text" name="piso" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <!-- phone mask -->
                                    <div class="form-group">
                                        <label>EMAIL:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="glyphicon glyphicon-envelope"></i>
                                            </div>
                                            <input type="text" naome="email" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask/>
                                        </div><!-- /.input group -->
                                        <div class="box-footer">
                                        <center><button type="submit" class="btn-lg btn-primary">REGISTRAR</button></center>
                                    </div>
                                    </div><!-- /.form group -->

                                   

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            </form>
                           
                        </div><!-- /.col (left) -->


<?php
#$consulta = $_POST['consulta'];
#echo "<h3>Su Consulta es: $consulta</h3>";

require ("../control/conexion_bd.php");
  
  $sql="SELECT * FROM docente";
  $datos=mysql_query($sql,$link);
  $contador = mysql_num_rows($datos);
    if ($contador == 0)
      {
        echo "<center><h1><font color='#E74C3C'>NO SE ENCONTRO RESULTADOS :-( </font></h1></center>";
      }
    else
      {
                    
?>




                        <div class="col-md-6">
                            <div class="box box-success">
                                <div class="box-header">
                                     <h3 class="box-title">Lista de Docentes</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <table class="table table-bordered">
                                        <tr>
                                        
                                            <th style="width: 10px">PISO</th>
                                            <th><center>NOMBRE Y APELLIDO</center></th>
                                            <th>  OPCIONES</th>
                                        
                                        </tr>
<?php
                              while ($renglon=mysql_fetch_array($datos)) 
                                {
?>
                              <tbody>
                                <tr>                                
                                  <td><?php echo $renglon['piso']; ?></td>
                                  <td><?php echo $renglon['nombre_docente']; echo "  "; echo $renglon['apellido_docente']?></td>
                                  <td>
                                  <a href="ver_alumno.php?id=<?php echo $renglon['ci_escolar']?>"> <button class="btn btn-success btn-xs"></i><b><span class="glyphicon glyphicon glyphicon-eye-open" aria-hidden="true"></span> VER</b></button></a>
                                  <!--<a href="inscripcion.php?id=<?php echo $renglon['ci_escolar']?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> MODIFICAR</button> -->
                                  <a href="../emergente/borrar_docente.php?id=<?php echo $renglon['id_docente']?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i> BORRAR</button>   
                                    
                                  </td>
                                </tr>

                                 
                              </tbody>
                              <?php } }?>
                                        
                                    </table>
                                </div><!-- /.box-body -->
                                <div class="box-footer clearfix">
                                    <ul class="pagination pagination-sm no-margin pull-right">
                                        <li><a href="#">&laquo;</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">&raquo;</a></li>
                                    </ul>
                                </div>
                            </div><!-- /.form group -->

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            
                        </div><!-- /.col (right) -->
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
       

    </body>
</html>