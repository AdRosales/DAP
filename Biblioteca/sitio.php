<?php include ('validaSesion.php');?>

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>Página en sesión</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->

	</head>

	<body>

		<h1>Hola estás en sesión</h1>
		<br>
		<?php echo "<label>Usuario: </label> <h2>". $_SESSION['s_usuario']."</h2>";?>
			<a href="capturaU.php" class="btn btn-primary">Nuevo Usuario</a>

			<a class="btn btn-success" href="capturaL.php">Agregar Libro</a>

			<a class="btn btn-danger" href="cierraS.php">Cerrar sesión</a>

			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	</body>

	</html>
