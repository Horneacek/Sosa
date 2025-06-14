<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form_mmod</title>
</head>
<body>
    <?php
$id=$_REQUEST['id'];
$sel="SELECT * FROM registros WHERE id=$id";
include 'conexionn.php';
$res=$con->query($sel);
$row=$res->fetch_assoc();
?>
<form action="actualizar.php" method="get" >
        <h1 class="titulo">Registrarse</h1>
        
        <input  type="text" name="Nombre" placeholder="Nombre" value="<?php echo $row['nombre']?> " />
        <input  type="text" name="Apellido"  placeholder="Apellido" value="<?php echo $row['apellido']?> " />
    
        <input  type="password" name="Password" placeholder="Password" value="<?php echo $row['edad']?> " />
        <input  type="password" name="Password" placeholder="Password" value="<?php echo $row['fecha_nac']?> " />
       <br><br>
    
        <input type="submit" class="btn" value="REGISTRAR">

        
        
    </form>













?>
</body>
</html>