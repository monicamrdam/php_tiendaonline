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
          <a class="nav-link active" aria-current="page" href="CRUD/index.php">Discolandia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="CRUD/index_crud.php">Catálogo</a>
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
            <div class="d-flex  py-5">

                <aside class="w-25 bg-light mt-3 p-3 shadow" >
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" placeholder="Ingrese email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" placeholder="Ingrese password" id="password">
                        </div>
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox"> Remember me
                            </label>
                        </div>
                        <button type="submit" class="btn bg-black text-white w-100">Entrar</button>
                    </form>
                    <a href="#" class="btn text-dark w-100 mt-5">Ver pedidos</a>
                    <a href="#" class="btn text-dark w-100">Historial de pedidos</a>
                    <a href="#" class="btn text-dark w-100">Perfil</a>

                </aside>
                <div class="w-75 bg-light mt-3 p-3 pl-4 border-left shadow">
                    <div class="row d-flex justify-content-around text-center">
                        <div class="card col-4 p-3 bg-light border-light" >
                            <img src="assets/img/Extremoduro_camiseta.jpg" class="card-img-top w-50 p-3 mx-auto" alt="" width=" 50" height="150">
                            <div class="card-body">
                                <h5 class="card-title">Extremoduro </h5>
                                <p class="card-text">15€</p>
                                <p class="card-text texto">Extremoduro fue un grupo español de rock fundado por Roberto Iniesta en la ciudad extremeña de Plasencia en 1987​ que se mantuvo activo hasta su disolución en diciembre de 2019.</p>
                            </div>
                            <a href="#" class="btn bg-black text-white">Comprar</a>
                        </div>
                        <div class="card col-4 p-3 bg-light border-light" >
                            <img src="assets/img/HeroesSilencio_camiseta.jpg" class="card-img-top w-50 p-3 mx-auto" alt="" width=" 50" height="150">
                            <div class="card-body">
                                <h5 class="card-title">Heroes del Silencio</h5>
                                <p class="card-text">15€</p>
                                <p class="card-text texto">Héroes del Silencio fue un grupo español de rock radicado en Zaragoza, formado inicialmente por Juan Valdivia y Enrique Bunbury, y completado con Joaquín Cardiel y Pedro Andreu, a mediados de los años 80.</p>
                            </div>
                            <a href="#" class="btn bg-black text-white">Comprar</a>
                        </div>
                        <div class="card col-4 p-3 bg-light border-light" >
                            <img src="assets/img/OrejaVanGogh_camiseta.jpg" class="card-img-top w-50 p-3 mx-auto" alt="" width=" 50" height="150">
                            <div class="card-body">
                                <h5 class="card-title">Oreja de Van Gogh</h5>
                                <p class="card-text">10€</p>
                                <p class="card-text texto">La Oreja de Van Gogh es un grupo musical de género pop rock originario de San Sebastián, País Vasco, España. Su trayectoria en el mundo de la música comenzó formalmente en 1996.</p>
                            </div>
                            <a href="#" class="btn bg-black text-white">Comprar</a>
                        </div>
                        <div class="card col-4 p-3 bg-light border-light" >
                            <img src="assets/img/RollingStones_camiseta.jpg" class="card-img-top w-50 p-3 mx-auto" alt="" width=" 50" height="150">
                            <div class="card-body">
                                <h5 class="card-title">Rolling Stones</h5>
                                <p class="card-text">40€</p>
                                <p class="card-text texto">The Rolling Stones, más conocido en el mundo hispanohablante como los Rolling Stones, ​ es un grupo británico de rock originario de Londres.</p>
                            </div>
                            <a href="#" class="btn bg-black text-white">Comprar</a>
                        </div>
                        <div class="card col-4 p-3 bg-light border-light" >
                            <img src="assets/img/StevieNicks_camiseta.jpg" class="card-img-top w-50 p-3 mx-auto" alt="" width=" 50" height="150">
                            <div class="card-body">
                                <h5 class="card-title">Stevie Nicks</h5>
                                <p class="card-text">20€</p>
                                <p class="card-text texto">Stephanie Lynn "Stevie" Nicks es una cantante y compositora estadounidense, conocida tanto por su trabajo con Fleetwood Mac como por su extensa carrera solista. Es una de las pocas artistas de rock que ha mantenido una larga carrera en solitario formando parte al mismo tiempo de una banda exitosa.</p>
                            </div>
                            <a href="#" class="btn bg-black text-white">Comprar</a>
                        </div>
                        <div class="card col-4 p-3 bg-light border-light" >
                            <img src="assets/img/taylorSwift_camiseta.jpg" class="card-img-top w-50 p-3 mx-auto" alt="" width=" 50" height="150">
                            <div class="card-body">
                                <h5 class="card-title">Taylor Swift</h5>
                                <p class="card-text">10€</p>
                                <p class="card-text texto">Taylor Alison Swift es una cantautora, productora, directora, actriz y empresaria estadounidense. Criada en Wyomissing, se mudó a Nashville a los 14 años para realizar una carrera de música country.</p>
                            </div>
                            <a href="#" class="btn bg-black text-white">Comprar</a>
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
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  
    </body>
</html>