<?php
include 'conexion.php';
$sel="SELECT * fROM tabla";
$resultado=$con->query($sel);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de registros</title>
</head>
<body>
    <h3>Lista de registros</h3>
    <table border=3>
        <tr>
            <th>ID</th>
            <th>Apellido</th>
            <th>Nombre</th>
            <th>dni</th>
            <th>Contraseña</th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </tr>
    <?php
while ($fila=$resultado->fetch_assoc()){
    $cont=$cont+1;
    ?>
    <tr>
        <td><?php echo $cont ?></td>
        <td><?php echo $fila['id']?></td>
        <td><?php echo $fila['apellido']?></td>
        <td><?php echo $fila['nombre']?></td>
        <td><?php echo $fila['fecha_nac']?></td>
        <td><?php echo $fila['edad']?></td>
        <td><?php echo $fila['telefono']?></td>
        <td><a href='for_mod.php?id=<?php echo $fila['id']?>'>Modificar</a></td>
        <td><a href='eliminar.php?id=<?php echo $fila['id']?>'>Borrar</a></td>
    </tr>
<?php 
}
?>
</table>
Cantidad de registros encontrados: <?php echo $cont ?>
<br>
<a href="forulario.php">Cargas registros</a>
</body>
</html>



