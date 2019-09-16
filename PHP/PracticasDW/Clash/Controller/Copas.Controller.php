<?php

require ('Model/class.Acceso.php');
$template = new Smarty();
$acceso = new Acceso();
$template->display('views/Menu.tpl');

$acceso->Copas();

$template->display('views/Copas.tpl');
 ?>
