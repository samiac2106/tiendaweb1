<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>productos</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/styless.css">   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
   
<hr>

<!-- Header -->

        <!-- Barra de navegacion -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="" style="width: 50px;"> Floristeria lotus Garden</a>
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
   
    <div class="imagen"></div>
   
    <main >
        <div></div>
       
            <form action="registrarProductos.php" method="POST"> 
            <div class="container mt-5"><br>
                <h1 class="mt-2 text-center mb-5">HAGA SU PEDIDO </h1>

                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control rounded-redondo" placeholder="Nombre del producto" name="nombre_producto">
                    </div>
                    
                    <div class="col">
                        <input type="text" class="form-control rounded-redondo" placeholder="Marca del producto" name="marca_producto">
                    </div>

                    <div class="col">
                        <input type="text" class="form-control rounded-redondo" placeholder="Precio del producto" name="precio_producto">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <label class="font-weight-bold">Descripción:</label>
                        <textarea class="form-control rounded-redondo" rows="4" name="descripcion"></textarea>
                    </div>
                </div>

                <div class="row mt-3 mb-5 ">
                    <div class="col">
                        <label class="font-weight-bold">Foto:</label>
                        <input type="text" class="form-control rounded-redondo" placeholder="URL productos" name="enlace">
                    </div>
                </div>

                <button type="submit" class="btn btn-info btn-block rounded-redondo" name="registrar">Registrar</button>
            </form>
        </div>

    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>