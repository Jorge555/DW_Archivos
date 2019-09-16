<?php

require ('Model/class.Acceso.php');
$template = new Smarty();
$acceso = new Acceso();
$template->display('views/menu.tpl');
$template->display('views/activo_fijo.tpl');


if(isset($_POST['registro'])){

	if(!empty($_POST['descripcion']) && !empty($_POST['estado'])){

		$acceso->Registrar_Activo($_POST['descripcion'],$_POST['estado']);

	}else{
		echo "llenes los campos";
	}

}else{
	//echo "no esta definido";
}

$valor = '';

 $acceso->Buscar_Activo($valor);

?>
