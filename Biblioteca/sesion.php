<?php
session_start();
//Obtenemos el usuario y pass del formulario
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$md5 = md5($pass);


//Ejecutamos la conexión a la BD.
include('conexion.php');

//Escribimos la consulta a la BD.
$qUsuario= $conexion->query("SELECT * FROM usuarios WHERE usuario='$usuario' AND pass='$pass'");

//Ejecutamos la consulta
if ($resultado=mysqli_fetch_array($qUsuario)){
	//Si esta es verdadera, guardamos en una variable de sesión el nombre de usuario
	$_SESSION['s_usuario'] = $usuario;
	//Y enviamos al usuario a la página sitio.html
	header('Location: sitio.php');
}else{
	//Si esta es falsa, mandamos a index.
	header ('Location: index.html');
}

?>
