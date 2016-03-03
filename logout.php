<?php
  #session_start();
  #unset($_SESSION["nombre_usuario"]); 
  #session_destroy();
  #header("location:login.php");
  #exit;


  session_start();
  unset($_SESSION["nombre_usuario"]); 

  session_destroy();
  header("Location: index.php");
  exit;



?>