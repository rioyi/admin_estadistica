<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Borrado de Docente</title>

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
        <link href="../../css/AdminLTE.css" rel="stylesheet" type="text/css" />>

    <script src="../assets/js/chart-master/Chart.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	</head>
<body>
<?php
$id=$_GET['id'];
echo "$id";
?>

 <br>
        <br>
        <br>
        <center><font size="8px" color="#f39c12"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span></font>
        <br>
      <font color="#2c3e50">
        <p><h2><b>ESTA A PUNTO DE</b> </h2>
<div class="alert alert-success" role="alert">
  <font size="9"><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span>
  <span class="sr-only"></span>
  RESPALDAR</font>
</div>

         <h2><b>LA INFORMACIÓN DE LA BASE DE DATOS </b></h2></p>
      </font>
      <div class="alert alert-warning" role="alert">¡EL ARCHIVO SE ALMACENA DENTRO DE LA CARPETA BACKUP DENTRO DEL DIRECTORIO DEL SISTEMA!</div>



<form class="contact_form" action="../reporte/backup.php" method="post">

      <button type="submit" class="btn btn-success  btn-lg">
        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> CREAR RESPALDO
      </button>

      <a href="javascript:history.go(-1)">
      <button type="button" class="btn btn-primary  btn-lg">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> NO CREAR RESPALDO
      </button></a>

</form>




       <br>
       <br>
       </center>







</body>
</html>
