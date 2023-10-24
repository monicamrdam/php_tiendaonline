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

  <div class="contenedor  py-5 ml-5">
  <div class="row d-flex justify-content-center">
  <?php
    $mysql=new mysqli("localhost","root","","tienda_vinilos");
    if ($mysql->connect_error)
      die("Problemas con la conexión a la base de datos");

      $mysql->query("TRUNCATE TABLE categorias;") or
      die($mysql->error);
      
      $mysql->query("insert into categorias(nombre) values ('Rock internacional')") or
            die($mysql->error);
      $mysql->query("insert into categorias(nombre) values ('Rock nacional')") or
            die($mysql->error);
      $mysql->query("insert into categorias(nombre) values ('Pop internacional')") or
            die($mysql->error);
      $mysql->query("insert into categorias(nombre) values ('Pop nacional')") or
            die($mysql->error);

      $mysql->query("TRUNCATE TABLE disco;") or
            die($mysql->error);
      $mysql->query("insert into disco(titulo,descripcion,precio,categoria_id) values ('Box Set Ultra','Interprete: Depeche Mode',0,'1')") or
          die($mysql->error);
      $mysql->query("insert into disco(titulo,descripcion,precio,categoria_id) 
            values ('El canto del loco 20 aniversario','Interprete: El canto del loco',51.99,2)") or
          die($mysql->error);
      $mysql->query("insert into disco(titulo,descripcion,precio,categoria_id) 
          values ('Bangerz','Interprete: Miley Cyrius',42.97,3)") or
        die($mysql->error);
      $mysql->query("insert into disco(titulo,descripcion,precio,categoria_id) 
          values ('Alpha','Interprete: Aitana',23.99,4)") or
        die($mysql->error);


    $registros=$mysql->query("select  ds.id as discoId,
                                         ds.titulo as discoTitulo,
                                         ds.descripcion as discoDescripcion,
                                         ds.precio as precio,
                                         ct.nombre as nombreCategoria
                                      from disco as ds
                                      inner join categorias as ct on ct.id=ds.categoria_id") or
      die($mysql->error);
     
    echo '<table class="tablalistado ">';
    echo '<tr class ="trlistado"><th class ="thlistado">Id</th><th class ="thlistado">Título</th><th class ="thlistado">Descripción</th>
          <th class ="thlistado">Precio</th><th class ="thlistado">Categoría</th><th class ="thlistado">Borrar</th><th class ="thlistado">Modificar</th></tr>';
    while ($reg=$registros->fetch_array())
    {
      echo '<tr class ="trlistado">';
      echo '<td class ="tdlistado">';
      echo $reg['discoId'];
      echo '</td>';      
      echo '<td class ="tdlistado">';
      echo $reg['discoTitulo'];      
      echo '</td>';      
      echo '<td class ="tdlistado">';
      echo $reg['discoDescripcion'];      
      echo '</td>';      
      echo '<td class ="tdlistado">';
      echo $reg['precio'];      
      echo '</td>';
      echo '<td class ="tdlistado">';
      echo $reg['nombreCategoria'];      
      echo '</td>';
      echo '<td class ="tdlistado">';
      echo '<a class="bt-listado" href="CRUD/delete.php?id='.$reg['discoId'].'">Borrar</a>';
      echo '</td>';
      echo '<td class ="tdlistado">';
      echo '<a class="bt-listado" href="CRUD/formUpdate.php?id='.$reg['discoId'].'">Modificar</a>';
      echo '</td>';      
      echo '</tr>';      
    }    
    echo '<tr class ="trlistado"><td colspan="8">';
    echo '<a class="bt-listado" href="CRUD/formInsert.php">Agrega un nuevo artículo</a>';
    echo '</td></tr>';
    echo '<table class="tablalistado">';    
    
    $mysql->close();

  ?>  
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