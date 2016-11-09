<?php
//Iniciamos sesión
session_start();
//Si la variable de sesión Usuario no está definida
if(!isset($_SESSION['s_usuario'])){
	header("Location: index.html");
	}
?>
