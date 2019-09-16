<?php
require ('Model/class.Acceso.php');
$template = new Smarty();
$acceso = new Acceso();
$template->display('views/menu.tpl');
$template->display('views/buscarActivoUser.tpl');





$valor = isset($_POST['buscar']) ? $_POST['buscar'] : '';


 $acceso->Buscar_Activouser($valor);
