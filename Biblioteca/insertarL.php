<?php
include ('validaSesion.php');
$nombre = $_POST['nombre'];
$autor = $_POST['autor'];
$edicion = $_POST['edicion'];
$año = $_POST['año'];
$editorial = $_POST['editorial'];
$isbn = $_POST['isbn'];
$idioma = $_POST['idioma'];
$paginas = $_POST['paginas'];
$descripcion = $_POST['descripcion'];
$codigo = $_POST['codigo'];

include('conexion.php');
//Inserta los elementos en la BD
$r = mysqli_query($conexion, "INSERT INTO libros VALUES ('Null' ,'$nombre', '$autor', '$edicion', '$año', '$editorial', '$isbn', '$idioma', '$paginas', '$descripcion', '$codigo')");
mysqli_close($conexion);
?>