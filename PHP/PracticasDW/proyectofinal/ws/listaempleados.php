<?php


include('../Model/class.Conexion.php');


$rs = mysql_query($conn,"select * from empleado");    

while ($row = mysql_fetch_array($rs,MYSQL_ASSOC))
{

echo "hola";

}

mysql_close($conn);

?>
