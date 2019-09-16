<?php
require ('Model/class.Acceso.php');
$template = new Smarty();
$acceso = new Acceso();
$template->display('views/menu.tpl');
$template->display('views/inventario.tpl');




$valor = isset($_POST['buscar']) ? $_POST['buscar'] : 0;


 $acceso->Inventario($valor); 
 


	









//$template->display('views/menu.tpl');


?>