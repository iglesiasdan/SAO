<?php
	session_start();
	

	unset($_SESSION['user']); 
	unset($_SESSION['pass']);

	//$usuario=$_POST['cedula'];
	//$contrasena=$_POST['clave'];
	header('Location: /SAO/Views/Pages/login.php'); /* Redirect browser */
	exit();

?>
