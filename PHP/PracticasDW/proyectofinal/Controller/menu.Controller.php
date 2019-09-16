<?php
require ('Model/class.Acceso.php');
$template = new Smarty();
$acesso = new Acceso();









$template->display('views/menu.tpl');