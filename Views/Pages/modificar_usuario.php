<div class="col-md-12">
               <section class="panel panel-featured panel-featured-primary">
                  <header class="panel-heading">
                     <h2 class="panel-title">Modificar Usuario</h2>
                  </header>
                  <form ng-submit="submit()">
                     <div class="panel-body">
                     <div class="form-group">
                        <div class="col-md-3">
                           <label class="control-label" style="text-align: left;"><strong>Nombre de usuario:</strong></label>
                           <input type="text" class="form-control" name="Username" id="Username"  placeholder="Nombre de usuario" ng-model="posts.Username">
                        </div>
                        <div class="col-md-3">
                           <label class="control-label" style="text-align: left;"><strong>Contraseña:</strong></label>
                           <input type="text" class="form-control" name="Contrasena" id="Contrasena" placeholder="Contraseña"  ng-model="posts.Contrasena">
                        </div>
                        <div class="col-md-3">
                           <label class="control-label" style="text-align: left;"><strong>Correo Electrónico:</strong></label>
                           <input type="text" class="form-control" name="Correo" id="Correo" placeholder="Correo Electrónico"  ng-model="posts.Correo">
                        </div>
                        <div class="col-md-3">
                           <label class="control-label" style="text-align: left;"><strong>Privilegios:</strong></label>
                           <select id="Privilegio" name="Privilegio" class="form-control mb-md" ng-model="posts.Privilegio">
                              <option value="" disabled selected>Privilegio</option>
                              <option value='1'>Administrador</option>
                              <option value='2'>Editor</option>
                              <option value='3'>Lector</option>
                           </select>


                           
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-4">
                           <button id="btn_modificar_usuario" type="submit" class="mb-xs mt-xs mr-xs btn btn-primary btn-block">Modificar Usuarios</button>
                        </div>
                     </div>
                  </div>
                  </form>
               </section>
            </div>
