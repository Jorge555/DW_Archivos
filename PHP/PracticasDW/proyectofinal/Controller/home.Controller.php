<?php
require ('Model/class.Acceso.php');
$template = new Smarty();
$acceso = new Acceso();




if(isset($_POST['usuario']) && isset($_POST['pass'])){
	
	$acceso->login($_POST['usuario'],$_POST['pass']);

		
		
}else{
	
	echo "Ingrese sus datos";
}
$template->display('views/index.tpl');
//header('location: index.tpl');


