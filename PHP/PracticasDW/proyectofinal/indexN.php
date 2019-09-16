<?php

require ('Model/class.Conexion.php');
require_once('Controller/libs/Smarty.class.php');

$accion = isset($_GET['accion']) ? $_GET['accion'] : 'home';

if(is_file('Controller/' . $accion. '.Controller.php')){
	include_once('Controller/' . $accion. '.Controller.php');
}else{
	include_once("Controller/error.Controller.php");
}

?>