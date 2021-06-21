<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css-portafolio/mostrarDatos.css">
    <title>Document</title>
</head>
<body>
    <div class="contenedor">
    <?php
    $inc = include("cn.php");
    if ($inc){
    $consulta = "SELECT * FROM contacto";
    $resultado = mysqli_query($conexion,$consulta);
    if($resultado){
        while($row = $resultado->fetch_array()){
            $nombre = $row['nombre'];
            $correo = $row['correo'];
            $mensaje = $row['mensaje'];
            ?>
            <div class="contenedorDatos">
                <div class="mostrarDatos">
                    <p class="parrafo"> <span>Nombre: </span> <?php echo $nombre; ?> </p>
                    <p class="parrafo"> <span>Correo: </span> <?php echo $correo; ?> </p>
                    <p class="parrafo"> <span>Mensaje: </span> <?php echo $mensaje; ?> </p>
                    <div class="link">
                    <a href="eliminarDatos.php?id=<?php echo $row["id"];?>" class="boton">Eliminar</a>
                    </div>
                 </div>
            </div>
            <?php
        }
    }
}
?>
    </div>
</body>
</html>