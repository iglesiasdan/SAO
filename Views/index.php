
<?php 
	session_start();
	require_once('Pages/conexion.php');
?>

<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>SAO</title>


		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->



		<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="../assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />
		<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="../assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="../assets/vendor/select2/select2.css" />
		<link rel="stylesheet" href="../assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="../assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="../assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="../assets/stylesheets/theme-custom.css">
		<script src="assets/vendor/modernizr/modernizr.js"></script>

		<!-- Head Libs -->
		<script src="../assets/vendor/jquery/jquery.js"></script>
		<script src="../assets/javascripts/angular.min.js"></script>
		<script src="../assets/javascripts/angular-ui-router.min.js"></script>
		<script src="../assets/vendor/modernizr/modernizr.js"></script>
				<script src="../assets/javascripts/tables/tablita.js"></script>
				<!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script> -->

		<!--Angular libs and controllers  -->

		<script src="../App/Controllers/myApp.js"></script>
		<script src="../App/Controllers/formularioController.js"></script>
		<script src="../App/Controllers/arriboController.js"></script>
		<script src="../App/Controllers/buqueController.js"></script>
		<script src="../assets/javascripts/angular-route.min.js"></script>
		<script src="../App/Controllers/puertoController.js"></script>
		<script src="../App/Controllers/agenciaController.js"></script>
		<script src="../App/Controllers/directives.js"></script>
		<script src="../App/Controllers/controllers.js"></script>
		<script src="../App/Controllers/console-sham.js"></script>
		<script src="../App/Controllers/angular-file-upload.min.js"></script>
		<script src="../App/Controllers/estadisticasController.js"></script>
		<script src="../App/Controllers/buquesctr.js"></script>
		<script src="../App/Controllers/usuarioController.js"></script>

		<!-- <script src="../assets/javascripts/upload.js"></script> -->


		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.js"></script>
		<script src="../assets/node_modules/angular-chart.js/dist/angular-chart.min.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function(){
				$('.permiso').hide();
				var permiso = $('.permiso').text();


				switch (permiso) {
					case '2':
						$('.user').hide();
						break;
					case '3':
						$('.user').hide();
						break;
				
				}
			   
			 
			});
		</script>


	</head>
	<body ng-app="myApp">
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="../assets/images/logo.png" height="35" alt="SAO" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
				
				<?php

					$u=$_SESSION['user'];
					$p=$_SESSION['pass'];

					$consulta = "SELECT * FROM usuario WHERE Username='$u'";
					$resultado = $conexion->query($consulta);


					
					if ($row=mysqli_fetch_array($resultado)) {
						$hash = $row[2];

						if (password_verify($p, $hash)) {
							$consulta2 = "SELECT Username,Correo,Privilegio,Nombre FROM usuario WHERE Username='$u'";
							$resultado1 = $conexion->query($consulta2);
							$fila = mysqli_fetch_array($resultado1);

						}else {
						    
							header('Location: /SAO/Views/Pages/login.php'); /* Redirect browser */
							exit();
						}

					}else{

						header('Location: /SAO/Views/Pages/login.php'); /* Redirect browser */
						exit();
						
					}

				?>
				
				<div class="header-right">

					<span class="separator"></span>

					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<div class="profile-info">
								<span class="name"><?php echo $fila[3]; ?></span>
								<span class='role'><?php echo $fila[1]; ?></span>
								<span class="permiso"><?php echo $fila[2]; ?></span>
							</div>

							<i class="fa custom-caret"></i>
						</a>

						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<form action="Pages/cerrar_sesion.php" method="POST" align="center">
										<button type="submit" class="mb-xs mt-xs mr-xs btn btn-primary"  name="cerrar" role="menuitem" tabindex="-1"><i class="fa fa-power-off"></i><strong> Salir</strong></button>
									</form>


								</li>
							</ul>
						</div>
					</div>
				</div>

			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left" style="background-color:#31548c;">

					<div class="sidebar-header">
						<div class="sidebar-title" style="color:#FFFFFF">
							<strong>Menu</strong>
						</div>
						<div class="sidebar-toggle " data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i style="color:#FFFFFF" class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>

					<div class="nano">
						<div class="nano-content" style="background-color:#31548c;">
							<nav id="menu" class="nav-main" role="navigation">
                        		<ul class="nav nav-main">
		                           <li>
		                              <a ui-sref="inicio">
		                              <i class="fa fa-home" aria-hidden="true"></i>
		                              <span><strong>Inicio</strong></span>
		                              </a>
		                           </li>
		                           <li>
		                              <a ui-sref="estudios">
		                              <i class="fa fa-home" aria-hidden="true"></i>
		                              <span><strong>Estudios</strong></span>
		                              </a>
		                           </li>
		                            <li>
		                              <a ui-sref="puertos">
		                              <i class="fa fa-home" aria-hidden="true"></i>
		                              <span><strong>Puertos</strong></span>
		                              </a>
		                           </li>
		                            <li>
		                              <a ui-sref="agencias">
		                              <i class="fa fa-home" aria-hidden="true"></i>
		                              <span><strong>Agencias</strong></span>
		                              </a>
		                           </li>
		                            <li>
		                              <a ui-sref="buques">
		                              <i class="fa fa-home" aria-hidden="true"></i>
		                              <span><strong>Buques</strong></span>
		                              </a>
		                           </li>
															 <li>
		                              <a ui-sref="estadisticas">
		                              <i class="fa fa-home" aria-hidden="true"></i>
		                              <span><strong>Estadisticas</strong></span>
		                              </a>
		                           </li>
		                           <li style="vertical-align: bottom;" class="user">
		                              <a ui-sref="usuarios">
		                              <i class="fa fa-home" aria-hidden="true"></i>
		                              <span><strong>Usuarios</strong></span>
		                              </a>
		                           </li>
		                        </ul>
                     		</nav>

						</div>

					</div>

				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Servicios Ambientales del Orinoco</h2>
					</header>
						<div id="main">
								<div	ui-view>

								</div>
						</div>
				</section>
			</div>



		<!-- Vendor -->

		<!-- Vendor -->
		<!-- <script src="../assets/vendor/jquery/jquery.js"></script> -->
		<!-- Vendor -->

		<script src="../assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="../assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="../assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="../assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="../assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

		<!-- Specific Page Vendor -->
		<script src="../assets/vendor/select2/select2.js"></script>
		<script src="../assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		<script src="../assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
		<script src="../assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="../assets/javascripts/theme.js"></script>

		<!-- Theme Custom -->
		<script src="../assets/javascripts/theme.custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="../assets/javascripts/theme.init.js"></script>


		<!-- Examples -->

		<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->



		<!-- Examples -->
		<!-- <script class="include" type="text/javascript" src="../assets/javascripts/dashboard/jquery.jqplot.js"></script>
		<script src="../assets/javascripts/dashboard/examples.dashboard.js"></script>
		<script type="text/javascript" src="../assets/javascripts/dashboard/jqplot.cursor.js"></script>
		<script type="text/javascript" src="../assets/javascripts/dashboard/jqplot.dateAxisRenderer.js"></script>
		<script type="text/javascript" src="../assets/javascripts/dashboard/jqplot.highlighter.js"></script>
		<script type="text/javascript" src="../assets/javascripts/dashboard/jqplot.json2.js"></script> -->

		<!-- Examples -->

	</body>
</html>
