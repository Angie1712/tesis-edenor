<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<title> LOGIN-EDENOR-FLOTA-AUTOMOTOR  </title>
	<!-- CSS -->
		<link rel="stylesheet" href="../../Assets/css/style.css">
	</head>
	
	<body>
				
		<!-- CONTENIDO DEL FORMULARIO -->
	<form id="loginForm" autocomplete="off" action="../Login/ValidationUser.php" method="POST">
		<section class="form-login">
		<h5>INGRESO</h5>
		<label for="dni">Ingrese su DNI: </label>
		<input class="controls" type="number" name="dni" placeholder="DNI"> 
		
		<!-- Contraseña -->
		
		<label> Legajo: </label>
		<input class="controls" type="text" name="legajo" placeholder="LEGAJO">
		
		<!-- BOTON PARA EL ENVIO DE DATOS -->
		
		<input class="buttons" type="submit" value="Enviar">
		</form>
	
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="../../Assets/js/app.js"></script>
    <script type="text/javascript" src="../../Assets/js/overhang.min.js"></script>
		
	</body>
	
</html>