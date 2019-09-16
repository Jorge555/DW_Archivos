<?php

class Acceso{
	public function __construct(){

	}
	public $buscador;
	private $miArreglo = array();


	public  function login($user,$pass){


		$db = new Conexion();
		$sql = $db->query("SELECT usuario, contrasenia FROM empleado WHERE usuario= '$user' OR contrasenia = '$pass';" );
		$datos = $db->recorrer($sql);

	   echo $datos['usuario'] . " " . $datos['contrasenia'];
	   header('location: index.php?accion=menu');


	}

	public function Buscar_Producto($name){
		$db = new Conexion();
		$this->buscador = $db->real_escape_string($name);
		$sql = $db->query("SELECT * FROM producto WHERE  nombre_pro like '%$this->buscador%';");
		//$sql = $db->query("SELECT * FROM articulo ;");


		/*if($db->rows($sql)>0){

		}else{
			echo "no se econtro resultado";
		}*/

		echo "<table>";
		echo "<tr class= 'encabezado'><td>Codigo</td><td>Nombre</td><td>Descripcion</td><td>Precio Compra</td><td>Precio Venta</td><td>Marca</td></tr>";
			while($dato =  $db->recorrer($sql)){
				echo "<tr><td>". $dato['id_producto'] .  "</td><td>" .$dato['nombre_pro'].  " </td><td>". $dato['descripcion_pro'].  "</td><td> ". $dato['precio_compra']. "</td><td> ". $dato['precio_venta']. "</td><td>". $dato['marcar']. "</td></tr>";


			}

		echo "</table>";



	}


	//////////////////////////////////////////////////
	public function Registrar_Activo($descripcion, $estado ){
  echo$descripcion, $estado;
		$db = new Conexion();
		$sql = $db->query("INSERT INTO activos_fijo(descripcion, estado) VALUES('$descripcion', '$estado')" );

	}

	///////////////////////////////////


	public function Buscar_Activo($name){
		$db = new Conexion();
		$this->buscador = $db->real_escape_string($name);
		$sql = $db->query("SELECT * FROM activos_fijo WHERE  descripcion like '%$this->buscador%';");
		//$sql = $db->query("SELECT * FROM articulo ;");


		/*if($db->rows($sql)>0){

		}else{
			echo "no se econtro resultado";
		}*/

		echo "<table>";
		echo "<tr class= 'encabezado'><td>Codigo</td><td>Descripcion</td><td>estado</td></tr>";
			while($dato =  $db->recorrer($sql)){
				echo "<tr><td>". $dato['id_activofijo'] .  "</td><td>" .$dato['descripcion'].  " </td><td>". $dato['estado'].  "</td></tr>";


			}

		echo "</table>";

	}


	public function Buscar_Activouser($name){
		$db = new Conexion();
		$this->buscador = $db->real_escape_string($name);
		$sql = $db->query("SELECT descripcion,estado,nombre FROM  activo_fijo  INNER JOIN empleado on  ");
		//$sql = $db->query("SELECT * FROM articulo ;");


		/*if($db->rows($sql)>0){

		}else{
			echo "no se econtro resultado";
		}*/

		echo "<table>";
		echo "<tr class= 'encabezado'><td>Codigo</td><td>Nombre</td><td>Clave</td></tr>";
			while($dato =  $db->recorrer($sql)){
				echo "<tr><td>". $dato['id_usuario'] .  "</td><td>" .$dato['nombre_user'].  " </td><td>". $dato['clave'].  "</td></tr>";


			}

		echo "</table>";

	}
	///////////////////////////////////
	public function Registrar_Producto($nombre, $descripcion, $precio_compra, $precio_venta, $marca){
  echo $nombre, $descripcion, $precio_compra, $precio_venta, $marca;
		$db = new Conexion();
		$sql = $db->query("INSERT INTO producto(nombre_pro, descripcion_pro, precio_compra, precio_venta, marcar) VALUES('$nombre', '$descripcion', '$precio_compra', '$precio_venta', '$marca')" );

	}


	public function Registrar_Usuario($nombre,$clave){

echo $nombre,$clave;
		$db = new Conexion();
		$sql = $db->query("INSERT INTO usuario(nombre_user,clave) VALUES('$nombre','$clave')" );



}

	public function Buscar_Usuario($name){
		$db = new Conexion();
		$this->buscador = $db->real_escape_string($name);
		$sql = $db->query("SELECT * FROM usuario WHERE  nombre_user like '%$this->buscador%';");
		//$sql = $db->query("SELECT * FROM articulo ;");


		/*if($db->rows($sql)>0){

		}else{
			echo "no se econtro resultado";
		}*/

		echo "<table>";
		echo "<tr class= 'encabezado'><td>Codigo</td><td>Nombre</td><td>Clave</td></tr>";
			while($dato =  $db->recorrer($sql)){
				echo "<tr><td>". $dato['id_usuario'] .  "</td><td>" .$dato['nombre_user'].  " </td><td>". $dato['clave'].  "</td></tr>";


			}

		echo "</table>";

	}

	public function Registrar_Empleado($nombre,$direccion,$email,$puesto,$telefono){

 echo $nombre,$direccion,$email,$puesto,$telefono;
		$db = new Conexion();
		$sql = $db->query("INSERT INTO empleado(nombre,direccion,email,puesto,telefono) VALUES('$nombre','$direccion','$email','$puesto','$telefono')" );

	}

	public function Buscar_Empleado($name){
		$db = new Conexion();
		$this->buscador = $db->real_escape_string($name);
		$sql = $db->query("SELECT * FROM empleado WHERE  nombre like '%$this->buscador%';");
		//$sql = $db->query("SELECT * FROM articulo ;");


		/*if($db->rows($sql)>0){

		}else{
			echo "no se econtro resultado";
		}*/
			echo "<table>";
		echo "<tr class= 'encabezado'><td>Nombre</td><td>Direccion</td><td>Email</td><td>Puesto</td><td>Telefono</td></tr>";
			while($dato =  $db->recorrer($sql)){
				echo "<tr><td>". $dato['nombre'] .  "</td><td>" .$dato['direccion'].  " </td><td>". $dato['email'].  "</td><td> ". $dato['puesto']. "</td><td> ". $dato['telefono']. "</td></tr>";


			}

		echo "</table>";




	}

	public function Inventario($name){
		$db = new Conexion();
		//$this->buscador = $db->real_escape_string($name);

		//$sql = $db->query("SELECT * FROM articulo ;");
		if($name == 0){
			$sql = $db->query("SELECT * FROM venta;");
		}else{
			$sql = $db->query("SELECT * FROM venta WHERE id_producto='$name' ;");
		}

		/*if($db->rows($sql)>0){

		}else{
			echo "no se econtro resultado";
		}*/

		echo "<table>";
		echo "<tr class= 'encabezado'><td>Codigo</td><td>forma_pago</td><td>Cantidad</td><td>Precio</td><td>TOTAL</td><td>Fecha</td><td>Id_cliente</td><td>Id_empleado</td><td>Id_producto</td><td>Id_proveedor</td></tr>";
			while($dato =  $db->recorrer($sql)){
				echo "<tr><td>". $dato['num_venta'] .  "</td><td>" .$dato['forma_pago'].  " </td><td>". $dato['cantidad'].  "</td><td> ". $dato['precio']. "</td><td> ". $dato['importe_total']. "</td><td>". $dato['fecha']. "</td><td>". $dato['id_cliente']. "</td><td>". $dato['id_empleado']. "</td><td>". $dato['id_producto']. "</td><td>". $dato['id_proveedor'].  "</td></tr>";


			}

		echo "</table>";

		//


	}




}
