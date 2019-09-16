<?php

require ('Model/class.Acceso.php');
$template = new Smarty();
$acceso = new Acceso();
$template->display('views/menu.tpl');
$template->display('views/empleado.tpl');


if(isset($_POST['registro'])){

	if(!empty($_POST['nombre']) && !empty($_POST['direccion']) && !empty($_POST['email']) && !empty($_POST['puesto']) && !empty($_POST['telefono']) ){

		$acceso->Registrar_Empleado($_POST['nombre'],$_POST['direccion'],$_POST['email'],$_POST['puesto'],$_POST['telefono']);

	}else{
		echo "llenes los campos";
	}

}else{
	//echo "no esta definido";
}

$valor = '';

 $acceso->Buscar_Empleado($valor);

?>
