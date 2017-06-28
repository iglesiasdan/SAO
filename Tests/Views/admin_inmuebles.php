<?php 
   session_start();
   require_once('conm/conexion.php');
   ?>
<!doctype html>
<html class="fixed">
   <head>
      <!-- Basic -->
      <meta charset="UTF-8">
      <title>Inmobiliaria BCR</title>
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
      <!-- Vendor CSS -->
      <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
      <link rel="stylesheet" href="assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />
      <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
      <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
      <link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />
      <!-- Specific Page Vendor CSS -->
      <link rel="stylesheet" href="assets/vendor/select2/select2.css" />
      <link rel="stylesheet" href="assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />
      <!-- Theme CSS -->
      <link rel="stylesheet" href="assets/stylesheets/theme.css" />
      <!-- Skin CSS -->
      <link rel="stylesheet" href="assets/stylesheets/skins/default.css" />
      <!-- Theme Custom CSS -->
      <link rel="stylesheet" href="assets/stylesheets/theme-custom.css"/>
      <!-- Head Libs -->
      <script src="assets/vendor/modernizr/modernizr.js"></script>
      <script src="assets/vendor/jquery/jquery.js"></script>
      <script type="text/javascript">
         $(document).ready(function(){
           $('#cambios').hide(); 
           $("#cedula_consulta").change(function(){
              var opcion = $("#cedula_consulta").val();
         
              if (opcion != "none") {
                 var envio = $('#cedula_consulta').val();
                 $('#cambios').show(); //muestro mediante id
         
                 $.post('php/usuarios/buscar_usuarios.php',{cedula_consulta:envio})
              .done( function( resp){
                 if(resp!=""){
                    res=jQuery.parseJSON(resp);
                       $( "#cedulausuario_modf" ).val( res[0] );
                       $( "#nombreusuario_modf" ).val( res[1] );
                       $( "#apellidousuario_modf" ).val( res[2] );
                       $( "#emailusuario_modf" ).val( res[3] );
                       $( "#contrasenausuario_modf" ).val( res[4] );
                       $( "#telefonousuario_modf" ).val( res[5] );
                       $( "#direccionusuario_modf" ).val( res[6] );
                       $("#imagen_p").attr("src","archivos/"+res[7]);
                       $("#imagen_g").attr("href","archivos/"+res[7]);
                       $( "#cargousuario_modf" ).val( res[8]);
                       $( "#perfilusaurio_modf" ).val( res[9]);
                       $( "#visible_modf" ).val( res[10]);
                      
         
                 }
              });
              }else{
                 $('#cambios').hide(); 
              }
           });
         
           
         });
         
      </script>
      <style>
         select:required:invalid {
         color: #cccccc;
         }
         option[value=""][disabled] {
         display: none;
         }
         option {
         color: black;
         }
      </style>
   </head>
   <body>
      <section class="body">
      <!-- start: header -->
      <header class="header">
         <div class="logo-container">
            <!-- <a href="../" class="logo">
               <img src="assets/images/logo.png" height="35" alt="Porto Admin" />
               </a> -->
            <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
               <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
         </div>
         <div class="header-right">
            <?php 
               $u=$_SESSION['user'];
               $p=$_SESSION['pass'];
               
               //echo "user: $u   pass: $p";
               
               
               
               $consulta = "SELECT cedula,clave FROM usuarios WHERE cedula='$u' AND clave = '$p'";
               $resultado = $conexion->query($consulta);
               
               
               
               if ($row=mysqli_fetch_array($resultado)) {
                 $user_online=$_SESSION['user']; 
                              $consulta = "SELECT CONCAT(nombre,' ',apellido) AS usuario_activo,perfil FROM usuarios WHERE cedula='$user_online'";
                                 $resultado = $conexion->query($consulta);
                                 $fila = mysqli_fetch_assoc($resultado);
               
               }else{
                 header("location: admin_inicio.php");
               }
                             
                                 
                                 
                             ?>
            <span class="separator"></span>
            <div id="userbox" class="userbox">
               <a href="#" data-toggle="dropdown">
                  <div class="profile-info">
                     <span class="name"><?php echo $fila['usuario_activo']; ?></span>
                     <span class="role"><?php echo $fila['perfil']; ?></span>
                  </div>
                  <i class="fa custom-caret"></i>
               </a>
               <div class="dropdown-menu">
                  <ul class="list-unstyled">
                     <li class="divider"></li>
                     <li>
                        <form action="cerrar_sesion.php" method="POST" align="center">
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
         <aside id="sidebar-left" class="sidebar-left" style="background-color:#1E304A;">
            <div class="sidebar-header">
               <div class="sidebar-title" style="color:#FFFFFF">
                  <strong>Menu</strong>
               </div>
               <div class="sidebar-toggle " data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                  <i style="color:#FFFFFF" class="fa fa-bars" aria-label="Toggle sidebar"></i>
               </div>
            </div>
            <div class="nano">
               <div class="nano-content" style="background-color:#1E304A;">
                  <nav id="menu" class="nav-main" role="navigation">
                     <ul class="nav nav-main">
                        <li>
                           <a href="pagina_principal.php">
                           <i class="fa fa-paper-plane" aria-hidden="true"></i>
                           <span><strong>Inicio</strong></span>
                           </a>
                        </li>
                        <li>
                           <a href="admin_inmuebles.php">
                           <i class="fa fa-home" aria-hidden="true"></i>
                           <span><strong>Inmuebles</strong></span>
                           </a>
                        </li>
                        <li>
                           <a href="admin_usuarios.php">
                           <i class="fa fa-users" aria-hidden="true"></i>
                           <span><strong>Agentes</strong></span>
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
            <div class="col-md-10">
               <h2>Gestión de Inmuebles</h2>
            </div>
            <!--<div class="col-md-2 center">
               <h2 style="color:#ffffff" ><a role="menuitem" tabindex="-1" href="pages-signin.html" style="color:#ffffff"><i class="fa fa-power-off" style="color:#ffffff"></i > Salir</a></h2>
               </div> -->
         </header>
         <section class="content-with-menu content-with-menu-has-toolbar media-gallery">
            <div class="inner-body mg-main">
               <div class="row mg-files" data-sort-destination data-sort-id="media-gallery">
                  <!-- Agregar nuevo Inmueble -->
                  <div class="isotope-item col-sm-6 col-md-4 col-lg-3">
                     <a class=" btn btn-default" href="admin_agragar_inmueble.php">
                     <img src="assets/images/boton/agregar.png" class="img-responsive" alt="Project">
                     </a>
                  </div>



                        <?php
                          $consulta_inmueble = "SELECT inmuebles.id AS id,ciudades.ciudad AS ciudad,precio,CONCAT ('archivos/',inmuebles.imagen1) AS imagen_principal, inmuebles.categoria AS categoria FROM inmuebles,ciudades WHERE inmuebles.ciudad=ciudades.id_ciudad";
                          $resultado_inmueble = $conexion->query($consulta_inmueble);
                          while ($fila_inmueble = mysqli_fetch_row($resultado_inmueble))
                          {
                            echo "<div class='isotope-item video col-sm-6 col-md-4 col-lg-3'>";
                            echo "<div class='thumbnail'>";
                            echo "<div class='thumb-preview'>";
                            echo "<a class='thumb-image'>";
                            echo "<img src='".$fila_inmueble['3']."'class='img-responsive'>";
                            echo "</a>";
                            echo "<div class='mg-thumb-options'>";
                            echo "<div class='mg-toolbar'>";
                            echo "<div class='mg-group pull-right'>";
                            echo "<a href='#'>Editar</a>";
                            echo "<button class='dropdown-toggle mg-toggle' type='button' data-toggle='dropdown'>";
                            echo "<i class='fa fa-caret-up'></i>";
                            echo "</button>";
                            echo "<ul class='dropdown-menu mg-menu' role='menu'>";
                            echo "<li><a href='#'><i class='fa fa-download'></i> Download</a></li>";
                            echo "</ul>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                            echo "<h5 class='mg-title text-weight-semibold'>".$fila_inmueble['1']."</h5>";
                            echo " <div class='mg-description'>";
                            echo "<small class='pull-left text-muted'>Bs: ".$fila_inmueble['2']."</small>";
                            echo "<small class='pull-right text-muted'>".$fila_inmueble['4']."</small>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                          }
                        ?>

               </div>
            </div>
          </section>  
      </div>
      
      <script>
         function recargar() {
             document.getElementById("modifi_elimina").submit();
         }
      </script>
      <!-- Vendor -->
      <script src="assets/vendor/jquery/jquery.js"></script>
      <script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
      <script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
      <script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
      <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
      <script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
      <script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
      <!-- Specific Page Vendor -->
      <script src="assets/vendor/select2/select2.js"></script>
      <script src="assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
      <script src="assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
      <script src="assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js"></script> 
      <!-- Theme Base, Components and Settings -->
      <script src="assets/javascripts/theme.js"></script>
      <!-- Theme Custom -->
      <script src="assets/javascripts/theme.custom.js"></script>
      <!-- Theme Initialization Files -->
      <script src="assets/javascripts/theme.init.js"></script>
      <!-- Examples -->
      <script src="assets/javascripts/tables/examples.datatables.editable.js"></script>
      <script src="assets/javascripts/ui-elements/examples.modals.js"></script>
      <script src="assets/javascripts/pages/examples.mediagallery.js"></script>
      <script type="text/javascript" src="js/ajax_usuarios.js"></script>
   </body>
</html>