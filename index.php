<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTOS</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>

    <?php  
    
        include("BaseDatos.php");

        $transaccion=new BaseDatos();
        $consultaSQL="SELECT * FROM admnistrar_producto WHERE 1";
        $productos=$transaccion->consultarDatos($consultaSQL);
   
    ?>

    <main>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top mb-5">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="" style="width: 50px;"> Floristeria Lotus Garden</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inicio
                        <span class="sr-only">(current)</span>
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="formularioProductos.php">Registro de productos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

        <div class="container mt-5">
            <br>
            <div class="row row-cols-1 row-cols-md-3 mt-5">

                <?php foreach($productos as $producto):?>

                    <div class="col mb-4">
                        <div class="card h-100">
                            <img src="<?php echo($producto["enlace"])?>" class="card-img-top" alt="FOTO">
                            
                            <div class="card-body">
                                <h3 class="card-title"><?php echo($producto["nombre_producto"]) ?></h3>
                                <h3 class="card-title"><?php echo($producto["marca_producto"]) ?></h3>
                                <h3 class="card-title"><?php echo($producto["precio_producto"]) ?></h3>
                                <p class="card-text"><?php echo($producto["descripcion"]) ?></p>
                                

                            </div>
                            <div class="card-footer text-center">
                                
                            <a href="eliminarProductos.php?id=<?php echo($producto['id_producto'])?>" 
                                class="btn btn-danger px-5 mb-2 mr-1">Eliminar </a>

                                <button type="button" class="btn btn-warning px-5 mb-2 ml-1" data-toggle="modal" 
                                data-target="#editar<?php echo($producto["id_producto"])?>">Editar
                                </button>
                            </div>
                            
                            
                        </div>
                        
                        <div class="modal fade" id="editar<?php echo($producto["id_producto"])?>" tabindex="-1" 
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edición de productos</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <form action="editarproductos.php?id=<?php echo($producto["id_producto"])?>" method="POST">
                                            <div class="form-group">
                                                <label>Nombre:</label>
                                                <input type="text" class="form-control" name="nombreEditar" value="<?php echo($producto["nombre_producto"])?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Descripcion:</label>
                                                    <textarea class="form-control" rows="3" name="descEditar"><?php echo($producto["descripcion"])?></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-warning" name="botonEditar">Enviar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach?>


            </div>
        
        </div>
    
    
    </main>

   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>