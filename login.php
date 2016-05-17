<?php
session_start();
$valido=true;
      if(isset($_POST['enviado'])){
         /*Entra solo si se presiona el boton entrar*/

         //datos de acceso
       require ("pages/control/conexion_bd.php");
       
         
         //establecer la conexion   
        
         $email=$_POST['email'];
         $clave=$_POST['clave'];
        

         $consulta="SELECT * FROM usuario where email='$email' AND clave='$clave'";
         $result=mysql_query($consulta) or die (mysql_error());
         $filasn= mysql_num_rows($result);
         if ($filasn<=0 || isset($_GET['nologin']) ){
             $valido=false;
         }else{
        $rowsresult=mysql_fetch_array($result);          
        $_SESSION['nombre_usuario']= $rowsresult['id_usuario'];
        
             $valido=true;
             //guardamos en sesion el nombre del usuario 
            
             header("location:index.php?login=true");
         }               
      }





?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Iniciar Sesion</title>
    
    <link rel="stylesheet" href="css/style.css">
     <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />   
    
  </head>



    <body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Inciar Sesión</h1>
			</div>
			<form action="login.php" method="POST">
			<div class="login-form">
				
					<div class="control-group">
						<input type="text" class="login-field" name="email" placeholder="E-mail" id="login-name">
						<label class="login-field-icon fui-user" for="login-name"></label>
					</div>

					<div class="control-group">
						<input type="password" class="login-field" name="clave" placeholder="Clave" id="login-pass">
						<label class="login-field-icon fui-lock" for="login-pass"></label>
					</div>
					
					
					<button class="btn btn-primary btn-large btn-block" type="submit" name="enviado">ENTRAR</button>
					<a class="login-link" href="#">Perdite tu clave?</a>

					<?php if ($valido==false) {
                				
                                echo '<div class="alert alert-danger" role="alert">Los datos ingresados no se reconocen, por favor inténtelo de nuevo.</div>';
            					}?>
				
			</div>
			</form>
		</div>
	</div>
</body>
    
    
    
    
    
  </body>
</html>
