<?php include ('validaSesion.php');?>

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>Insertar Usuarios</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	</head>

	<body>
		<div class="row container">
			<h1>Nuevo usuario</h1>
			<div class="col-xs-4">
				<form enctype="multitype/form-data" id="capturaU" method="post">
					<div class="form-group">
						<label for="usuario">Usuario:</label>
						<input class="form-control" type="text" id="usuario" name="usuario" placeholder="Usuario" required="true">
					</div>
					<div class="form-group">
						<label for="pass">Password</label>
						<input class="form-control" type="password" id="pass" name="pass" placeholder="Password" required="true">
					</div>
					<div class="form-group">
						<label for="pass">Confirma Password</label>
						<input class="form-control" type="password" id="cpass" name="cpass" placeholder="Reescriba password" required="true">
					</div>

					<input id="enviar" class="btn btn-primary" type="submit" value="Ingresar">

					<a class="btn btn-primary" href="sitio.php">Inicio</a>

					<a class="btn btn-danger" href="cierraS.php">Cerrar sesión</a>

					<!--					Para evitar que haga el Reload de la página, cuando ponemos contraseñas diferentes, cambiamos el input de arriba por el a de abajo-->

					<!--					<a class="btn btn-primary" id="enviar">Ingresar</a>-->

				</form>
				<div id="info"></div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="rpass.js" type="text/javascript"></script>
	</body>

	</html>
