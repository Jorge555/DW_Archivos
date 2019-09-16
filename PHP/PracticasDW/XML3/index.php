<html> 
<head> 
<title>Formulario XML</title> 
</head> 
<body> 
<?php

if (isset($_REQUEST['ok'])) { 
$xml = new DOMDocument("1.0","UTF-8"); 
$xml->load("usuarios.xml");

$rootTag = $xml->getElementsByTagName("usuarios")->item(0);

 $dataTag = $xml->createElement("usuario");

 $nombreTag = $xml->createElement("nombre",$_REQUEST['nombre']); 
 $apellidoTag = $xml->createElement("apellido",$_REQUEST['apellido']);

$dataTag->appendChild($nombreTag); 
$dataTag->appendChild($apellidoTag);

$rootTag->appendChild($dataTag);

$xml->save("usuarios.xml"); 
}

?>

<form action="index.php" method="post">
 <input type="text" name="nombre" /> 
 <input type="text" name="apellido" /> 
 <input type="submit" name="ok" value="add"/> 
</form>
 
 </body>
 </html>﻿