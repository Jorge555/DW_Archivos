<html>
<head>
	<title></title>
	<meta  charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/universal.min.css">
	<link rel="stylesheet" type="text/css" href="css/venta.min.css">
	</head>
	
	<body>
	
		
		<section class="banner">
		
		<section class="wrap">
			
			<article>
			
				<h1>Realiazar una venta</h1>
		<h2>Datos del cliente</h2>
	     <form action="index.php?accion=venta" method="POST" class="formulario">
		<label>Codigo<input type="text" name="codigo" id="codigo"></label>
		<label>Nombre<input type="text" name="nombre" id="nombre"></label>
		<label>Apellido<input type="text" name="apellido" id="apellido"></label>
		<label>NIT<input type="text" name="nit" id="nit"></label>
		
			<h2>PRODUCTO:</h2>
		<label>Codigo: <input type="text" name="codigoPro"></label>
		<label>Cantidad: <input type="text" name="cantidadPro"></label>
	     <input type="submit" value="Agregar"  name="agregar" id="boton">
			 
	
		</form>
				<form action="index.php?accion=venta" method="POST" class="formulario">
					<h4>EliminarProducto</h4>
					<label>Codigo: <input type="text" name="codigoPro"></label>
	
	     <input type="submit" value="Eliminar"  name="Eliminiar" id="boton">
				</form>
			
			</article>
			
			</section>
		</section>
		
	
		
	
	</body>

</html>