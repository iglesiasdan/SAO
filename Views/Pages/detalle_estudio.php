    <script type="text/javascript">
        $(document).ready(function(){
            
            var permiso = $('.permiso').text();


            switch (permiso) {
          case '2':
              $('.eliminar').hide();
              break;
          case '3':
              $('.boton').hide();
              $('.eliminar').hide();
              break;
      
      }
           
         
    });
	</script>
            
			<header class="page-header">
               <h2>Formulario de Verificacion de Agua de Lastre</h2>
            </header>
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
                              <label class="control-label" style="text-align: left;"><strong>Buque:</strong></label>
                              <select id="buque" name="buque" class="form-control mb-md" required ng-value="prueba"  ng-model="selectedBuque" ng-options="post.Nombre_buque for post in posts3 track by post.ID_buque">
                                 <option value="" disabled selected>Seleccionar Buque</option>
                                 <option value='1'>Buque 1</option>
                                 <option value='2'>Buque 2</option>
                                 <option value='3'>Buque 3</option>
                              </select>
                           </div>
                           <div class="col-md-12">
                              <label class="control-label" style="text-align: left;"><strong>Puerto:</strong></label>
                              <select id="puerto" name="puerto" class="form-control mb-md" required ng-model="selectedPuerto" ng-options="post.Nombre_puerto for post in posts4 track by post.ID_puerto">
                                 <option value="" disabled selected>Seleccionar Puerto</option>
                                 <option value='1'>Puerto 1</option>
                                 <option value='2'>Puerto 2</option>
                                 <option value='3'>Puerto 3</option>
                              </select>
                           </div>
                           <div class="col-md-12">
                              <label class="control-label" style="text-align: left;"><strong>Agencia:</strong></label>
                              <select id="agencia" name="agencia" class="form-control mb-md" required ng-model="selectedAgencia" ng-options="post.Nombre_agencia for post in posts5 track by post.ID_agencia">
                                 <option value="" disabled selected>Seleccionar Agencia</option>
                                 <option value='1'>Agencia 1</option>
                                 <option value='2'>Agencia 2</option>
                                 <option value='3'>Agencia 3</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="col-md-12 center-block">
                              <img class="img-responsive center-block" src="../assets/images/projects/project.jpg" width="275">
                           </div>
                        </div>

                     </div>
                     </br>
                     <div class="form-group">
                        <div class="col-md-6">
                           <label class="control-label" style="text-align: left;"><strong>Fecha de Arribo:</strong></label>
                           <input type="date" class="form-control" name="fecha_arribo" id="fecha_arribo" ng-model="posts1.Fecha">
                        </div>
                        <div class="col-md-6">
                           <label class="control-label" style="text-align: left;"><strong>Calado de Proa:</strong></label>
                           <input type="text" class="form-control" name="calado_proa" id="calado_proa" placeholder="Calado de Proa" ng-model="posts1.Calado_proa">
                        </div>
                        <div class="col-md-6">
                           <label class="control-label" style="text-align: left;"><strong>Calado de Popa:</strong></label>
                           <input type="text" class="form-control" name="calado_popa" id="calado_popa" placeholder="Calado de Popa" ng-model="posts1.Calado_popa">
                        </div>
                        <div class="col-md-6">
                           <label class="control-label" style="text-align: left;"><strong>Diferencia de Calado:</strong></label>
                           <input type="text" class="form-control" name="diferencia_calado" id="diferencia_calado" placeholder="Diferencia de Calado" ng-model="posts1.Diferencias_calado">
                        </div>
                        <div class="col-md-6">
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
                     <h2 class="panel-title">Información Tanques de Lastres del Buque</h2>
                  </header>
                  <div class="panel-body">
                     <div class="form-group">
                        <div class="col-sm-4">
                           <label class="control-label" style="text-align: left;"><strong>Cantidad de Tanques:</strong></label>
                           <input disabled type="text" class="form-control" name="Cantidad_tanque" id="Cantidad_tanque" placeholder="Cantidad total de tanques" ng-model="selectedBuque.Total_tanques">
                        </div>
                        <div class="col-md-4">
                           <label class="control-label" style="text-align: left;"><strong>Num. Tanques Babor:</strong></label>
                           <input disabled type="text" class="form-control" name="num_tan_babor" id="num_tan_babor" placeholder="Num. Tanques a Babor" value={{selectedBuque.N_tanques_babor}}>
                        </div>
                        <div class="col-md-4">
                           <label class="control-label" style="text-align: left;"><strong>Num. Tanques Estribor:</strong></label>
                           <input disabled type="text" class="form-control" name="num_tan_estribor" id="num_tan_estribor" placeholder="Num. Tanques a Estribor" value={{selectedBuque.N_tanques_estribor}}>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-4">
                           <label class="control-label" style="text-align: left;"><strong>Num. Tanques Doble Fondo:</strong></label>
                           <input disabled type="text" class="form-control" name="num_tan_doble_fondo" id="num_tan_doble_fondo" placeholder="Num. Tanques Doble Fondo" value={{selectedBuque.N_tanques_db}}>
                        </div>
                        <div class="col-md-4">
                           <label class="control-label" style="text-align: left;"><strong>Capacidad Tanques:</strong></label>
                           <input disabled type="text" class="form-control" name="cap_tanques" id="cap_tanques" placeholder="Capacidad total de Tanques" value={{selectedBuque.Capacidad_tanques}}>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <div id="tanquesito" class="col-md-12">
               <section class="panel panel-featured panel-featured-primary">
                  <header class="panel-heading">
                     <h2 class="panel-title">Tanques con agua de lastre</h2>
                  </header>
                     <div class="panel-body">
                        <div class="form-group">
                            <div class="col-md-4">
                              <section class="panel panel-featured panel-featured-primary">
                                 <header class="panel-heading">
                                    <h2 class="panel-title">Selecionar Tanque</h2>
                                 </header>
                                 <div class="panel-body">
                                    <div class="form-group">
                                      <div class="form-group">
                                       <div class="col-sm-12">
                                          <select id="categoria_tipo" name="categoria_tipo" class="form-control mb-md" required required   ng-model="selectedtanque" ng-options="post.N_tanque for post in posts2 track by post.ID_estudio">
                                             <option value="">Crear Tanque</option>
                                          </select>
                                       </div>
                                    </div>
                                    </div>
                                 </div>
                              </section>
                        </div>
                        <div class="col-md-8">
                           <section class="panel panel-featured panel-featured-primary">
                              <header class="panel-heading">
                                 <h2 class="panel-title">Detalles del Tanque</h2>
                              </header>
                              
                                <div class="panel-body">
                                   <ng-form id="Form" name="Form" >
                                    <div class="form-group">
                                        <div ng-class="{ 'has-error' : Form.cod_tanque.$invalid && !Form.cod_tanque.$pristine }" class="col-sm-6">
                                        <label class="control-label" style="text-align: left;"><strong>*Cod. Tanque:</strong></label>
                                        <input type="text" class="form-control" name="cod_tanque" id="cod_tanque" placeholder="Codigo del Tanque" ng-model="selectedtanque.N_tanque" required>
                                        <p ng-show="Form.cod_tanque.$invalid && !Form.cod_tanque.$pristine" class="help-block">Ingrese Codigo del Tanque.</p>
                                        </div>
                                    
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                        <label class="control-label" style="text-align: left;"><strong>Volumen:</strong></label>
                                        <input type="number" class="form-control" name="detalle_volumen" id="detalle_volumen" placeholder="Volumen del tanques" ng-model="selectedtanque.Volumen" >
                                        </div>
                                    <div class="col-sm-6">
                                        <label class="control-label" style="text-align: left;"><strong>Riesgo (Low o High):</strong></label>
                                        <input type="text" class="form-control" name="detalle_actividad" id="detalle_actividad" placeholder="Actividad del tanques" ng-model="selectedtanque.Actividad" >
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                        <label class="control-label" style="text-align: left;"><strong>Salinidad:</strong></label>
                                        <input min="5" max="20" type="number" class="form-control" name="detalle_salinidad" id="detalle_salinidad" placeholder="Salinidad del tanques" ng-model="selectedtanque.Salinidad" >
                                        <p ng-show="Form.detalle_salinidad.$error.min" class="help-block">Valor de Salinidad muy Bajo.</p>
                                        <p ng-show="Form.detalle_salinidad.$error.max" class="help-block">Valor de Salinidad muy Alto.</p>
                                        </div>
                                    <div class="col-sm-6">
                                        <label class="control-label" style="text-align: left;"><strong>Temperatura (�C):</strong></label>
                                        <input min="26" max="32" type="number" class="form-control" name="detalle_temperatura" id="detalle_temperatura" placeholder="Temperatura del tanques" ng-model="selectedtanque.Temperatura" >
                                        <p ng-show="Form.detalle_temperatura.$error.min" class="help-block">Valor de Temperatura muy Bajo.</p>
                                        <p ng-show="Form.detalle_temperatura.$error.max" class="help-block">Valor de Temperatura muy Alto.</p>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                        <label class="control-label" style="text-align: left;"><strong>Conductividad (�S):</strong></label>
                                        <input min="20" max="40" type="number" class="form-control" name="detalle_conductividad" id="detalle_conductividad" placeholder="Conductividad del tanques" ng-model="selectedtanque.Conductividad">
                                        <p ng-show="Form.detalle_conductividad.$error.min" class="help-block">Valor de Conductividad muy Bajo.</p>
                                        <p ng-show="Form.detalle_conductividad.$error.max" class="help-block">Valor de Conductividad muy Alto.</p>
                                        </div>
                                    <div class="col-sm-6">
                                        <label class="control-label" style="text-align: left;"><strong>PH:</strong></label>
                                        <input min="6" max="9" type="number" class="form-control" name="detalle_ph" id="detalle_ph" placeholder="PH del tanques" ng-model="selectedtanque.Ph" >
                                        <p ng-show="Form.detalle_ph.$error.min" class="help-block">Valor de PH muy Bajo.</p>
                                        <p ng-show="Form.detalle_ph.$error.max" class="help-block">Valor de PH muy Alto.</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                        <button id="btn_agregar_tanque" ng-disabled="Form.$invalid" ng-click="submit()" type="submit" class="mb-xs mt-xs mr-xs btn btn-primary btn-block boton"><span>{{selectedtanque.ID_usuario ? 'Modificar Tanque' : 'Guardar Tanque'}}</span></button>
                                        </div>
                                    </div>
                                </ng-form>
                                <p>Los Campos que Poseen '*' Son Requeridos.</p>
                              </div>
                           </section>
                        </div>
                     </div>
                  </div>
                </section>
            </div>
            <div class="col-md-12">
               <section class="panel panel-featured panel-featured-primary">
                  <header class="panel-heading">
                     <h2 class="panel-title">Caracteristicas Fisico-Quimicas Promedio</h2>
                  </header>
                     <div class="panel-body">
                       <div class="panel-body">
                                    <div class="form-group">
                                      <div class="form-group">
                                          <div class="col-sm-4">
                                             <label class="control-label" style="text-align: left;"><strong>Riesgo (Low o High):</strong></label>
                                             <input disabled type="text" class="form-control" name="promedio_actividad" id="promedio_actividad" placeholder="Actividad" value={{prom.acti}}>
                                          </div>
                                          <div class="col-sm-4">
                                             <label class="control-label" style="text-align: left;"><strong>Salinidad (PPM):</strong></label>
                                             <input disabled type="text" class="form-control" name="promedio_salinidad" id="promedio_salinidad" placeholder="Salinidad" value={{prom.sal}}>
                                          </div>
                                       <div class="form-group">
                                          <div class="col-sm-4">
                                             <label class="control-label" style="text-align: left;"><strong>Temperatura (�C):</strong></label>
                                             <input disabled type="text" class="form-control" name="promedio_temperatura" id="promedio_temperatura" placeholder="Temperatura" value={{prom.tem}}>
                                          </div>
                                          <div class="col-sm-4">
                                             <label class="control-label" style="text-align: left;"><strong>Conductividad (�S):</strong></label>
                                             <input disabled type="text" class="form-control" name="promedio_conductividad" id="promedio_conductividad" placeholder="Conductividad" value={{prom.con}}>
                                          </div>
                                          <div class="col-sm-4">
                                             <label class="control-label" style="text-align: left;"><strong>PH:</strong></label>
                                             <input disabled type="text" class="form-control" name="promedio_ph" id="promedio_ph" placeholder="PH" value={{prom.ph}}>
                                          </div>
                                       </div>
                                    </div>
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
                                                   <button id="estudiocompleto" ng-click="submit2()" class="mb-xs mt-xs mr-xs btn btn-primary btn-block boton"><span>{{selectedBuque.ID_buque ? 'Modificar Arribo' : 'Guardar Arribo'}}</span></button>
                                                </div>
                                             </div>
                                          </div>
                                       </section>
                                    </div>
                  </div>
