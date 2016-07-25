<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Sistema Estadistico</title>

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
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	</head>
<body>
<?php
$id = $_POST['id_periodo'];
$mes = $_POST['mesb'];
$inicio = $_POST['inicio'];
$fin = $_POST['fin'];

echo $mes;
echo "<br>";
echo $inicio;
echo "<br>";
echo $fin;
echo "<br>";
echo $id;


#echo "$id";
?>

 <br>
        <br>
        <br>
        <center><font size="8px" color="#f39c12"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span></font>
        <br>
      <font color="#2c3e50">
        <p><h2><b>ESTA A PUNTO DE</b> </h2>
<div class="alert alert-danger" role="alert">
  <font size="9"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only"></span>
  BORRAR</font>
</div>

         <h2><b>LOS DATOS DE UN MES</b></h2></p>        
      </font>
      <div class="alert alert-warning" role="alert">¡BORRAR LOS DATOS IMPLICA PERDER TODA LA INFORMACION DEL MES!</div>
      


<form class="contact_form" action="../control/borrar_mes.php" method="post">
  <input type="hidden" name="mes" value= <?php echo "$mes"; ?> />
  <input type="hidden" name="inicio" value= <?php echo "$inicio"; ?> />
  <input type="hidden" name="fin" value= <?php echo "$fin"; ?> />
  <input type="hidden" name="id" value= <?php echo "$id"; ?> />
      <button type="submit" class="btn btn-danger  btn-lg">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> BORRAR
      </button>

      <a href="javascript:history.go(-1)">
      <button type="button" class="btn btn-primary  btn-lg">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> NO BORRAR
      </button></a>

</form>

      


       <br>
       <br>
       </center>

       





</body>
</html>