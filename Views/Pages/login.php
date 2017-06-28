<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">
		<title>SAO</title>


		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="../../assets/vendor/bootstrap/css/bootstrap.css" />

		<link rel="stylesheet" href="../../assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="../../assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="../../assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="../../assets/stylesheets/theme.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="../../assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="../../assets/vendor/modernizr/modernizr.js"></script>
		<script src="../../assets/vendor/jquery/jquery.js"></script>
		
	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a class="logo pull-left">
					<img src="../../assets/images/logo.png" height="74" alt="" />
				</a>
			</br>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Inicio de Sesion</h2>
					</div>
					<div class="panel-body">
						<form id="form" action="inicio_sesion.php" method="POST">
							<div class="form-group mb-lg">
								<label>Nombre de Usuario</label>
								<div class="input-group input-group-icon">
									<input name="username" id="username" type="text" class="form-control input-lg" autocomplete="off" required/>
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Contraseña</label>
									<!--<a href="recuperar_contrasena.php" class="pull-right" style="color:#94d500">¿Olvido su contraseña?</a> -->
								</div>
								<div class="input-group input-group-icon">
									<input name="contrasena" id="contrasena" type="text" class="form-control input-lg" autocomplete="off" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
							</div>
							<!-- <p class="text-center" style="color:#121f6b">¿No tienes cuenta? <a href="registrar_usuario.php" style="color:#94d500">Registrate!</a> -->
							<div class="row">
								<div class="col-sm-12 text-right">
										<button type="" class="btn btn-primary">Iniciar</button>
								</div>
							</div>

						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2017. Todos los derechos reservados</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="../../assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="../../assets/vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="../../assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="../../assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="../../assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="../../assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="../../assets/javascripts/theme.js"></script>

		<!-- Theme Custom -->
		<script src="../../assets/javascripts/theme.custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="../../assets/javascripts/theme.init.js"></script>

	</body>
</html>
