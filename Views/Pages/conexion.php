<?php 
	
	$host = "localhost";
	$user = "root";
	$pass = "saorinoco";
	$bd = "sao";

	$conexion = new mysqli($host,$user,$pass,$bd) or die ( "error" .mysql_errno($conexion));
?>