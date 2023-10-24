<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Discolandia tienda de discos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
  
  </head>
  <body>
    
    <header>

<!--Nav-bar -->
  <nav class="navbar navbar-expand-sm bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
        <!--Icono izquierda-->
        <a class="navbar-brand" href="#">
    <img src="assets/img/logo_discos.jpg" alt="Bootstrap" width=" 50" height="50">

    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <!--Resto de parte del menú -->
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Discolandia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index_catalogo_crud.php">Catálogo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index_merchandising.php">Merchandising</a>
        </li>

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="¿Qué estas buscando?" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Buscar</button>
      </form>
      <ul class="nav navbar-nav pull-right">
        <li class="nav-item" pull-right>
        <a href="" class="btn">CARRITO <span class="badge">0</span></a>
        </li>
      </ul>

    </div>
  </div>
</nav>
  </header>

 
 <!--Carrusel Imágenes-->
 <div id="carouselExample" class="carousel slide mt-5" >
  <div class="carousel-inner">
    <div class="carousel-item active" style="max-height: 500px;">
      <img src="assets/img/RollingStones.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" style="max-height: 500px;">
      <img src="assets/img/HeroesSilencio.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" style="max-height: 500px;">
      <img src="assets/img/extremoduro.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" style="max-height: 500px;">
      <img src="assets/img/OrejaVanGogh.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" style="max-height: 500px;">
      <img src="assets/img/StevieNicks.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" style="max-height: 500px;">
      <img src="assets/img/taylorSwift.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


  <!--Carrusel Menú -->
 <div class="container_fluid bg-light mt-5 text-center">
    <div class="row">
        <div class="col">Pago seguro</div>
        <div class="col">Garantía de devolución</div>
        <div class="col">Envío gratis para Socios </div>
    </div>

 </div>

  <!--About -->
<div class="container mt-5" >
    <h2 class="text-center bg-dark text-white py-2" >Sobre nosotros</h2>
    <div class="row">
        <div class="col py-2 ">
        <p class="texto">
       Discolandia somos una plataforma online de venta física de
discos y merchandising. Con más de 40.000 clientes activos, somos
una de las primeras plataformas de venta de discos por detrás de
grandes plataformas como Amazon o El Corte Inglés.</p>
<p class="texto">
Con envíos a todo el mundo y seguimiento en tiempo real, ofrecemos a bandas y artistas una plataforma donde vender su música y productos a sus fans creando un espacio dedicado y exclusivo dentro de nuestra web completamente GRATIS.</p> </div>
       <div class="col">
            <div class="col">
            <p class="texto">
            Es una tienda especializada sobretodo en vinilos, ya sean novedades, ediciones limitadas, picture disc, vinilos de colores, así como rarezas, LP’s descatalogados, LP’s de coleccionistas, etc.</p>
</p>
            <p class="texto">
            Sabemos que algunos sois más clásicos, otros más modernos, pero a todos nos gusta la música, por eso, también en nuestra tienda disponemos del soporte CD.</p>

            </div>
            <div class="col">
          </div>
          <div class="col">
          </div>
          <div class="col">
          </div>
          </div>     
      </div>
   </div>
</div>


  <!--Footer -->
  <footer>
  <div class="card-group text-center footer-style mt-5 bg-dark">
  <div class="card bg-dark text-white" >
    <div class="card-body">
      <h5 class="card-title">Dirección</h5>
      <p class="card-text"> Discolandia  <br />
                    Calle Alcalá nº 584, 28022-Madrid</p>
      <p class="card-text"><small class="text-white ">Horario: 10:00 - 20:00 L-V / 10:00 - 14:00 S </small></p>
    </div>
  </div>
  <div class="card bg-dark text-white">
    <div class="card-body">
    <h5 class="card-title">Mis redes</h5>
      <p class="card-text"> 
      <a href="#"><img  class="redes" src="assets/fonts/linkedin.svg" alt="linkedin"  ></a>
		<a  href="#"><img  class="redes"src="assets/fonts/twitter-x.svg" alt="twitter"   ></a>
		<a  href="#"><img  class="redes"src="assets/fonts/youtube.svg" alt="youtube" ></a>
      </p>
    </div>
  </div>
  <div class="card bg-dark text-white">
    <div class="card-body">
      <h5 class="card-title">Contacto</h5>
      <p class="card-text">Email: discolandia@discolandia.es
  <br />
  Telefono: 651 867 282 </p>
      <p class="card-text"><small class="text-white">  91 147 00 23 (Atención telefónica de 9 horas a 19 horas de lunes a sábado)
</small></p>
    </div>
  </div>
</div>


</footer>
<div class="text-center bg-light py-2 border-top">
                <p class="mb-0">Desarrollado por proyectosprogramacion &COPY; <?= date('Y') ?></p>
            </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  
</html>