<?php
require ('Model/class.Acceso.php');
$template = new Smarty();
$acceso = new Acceso();
$template->display('views/menu.tpl');
$template->display('views/buscar_activo.tpl');





$valor = isset($_POST['buscar']) ? $_POST['buscar'] : '';


 $acceso->Buscar_Activo($valor);
