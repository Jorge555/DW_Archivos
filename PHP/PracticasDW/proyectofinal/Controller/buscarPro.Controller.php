<?php
require ('Model/class.Acceso.php');
$template = new Smarty();
$acceso = new Acceso();
$template->display('views/menu.tpl');
$template->display('views/buscarPro.tpl');





$valor = isset($_POST['buscar']) ? $_POST['buscar'] : '';


 $acceso->Buscar_Producto($valor); 
 


	









//$template->display('views/menu.tpl');


?>