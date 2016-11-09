<?php
include ('validaSesion.php');
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
$md5 = md5($pass);

include('conexion.php');
//Inserta los elementos en la BD
$r = mysqli_query($conexion, "INSERT INTO usuarios VALUES ('NULL' ,'$usuario', '$pass')");
mysqli_close($conexion);
?>
