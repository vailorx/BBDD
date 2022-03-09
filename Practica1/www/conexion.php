<?php
	$conectar= new mysqli("db", "root", "test", "myDb");
	//Comprobar conexion
	if(mysqli_connect_errno())
	{
		printf("Fallo la conexion");
	}
	else {
		//printf("Estas conectado");
	}
?>
