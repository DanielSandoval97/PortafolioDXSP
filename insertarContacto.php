<?php
include ("cn.php");

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$mensaje = $_POST["mensaje"];

$insertar = "INSERT INTO contacto(nombre,correo,mensaje) VALUES('$nombre','$correo','$mensaje')";

$resultado = mysqli_query($conexion,$insertar);
if($resultado){
    echo "<script>alert('Se ha enviado el mensaje');
    window.location='/Portafolio_DXSP'</script>";
}else{
    echo "<script>alert('Error al enviar mensaje');window.history.go(-1);</script>";
}