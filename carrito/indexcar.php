<?php
include 'global/conflig.php';
include 'global/conexioncar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carrito</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding:30px;">
      <a class="navbar-brand" href="#"></a>
        <img src="../assets/imag/mor6.jpg" href="#" width="30" height="30" class="d-inline-block align-top" alt="">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
     <li class="nav-item active">
        <span style="margin-left: 10px;" class="navbar-brand mb-0 h1">Joyeria - BONY</span>
       </li>
       <li class="nav-item active">
         <a class="nav-link" href="http://localhost/login-register/bienvenida.php">Inicio<span class="sr-only">(current)</span></a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="http://localhost/LOGIN-REGISTER/paginas/aretes.html">Aretes</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="http://localhost/LOGIN-REGISTER/paginas/collares.html">Collares</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="http://localhost/LOGIN-REGISTER/paginas/manillas.html">Manillas</a>
       </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/LOGIN-REGISTER/paginas/anillos.html">Anillos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/LOGIN-REGISTER/paginas/contactanos.html">Contactanos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/LOGIN-REGISTER/carrito/indexcar.php">Carrito(0)</a>
      </li>
      </ul>
      <ul class="navbar-nav ml-auto">
      <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="¿Que estas buscando?" aria-label="Search">
      <button class="btn btn-dark" type="submit">Buscar</button>
      </form>
      </ul>
  </div>
</nav>
<br/>
<br/>
<div class="container-fluid">
     <br/>
      <div class="alert alert-success" role="alert">
        pantalla de mensaje...
        <a href="#" class="badge badge_ success">ver carrito</a>
      </div>
       
    <div class="row">
        <?php
           $sentecia=$pdo->prepare("SELECT * FROM `tblproductos`");
           $sentecia->execute();
           $listaProductos=$sentecia->fetchAll(PDO::FETCH_ASSOC);
           //print_r($listaProductos);
        
        ?>
        <?php foreach($listaProductos as $producto) { ?>
            <div class="col-3"> 
            <div class="card">
                <img

                 title="<?php echo $producto['Nombre']; ?>"
                 alt="<?php echo $producto['Nombre']; ?>"
                 class="card-img-top"
                 src= "<?php echo $producto['Imagen']; ?>"
                 data-toggle="popover"
                 data-trigger="hover"
                 data-content="<?php echo $producto['Descripcion']; ?>"
                 >
                <div class="card-body">
                    <span><?php echo $producto['Nombre']; ?></span>
                    <h5 class="card-title">$<?php echo $producto['Precio']; ?></h5>
                    <p class="card-text">Descipcion</p>

                    <button class="btn btn-primary" 
                    name="btnAccion" 
                    value="Agregar" 
                    type="submit"
                    >
                    Agregar al carrito
                    </button>
                </div>
            </div>
        </div>
        <?php } ?>
        


    </div>    
</div>

   <script>
    
    $(function () {
            $('[data-toggle="popover"]').popover()
     })

   </script> 

</body>
</html>