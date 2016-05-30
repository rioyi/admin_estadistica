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
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login screen</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   
</head>

<body>
    
    <div class="container custom-container">
        <div class="panel panel-default">
            <div class="panel-body">
                
                <h3 class="text-center">Hola, Bienvenido</h3>
                <br>
                <form class="form" role="form" method="POST" action="login.php">
                
                    <div class="form-group custom-elem">
                        <label class="placeholder">E-mail</label>
                        <input id="username" name="email" type="text" class="form-control material-input" autocomplete="off">
                            <span class="bottom-liner"></span>
                            <span class="highlight"></span>
                    </div>
                    <div class="form-group custom-elem">
                        <label class="placeholder">Clave</label>
                        <input id="password" name="clave" type="password" class="form-control material-input" autocomplete="off">
                            <span class="bottom-liner"></span>
                            <span class="highlight"></span>
                            
                    </div>
                <?php if ($valido==false) {
                                
                                echo '<div class="alert alert-danger" role="alert"><center>Clave o Email equivocado <br> Intente de nuevo</center></div>';
                                }?> 
                
                <p class="text-center"><small><b><a href="#">¿Olvido su Clave?</a></b></small></p>
            </div>
        </div>
        <button id="flow-button" name="enviado" type="submit" class="btn btn-custom btn-block not-visible">ENTRAR</button>
    </div>
    
    </form>
    <!-- Bootstrap.min.js was deleted since it wasn't used in this example -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/velocity.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>
