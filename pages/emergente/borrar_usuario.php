<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Sistema Estadistico</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="../stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="../stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="../stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">

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
<div class="alert alert-danger" role="alert">
  <font size="9"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only"></span>
  BORRAR</font>
</div>

         <h2><b>LOS DATOS DE UN USUARIO</b></h2></p>        
      </font>
      <div class="alert alert-warning" role="alert">¡BORRAR LOS DATOS IMPLICA PERDER TODA LA INFORMACION DEL USUARIO!</div>
      


<form class="contact_form" action="../control/borrar_usuario.php" method="post">
  <input type="hidden" name="id_usuario" value= <?php echo "$id"; ?> />
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