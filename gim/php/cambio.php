<?php
$con = new mysqli("localhost", "root", "", "gim");
session_start();

if (!isset($_SESSION['usuario'])) {
    header("location:iniciar.php");
}

$usuario = $_SESSION['usuario']['usuario'];

// Buscamos el ID del usuario
$buscar = "SELECT id FROM usuario WHERE usuario = '$usuario'";
$res = $con->query($buscar);
$fila = $res->fetch_assoc();
$id = $fila['id_reg'];

// Buscamos su membresía actual
$mem_act = "SELECT membresia.nombre FROM pago, membresia WHERE pago.id_mem = membresia.id_mem AND pago.id_reg = '$id'";
$res_mem = $con->query($mem_act);


// Si se envió el formulario para cambiar
if (isset($_POST['cambiar'])) {
    $nueva = $_POST['mem'];
    
    if ($nueva != 0) {
        // Buscamos el precio
        $pre = $con->query("SELECT precio FROM membresia WHERE id_mem = '$nueva'");
        $fila2 = $pre->fetch_assoc();
        $precio = $fila2['precio'];

        // Verificamos si ya tiene pago
        $ver = $con->query("SELECT * FROM pago WHERE id_reg = '$id'");
        if ($ver->num_rows > 0) {
            $con->query("UPDATE pago SET id_mem = '$nueva', precio = '$precio' WHERE id_reg = '$id'");
            echo "Membresía actualizada.";
        } else {
            $con->query("INSERT INTO pago (id_mem, id_reg, precio) VALUES ('$nueva', '$id', '$precio')");
            echo "Membresía registrada.";
        }

        // Actualizar variable actual
        $actual = $con->query("SELECT nombre FROM membresia WHERE id_mem = '$nueva'")->fetch_assoc()['nombre'];
    } else {
        echo "Seleccioná una membresía válida.";
    }
}
?>

<h2>Usuario: <?php echo $usuario; ?></h2>
<p>Membresía actual: <strong><?php echo $actual; ?></strong></p>

<form method="post">
    <p>Seleccioná una nueva membresía:</p>
    <select name="mem">
        <option value="0">Seleccioná</option>
        <?php
        $res_op = $con->query("SELECT id_mem, nombre FROM membresia");
        while ($op = $res_op->fetch_assoc()) {
            echo "<option value='{$op['id_mem']}'>{$op['nombre']}</option>";
        }
        ?>
    </select>
    <br><br>
    <input type="submit" name="cambiar" value="Cambiar membresía">
</form>
