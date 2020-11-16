<?php 

include("BaseDatos.php");


$transaccion=new BaseDatos();

if(isset($_POST["botonEditar"]))
    {

            
        //3. Recibir el id que quiero editar
        $id=$_GET["id"];
        $nombre=$_POST['nombreEditar'];
        $descripcion=$_POST['descEditar'];

        //4.consulta para editar un registro
        $consultaSQL="UPDATE admnistrar_producto SET nombre_producto='$nombre',descripcion='$descripcion' WHERE id_producto='$id'";
        

        //5.Utilizar el metodo editar
        $transaccion->editarDatos($consultaSQL);

        header("refresh:2; index.php");

    }


?>