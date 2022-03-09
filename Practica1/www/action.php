<?php
$id_votado = $_REQUEST['Nombre'];

$enlace = mysqli_connect( "db", "root" , "test", "myDb", 3306);

$Consulta = "INSERT INTO votos (nombre, IP, fecha_horas) VALUES (, ".$Nombre.", '".$_SERVER['REMOTE_ADDR']."' , now())";

$resultado = mysqli_query($enlace, $Consulta);

if(isset($_POST['delegado'])){
$delegado = $POST['delegado'];
?>
