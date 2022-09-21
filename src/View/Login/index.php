<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<title> LOGIN-EDENOR-FLOTA-AUTOMOTOR  </title>
	<!-- CSS -->
		<link rel="stylesheet" href="../../Assets/css/style.css"
	</head>
	
	<body>
				
		<!-- CONTENIDO DEL FORMULARIO -->
	<form action="procesadorTF.php" method="POST">
		<section class="form-login">
		<h5>INGRESO</h5>
		<label for="dni">Ingrese su DNI: </label>
		<input class="controls" type="number" name="dni" placeholder="DNI"> 
		
		<!-- Contraseña -->
		
		<label> Legajo: </label>
		<input class="controls" type="password" name="pass" placeholder="LEGAJO">
		
		<!-- BOTON PARA EL ENVIO DE DATOS -->
		
		<input class="buttons" type="submit" value="Enviar">
		</form>
		
	</body>
	
</html>