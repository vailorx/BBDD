<?php
require 'conexion.php';
$nombre = $_POST['nombre'];
$voto = '1';
$insertar = "INSERT INTO votos VALUES ('".$nombre."', '".$voto."')";
$conectar->query($insertar) or die ("Error al ingresar los datos".mysqli_error($conectar));
?>

<script type="text/javascript">
	alert("Voto registrado!");
	window.location.href='resultado.php';
</script> 
