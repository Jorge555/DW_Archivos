<?php

require ('Model/class.Acceso.php');
$template = new Smarty();
$acceso = new Acceso();
$template->display('views/Menu.tpl');


$acceso->Carta_Usada();

$template->display('views/Cartas.tpl');
 ?>
