<?php
require ('Model/class.Acceso.php');
$template = new Smarty();
$acceso = new Acceso();
$template->display('views/Menu.tpl');
$template->display('views/Jugar.tpl');


$template->display('views/Hoja1.tpl');
//header('location: index.tpl');
