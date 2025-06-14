<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
</head>
<body>
    <?php
$a=$_GET['apellido'];
$n=$_GET['nombre'];
$f=$_GET['fecha_nac'];
$e=$_GET['edad'];
//generar consulta SSQL
$act="UPDATE registros SET apellido='$a' , nombre='$n' , edad='$e' , fecha_nac='$f'";
//llamara a la conexion
include('conexionn.php');
//EJECUTAMOS
$con->query($act);
header('location:basee.php');


?>

</body>
</html>