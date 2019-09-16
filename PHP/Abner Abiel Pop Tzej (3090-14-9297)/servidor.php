<?php


$datos = array();
 $conatenar = "";
 $conca = "";
$suma = 0;
if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['dpi']) && !empty($_POST['nit']) && !empty($_POST['telefono']) ){

 if (strlen($_POST['nombre']) > 3 && strlen($_POST['apellido']) > 3 && strlen($_POST['dpi']) > 3 && strlen($_POST['nit']) > 3
  && strlen($_POST['telefono'])> 3 && strlen($_POST['edad']) > 3 && strlen($_POST['depart'])> 3) {


   $arrayName = array('Nombre' => $_POST['nombre'],'Apellido'=> $_POST['apellido'],'Dpi' => $_POST['dpi'],'Nit'=>$_POST['nit'] );

    foreach ($arrayName as $value) {
  
      
          echo "is_string(";
    var_export($value);
    echo ") = ";
    echo var_dump(is_string($value));
        
}
     
     

  }else {
    echo $conatenar = $_POST['nombre']. " ". $_POST['apellido']." ". $_POST['nit'] .
    " ".$_POST['telefono'] . " ". $_POST['edad'] . " ". $_POST['depart'] ;
  }

 
           
}else {
  echo "estan null";

}













 ?>
