<?php
// variables
$dbhost = 'localhost';
$dbname = 'estadistica_hospital';
$dbuser = 'root';
$dbpass = '123';

$backup_file = $dbname . date("Y-m-d-H-i-s") . '.gz';

// comandos a ejecutar
$command = "mysqldump --opt -h $dbhost -u $dbuser -p$dbpass $dbname | gzip > ../../backup/$backup_file";

// ejecución y salida de éxito o errores
system($command,$output);
header('location: ../emergente/backup_exitoso.php');
echo "Resplado satisfactorio";
?>
