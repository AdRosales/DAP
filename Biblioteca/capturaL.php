<?php include ('validaSesion.php');?>

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>Agrega Libro</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	</head>

	<body>
		<div class="row container">
			<h1>Datos a capturar del libro</h1>
			<div class="col-xs-4">
				<form enctype="multitype/form-data" id="capturaL" method="post">
					<div class="form-group">
						<label for="name">Nombre:</label>
						<input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre" required="true">
					</div>
					<div class="form-group">
						<label for="autor">Autor:</label>
						<input class="form-control" type="text" id="autor" name="autor" placeholder="Autor" required="true">
					</div>
					<div class="form-group">
						<label for="pass">Edición:</label>
						<input class="form-control" type="text" id="edicion" name="edicion" placeholder="Edicion" required="true">
					</div>
					<div class="form-group">
						<label for="pass">Año:</label>
						<input class="form-control" type="text" id="año" name="año" placeholder="Año" required="true">
					</div>

					<div class="form-group">
						<label for="pass">Editorial:</label>
						<input class="form-control" type="text" id="editorial" name="editorial" placeholder="Editorial" required="true">
					</div>
					<div class="form-group">
						<label for="pass">ISBN:</label>
						<input class="form-control" type="text" id="isbn" name="isbn" placeholder="ISBN" required="true">
					</div>
					<div class="form-group">
						<label for="pass">Idioma:</label>
						<input class="form-control" type="text" id="idioma" name="idioma" placeholder="Idioma" required="true">
					</div>
					<div class="form-group">
						<label for="pass">Páginas:</label>
						<input class="form-control" type="text" id="paginas" name="paginas" placeholder="Paginas" required="true">
					</div>
					<div class="form-group">
						<label for="pass">Descripción:</label>
						<input class="form-control" type="text" id="descripcion" name="descripcion" placeholder="Descripción" required="true">
					</div>
					<div class="form-group">
						<label for="pass">Código:</label>
						<input class="form-control" type="text" id="codigo" name="codigo" placeholder="Codigo" required="true">
					</div>


					<!--					Para evitar que haga el Reload de la página, cuando ponemos contraseñas diferentes, cambiamos el input de arriba por el a de abajo-->

					<!--					<a class="btn btn-primary" id="enviar">Ingresar</a>-->

					<br>
					<input id="enviar" class="btn btn-success" type="submit" value="Ingresar">
					
					<a class="btn btn-primary" href="sitio.php">Inicio</a>

					<a class="btn btn-danger" href="cierraS.php">Cerrar sesión</a>
					
				</form>
				<div id="info"></div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="rdatos.js" type="text/javascript"></script>
	</body>

	</html>
