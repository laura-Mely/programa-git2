<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
         echo '
            <script>
                 alert("por favor debes iniciar sesion");
                 window.location = "index.php";
            </script>
        ';
         //header("location: index.php");
         session_destroy();
         die();
    }

?>

<!DOCTYPE html> 
<html>
	<head> 
    <title>Joyeria / BONY</title>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link  rel="icon"   href="biblioteca/pulsera.png" type="image/png" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="Estilo.css" type="text/css"/>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding:30px;">
      <a class="navbar-brand" href="#"></a>
        <img src="assets/imag/mor6.jpg" href="#" width="30" height="30" class="d-inline-block align-top" alt="">
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
    </ul>
    <ul class="navbar-nav ml-auto">
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="¿Que estas buscando?" aria-label="Search">
    <button class="btn btn-dark" type="submit">Buscar</button>
      </form>
      </ul>
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="biblioteca/imginicio1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="biblioteca/imginicio2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="biblioteca/imginicio3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br><br>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="biblioteca/imgproducto.png" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
        <br>
        <link rel="stylesheet" href="css/cardproducto.css" type="text/css"/>
        <ul class="catCardList">
          <li class="catCardList">
        <div class="catCard"><a href="#"><img src="biblioteca/anillo1.jpg" alt=""></a>
        <div class="lowerCatCard">
          <h3>Anillo de piedra rosa</h3>
        <div class="startingPrice">Precio apartir de: <span>$10.000</span></div>
          <p>Hecho a mano con piedras rosas y una flor.</p>
        <div id="catCardButton" class="button"><a href="#">Ver producto</a></div>
        </div>
        </div>
        </li>
        <li class="catCardList">
        <div class="catCard"><a href="#"><img src="biblioteca/anillo2.jpg" alt=""></a>
        <div class="lowerCatCard">
          <h3>Anillo de piedra roja</h3>
        <div class="startingPrice">Precio apartir de: <span>$18.000</span></div>
          <p>Hecho a mano con piedras rojas en forma de flor.</p>
        <div id="catCardButton" class="button"><a href="#">Ver producto</a></div>
        </div>
        </div>
        </li>
        <li class="catCardList">
        <div class="catCard"><a href="#"><img src="biblioteca/arete1.jpg" alt=""></a>
        <div class="lowerCatCard">
          <h3>Aretes de piedra roja</h3>
          <br>
        <div class="startingPrice">Precio apartir de :<span>$35.000</span></div>
          <p>Hecho a mano con piedras rojas en forma de flor.</p>
        <div id="catCardButton" class="button"><a href="#">Ver producto</a></div>
        </div>
        </div>
        </li>
        <li class="catCardList">
        <div class="catCard"><a href="#"><img src="biblioteca/arete2.jpg" alt=""></a>
        <div class="lowerCatCard">
          <h3>Aretes de piedra rosa</h3>
          <br>
        <div class="startingPrice">Precios apartir de: <span>$30.000</span></div>
          <p>Hecho a mano con piedras rosas.</p>
        <div id="catCardButton" class="button"><a href="#">Ver producto</a></div>
        </div>
        </div>
        </li>
        <li class="catCardList">
        <div class="catCard"><a href="#"><img src="biblioteca/arete3.jpg" alt=""></a>
        <div class="lowerCatCard">
          <h3>Aretes de piedra azul</h3>
          <br>
        <div class="startingPrice">Precios apartir de: <span>$15.000</span></div>
          <p>Hecho a mano con piedras azules.</p>
        <div id="catCardButton" class="button"><a href="#">Ver producto</a></div>
        </div>
        </div>
        </li>
        </ul>

        <ul class="catCardList">
          <li class="catCardList">
        <div class="catCard"><a href=""><img src="biblioteca/arete4.jpg" alt=""></a>
        <div class="lowerCatCard">
          <h3>Aretes de piedra celeste</h3>
        <div class="startingPrice">Precio apartir de: <span>$12.000</span></div>
          <p>Hecho a mano con piedras celestes.</p>
        <div id="catCardButton" class="button"><a href="#">Ver producto</a></div>
        </div>
        </div>
        </li>
        <li class="catCardList">
        <div class="catCard"><a href="#"><img src="biblioteca/collar1.jpg" alt=""></a>
        <div class="lowerCatCard">
          <h3>Rosario de color tornasol</h3>
        <div class="startingPrice">Precio apartir de: <span>$38.000</span></div>
          <p>Hecho a mano con piedras tornasol</p>
        <div id="catCardButton" class="button"><a href="$">Ver producto</a></div>
        </div>
        </div>
        </li>
        <li class="catCardList">
        <div class="catCard"><a href="#"><img src="biblioteca/collar2.jpg" alt=""></a>
        <div class="lowerCatCard">
          <h3>Collar de opalo</h3>
          <br>
        <div class="startingPrice">Precio apartir de :<span>$20.000</span></div>
          <p>Hecho a mano con piedras de Opalo.</p>
        <div id="catCardButton" class="button"><a href="#">Ver producto</a></div>
        </div>
        </div>
        </li>
        <li class="catCardList">
        <div class="catCard"><a href="#"><img src="biblioteca/manilla1.jpg" alt=""></a>
        <div class="lowerCatCard">
          <h3>Manilla roja con azul</h3>
        <div class="startingPrice">Precios apartir de: <span>$13.000</span></div>
          <p>Hecho a mano con piedras rojas y azules.</p>
        <div id="catCardButton" class="button"><a href="#">Ver producto</a></div>
        </div>
        </div>
        </li>
        <li class="catCardList">
        <div class="catCard"><a href="#"><img src="biblioteca/manilla2.jpg" alt=""></a>
        <div class="lowerCatCard">
          <h3>Manilla azul marino y oscuro</h3>
          <br>
        <div class="startingPrice">Precios apartir de: <span>$11.000</span></div>
          <p>Hecho a mano con piedras azules claras y oscuras.</p>
        <div id="catCardButton" class="button"><a href="#">Ver producto</a></div>
        </div>
        </div>
        </li>
        </ul>
  </div>

<br><br>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="biblioteca/footer.png" class="d-block w-100" alt="...">
    </div>
  </div>
</div>

  <br><br>
        <br><br>
          <!-- Site footer -->
    <footer class="site-footer">
    <link rel="stylesheet" href="css/footers.css" type="text/css"/>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>Joyeria - BONY</h6>
            <p class="text-justify">Direccion: Carrera 10 Nro 4B-51</p>
            <p class="text-justify">Telefono de contacto: +57 310 41814747</p>
            <p class="text-justify">Correo electronico: joyeriabony@gmail.com</p>
            <p class="text-justify">Horario: 8:00 am - 06:00 pm</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categorias</h6>
            <ul class="footer-links">
              <li><a href="http://localhost/LOGIN-REGISTER/paginas/aretes.html">Aretes</a></li>
              <li><a href="http://localhost/LOGIN-REGISTER/paginas/collares.html">Collares</a></li>
              <li><a href="http://localhost/LOGIN-REGISTER/paginas/manillas.html">Manillas</a></li>
              <li><a href="http://localhost/LOGIN-REGISTER/paginas/anillos.html">Anillos</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Enlaces rapidos</h6>
            <ul class="footer-links">
              <li><a href="http://localhost/LOGIN-REGISTER/paginas/contactanos.html">Contactanos</a></li>
              <li><a href="#">Politica de privacidad</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by
         <a href="#">Scanfcode</a>.
            </p>
          </div>
        </div>
      </div>
</footer>
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>     
</html>