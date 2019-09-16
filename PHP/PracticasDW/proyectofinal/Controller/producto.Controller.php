<?php

require ('Model/class.Acceso.php');
$template = new Smarty();
$acceso = new Acceso();
$template->display('views/menu.tpl');
$template->display('views/producto.tpl');

if(isset($_POST['registro'])){

	if(!empty($_POST['nombre'])  &&!empty($_POST['descripcion'])&&!empty($_POST['precio_compra'])&&!empty($_POST['precio_venta'])&&!empty($_POST['marca'])){

		$acceso->Registrar_Producto($_POST['nombre'], $_POST['descripcion'], $_POST['precio_compra'], $_POST['precio_venta'], $_POST['marca']);

	}else{
		echo "llene los campos";
	}
}else{
	//echo "no esta definido";
}

$valor = '';

 $acceso->Buscar_Producto($valor);




?>
