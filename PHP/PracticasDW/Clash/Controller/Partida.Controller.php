<?php

require ('Model/class.Acceso.php');
$template = new Smarty();
$acceso = new Acceso();
$template->display('views/Menu.tpl');


$valor = isset($_POST['buscar']) ? $_POST['buscar'] : '';

$acceso->Partida($valor);

$template->display('views/Partida.tpl');
 ?>
