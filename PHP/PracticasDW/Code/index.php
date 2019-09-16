<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Mi sitio web</title>
<meta name="Description" content="Paginas donde encontrar contenido interesante">
<meta name="viewport" content="initial-scale=1.0, user-scalable=yes">
<meta name="Robots" content="index, follow">
<link href="style/estilo.css" rel="stylesheet" type="text/css" media="screen">
</head> 
<body>
<div id="inicio"></div>
<div id="header">
<?php    
    include "include/logo2.php";   
?>
<div id="page">
<h1>Mi sitio web, actualidad y tecnologia</h1>
<?php    
    include "include/compartir.php";   
?>

<div class="intro">
Descripción de mi sitio web o una pequeña introducción sobre lo que trata o se puede encontrar en él.
</div>
Esta es la página principal o de inicio de mi sitio web.<br>
Es la primera que ven los que entran al sitio por primera vez y en todas las páginas restantes hay un enlace que conduce a ella.<br>
En ella puedo poner enlaces a las otras páginas, imágenes sugestivas, videos o cualquier otro elemento.<br>
<img style="margin:12px 0 12px 0;" src="img/hacer-paginas-php.jpg" width="620" height="400" alt="Imagen para el intro" title="Mi sitio web, actualidad y tecnologia"><br>

<h2>Enlaces a mis artículos</h2>
<div class="enlaces">
<a href="articulo1.php">Primer artículo de ejemplo</a><br>
<a href="articulo2.php">Otro artículo</a><br>
<a href="articulo3.php">Otro artículo</a><br>
<a href="articulo4.php">Otro artículo</a><br>
</div>

Puede tener cualquier cantidad de texto, pero se recomienda que sea breve, que no sea necesario desplazarse por ella, que el contenido principal pueda verlo el lector al primer vistazo.<br>
En la parte inferior del título están los botones para compartirla en las principales redes sociales.<br>
En el extremo inferior deben ir los botones que permitan a los lectores seguirnos en estos sitios sociales.<br>
<br>

<?php    
    include "include/share.php";   
?> 

<?php    
    include "include/footer.php";   
?> 
</div></div>
</body> 
</html>