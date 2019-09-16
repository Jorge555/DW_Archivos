<?php
require ('Model/class.Acceso.php');
$template = new Smarty();
$acceso = new Acceso();
$template->display('views/menu.tpl');
$template->display('views/buscarEmple.tpl');





$valor = isset($_POST['buscar']) ? $_POST['buscar'] : '';


 $acceso->Buscar_Empleado($valor); 
 


	









//$template->display('views/menu.tpl');


?>