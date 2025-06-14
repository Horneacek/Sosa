
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
        <div><a class="l" href="../index.html" >Volver </a></div>
        <div><a class="l" href="#" >Categorias</a></div>
        <div><a class="l" href="#" >Ubicaciones</a></div>
        <div><a class="l" href="./php/form.php" >Nosotros</a></div>
        <div></div>
        <div>b</div>
    </div>
    
    <center>
<div class="iniciar">
<form action="" method="get">
    <p>Ingrese su Usuario</p>
        <input type="text" name="usuario1">
    <p>Ingrese su Contraseña</p>
        <input type="text" name="contra">
    <br><br>
    <input type="submit" value="Iniciar Sesion">
    <br><br>
    <p><a href="form.php"> ó Registrarme</p>
</form></div><center>
</body>
</html>
<?php
$con = new mysqli ("localhost", "root", "", "gim");

session_start();
if (isset($_REQUEST['usuario1']) && isset($_REQUEST['contra'])) {

$usuario=$_REQUEST['usuario1'];
$contra=$_REQUEST['contra'];
//password_hash($_POST['contraseña'], PASSWORD_BCRYPT);


$consulta= "SELECT * FROM usuario where usuario = '$usuario' ";
$eje=$con->query($consulta); 

$datos=$eje->fetch_assoc();

 if ($contra == $datos['contra'] && $usuario == $datos['usuario']) {
    $_SESSION['usuario'] = $datos;
    header("location:index2.php");
}else {
    echo "er";
 }
}


