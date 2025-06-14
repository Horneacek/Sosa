    <?php
    $con = new mysqli ("localhost", "root", "", "gim");
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gimnasio</title>
        <link rel="icon" href=""  width="146" height="89">
        <link rel="stylesheet" href="../css/index.css">
    </head>
    <body>
       <div class="form">
        <div></div>
        <div><a class="l" href="iniciar.php" >Iniciar Sesion </a></div>
        <div><a class="l" href="#" >Categorias</a></div>
        <div><a class="l" href="#" >Ubicaciones</a></div>
        <div><a class="l" href="" >Nosotros</a></div>
        <div></div>
        <div>b</div>
    </div>
    <center>
       
        <div class="iniciar">
    <form action="" method="get">
        <p>Nombre</p>
        <input type="text" name="nombre">
        <p>Apellido</p>
        <input type="text" name="apellido">
        <p>usuario</p>
        <input type="text" name="usuario1">
        <p>contraseña</p>
        <input type="text" name="contra">
        <br><br>
        <input type="submit" value="registrar">
    </form>
    </div>
    </center>
    <?php 
    $con = new mysqli ("localhost", "root", "", "gim");
    if (isset($_REQUEST['nombre']) && isset($_REQUEST['apellido']) && isset($_REQUEST['usuario1']) && isset($_REQUEST['contra'])) {

    
        $nombre = $_REQUEST['nombre'];
        $apellido = $_REQUEST['apellido'];
        $usuario = $_REQUEST['usuario1'];
        $contra = $_REQUEST['contra'];

    

        
    $verificar="SELECT usuario FROM usuario WHERE usuario='$usuario'";
        $verificar2=$con->query($verificar);

    if ($usuario=="" or $nombre=="" or $apellido=="") {
        echo "llene los campos";
    }else {
        if ($verificar2->num_rows>0) {
            echo "usuario en uso elige otro";
        }else {

        $ins = "INSERT INTO usuario (nombre, apellido, usuario, contra) 
                VALUES ('$nombre', '$apellido', '$usuario', '$contra')";
        

    
        $resultado = $con->query($ins);

    
    }
    }
    }

    ?>

    </body>
    </html>
