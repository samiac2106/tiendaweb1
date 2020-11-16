<?php	

	include('BaseDatos.php');	
	

	if(isset($_POST["registrar"]))
{
		$nombre=$_POST['nombre_producto'];
		$marca=$_POST['marca_producto'];
		$precio=$_POST['precio_producto'];
	    $descripcion=$_POST['descripcion'];	    
		$enlace=$_POST['enlace'];
		
		$transaccion=new BaseDatos();
	
	    $consultaSQL="INSERT INTO admnistrar_producto(nombre_producto, marca_producto, precio_producto,descripcion, enlace) 
		VALUES ('$nombre','$marca','$precio','$descripcion','$enlace')";
	
	    $transaccion->agregarDatos($consultaSQL);
	
	   header("refresh:2; formularioProductos.php");


}
