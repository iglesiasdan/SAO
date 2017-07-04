<div class="col-md-12">

               <section class="panel panel-featured panel-featured-primary">
                  <header class="panel-heading">
                     <h2 class="panel-title">Agregar Usuario</h2>
                  </header>
                 <ng-form id="Form" name="Form" ng-submit="submit()">
                     <div class="panel-body">
                     <div class="form-group">
                        <div ng-class="{ 'has-error' : Form.Nombre.$invalid && !Form.Nombre.$pristine }" class="col-md-3">
                           <label class="control-label" style="text-align: left;"><strong>*Nombre:</strong></label>
                           <input type="text" class="form-control" name="Nombre" id="Nombre"  placeholder="Nombre" ng-model="data.Nombre" required>
                           <p ng-show="Form.Nombre.$invalid && !Form.Nombre.$pristine" class="help-block">Ingrese Nombre de la Agencia.</p>
                        </div>
                     </div>   
                     <div class="form-group">
                        <div ng-class="{ 'has-error' : Form.Username.$invalid && !Form.Username.$pristine }" class="col-md-3">
                           <label class="control-label" style="text-align: left;"><strong>*Nombre de usuario:</strong></label>
                           <input type="text" class="form-control" name="Username" id="Username"  placeholder="Nombre de usuario" ng-model="data.Username" required>
                           <p ng-show="Form.Username.$invalid && !Form.Username.$pristine" class="help-block">Ingrese Nombre de la Agencia.</p>
                        </div>
                        <div ng-class="{ 'has-error' : Form.Contrasena.$invalid && !Form.Contrasena.$pristine }" class="col-md-3">
                           <label class="control-label" style="text-align: left;"><strong>*Contraseña:</strong></label>
                           <input type="text" class="form-control" name="Contrasena" id="Contrasena" placeholder="Contraseña"  ng-model="data.Contrasena" required>
                           <p ng-show="Form.Contrasena.$invalid && !Form.Contrasena.$pristine" class="help-block">Ingrese Nombre de la Agencia.</p>
                        </div>
                        <div ng-class="{ 'has-error' : Form.Correo.$invalid && !Form.Correo.$pristine }" class="col-md-3">
                           <label class="control-label" style="text-align: left;"><strong>*Correo Electrónico:</strong></label>
                           <input type="email" class="form-control" name="Correo" id="Correo" placeholder="Correo Electrónico"  ng-model="data.Correo" required>
                           <p ng-show="Form.Correo.$invalid && !Form.Correo.$pristine" class="help-block">Ingrese Nombre de la Agencia.</p>
                        </div>
                        <div ng-class="{ 'has-error' : Form.Privilegio.$invalid && !Form.Privilegio.$pristine }" class="col-md-3">
                           <label class="control-label" style="text-align: left;"><strong>*Privilegios:</strong></label>
                           <select id="Privilegio" name="Privilegio" class="form-control mb-md" ng-model="data.Privilegio" required>
                              <option value="" disabled selected>Privilegio</option>
                              <option value='1'>Administrador</option>
                              <option value='2'>Editor</option>
                              <option value='3'>Lector</option>
                           </select>
                           <p ng-show="Form.Privilegio.$invalid && !Form.Privilegio.$pristine" class="help-block">Ingrese Nombre de la Agencia.</p>

                           
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-4">
                           <button id="btn_modificar_usuario" type="submit" ng-disabled="Form.$invalid" class="mb-xs mt-xs mr-xs btn btn-primary btn-block">Agregar Usuarios</button>
                        </div>
                     </div>
                  </div>
                  </ng-form>
                  <p>Los Campos que Poseen '*' Son Requeridos.</p>
               </section>
            </div>
