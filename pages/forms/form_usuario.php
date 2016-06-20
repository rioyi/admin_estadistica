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

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="../../js/valida/lib/jquery-1.11.1.js"></script>
        <script src="../../js/valida/lib/jquery.js"></script>
        <script src="../../js/valida/lib/jquery.mockjax.js"></script>
        <script src="../../js/valida/lib/jquery.form.js"></script>
        <script src="../../js/valida/dist/jquery.validate.js"></script>
        <script src="../../js/valida/lib/jquery-1.11.1.js"></script>
        <script src="../../js/valida/dist/jquery.validate.js"></script>
         <script>
        $(function(){
            $.validator.addMethod('latino',function(value, element){
                return this.optional(element) || /^[a-záéóóúàèìòùäëïöüñ\s]+$/i.test(value);
            });
            $("#btn").on("click", function(){
                $("#formulario").validate 
                    ({
                    rules:
                        {
                        nombre: {required:true,latino: true ,minlength:3, maxlength:14},                     
                        clave: {required:true, minlength:6, maxlength:15},                       
                        respuesta: {required:true, minlength:8, maxlength:25},
                        email: {required:true, email: true, maxlength:40}             

                       
                        },
                        messages:
                        {
                            nombre:{required: '<font color="red"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Este campo es requerido</font>', minlength:'<font color="red"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> El mínimo de caracteres son 4</font>', maxlength:'<font color="red"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> El maximo de caracteres son 14</font>',latino:'<font color="red"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Solo letras</font>'},
                            
                            clave:{required: '<font color="red"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Este campo es requerido</font>', minlength:'<font color="red"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> El mínimo de caracteres son 6</font>', maxlength:'<font color="red"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> El maximo de caracteres son 15</font>'},

                          

                            respuesta:{required: '<font color="red"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Este campo es requerido</font>',maxlength:'<font color="red"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> El maximo de caracteres son 15</font>'},

                            email:{required: '<font color="red"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Este campo es requerido</font>', email:'<font color="red"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Debe ser un formato de email correcto</font>', maxlength:'<font color="red"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> El maximo de caracteres son 40</font>'}

                            

                        }
                    
                });
            });
        });

    </script>
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
                        Sección Usuarios                     <small>Registro - Vista</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                        <li><a href="#">Formularios</a></li>
                        <li class="active">Formulario Periodo Escolar</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Registrar Periodo Escolar</h3>
                                </div>
                            <!-- inicio de form -->
                            <form id="formulario" action="../control/registro_usuario.php" method="post" >

                                <div class="box-body">
                                    <!-- Nombre -->
                                    <div class="form-group">
                                        <label>Nombre Usuario:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" id="nombre" name="nombre" class="form-control"/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <div class="form-group">
                                        <label>Email:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" id="email" name="email" class="form-control"/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <div class="form-group">
                                        <label>Clave:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" id="clave" name="clave" class="form-control"/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    

                                    <div class="form-group">
                                            <label>Pregunta Secreta</label>
                                            <select class="form-control" name="pregunta">
                                                <option value="">Seleccionar</option>
                                                <option value="color_favorito" >Color Favorito</option>
                                                <option value="animal_favorito">Animal Favorito</option>
                                                <option value="marca_favorita">Marca Favorita</option>
                                                <option value="numero_favorito">Número Favorito</option>
                                                <option value="ciudad_favorita">Ciudad Favorita</option>
                                            </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Respuesta Secreta:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" id="respuesta" name="respuesta" class="form-control"/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <div class="form-group">
                                            <label>Tipo de usuario</label>
                                            <select class="form-control" name="rol">
                                                <option value="Estandar">Estandar</option>
                                                <option value="Administrador" >Administrador</option>                    
                                            </select>
                                    </div>

                                    

                                    <button type="submit" id="btn" class="btn btn-primary">REGISTRAR</button>

                                   

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            </form>
                           
                        </div><!-- /.col (left) -->


<?php
#$consulta = $_POST['consulta'];
#echo "<h3>Su Consulta es: $consulta</h3>";

require ("../control/conexion_bd.php");
  
  $sql="SELECT * FROM usuario";
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
                                     <h3 class="box-title">Lista de Usuarios Registraso</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                               
                                    <table class="table table-bordered">
                                        <tr>
                                            <th style="width: 10px">ID</th>
                                            <th> <center> USUARIOS </center></th>
                                            <th>TIPO</th>
                                            <th>OPCIONES</th>
                                            
                                            
                                        </tr>
                                        <?php
                              while ($renglon=mysql_fetch_array($datos)) 
                                {
?>
                              <tbody>
                                <tr>                                
                                  <td><?php echo $renglon['id_usuario']; ?></td>
                                  <td><center><?php echo $renglon['nombre_usuario'];?></center></td>
                                  <td><center><?php echo $renglon['roles'];?></center></td>
                                  <td>
                                  <a href="../forms/form_usuario_editar.php?id=<?php echo $renglon['id_usuario']?>"> <button class="btn btn-success btn-xs"></i><b><span class="glyphicon glyphicon glyphicon-eye-open" aria-hidden="true"></span> VER</b></button>
                                  </a>
                                  
                                  <a href="../emergente/borrar_usuario.php?id=<?php echo $renglon['id_usuario']?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i> BORRAR</button>   
                                    
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
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="../../js/jquery-2.2.0.min.js" type="text/javascript"></script>  -->
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