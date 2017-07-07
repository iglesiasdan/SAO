
            <header class="page-header">
               <h2>Formulario de Verificacion de Agua de Lastre</h2>
            </header>
            <ng-form id="Form" name="Form" >
            <div >
            <div class="col-md-12" id="buque">
               <section class="panel panel-featured panel-featured-primary">
                  <header class="panel-heading">
                     <h2 class="panel-title">Información del Buque </h2>
                  </header>
                  <div class="panel-body">
                     <div class="form-group">
                        <div class="col-md-6">
                           <div class="col-md-12">
                              <label class="control-label" style="text-align: left;"><strong>*Buque:</strong></label>
                              <select id="buque" name="buque" class="form-control mb-md" required ng-value="prueba"  ng-model="selectedBuque" ng-options="post.Nombre_buque for post in posts3 track by post.ID_buque">
                                 <option value="" disabled selected>Seleccionar Buque</option>
                                 <option value='1'>Buque 1</option>
                                 <option value='2'>Buque 2</option>
                                 <option value='3'>Buque 3</option>
                              </select>
                               
                           </div>
                           <div class="col-md-12">
                              <label class="control-label" style="text-align: left;"><strong>*Puerto:</strong></label>
                              <select id="puerto" name="puerto" class="form-control mb-md" required ng-model="selectedPuerto" ng-options="post.Nombre_puerto for post in posts4 track by post.ID_puerto">
                                 <option value="" disabled selected>Seleccionar Puerto</option>
                                 <option value='1'>Puerto 1</option>
                                 <option value='2'>Puerto 2</option>
                                 <option value='3'>Puerto 3</option>
                              </select>
                               
                           </div>
                           <div class="col-md-12">
                              <label class="control-label" style="text-align: left;"><strong>*Agencia:</strong></label>
                              <select id="agencia" name="agencia" class="form-control mb-md" required ng-model="selectedAgencia" ng-options="post.Nombre_agencia for post in posts5 track by post.ID_agencia">
                                 <option value="" disabled selected>Seleccionar Agencia</option>
                                 <option value='1'>Puerto 1</option>
                                 <option value='2'>Puerto 2</option>
                                 <option value='3'>Puerto 3</option>
                              </select>
                               
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="col-md-12 center-block">
                              <img class="img-responsive center-block" src="http://107.180.66.98/node_backend/uploads/{{selecteBuque.Fotos}}" width="275">
                           </div>
                        </div>

                     </div>
                     </br>
                     <div class="form-group">
                        <div ng-class="{ 'has-error' : Form.fecha_arribo.$invalid && !Form.fecha_arribo.$pristine }" class="col-md-4">
                           <label class="control-label" style="text-align: left;"><strong>*Fecha de Arribo:</strong></label>
                           <input type="date" class="form-control" name="fecha_arribo" id="fecha_arribo" ng-model="posts1.Fecha" required>
                           <p ng-show="Form.fecha_arribo.$invalid && !Form.fecha_arribo.$pristine" class="help-block">Ingrese Fecha de Arribo.</p>
                        </div>
                        <div ng-class="{ 'has-error' : Form.calado_proa.$invalid && !Form.calado_proa.$pristine }" class="col-md-4">
                           <label class="control-label" style="text-align: left;"><strong>*Calado de Proa:</strong></label>
                           <input type="number" class="form-control" name="calado_proa" id="calado_proa" placeholder="Calado de Proa" ng-model="posts1.Calado_proa" required>
                            <p ng-show="Form.calado_proa.$invalid && !Form.calado_proa.$pristine" class="help-block">Ingrese Calado de Proa.</p>
                        </div>
                        <div ng-class="{ 'has-error' : Form.calado_popa.$invalid && !Form.calado_popa.$pristine }" class="col-md-4">
                           <label class="control-label" style="text-align: left;"><strong>*Calado de Popa:</strong></label>
                           <input type="number" class="form-control" name="calado_popa" id="calado_popa" placeholder="Calado de Popa" ng-model="posts1.Calado_popa" required>
                           <p ng-show="Form.calado_popa.$invalid && !Form.calado_popa.$pristine" class="help-block">Ingrese Calado de Popa.</p>
                        </div>
                        <div ng-class="{ 'has-error' : Form.diferencia_calado.$invalid && !Form.diferencia_calado.$pristine }"  class="col-md-4">
                           <label class="control-label" style="text-align: left;"><strong>*Diferencia de Calado:</strong></label>
                           <input type="number" class="form-control" name="diferencia_calado" id="diferencia_calado" placeholder="Diferencia de Calado" ng-model="posts1.Diferencias_calado" required>
                           <p ng-show="Form.diferencia_calado.$invalid && !Form.diferencia_calado.$pristine" class="help-block">Ingrese la Diferencia de Calado.</p>
                        </div>
                        <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Volumen total Deslastrado:</strong></label>
                              <input type="number" class="form-control" name="vol_total" id="vol_total" placeholder="Volumen total de tanque" ng-model="posts1.Volumen_total">
                        </div>
                  </div>
                  </div>
               </section>
            </div>
            <div class="col-md-12">
                                       <section class="panel panel-featured panel-featured-primary">
                                          <header class="panel-heading">
                                             <h2 class="panel-title">Observaciones</h2>
                                          </header>
                                          <div class="panel-body">
                                             <div class="form-group">
                                                <div class="col-md-12">
                                                   <textarea class="form-control" rows="5" id="observaciones" ng-model="posts1.Observaciones" name="observaciones" data-plugin-textarea-autosize></textarea>
                                                </div>
                                             </div>
                                             <div class="form-group">
                                                <div class="col-md-4 pull-right">
                                                   <button id="estudiocompleto" ng-click="submit2()" ng-disabled="Form.$invalid" class="mb-xs mt-xs mr-xs btn btn-primary btn-block"><span>Guardar Arribo</span></button>
                                                </div>
                                             </div>
                                          </div>
                                       </section>
                                    </div>
                  </div>
</ng-form>
<p>Los Campos que Poseen '*' Son Requeridos.</p>

    