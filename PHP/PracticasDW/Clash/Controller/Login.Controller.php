<?php
require ('Model/class.Acceso.php');
$template = new Smarty();
$acceso = new Acceso();



if (isset($_POST['usuario']) && isset($_POST['password'])) {
$acceso->Login($_POST['usuario'],$_POST['password']);
}else {
  session_start();
  session_destroy();

}




$template->display('views/Login.tpl');
//header('location: index.tpl');
