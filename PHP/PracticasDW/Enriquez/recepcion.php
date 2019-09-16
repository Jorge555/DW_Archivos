<?php 
session_start();
$_SESSION['nombre'] = 'Enriquez'; 

?>
<form action='sesion.php'> 

<input type='submit'  
<form> 




<?php


$datos = array();
 $conatenar = "";
 $conca = "";
$suma = 0;
if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['edad']) && !empty($_POST['nit']) ){

 if (strlen($_POST['nombre']) > 3 && strlen($_POST['apellido']) > 3 && strlen($_POST['edad']) > 3 && strlen($_POST['nit']) > 3)
   {


   $arrayName = array('Nombre' => $_POST['nombre'],'Apellido'=> $_POST['apellido'],'Edad' => $_POST['edad'],'Nit'=>$_POST['nit'] );

    foreach ($arrayName as $value) {
  
      
          echo "is_string(";
    var_export($value);
    echo ") = ";
    echo var_dump(is_string($value));
        
}
     
     

  }else {
    echo $conatenar = $_POST['nombre']. " ". $_POST['apellido']." ". $_POST['edad'] .
    " ".$_POST['nit'] ;
  }

 
           
}else {
  echo "estan null";

}













 ?>
