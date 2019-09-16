<?php

class Acceso{

	public function __construct(){

	}

	public  function login($user,$pass){


			$db = new Conexion();
			$sql = $db->query("SELECT USU_ID, USU_NOMBRE, USU_PASS FROM usuario WHERE USU_NOMBRE='$user' and USU_PASS = '$pass';" );
			$datos = $db->recorrer($sql);

			if( $datos['USU_NOMBRE'] == $user and  $datos['USU_PASS'] ==  $pass){
				  header('location: index.php?accion=Menu');
           session_start();
					$_SESSION['USUARIO'] =  $datos['USU_NOMBRE'];
					$_SESSION['id_user'] =  $datos['USU_ID'];

			}else {

header('location: index.php?accion=Login');

			}

		}

		public function iniciar(){
	session_start();
			if (isset($_SESSION['USUARIO'])) {
				echo "<div class='container'>";
				echo "<div class='row justify-content-md-center'>";
				echo "<div class='col'>";
				echo "<h1>";
				echo "Usuario: " . $_SESSION['USUARIO'] . " " .$_SESSION['id_user'] ;
				echo "</h1>";
				echo "</div>";
				echo "</div>";
				echo "</div>";
			}else {
				session_start();
				session_destroy();
				header('location: index.php?accion=Login');
			}
		}


public function Mazo(){
session_start();
	$db = new Conexion();
$id = $_SESSION['id_user'];

	$sql = $db->query("SELECT  mazo.MAZ_ID, tipo_carta.TCAR_NOMBRE,carta.CAR_NOMBRE, carta.CAR_ATAQUE,carta.CAR_DEFENSA FROM usuario
		                 INNER JOIN jugador ON usuario.JUG_ID = jugador.JUG_ID
		                 INNER JOIN mazo ON jugador.JUG_ID = mazo.JUG_ID INNER JOIN asignacion_mazo on mazo.MAZ_ID = asignacion_mazo.MAZ_ID
		                 INNER JOIN carta ON carta.CAR_ID = asignacion_mazo.CAR_ID
		                 INNER JOIN tipo_carta on tipo_carta.TCAR_ID = carta.TCAR_ID WHERE usuario.USU_ID = '$id' ; " );
	$datos = $db->recorrer($sql);

echo "<div class='container margin-top p-3 mb-2 bg-secondary text-white'>";
echo "<table class='table table-striped '>
	<thead class='thead-dark'>
		<tr>

			<th scope='col'>Mazo</th>
			<th scope='col'>Tipo Carta</th>
			<th scope='col'>Nombre</th>
			<th scope='col'>Ataque</th>
			<th scope='col'>Defensa</th>
		</tr>
	</thead>  ";

	while($dato =  $db->recorrer($sql)){
					echo "<tbody> <tr><td>". $dato['MAZ_ID'] .  "</td><td>" .$dato['TCAR_NOMBRE'].  " </td><td>". $dato['CAR_NOMBRE'].  "</td><td> ". $dato['CAR_ATAQUE']. "</td><td> ". $dato['CAR_DEFENSA'].  "</td></tr>  </tbody>";
				}
echo "</table>";
echo "</div>";


}

public function Partida($buscar){

	session_start();
		$db = new Conexion();
	$id = $_SESSION['id_user'];
	$sql = $db->query("SELECT partida.PAR_ID, jugador.JUG_NOMBRE, copas.COP_CANTIDAD, partida.FECHA, partida.HORA FROM usuario
	                   INNER JOIN jugador ON jugador.JUG_ID = usuario.JUG_ID
	                   INNER JOIN jugadores ON jugador.JUG_ID = jugadores.JUG_ID
	                   INNER JOIN partida ON partida.PAR_ID = jugadores.PAR_ID
	                   INNER JOIN copas ON partida.PAR_ID = copas.PAR_ID AND jugador.JUG_ID = copas.JUG_ID  WHERE  jugador.JUG_NOMBRE like '%$buscar%' ORDER by partida.PAR_ID; " );
	$datos = $db->recorrer($sql);

	echo "<div class='container'>";
	echo "<div class='container margin-top p-3 mb-2 bg-secondary text-white'>";
	echo "<table class='table table-striped '>
	<thead class='thead-dark'>
		<tr>
			<th scope='col'>Partida</th>
			<th scope='col'>Nombre</th>
			<th scope='col'>Copas</th>
			<th scope='col'>Fecha</th>
			<th scope='col'>Hora</th>
		</tr>
	</thead>  ";

	while($dato =  $db->recorrer($sql)){
					echo "<tbody> <tr><td>". $dato['PAR_ID'] .  "</td><td>" .$dato['JUG_NOMBRE'].  " </td><td>". $dato['COP_CANTIDAD'].  "</td><td> ". $dato['FECHA']. "</td><td> ". $dato['HORA'].  "</td></tr>  </tbody>";
				}
	echo "</table>";
	echo "</div>";
	echo "</div>";

}


public function Copas(){

	session_start();
		$db = new Conexion();
	$id = $_SESSION['id_user'];
	$sql = $db->query("SELECT partida.PAR_ID, copas.COP_CANTIDAD , partida.FECHA FROM usuario
	                   INNER JOIN jugador ON jugador.JUG_ID = usuario.JUG_ID
	                   INNER JOIN jugadores ON jugador.JUG_ID = jugadores.JUG_ID
	                   INNER JOIN partida ON partida.PAR_ID = jugadores.PAR_ID
	                   INNER JOIN copas ON partida.PAR_ID = copas.PAR_ID AND jugador.JUG_ID = copas.JUG_ID  WHERE  jugador.JUG_ID = $id ORDER by partida.PAR_ID; " );
	$datos = $db->recorrer($sql);

	echo "<div class='container'>";
	echo "<div class='container margin-top p-3 mb-2 bg-secondary text-white'>";
	echo "<table class='table table-striped '>
	<thead class='thead-dark'>
		<tr>
			<th scope='col'>Partida</th>
			<th scope='col'>Copas</th>
			<th scope='col'>Fecha</th>
		</tr>
	</thead>  ";

	while($dato =  $db->recorrer($sql)){
					echo "<tbody> <tr><td>". $dato['PAR_ID'] .  " </td><td>". $dato['COP_CANTIDAD'].  "</td><td> ". $dato['FECHA'].  "</td></tr>  </tbody>";
				}
	echo "</table>";
	echo "</div>";
	echo "</div>";

}

public function Carta_Usada(){

	session_start();
		$db = new Conexion();
	$id = $_SESSION['id_user'];
	$sql = $db->query("SELECT COUNT(asignacion_mazo.CAR_ID) as Cantitad, carta.CAR_NOMBRE, tipo_carta.TCAR_NOMBRE FROM mazo
	INNER JOIN asignacion_mazo ON mazo.MAZ_ID = asignacion_mazo.MAZ_ID
	INNER JOIN  carta ON carta.CAR_ID = asignacion_mazo.CAR_ID  INNER JOIN tipo_carta ON tipo_carta.TCAR_ID = carta.TCAR_ID  GROUP by  carta.CAR_NOMBRE  ORDER BY Cantitad DESC;" );
	$datos = $db->recorrer($sql);

	echo "<div class='container'>";
	echo "<div class='container margin-top p-3 mb-2 bg-secondary text-white'>";
	echo "<table class='table table-striped '>
	<thead class='thead-dark'>
		<tr>
			<th scope='col'>Cantidad</th>
			<th scope='col'>Carta</th>
			<th scope='col'>Tipo</th>
		</tr>
	</thead>  ";

	while($dato =  $db->recorrer($sql)){
					echo "<tbody> <tr><td>". $dato['Cantitad'] .  " </td><td>". $dato['CAR_NOMBRE'].  "</td><td> ". $dato['TCAR_NOMBRE'].  "</td></tr>  </tbody>";
				}
	echo "</table>";
	echo "</div>";
	echo "</div>";



}


}
