<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/estilos.css" >
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </head>
  <body>

    <nav class="navbar navbar-dark bg-dark ">
           <a class="navbar-brand" href="">
             <img src="Imagenes/portada/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                         Juego para que  el jugador, pueda jugar el Juego
           </a>
       </nav>

<div class="container position-relative">
<div class="row justify-content-md-center">
    <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" href="index.php?accion=Jugar">Jugar</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Configureciones</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="index.php?accion=Copas">Copas</a>
        <a class="dropdown-item" href="index.php?accion=Mazo">Mazo</a>
        <a class="dropdown-item" href="index.php?accion=Partida">Partidas</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="index.php?accion=Cartas">Cartas mas Usadas</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="index.php?accion=Menu">Menu</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="index.php?accion=Login" tabindex="-1" aria-disabled="true">Salir</a>
    </li>
</div>
  </div>
  </body>
</html>
