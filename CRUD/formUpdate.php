<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Discolandia tienda de discos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
  
  </head>
  <body>
    
    <header>

<!--Nav-bar -->
  <nav class="navbar navbar-expand-sm bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
        <!--Icono izquierda-->
        <a class="navbar-brand" href="#">
    <img src="../assets/img/logo_discos.jpg" alt="Bootstrap" width=" 50" height="50">

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
          <a class="nav-link active" aria-current="page" href="iindex_crud.php">Catálogo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index_merchandising.php">Merchandising</a>
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
  <?php
    $mysql=new mysqli("localhost","root","","tienda_vinilos");
    if ($mysql->connect_error)
      die("Problemas con la conexión a la base de datos");
  
    $registro=$mysql->query("select id,
                                    titulo,
                                    descripcion,
                                    precio,
                                    categoria_id 
                                    from disco where id=$_REQUEST[id]") or
      die($mysql->error);
     
    if ($reg=$registro->fetch_array())
    {
  ?>

       
<div class="contenedor">


<form class="form_listado" method="post" action="update.php">
<label for="titulo">Ingrese titulo del artículo:</label>
<input type="text" name="titulo" maxlength="80" value="<?php echo $reg['titulo']; ?>">
<br>
<label for="descripcion">Ingrese descripcion del artículo:</label>
<input class="my-element" type="text" name="descripcion" maxlength="300" value="<?php echo $reg['descripcion']; ?>">      
<br>
Ingrese precio:
<input type="number" name="precio" maxlength="10" step="0.3" value="<?php echo $reg['precio']; ?>">      
<br>
Seleccione categoria:
<select name="categoria_id">
<?php
   $registros=$mysql->query("select id,nombre from categorias") or
   die($mysql->error);
 while ($reg=$registros->fetch_array())
 {
    echo "<option value=\"".$reg['id']."\">".$reg['nombre']."</option>";
 }        
     ?>  
</select>
<input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>">     

<br>

<input class="bt" type="submit" value="Confirmar">
</form>
<?php
    }      
    else
      echo 'No existe un artículo con dicho código';
    
    $mysql->close();

  ?>
  


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
      <a href="#"><img  class="redes" src="../assets/fonts/linkedin.svg" alt="linkedin"  ></a>
		<a  href="#"><img  class="redes"src="../assets/fonts/twitter-x.svg" alt="twitter"   ></a>
		<a  href="#"><img  class="redes"src="../assets/fonts/youtube.svg" alt="youtube" ></a>
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