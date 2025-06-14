<?php
session_start();
$con = new mysqli ("localhost", "root", "", "gim");
if (!isset($_SESSION['usuario'])) {
    header("location:sesion.php");
  
}  $_SESSION['usuario'];
$usuario = $_SESSION['usuario']['usuario']; 
$buscar = "SELECT * FROM usuario WHERE usuario = '$usuario'";
$res = $con->query($buscar);
$fila = $res->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
        <div class="form">
        <div></div>
        <div><a class="l" href="./php/iniciar.php" >¡Hola <?php echo "<a class='a'>" .$fila['nombre']. "</a>"; ?></a></div>
        <div><a class="l" href="#" >Categorias</a></div>
        <div><a class="l" href="#" >Ubicaciones</a></div>
        <div><a class="l" href="" >Nosotros</a></div>
         <div><a class="l" href="cerrar.php" >Cerrar Sesion</a></div>
        <div></div>
        <div>b</div>
    </div>
    
   
</body>
</html>