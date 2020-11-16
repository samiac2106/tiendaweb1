<?php

include ("BaseDatos.php");

 
$idEliminar = ($_GET ["id"]); 
$transaccion = new BaseDatos(); 
$consultaSQL="DELETE FROM admnistrar_producto wHERE id_producto='$idEliminar'"; 
$transaccion->eliminarDatos ($consultaSQL) ;

header("refresh:2; index.php");
?>
