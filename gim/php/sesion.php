<?php
$con = new mysqli ("localhost", "root", "", "gim");

session_start();

$usuario=$_REQUEST['usuario1'];
$contra=$_REQUEST['contra'];
//password_hash($_POST['contraseña'], PASSWORD_BCRYPT);


$consulta= "SELECT * FROM usuario where usuario = '$usuario' ";
$eje=$con->query($consulta); 

$datos=$eje->fetch_assoc();




 if ( $contra == $datos['contra'] && $usuario == $datos['usuario']) {
    $_SESSION['usuario'] = $datos;
    header("location:index2.php");
}else {
    echo "e";
 }


