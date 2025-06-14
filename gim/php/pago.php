<?php 
$con = new mysqli("localhost", "root", "", "gim");

$sel = "SELECT id_mem, nombre FROM membresia";
$r = $con->query($sel);


session_start();


if (!isset($_SESSION['usuario'])) {
    header("location:sesion.php");
}

$_SESSION['usuario'];
$usuario = $_SESSION['usuario']['usuario'];

$buscar = "SELECT id FROM usuario WHERE usuario = '$usuario'";
$res = $con->query($buscar);
$fila = $res->fetch_assoc();
$id = $fila['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autitos</title>
</head>
<body>
    <h1>Registra pago</h1>
    <hr>

    <center>
        <p>hola</p>

    
        <p>Usuario <?php echo "<a class='a'>" . $usuario . "</a>"; ?></p>
        <div class="form">
            <h2>Registro</h2>
            <form action="" method="get">
                <p>Ingrese la membresía</p>
                <select name="mem"> 
                    <option value="0">Selecciona membresia</option>

                    <?php
                    // Recorre los resultados de la consulta y genera las opciones del select
                    while($dato = $r->fetch_assoc()){
                        echo "<option value='" . $dato["id_mem"] . "'>" . $dato["nombre"] . "</option>";
                    }
                    ?>
                    
                </select>
                <br>
                <input type="submit" name="boton" value="enviar">
            </form>
        </div>
    </center>

    <?php
    if (isset($_REQUEST['mem'])) {
        // Guarda el valor seleccionado (ID de membresía)
        $d = $_REQUEST['mem'];

        $buscar22 = "SELECT * FROM pago WHERE id = '$id'";
        $respue = $con->query($buscar22);

        if ($respue->num_rows > 0) {
            echo "ya tiene membresia activa <a href='cambio.php'>cambiar</a>";
        }else {
            
        

$buscar2 = "SELECT precio FROM membresia WHERE id_mem = '$d'";
$respre = $con->query($buscar2);
$fila2 = $respre->fetch_assoc();
$id_p = $fila2['precio'];
        // Inserta un nuevo registro en la tabla pago con la membresía seleccionada y el ID del usuario
        $ins = "INSERT INTO pago (id_mem, id, precio) VALUES ('$d', '$id', '$id_p')";
        $con->query($ins);
    }
}
    

   ?>
    <p>id <?php echo "<a class='a'>" . $id . "</a>"; ?></p>
    <a href="cerrar">d</a>
    <p>id <?php echo "<a class='a'>" . $id_p . "</a>"; ?></p>
    <p>mem <?php echo "<a class='a'>" . $d . "</a>"; ?></p>
  
</body>
</html>
