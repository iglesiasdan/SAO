<?php
   session_start();
   require_once('conm/conexion.php');
   ?>
<!doctype html>
<html class="fixed">
   <head>
      <!-- Basic -->
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <title>Inmobiliaria BCR</title>
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
      <link rel="stylesheet" href="../assets/stylesheets/theme-custom.css"/>
      <!-- Foticos -->
      <!-- Head Libs -->
      <script src="../assets/vendor/modernizr/modernizr.js"></script>
      <script src="../assets/vendor/jquery/jquery.js"></script>
      <script type="text/javascript">
         $(document).ready(function(){
           $('#cambios').hide();
           $("#cedula_consulta").change(function(){
              var opcion = $("#cedula_consulta").val();

              if (opcion != "none") {
                 var envio = $('#cedula_consulta').val();
                 $('#cambios').show(); //muestro mediante id

                 $.post('../php/usuarios/buscar_usuarios.php',{cedula_consulta:envio})
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

          $("#estado").change(function () {
           $("#estado option:selected").each(function () {
            elegido=$(this).val();
            $.post("modelo.php", { elegido: elegido }, function(data){
            $("#ciudad").html(data);
            });
         });
         })

          function mostrarImagen(input) {
             if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function (e) {
               $('#img_destino').attr('src', e.target.result);
              }
              reader.readAsDataURL(input.files[0]);
             }
            }

            function mostrarImagen2(input) {
             if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function (e) {
               $('#img_destino2').attr('src', e.target.result);
              }
              reader.readAsDataURL(input.files[0]);
             }
            }

            function mostrarImagen3(input) {
             if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function (e) {
               $('#img_destino3').attr('src', e.target.result);
              }
              reader.readAsDataURL(input.files[0]);
             }
            }

            function mostrarImagen4(input) {
             if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function (e) {
               $('#img_destino4').attr('src', e.target.result);
              }
              reader.readAsDataURL(input.files[0]);
             }
            }

            function mostrarImagen5(input) {
             if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function (e) {
               $('#img_destino5').attr('src', e.target.result);
              }
              reader.readAsDataURL(input.files[0]);
             }
            }

            function mostrarImagen6(input) {
             if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function (e) {
               $('#img_destino6').attr('src', e.target.result);
              }
              reader.readAsDataURL(input.files[0]);
             }
            }

            function mostrarImagen7(input) {
             if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function (e) {
               $('#img_destino7').attr('src', e.target.result);
              }
              reader.readAsDataURL(input.files[0]);
             }
            }

            function mostrarImagen8(input) {
             if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function (e) {
               $('#img_destino8').attr('src', e.target.result);
              }
              reader.readAsDataURL(input.files[0]);
             }
            }

            function mostrarImagen9(input) {
             if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function (e) {
               $('#img_destino9').attr('src', e.target.result);
              }
              reader.readAsDataURL(input.files[0]);
             }
            }

            function mostrarImagen10(input) {
             if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function (e) {
               $('#img_destino10').attr('src', e.target.result);
              }
              reader.readAsDataURL(input.files[0]);
             }
            }

            $("#archivo").change(function(){
             mostrarImagen(this);
            });

             $("#eliminar").click(function(event){
                event.preventDefault();
                var nuevaImagen = "../assets/images/boton/agregar.png";
                $("#img_destino").attr("src", nuevaImagen);  // o  $(this).attr("src", nuevaImagen);
              });

              $("#archivo2").change(function(){
             mostrarImagen2(this);
            });

             $("#eliminar2").click(function(event){
                event.preventDefault();
                var nuevaImagen2 = "../assets/images/boton/agregar.png";
                $("#img_destino2").attr("src", nuevaImagen2);  // o  $(this).attr("src", nuevaImagen);
              });

               $("#archivo3").change(function(){
             mostrarImagen3(this);
            });

             $("#eliminar3").click(function(event){
                event.preventDefault();
                var nuevaImagen3 = "../assets/images/boton/agregar.png";
                $("#img_destino3").attr("src", nuevaImagen3);  // o  $(this).attr("src", nuevaImagen);
              });

                $("#archivo4").change(function(){
             mostrarImagen4(this);
            });

             $("#eliminar4").click(function(event){
                event.preventDefault();
                var nuevaImagen4 = "../assets/images/boton/agregar.png";
                $("#img_destino4").attr("src", nuevaImagen4);  // o  $(this).attr("src", nuevaImagen);
              });

                $("#archivo5").change(function(){
             mostrarImagen5(this);
            });

             $("#eliminar5").click(function(event){
                event.preventDefault();
                var nuevaImagen5 = "../assets/images/boton/agregar.png";
                $("#img_destino5").attr("src", nuevaImagen5);  // o  $(this).attr("src", nuevaImagen);
              });

                $("#archivo6").change(function(){
             mostrarImagen6(this);
            });

             $("#eliminar6").click(function(event){
                event.preventDefault();
                var nuevaImagen6 = "../assets/images/boton/agregar.png";
                $("#img_destino6").attr("src", nuevaImagen6);  // o  $(this).attr("src", nuevaImagen);
              });

                $("#archivo7").change(function(){
             mostrarImagen7(this);
            });

             $("#eliminar7").click(function(event){
                event.preventDefault();
                var nuevaImagen7 = "../assets/images/boton/agregar.png";
                $("#img_destino7").attr("src", nuevaImagen7);  // o  $(this).attr("src", nuevaImagen);
              });

                $("#archivo8").change(function(){
             mostrarImagen8(this);
            });

             $("#eliminar8").click(function(event){
                event.preventDefault();
                var nuevaImagen8 = "../assets/images/boton/agregar.png";
                $("#img_destino8").attr("src", nuevaImagen8);  // o  $(this).attr("src", nuevaImagen);
              });

                $("#archivo9").change(function(){
             mostrarImagen9(this);
            });

             $("#eliminar9").click(function(event){
                event.preventDefault();
                var nuevaImagen9 = "../assets/images/boton/agregar.png";
                $("#img_destino9").attr("src", nuevaImagen9);  // o  $(this).attr("src", nuevaImagen);
              });

                $("#archivo10").change(function(){
             mostrarImagen10(this);
            });

             $("#eliminar10").click(function(event){
                event.preventDefault();
                var nuevaImagen10 = "../assets/images/boton/agregar.png";
                $("#img_destino10").attr("src", nuevaImagen10);  // o  $(this).attr("src", nuevaImagen);
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
                     <h2>Agregar Inmueble</h2>
                  </div>
                  <!--<div class="col-md-2 center">
                     <h2 style="color:#ffffff" ><a role="menuitem" tabindex="-1" href="pages-signin.html" style="color:#ffffff"><i class="fa fa-power-off" style="color:#ffffff"></i > Salir</a></h2>
                     </div> -->
               </header>
               <div class="row">
                  <div class="col-xs-12">
                     <section class="panel form-wizard" id="w4">
                        <div class="panel-body">
                           <div class="wizard-progress wizard-progress-lg">
                              <div class="steps-progress">
                                 <div class="progress-indicator"></div>
                              </div>
                              <ul class="wizard-steps">
                                 <li class="active">
                                    <a href="#categoria" data-toggle="tab"><span>1</span>Categoría</a>
                                 </li>
                                 <li>
                                    <a href="#caracteristicas" data-toggle="tab"><span>2</span>Características</a>
                                 </li>
                                 <li>
                                    <a href="#ubicacion" data-toggle="tab"><span>3</span>Ubicación</a>
                                 </li>
                                 <li>
                                    <a href="#fotos" data-toggle="tab"><span>4</span>Carga de Fotos</a>
                                 </li>
                              </ul>
                           </div>
                           <form  action="" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data"  novalidate="novalidate">
                              <div class="tab-content">
                                 <!-- Inicio formulario modalidad-->
                                 <div id="categoria" class="tab-pane active">
                                    <div class="form-group">
                                       <label class="col-sm-3 control-label" for="categoria_tipo">Categoría</label>
                                       <div class="col-sm-9">
                                          <select id="categoria_tipo" name="categoria_tipo" class="form-control mb-md" required>
                                             <option value="" disabled selected>Categoría</option>
                                             <option value='Venta'>Venta</option>
                                             <option value='Alquiler'>Alquiler</option>
                                             <option value='Alquiler Vacacional'>Alquiler Vacacional</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Inicio formulario caracteristicas-->
                                 <div id="caracteristicas" class="tab-pane">
                                    <div class="col-md-12">
                                       <section class="panel panel-featured panel-featured-primary">
                                          <header class="panel-heading">
                                             <h2 class="panel-title">Características Principales</h2>
                                          </header>
                                          <div class="panel-body">
                                             <div class="form-group">
                                                <div class="col-md-6">
                                                   <label class="control-label" style="text-align: left;"><strong>Baños:</strong></label>
                                                   <select id="banos" name="banos" class="form-control mb-md" >
                                                      <option value="" disabled selected>Número de Baños</option>
                                                      <option value='1'>1</option>
                                                      <option value='2'>2</option>
                                                      <option value='3'>3</option>
                                                      <option value='4'>4</option>
                                                      <option value='5'>5</option>
                                                      <option value='6'>6</option>
                                                      <option value='7'>7</option>
                                                      <option value='8'>8</option>
                                                      <option value='9'>9</option>
                                                      <option value='10'>10</option>
                                                      <option value='Más de 10'>Más de 10</option>
                                                      <option value='No tiene'>No tiene</option>
                                                   </select>
                                                </div>
                                                <div class="col-md-6">
                                                   <label class="control-label" style="text-align: left;"><strong>Baños de Servicio:</strong></label>
                                                   <select id="banos_servicio" name="banos_servicio" class="form-control mb-md" >
                                                      <option value="" disabled selected>Número de Baños de servicio</option>
                                                      <option value='1'>1</option>
                                                      <option value='2'>2</option>
                                                      <option value='Más de 2'>Más de 2</option>
                                                      <option value='No tiene'>No tiene</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="form-group">
                                                <div class="col-md-6">
                                                   <label class="control-label" style="text-align: left;"><strong>Habitaciones:</strong></label>
                                                   <select id="habitaciones" name="habitaciones" class="form-control mb-md" >
                                                      <option value="" disabled selected>Número de Habitaciones</option>
                                                      <option value='1'>1</option>
                                                      <option value='2'>2</option>
                                                      <option value='3'>3</option>
                                                      <option value='4'>4</option>
                                                      <option value='5'>5</option>
                                                      <option value='6'>6</option>
                                                      <option value='7'>7</option>
                                                      <option value='8'>8</option>
                                                      <option value='9'>9</option>
                                                      <option value='10'>10</option>
                                                      <option value='Más de 10'>Más de 10</option>
                                                      <option value='No tiene'>No tiene</option>
                                                   </select>
                                                </div>
                                                <div class="col-md-6">
                                                   <label class="control-label" style="text-align: left;"><strong>Habitaciones de Servicio:</strong></label>
                                                   <select id="habitaciones_serv" name="habitaciones_serv" class="form-control mb-md" >
                                                      <option value="" disabled selected>Número de Hab. Servicio</option>
                                                      <option value='1'>1</option>
                                                      <option value='2'>2</option>
                                                      <option value='Más de 2'>Más de 2</option>
                                                      <option value='No tiene'>No tiene</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="form-group">
                                                <div class="col-md-6">
                                                   <label class="control-label" style="text-align: left;"><strong>Estacionamientos:</strong></label>
                                                   <select id="estacionamiento" name="estacionamiento" class="form-control mb-md" >
                                                      <option value="" disabled selected>Número de Estacionamientos</option>
                                                      <option value='1'>1</option>
                                                      <option value='2'>2</option>
                                                      <option value='3'>3</option>
                                                      <option value='4'>4</option>
                                                      <option value='5'>5</option>
                                                      <option value='6'>6</option>
                                                      <option value='7'>7</option>
                                                      <option value='8'>8</option>
                                                      <option value='9'>9</option>
                                                      <option value='10'>10</option>
                                                      <option value='Más de 10'>Más de 10</option>
                                                      <option value='No tiene'>No tiene</option>
                                                   </select>
                                                </div>
                                                <div class="col-md-6">
                                                   <label class="control-label" style="text-align: left;"><strong>Metros de Construción (M<sup>2</sup>):</strong></label>
                                                   <input type="text" class="form-control" name="metro_cuadrado" id="metro_cuadrado" placeholder="Metros cuadrados Constucción">
                                                </div>
                                             </div>
                                             <div class="form-group">
                                                <div class="col-md-6">
                                                   <label class="control-label" style="text-align: left;"><strong>Metros de Terreno (M<sup>2</sup>):</strong></label>
                                                   <input type="text" class="form-control" name="metro_cuadrado_terreno" id="metro_cuadrado_terreno" placeholder="Metros cuadrados Terreno">
                                                </div>
                                                <div class="col-md-6">
                                                   <label class="control-label" style="text-align: left;"><strong>Antigüedad (Años):</strong></label>
                                                   <input type="text" class="form-control" name="antiguedad" id="antiguedad" placeholder="Antigüedad del Inmueble">
                                                </div>
                                             </div>
                                          </div>
                                       </section>
                                    </div>
                                    <div class="col-md-12">
                                       <section class="panel panel-featured panel-featured-primary">
                                          <header class="panel-heading">
                                             <h2 class="panel-title">Características Adicionales</h2>
                                          </header>
                                          <div class="panel-body">
                                             <div class="col-sm-4">
                                                <div class="checkbox-custom checkbox-primary">
                                                   <input type="checkbox"  name="adicional[]" id="adicional[]" value="1">
                                                   <label>Aire Acondicionado</label>
                                                </div>
                                                <div class="checkbox-custom checkbox-primary">
                                                   <input type="checkbox"  name="adicional[]" id="adicional[]" value="2">
                                                   <label>Cocina Empotrada</label>
                                                </div>
                                                <div class="checkbox-custom checkbox-primary">
                                                   <input type="checkbox"  name="adicional[]" id="adicional[]" value="3">
                                                   <label>TV por Cable</label>
                                                </div>
                                                <div class="checkbox-custom checkbox-primary">
                                                   <input type="checkbox"  name="adicional[]" id="adicional[]" value="4">
                                                   <label>Internet</label>
                                                </div>
                                                <div class="checkbox-custom checkbox-primary">
                                                   <input type="checkbox"   name="adicional[]" id="adicional[]" value="5">
                                                   <label>Telefono</label>
                                                </div>
                                             </div>
                                             <div class="col-sm-4">
                                                <div class="checkbox-custom checkbox-primary">
                                                   <input type="checkbox"  name="adicional[]" id="adicional[]" value="6">
                                                   <label>Rejas de Seguridad</label>
                                                </div>
                                                <div class="checkbox-custom checkbox-primary">
                                                   <input type="checkbox"  name="adicional[]" id="adicional[]" value="7">
                                                   <label>Conjunto Cerrado</label>
                                                </div>
                                                <div class="checkbox-custom checkbox-primary">
                                                   <input type="checkbox" name="adicional[]" id="adicional[]" value="8">
                                                   <label>Porton Electrico</label>
                                                </div>
                                                <div class="checkbox-custom checkbox-primary">
                                                   <input type="checkbox"  name="adicional[]" id="adicional[]" value="9">
                                                   <label>Vigilancia Privada</label>
                                                </div>
                                                <div class="checkbox-custom checkbox-primary">
                                                   <input type="checkbox"  name="adicional[]" id="adicional[]" value="10">
                                                   <label>Ascensor</label>
                                                </div>
                                             </div>
                                             <div class="col-sm-4">
                                                <div class="checkbox-custom checkbox-primary">
                                                   <input type="checkbox" name="adicional[]" id="adicional[]" value="11">
                                                   <label>Piscina</label>
                                                </div>
                                                <div class="checkbox-custom checkbox-primary">
                                                   <input type="checkbox"  name="adicional[]" id="adicional[]" value="12">
                                                   <label>Estacionamiento de Visitantes</label>
                                                </div>
                                                <div class="checkbox-custom checkbox-primary">
                                                   <input type="checkbox"  name="adicional[]" id="adicional[]" value="13">
                                                   <label>Maletero</label>
                                                </div>
                                                <div class="checkbox-custom checkbox-primary">
                                                   <input type="checkbox"  name="adicional[]" id="adicional[]" value="14">
                                                   <label>Jardines</label>
                                                </div>
                                                <div class="checkbox-custom checkbox-primary">
                                                   <input type="checkbox" name="adicional[]" id="adicional[]" value="15">
                                                   <label>Parque Infantil</label>
                                                </div>
                                             </div>
                                          </div>
                                       </section>
                                    </div>
                                    <div class="col-md-12">
                                       <section class="panel panel-featured panel-featured-primary">
                                          <header class="panel-heading">
                                             <h2 class="panel-title">Descripción</h2>
                                          </header>
                                          <div class="panel-body">
                                             <div class="form-group">
                                                <div class="col-md-12">
                                                   <textarea class="form-control" rows="5" id="descripcion" name="descripcion" data-plugin-textarea-autosize></textarea>
                                                </div>
                                             </div>
                                          </div>
                                       </section>
                                    </div>
                                 </div>
                                 <!-- Inicio formulario ubicacion-->
                                 <div id="ubicacion" class="tab-pane">
                                    <div class="col-md-12">
                                       <section class="panel panel-featured panel-featured-primary">
                                          <header class="panel-heading">
                                             <h2 class="panel-title">Ubicación</h2>
                                          </header>
                                          <div class="panel-body">
                           <form  name="form_ubicacion" method="GET"action="">
                           <div class="col-md-6">
                           <label class="control-label" style="text-align: left;"><strong>Estado:</strong></label>
                           <select id="estado" name="estado" class="form-control mb-md"  type="submit">
                           <option value="" disabled selected>Estado</option>
                           <?php
                              $consulta = "SELECT id_estado, estado FROM estados";

                                                             $resultado = $conexion->query($consulta);
                                                             while ($fila1= mysqli_fetch_row($resultado)) {
                                                             echo "<option type='submit' value='".$fila1['0']."' ";
                                                             echo ">";
                                                             echo $fila1['1'];
                                                             echo "</option>";
                                                             }
                                                         ?>
                           </select>
                           </div>
                           <div class="col-md-6">
                           <label class="control-label" style="text-align: left;"><strong>Ciudad:</strong></label>
                           <select id="ciudad" name="ciudad" class="form-control mb-md" >
                           <option value="" disabled selected>Ciudad</option>
                           </select>
                           </div>
                           </form>
                           <div class="col-md-6">
                           <label class="control-label" style="text-align: left;"><strong>Urbanización:</strong></label>
                           <input type="text" class="form-control" name="urbanizacion" id="urbanizacion" placeholder="Urbanización">
                           </div>
                           <div class="col-md-6">
                           <label class="control-label" style="text-align: left;"><strong>Dirección:</strong></label>
                           <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Ejm: Avenida, Calle, Vereda">
                           </div>
                           </div>
                           </section>
                           </div>
                           <div class="col-md-12">
                           <section class="panel panel-featured panel-featured-primary">
                           <header class="panel-heading">
                           <h2 class="panel-title">Precio</h2>
                           </header>
                           <div class="panel-body">
                           <div class="col-md-6">
                           <label class="control-label" style="text-align: left;"><strong>Precio:</strong></label>
                           <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio del inmueble">
                           </div>
                           </div>
                           </section>
                           </div>
                           </div>
                           <!-- Inicio formulario foto -->
                           <div id="fotos" class="tab-pane">
                           <div class="col-md-4">
                           <section class="panel panel-featured panel-featured-primary">
                           <header class="panel-heading">
                           <h2 class="panel-title">Foto Principal</h2>
                           </header>
                           <div class="panel-body">
                           <div class="col-md-12">
                           <div class="fileupload fileupload-new" data-provides="fileupload">
                           <div class="item spaced img-responsive" align="center">
                           <img class="img-thumbnail" id="img_destino" src="assets/images/boton/agregar.png" alt="Tu imagen"  width="275">
                           </div>
                           <div class="input-append" align="center" style="padding: 10px 0px 15px 0px;">
                           <span class="btn btn-default btn-file">
                           <span class="fileupload-exists">Cambiar</span>
                           <span class="fileupload-new">Seleccionar Foto</span>
                           <input type="file" name="archivo" id="archivo"/>
                           </span>
                           <a href="#" name="eliminar" id="eliminar" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Eliminar</a>
                           </div>
                           </div>
                           </div>
                           </div>
                           </section>
                           </div>
                           <div class="col-md-8">
                           <section class="panel panel-featured panel-featured-primary">
                           <header class="panel-heading">
                           <h2 class="panel-title">Fotos Adicionales</h2>
                           </header>
                           <div class="panel-body">
                           <div class="col-md-12">
                           <div class="col-md-4">
                           <div class="fileupload fileupload-new" data-provides="fileupload">
                           <div class="item spaced img-responsive" align="center">
                           <img class="img-thumbnail" id="img_destino2" src="assets/images/boton/agregar.png" alt="Tu imagen"  width="120">
                           </div>
                           <div class="input-append" align="center" style="padding: 10px 0px 15px 0px;">
                           <span class="btn btn-default btn-file">
                           <span class="fileupload-exists">Cambiar</span>
                           <span class="fileupload-new">Seleccionar Foto</span>
                           <input type="file" name="archivo2" id="archivo2"/>
                           </span>
                           <a href="#" name="eliminar2" id="eliminar2" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Eliminar</a>
                           </div>
                           </div>
                           </div>
                           <div class="col-md-4">
                           <div class="fileupload fileupload-new" data-provides="fileupload">
                           <div class="item spaced img-responsive" align="center">
                           <img class="img-thumbnail" id="img_destino3" src="assets/images/boton/agregar.png" alt="Tu imagen"  width="120">
                           </div>
                           <div class="input-append" align="center" style="padding: 10px 0px 15px 0px;">
                           <span class="btn btn-default btn-file">
                           <span class="fileupload-exists">Cambiar</span>
                           <span class="fileupload-new">Seleccionar Foto</span>
                           <input type="file" name="archivo3" id="archivo3"/>
                           </span>
                           <a href="#" name="eliminar3" id="eliminar3" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Eliminar</a>
                           </div>
                           </div>
                           </div>
                           <div class="col-md-4">
                           <div class="fileupload fileupload-new" data-provides="fileupload">
                           <div class="item spaced img-responsive" align="center">
                           <img class="img-thumbnail" id="img_destino4" src="assets/images/boton/agregar.png" alt="Tu imagen"  width="120">
                           </div>
                           <div class="input-append" align="center" style="padding: 10px 0px 15px 0px;">
                           <span class="btn btn-default btn-file">
                           <span class="fileupload-exists">Cambiar</span>
                           <span class="fileupload-new">Seleccionar Foto</span>
                           <input type="file" name="archivo4" id="archivo4"/>
                           </span>
                           <a href="#" name="eliminar4" id="eliminar4" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Eliminar</a>
                           </div>
                           </div>
                           </div>
                           </div>
                           <div class="col-md-12">
                           <div class="col-md-4">
                           <div class="fileupload fileupload-new" data-provides="fileupload">
                           <div class="item spaced img-responsive" align="center">
                           <img class="img-thumbnail" id="img_destino5" src="assets/images/boton/agregar.png" alt="Tu imagen"  width="120">
                           </div>
                           <div class="input-append" align="center" style="padding: 10px 0px 15px 0px;">
                           <span class="btn btn-default btn-file">
                           <span class="fileupload-exists">Cambiar</span>
                           <span class="fileupload-new">Seleccionar Foto</span>
                           <input type="file" name="archivo5" id="archivo5"/>
                           </span>
                           <a href="#" name="eliminar5" id="eliminar5" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Eliminar</a>
                           </div>
                           </div>
                           </div>
                           <div class="col-md-4">
                           <div class="fileupload fileupload-new" data-provides="fileupload">
                           <div class="item spaced img-responsive" align="center">
                           <img class="img-thumbnail" id="img_destino6" src="assets/images/boton/agregar.png" alt="Tu imagen"  width="120">
                           </div>
                           <div class="input-append" align="center" style="padding: 10px 0px 15px 0px;">
                           <span class="btn btn-default btn-file">
                           <span class="fileupload-exists">Cambiar</span>
                           <span class="fileupload-new">Seleccionar Foto</span>
                           <input type="file" name="archivo6" id="archivo6"/>
                           </span>
                           <a href="#" name="eliminar6" id="eliminar6" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Eliminar</a>
                           </div>
                           </div>
                           </div>
                           <div class="col-md-4">
                           <div class="fileupload fileupload-new" data-provides="fileupload">
                           <div class="item spaced img-responsive" align="center">
                           <img class="img-thumbnail" id="img_destino7" src="assets/images/boton/agregar.png" alt="Tu imagen"  width="120">
                           </div>
                           <div class="input-append" align="center" style="padding: 10px 0px 15px 0px;">
                           <span class="btn btn-default btn-file">
                           <span class="fileupload-exists">Cambiar</span>
                           <span class="fileupload-new">Seleccionar Foto</span>
                           <input type="file" name="archivo7" id="archivo7"/>
                           </span>
                           <a href="#" name="eliminar7" id="eliminar7" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Eliminar</a>
                           </div>
                           </div>
                           </div>
                           </div>
                           <div class="col-md-12">
                           <div class="col-md-4">
                           <div class="fileupload fileupload-new" data-provides="fileupload">
                           <div class="item spaced img-responsive" align="center">
                           <img class="img-thumbnail" id="img_destino8" src="assets/images/boton/agregar.png" alt="Tu imagen"  width="120">
                           </div>
                           <div class="input-append" align="center" style="padding: 10px 0px 15px 0px;">
                           <span class="btn btn-default btn-file">
                           <span class="fileupload-exists">Cambiar</span>
                           <span class="fileupload-new">Seleccionar Foto</span>
                           <input type="file" name="archivo8" id="archivo8"/>
                           </span>
                           <a href="#" name="eliminar8" id="eliminar8" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Eliminar</a>
                           </div>
                           </div>
                           </div>
                           <div class="col-md-4">
                           <div class="fileupload fileupload-new" data-provides="fileupload">
                           <div class="item spaced img-responsive" align="center">
                           <img class="img-thumbnail" id="img_destino9" src="assets/images/boton/agregar.png" alt="Tu imagen"  width="120">
                           </div>
                           <div class="input-append" align="center" style="padding: 10px 0px 15px 0px;">
                           <span class="btn btn-default btn-file">
                           <span class="fileupload-exists">Cambiar</span>
                           <span class="fileupload-new">Seleccionar Foto</span>
                           <input type="file" name="archivo9" id="archivo9"/>
                           </span>
                           <a href="#" name="eliminar9" id="eliminar9" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Eliminar</a>
                           </div>
                           </div>
                           </div>
                           <div class="col-md-4">
                           <div class="fileupload fileupload-new" data-provides="fileupload">
                           <div class="item spaced img-responsive" align="center">
                           <img class="img-thumbnail" id="img_destino10" src="assets/images/boton/agregar.png" alt="Tu imagen"  width="120">
                           </div>
                           <div class="input-append" align="center" style="padding: 10px 0px 15px 0px;">
                           <span class="btn btn-default btn-file">
                           <span class="fileupload-exists">Cambiar</span>
                           <span class="fileupload-new">Seleccionar Foto</span>
                           <input type="file" name="archivo10" id="archivo10"/>
                           </span>
                           <a href="#" name="eliminar10" id="eliminar10" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Eliminar</a>
                           </div>
                           </div>
                           </div>
                           </div>
                           </div>
                           </section>
                           </div>
                           <!-- inicio fotico -->
                           <input name="boton" value="Finalizar" type="submit" class="btn btn-primary hidden-xs">
                           </div>
                           </div>
                        </div>
                        </form>
                  </div>
                  <div class="panel-footer">
                  <ul class="pager">
                  <li class="previous disabled">
                  <a><i class="fa fa-angle-left"></i> Previous</a>
                  </li>
                  <li class="">
                  </li>
                  <li class="next">
                  <a>Next <i class="fa fa-angle-right"></i></a>
                  </li>
                  </ul>
                  </div>
                  </section>
               </div>
         </div>
         </section>
         </div>
      </section>
      <script>
         function recargar() {
             document.getElementById("modifi_elimina").submit();
         }
      </script>
      <!-- Vendor -->
      <script src="../assets/vendor/jquery/jquery.js"></script>
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
      <script src="../assets/vendor/jquery-validation/jquery.validate.js"></script>
      <script src="../assets/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
      <script src="../assets/vendor/pnotify/pnotify.custom.js"></script>
      <!-- Theme Base, Components and Settings -->
      <script src="../assets/javascripts/theme.js"></script>
      <!-- Theme Custom -->
      <script src="../assets/javascripts/theme.custom.js"></script>
      <!-- Theme Initialization Files -->
      <script src="../assets/javascripts/theme.init.js"></script>
      <!-- Examples -->
      <script src="../assets/javascripts/tables/examples.datatables.editable.js"></script>
      <script src="../assets/javascripts/ui-elements/examples.modals.js"></script>
      <script src="../assets/javascripts/pages/examples.mediagallery.js"></script>
      <script src="../assets/javascripts/forms/examples.wizard.js"></script>



<?php
if (isset($_POST['boton'])){

  if ((($_FILES["archivo"]["type"] == "image/gif") || ($_FILES["archivo"]["type"] == "image/jpeg") || ($_FILES["archivo"]["type"] == "image/pjpeg")) && ($_FILES["archivo"]["size"] < 20000000))
{
  if ($_FILES["archivo"]["error"] > 0)
  {
    echo $_FILES["archivo"]["error"] . "<br />";
  }
  else
  {
    if (file_exists("archivos/" . $_FILES["archivo"]["name"]))
    {
      echo $_FILES["archivo"]["name"] . " ya existe. ";
    }
    else
    {
      $aux = move_uploaded_file($_FILES["archivo"]["tmp_name"], "archivos/" . $_FILES["archivo"]["name"]);
      $Imagen = $_FILES["archivo"]["name"];
    }
  }
}
else
{
  echo "archivo no permitido";
}

//######## Foto Adicional 2 ##################

  if ((($_FILES["archivo2"]["type"] == "image/gif") || ($_FILES["archivo2"]["type"] == "image/jpeg") || ($_FILES["archivo2"]["type"] == "image/pjpeg")) && ($_FILES["archivo2"]["size"] < 20000000))
{
  if ($_FILES["archivo2"]["error"] > 0)
  {
    echo $_FILES["archivo2"]["error"] . "<br />";
  }
  else
  {
    if (file_exists("archivos/" . $_FILES["archivo2"]["name"]))
    {
      echo $_FILES["archivo2"]["name"] . " ya existe. ";
    }
    else
    {
      $aux = move_uploaded_file($_FILES["archivo2"]["tmp_name"], "archivos/" . $_FILES["archivo2"]["name"]);
      $Imagen2 = $_FILES["archivo2"]["name"];
    }
  }
}
else
{
  echo "archivo no permitido";
}

//######## Foto Adicional 3 ##################

  if ((($_FILES["archivo3"]["type"] == "image/gif") || ($_FILES["archivo3"]["type"] == "image/jpeg") || ($_FILES["archivo3"]["type"] == "image/pjpeg")) && ($_FILES["archivo3"]["size"] < 20000000))
{
  if ($_FILES["archivo3"]["error"] > 0)
  {
    echo $_FILES["archivo3"]["error"] . "<br />";
  }
  else
  {
    if (file_exists("archivos/" . $_FILES["archivo3"]["name"]))
    {
      echo $_FILES["archivo3"]["name"] . " ya existe. ";
    }
    else
    {
      $aux = move_uploaded_file($_FILES["archivo3"]["tmp_name"], "archivos/" . $_FILES["archivo3"]["name"]);
      $Imagen3 = $_FILES["archivo3"]["name"];
    }
  }
}
else
{
  echo "archivo no permitido";
}

//######## Foto Adicional 4 ##################

  if ((($_FILES["archivo4"]["type"] == "image/gif") || ($_FILES["archivo4"]["type"] == "image/jpeg") || ($_FILES["archivo4"]["type"] == "image/pjpeg")) && ($_FILES["archivo4"]["size"] < 20000000))
{
  if ($_FILES["archivo4"]["error"] > 0)
  {
    echo $_FILES["archivo4"]["error"] . "<br />";
  }
  else
  {
    if (file_exists("archivos/" . $_FILES["archivo4"]["name"]))
    {
      echo $_FILES["archivo4"]["name"] . " ya existe. ";
    }
    else
    {
      $aux = move_uploaded_file($_FILES["archivo4"]["tmp_name"], "archivos/" . $_FILES["archivo4"]["name"]);
      $Imagen4 = $_FILES["archivo4"]["name"];
    }
  }
}
else
{
  echo "archivo no permitido";
}

//######## Foto Adicional 5 ##################

  if ((($_FILES["archivo5"]["type"] == "image/gif") || ($_FILES["archivo5"]["type"] == "image/jpeg") || ($_FILES["archivo5"]["type"] == "image/pjpeg")) && ($_FILES["archivo5"]["size"] < 20000000))
{
  if ($_FILES["archivo5"]["error"] > 0)
  {
    echo $_FILES["archivo5"]["error"] . "<br />";
  }
  else
  {
    if (file_exists("archivos/" . $_FILES["archivo5"]["name"]))
    {
      echo $_FILES["archivo5"]["name"] . " ya existe. ";
    }
    else
    {
      $aux = move_uploaded_file($_FILES["archivo5"]["tmp_name"], "archivos/" . $_FILES["archivo5"]["name"]);
      $Imagen5 = $_FILES["archivo5"]["name"];
    }
  }
}
else
{
  echo "archivo no permitido";
}

//######## Foto Adicional 6 ##################

  if ((($_FILES["archivo6"]["type"] == "image/gif") || ($_FILES["archivo6"]["type"] == "image/jpeg") || ($_FILES["archivo6"]["type"] == "image/pjpeg")) && ($_FILES["archivo6"]["size"] < 20000000))
{
  if ($_FILES["archivo6"]["error"] > 0)
  {
    echo $_FILES["archivo6"]["error"] . "<br />";
  }
  else
  {
    if (file_exists("archivos/" . $_FILES["archivo6"]["name"]))
    {
      echo $_FILES["archivo6"]["name"] . " ya existe. ";
    }
    else
    {
      $aux = move_uploaded_file($_FILES["archivo6"]["tmp_name"], "archivos/" . $_FILES["archivo6"]["name"]);
      $Imagen6 = $_FILES["archivo6"]["name"];
    }
  }
}
else
{
  echo "archivo no permitido";
}

//######## Foto Adicional 7 ##################

  if ((($_FILES["archivo7"]["type"] == "image/gif") || ($_FILES["archivo7"]["type"] == "image/jpeg") || ($_FILES["archivo7"]["type"] == "image/pjpeg")) && ($_FILES["archivo7"]["size"] < 20000000))
{
  if ($_FILES["archivo7"]["error"] > 0)
  {
    echo $_FILES["archivo7"]["error"] . "<br />";
  }
  else
  {
    if (file_exists("archivos/" . $_FILES["archivo7"]["name"]))
    {
      echo $_FILES["archivo7"]["name"] . " ya existe. ";
    }
    else
    {
      $aux = move_uploaded_file($_FILES["archivo7"]["tmp_name"], "archivos/" . $_FILES["archivo7"]["name"]);
      $Imagen7 = $_FILES["archivo7"]["name"];
    }
  }
}
else
{
  echo "archivo no permitido";
}

//######## Foto Adicional 8 ##################

  if ((($_FILES["archivo8"]["type"] == "image/gif") || ($_FILES["archivo8"]["type"] == "image/jpeg") || ($_FILES["archivo8"]["type"] == "image/pjpeg")) && ($_FILES["archivo8"]["size"] < 20000000))
{
  if ($_FILES["archivo8"]["error"] > 0)
  {
    echo $_FILES["archivo8"]["error"] . "<br />";
  }
  else
  {
    if (file_exists("archivos/" . $_FILES["archivo8"]["name"]))
    {
      echo $_FILES["archivo8"]["name"] . " ya existe. ";
    }
    else
    {
      $aux = move_uploaded_file($_FILES["archivo8"]["tmp_name"], "archivos/" . $_FILES["archivo8"]["name"]);
      $Imagen8 = $_FILES["archivo8"]["name"];
    }
  }
}
else
{
  echo "archivo no permitido";
}

//######## Foto Adicional 9 ##################

  if ((($_FILES["archivo9"]["type"] == "image/gif") || ($_FILES["archivo9"]["type"] == "image/jpeg") || ($_FILES["archivo9"]["type"] == "image/pjpeg")) && ($_FILES["archivo9"]["size"] < 20000000))
{
  if ($_FILES["archivo9"]["error"] > 0)
  {
    echo $_FILES["archivo9"]["error"] . "<br />";
  }
  else
  {
    if (file_exists("archivos/" . $_FILES["archivo9"]["name"]))
    {
      echo $_FILES["archivo9"]["name"] . " ya existe. ";
    }
    else
    {
      $aux = move_uploaded_file($_FILES["archivo9"]["tmp_name"], "archivos/" . $_FILES["archivo9"]["name"]);
      $Imagen9 = $_FILES["archivo9"]["name"];
    }
  }
}
else
{
  echo "archivo no permitido";
}

//######## Foto Adicional 10 ##################

  if ((($_FILES["archivo10"]["type"] == "image/gif") || ($_FILES["archivo10"]["type"] == "image/jpeg") || ($_FILES["archivo10"]["type"] == "image/pjpeg")) && ($_FILES["archivo10"]["size"] < 20000000))
{
  if ($_FILES["archivo10"]["error"] > 0)
  {
    echo $_FILES["archivo10"]["error"] . "<br />";
  }
  else
  {
    if (file_exists("archivos/" . $_FILES["archivo10"]["name"]))
    {
      echo $_FILES["archivo10"]["name"] . " ya existe. ";
    }
    else
    {
      $aux = move_uploaded_file($_FILES["archivo10"]["tmp_name"], "archivos/" . $_FILES["archivo10"]["name"]);
      $Imagen10 = $_FILES["archivo10"]["name"];
    }
  }
}
else
{
  echo "archivo no permitido";
}

//############################ Consulta #######################################################
  $Categoria=$_POST['categoria_tipo'];
                  $Banos=$_POST['banos'];
                  $Banos_serv=$_POST['banos_servicio'];
                  $Habitacion=$_POST['habitaciones'];
                  $Habitacion_serv=$_POST['habitaciones_serv'];
                  $Estacionamiento=$_POST['estacionamiento'];
                  $Metro_cuadrado=$_POST['metro_cuadrado'];
                  $Metro_cuadrado_terreno=$_POST['metro_cuadrado_terreno'];
                  $Antiguedad=$_POST['antiguedad'];
                  $Descripcion=$_POST['descripcion'];
                  $Ubi_Estado=$_POST['estado'];
                  $Ubi_Ciudad=$_POST['ciudad'];
                  $Urbanizacion=$_POST['urbanizacion'];
                  $Direccion=$_POST['direccion'];
                  $Precio=$_POST['precio'];



                  $Aire_acondicionado=0;
                  $Cocina=0;
                  $tv=0;
                  $internet=0;
                  $telefono=0;
                  $rejas_seguridad=0;
                  $conjunto_cerrado=0;
                  $porton_electrico=0;
                  $vigilancia_privada=0;
                  $ascensor=0;
                  $piscina=0;
                  $estacionamiento_visitantes=0;
                  $maletero=0;
                  $jardines=0;
                  $parque_infantil=0;


                 $array_Adicionales=$_POST['adicional'];
                 $num= count($array_Adicionales);
                 for ($i=0; $i <$num ; $i++) {
                      switch ($array_Adicionales[$i]) {
                          case 1:
                              $Aire_acondicionado=1;
                              break;
                          case 2:
                              $Cocina=1;
                              break;
                          case 3:
                              $tv=1;
                              break;
                          case 4:
                              $internet=1;
                              break;
                          case 5:
                              $telefono=1;
                              break;
                          case 6:
                              $rejas_seguridad=1;
                              break;
                          case 7:
                              $conjunto_cerrado=1;
                              break;
                          case 8:
                              $porton_electrico=1;
                              break;
                          case 9:
                              $vigilancia_privada=1;
                              break;
                          case 10:
                              $ascensor=1;
                              break;
                          case 11:
                              $piscina=1;
                              break;
                          case 12:
                              $estacionamiento_visitantes=1;
                              break;
                          case 13:
                              $maletero=1;
                              break;
                          case 14:
                              $jardines=1;
                              break;
                          case 15:
                              $parque_infantil=1;
                              break;

                      }

                 }
                 // $consulta1 = "INSERT INTO inmuebles (categoria, banos, banos_servicio, habitaciones, habitaciones_servicio, estacionamiento, metros_construccion, metros_terreno, antiguedad,ciudades_id_ciudad) VALUES ('$Categoria','$Banos','$Banos_serv','$Habitacion','$Habitacion_serv','$Estacionamiento','$Metro_cuadrado','$Metro_cuadrado_terreno','$Antiguedad','1')";
                 // $consulta1 = "INSERT INTO inmuebles (categoria, banos, banos_servicio, habitaciones, habitaciones_servicio, estacionamiento, metros_construccion, metros_terreno, antiguedad, aire_acondicionado, cocina_empotrada, tv_cable, internet, telefono, rejas_seguridad, conjunto_cerrado, porton_electrico, vigilancia_privada, ascensor, piscina, estacionamiento_visita, maletero, jardines, parque_infantil, descripcion, direccion, urbanizacion, precio, imagen1, imagen2, imagen3, imagen4, imagen5, imagen6, imagen7, imagen8, imagen9, imagen10, ciudades_id_ciudad) VALUES ('venta', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'); ";
                  $consulta1 = "INSERT INTO inmuebles (categoria, banos, banos_servicio, habitaciones, habitaciones_servicio, estacionamiento, metros_construccion, metros_terreno, antiguedad, aire_acondicionado, cocina_empotrada, tv_cable, internet, telefono, rejas_seguridad, conjunto_cerrado, porton_electrico, vigilancia_privada, ascensor, piscina, estacionamiento_visita, maletero, jardines, parque_infantil,descripcion, estado, ciudad, urbanizacion, direccion, precio,imagen1,imagen2, imagen3, imagen4, imagen5, imagen6, imagen7, imagen8, imagen9, imagen10) VALUES ('$Categoria','$Banos','$Banos_serv','$Habitacion','$Habitacion_serv','$Estacionamiento','$Metro_cuadrado','$Metro_cuadrado_terreno','$Antiguedad','$Aire_acondicionado','$Cocina','$tv','$internet','$telefono','$rejas_seguridad','$conjunto_cerrado','$porton_electrico','$vigilancia_privada','$ascensor','$piscina','$estacionamiento_visitantes','$maletero','$jardines','$parque_infantil','$Descripcion','$Ubi_Estado','$Ubi_Ciudad','$Urbanizacion','$Direccion','$Precio','$Imagen','$Imagen2','$Imagen3','$Imagen4','$Imagen5','$Imagen6','$Imagen7','$Imagen8','$Imagen9','$Imagen10'); ";

                 $resultado1 = $conexion->query($consulta1);

}

?>




   </body>
</html>
