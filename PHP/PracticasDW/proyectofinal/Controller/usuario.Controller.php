<?php

require ('Model/class.Acceso.php');
$template = new Smarty();
$acceso = new Acceso();

$template->display('views/menu.tpl');
$template->display('views/usuario.tpl');

if(isset($_POST['registro'])){

	if(!empty($_POST['nombre']) && !empty($_POST['clave'])){

	$acceso->Registrar_Usuario($_POST['nombre'],$_POST['clave']);
	}else{
		echo "llene los campos";
	}



}else{
	//echo "no esta definido";
}

$valor = '';

 $acceso->Buscar_Usuario($valor);






?>
