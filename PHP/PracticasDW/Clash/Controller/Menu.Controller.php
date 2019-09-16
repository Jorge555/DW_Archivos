<?php
require ('Model/class.Acceso.php');
$template = new Smarty();
$acceso = new Acceso();

$acceso->iniciar();



$template->display('views/Menu.tpl');
//header('location: index.tpl');
