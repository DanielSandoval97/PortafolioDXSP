<?php
include("cn.php");
$id = $_GET['id'];
$eliminar  = "DELETE FROM contacto WHERE id = '$id'";
$resultadoEliminar = mysqli_query($conexion,$eliminar);
if($resultadoEliminar){
    echo "<script>alert('Se ha eliminado el contacto');
    window.location='/Portafolio_DXSP/mostrarDatos.php'</script>";
}else{
    echo "<script>alert('Error al eliminar contacto');window.history.go(-1);</script>";
}