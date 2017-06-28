<?php
	session_start();

	//$usuario=$_POST['cedula'];
	//$contrasena=$_POST['clave'];
	$u=$_SESSION['user']=$_REQUEST['username'];
	$p=$_SESSION['pass']=$_REQUEST['contrasena'];

	//echo "user: $u   pass: $p";

	
	require_once('conexion.php');

	$consulta = "SELECT * FROM usuario WHERE Username='$u'";
	$resultado = $conexion->query($consulta);


	
	if ($row=mysqli_fetch_array($resultado)) {
		$hash = $row[2];

		if (password_verify($p, $hash)) {
			header('Location: http://107.180.66.98:90//SAO/Views/index.php#/inicio'); /* Redirect browser */
			exit();

		}else {
		    $message2='Datos incorrectos ó Incompletos';
			header('Location: http://107.180.66.98:90/SAO/Views/Pages/login.php'); /* Redirect browser */
			exit();
		}

	}else{
		header('Location: http://107.180.66.98:90/SAO/Views/Pages/login.php'); /* Redirect browser */
		exit();
		
	}

?>