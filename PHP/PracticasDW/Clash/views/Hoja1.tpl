<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css" >
	<script src="js/jquery-1.11.1.min.js">

	</script>

<body>
	<nav aria-label="Page navigation example">
	  <ul class="pagination justify-content-center">
	    <li class="page-item ">
	      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
	    </li>
	    <li class="page-item"><a class="page-link" href="index.php?accion=hoja1">1</a></li>
	    <li class="page-item"><a class="page-link" href="index.php?accion=hoja2">2</a></li>
	    <li class="page-item"><a class="page-link" href="index.php?accion=hoja3">3</a></li>
	    <li class="page-item">
	      <a class="page-link" href="#">Next</a>
	    </li>
	  </ul>
	</nav>



<div class="container" id="tablero">
  <div class="row">
    <div class="col-sm">
      <img src="Imagenes/c1.png"  id="Esqueleto">
    </div>
    <div class="col-sm">
       <img src="Imagenes/c2.png" id="Espiritu_de_hielo">
    </div>
    <div class="col-sm">
       <img src="Imagenes/c3.png" id="Duende">
    </div>
  </div>


<div class="row">
    <div class="col-sm">
        <img src="Imagenes/c4.png" id="Descarga">
    </div>
    <div class="col-sm">
        <img src="Imagenes/c5.png" id="Murcielago">
    </div>
    <div class="col-sm">
        <img src="Imagenes/c6.png" id="Espiritu de fuego">
    </div>
  </div>


<div class="row ">
    <div class="col-sm">
      <img src="Imagenes/c7.png" id="Bola de nieve">
    </div>
    <div class="col-sm">
      <img src="Imagenes/c8.png" id="Arquera">
    </div>
    <div class="col-sm">
      <img src="Imagenes/c9.png" id="Flechas">
    </div>
  </div>


  <div class="row">
    <div class="col-sm">
      <img src="Imagenes/c10.png" id="Caballero">
    </div>
    <div class="col-sm">
      <img src="Imagenes/c19.png" id="Golem de hielo">
    </div>
    <div class="col-sm">
      <img src="Imagenes/c20.png" id="Megaesbirro">
    </div>
  </div>


  <div class="row">
    <div class="col-sm">
      <img src="Imagenes/c21.png" id="Lanzadardos">
    </div>
    <div class="col-sm">
      <img src="Imagenes/c22.png" id="Bola de fuego">
    </div>
    <div class="col-sm">
      <img src="Imagenes/c23.png" id="Mini pekka">
    </div>
  </div>

</div>


<br></br>
<br></br>


<div class="container">
  <div class="row">
    <div class="col-sm">
      <img src="Imagenes/mazo.png">
    </div>

  </div>
</div>



<script type="text/javascript">

$(document).ready(function(){


var Imagenes = document.querySelectorAll("#tablero img");

for (var i = 0; i < Imagenes.length; i++) {
  Imagenes[i].addEventListener("click",carrito,false);
}

});

function  carrito(num){

  if (num.target==Esqueleto) {
    $("#Esqueleto").replaceWith("<div id='Esqueleto'> Carta Elegida</div>");
} if (num.target==Espiritu_de_hielo){
    $("#Espiritu_de_hielo").replaceWith("<div id='Espiritu_de_hielo'> Carta Elegida</div>");
  } if (num.target==Duende){
    $("#Duende").replaceWith("<div id='Duende'> Carta Elegida</div>");
  }

}





</script>








</body>
</html>
