<section role="main" class="content-body">
            <header class="page-header">
               <h2>Formulario de Verificacion de Agua de Lastre</h2>
            </header>
            <div class="col-md-12" id="buque">
               <section class="panel panel-featured panel-featured-primary">
                  <header class="panel-heading">
                     <h2 class="panel-title">Información del Buque </h2>
                  </header>
                  <div class="panel-body">
                     <div class="form-group">
                        <div class="col-md-6">
                           <label class="control-label" style="text-align: left;"><strong>Buque:</strong></label>
                           <select id="buque" name="buque" class="form-control mb-md" required>
                              <option value="" disabled selected>Seleccionar Buque</option>
                              <option value='1'>Buque 1</option>
                              <option value='2'>Buque 2</option>
                              <option value='3'>Buque 3</option>
                           </select>
                           <div style="text-align: center">
                              <button id="nuevo_buque" name="nuevo_buque" type="submit" class="mb-xs mt-xs mr-xs btn btn-primary nuevo_buque"><i class="fa fa-ship"></i> Agregar un buque nuevo</button>
                           </div>
                           
                        </div>
                        <div class="col-md-6 center-block">
                           <img class="img-responsive center-block" src="assets/images/projects/project.jpg" width="275">
                        </div>
                     </div>
                     </br>
                     <div class="form-group">
                        <div class="col-md-4">
                           <label class="control-label" style="text-align: left;"><strong>Puerto:</strong></label>
                           <input type="text" class="form-control" name="puerto" id="puerto" placeholder="Puerto actual del Buque">
                        </div>
                        <div class="col-md-4">
                           <label class="control-label" style="text-align: left;"><strong>Fecha de Arribo:</strong></label>
                           <input type="date" class="form-control" name="fecha_arribo" id="fecha_arribo">
                        </div>
                        <div class="col-md-4">
                           <label class="control-label" style="text-align: left;"><strong>Agencia:</strong></label>
                           <input type="text" class="form-control" name="agencia" id="agencia" placeholder="Agencia del Buque">
                        </div>
                        <div class="col-md-4">
                           <label class="control-label" style="text-align: left;"><strong>Calado de Proa:</strong></label>
                           <input type="text" class="form-control" name="calado_proa" id="calado_proa" placeholder="Calado de Proa">
                        </div>
                        <div class="col-md-4">
                           <label class="control-label" style="text-align: left;"><strong>Calado de Popa:</strong></label>
                           <input type="text" class="form-control" name="calado_popa" id="calado_popa" placeholder="Calado de Popa">
                        </div>
                        <div class="col-md-4">
                           <label class="control-label" style="text-align: left;"><strong>Diferencia de Calado:</strong></label>
                           <input type="text" class="form-control" name="diferencia_calado" id="diferencia_calado" placeholder="Diferencia de Calado">
                        </div>
                                               

                  </div>
                  </div>
               </section>
            </div>
            <div class="col-md-12" id="agregar_buque">
               <section class="panel panel-featured panel-featured-primary">
                  <header class="panel-heading">
                     <h2 class="panel-title">Información del Buque </h2>
                  </header>
                  <div class="panel-body">
                     <div class="form-group">
                        <div class="col-md-4">
                           <label class="control-label" style="text-align: left;"><strong>Nombre del Buque:</strong></label>
                           <input type="text" class="form-control" name="nombe_buque" id="nombe_buque" placeholder="Nombre del Buque">
                        </div>
                        <div class="col-md-4">
                           <label class="control-label" style="text-align: left;"><strong>Número IMO:</strong></label>
                           <input type="text" class="form-control" name="numero_imo" id="numero_imo" placeholder="Número IMO del Buque">
                        </div>
                        <div class="col-md-4">
                           <label class="control-label" style="text-align: left;"><strong>Abanderamiento:</strong></label>
                           <input type="text" class="form-control" name="abanderamiento" id="abanderamiento" placeholder="Abanderamiento del Buque">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-4">
                           <label class="control-label" style="text-align: left;"><strong>Eslora:</strong></label>
                           <input type="text" class="form-control" name="eslora" id="eslora" placeholder="Eslora del Buque">
                        </div>
                        <div class="col-md-4">
                           <label class="control-label" style="text-align: left;"><strong>Manga:</strong></label>
                           <input type="text" class="form-control" name="manga" id="manga" placeholder="Manga del Buque">
                        </div>
                        <div class="col-md-4">
                           <label class="control-label" style="text-align: left;"><strong>Puntal:</strong></label>
                           <input type="text" class="form-control" name="puntal" id="puntal" placeholder="Puntal del Buque">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-4">
                           <button id="btn_agregar_buque" type="submit" class="mb-xs mt-xs mr-xs btn btn-primary">Agregar Buque</button>
                        </div>
                     </div>   
               </section>
            </div>
            <div class="col-md-12">
               <section class="panel panel-featured panel-featured-primary">
                  <header class="panel-heading">
                     <h2 class="panel-title">Información Tanques de Lates del Buque</h2>
                  </header>
                  <div class="panel-body">
                     <div class="form-group">
                        <div class="col-sm-4">
                           <label class="control-label" style="text-align: left;"><strong>Cantidad de Tanques:</strong></label>
                           <input type="text" class="form-control" name="Cantidad_tanque" id="Cantidad_tanque" placeholder="Cantidad total de tanques">
                        </div>
                        <div class="col-md-4">
                           <label class="control-label" style="text-align: left;"><strong>Num. Tanques Babor:</strong></label>
                           <input type="text" class="form-control" name="num_tan_babor" id="num_tan_babor" placeholder="Num. Tanques a Babor">
                        </div>
                        <div class="col-md-4">
                           <label class="control-label" style="text-align: left;"><strong>Num. Tanques Estribor:</strong></label>
                           <input type="text" class="form-control" name="num_tan_estribor" id="num_tan_estribor" placeholder="Num. Tanques a Estribor">
                        </div>
                     </div>   
                     <div class="form-group">   
                        <div class="col-md-4">
                           <label class="control-label" style="text-align: left;"><strong>Num. Tanques Doble Fondo:</strong></label>
                           <input type="text" class="form-control" name="num_tan_doble_fondo" id="num_tan_doble_fondo" placeholder="Num. Tanques Doble Fondo">
                        </div>
                        <div class="col-md-4">
                           <label class="control-label" style="text-align: left;"><strong>Capacidad Tanques:</strong></label>
                           <input type="text" class="form-control" name="cap_tanques" id="cap_tanques" placeholder="Capacidad total de Tanques">
                        </div>
                        <div class="col-md-4">
                           <label class="control-label" style="text-align: left;"><strong>Volumen Tanques:</strong></label>
                           <input type="text" class="form-control" name="cap_tanques" id="cap_tanques" placeholder="Volumen Total Tanques">
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <div class="col-md-12">
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
                                          <select id="categoria_tipo" name="categoria_tipo" class="form-control mb-md" required>
                                             <option value="" disabled selected>Selecionar Tanque</option>
                                             <option value='1'>Tanque 1</option>
                                             <option value='2'>Tanque 2</option>
                                             <option value='3 Vacacional'>Tanque 3</option>
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
                                 <div class="form-group">
                                    <div class="col-sm-6">
                                       <label class="control-label" style="text-align: left;"><strong>Cod. Tanque:</strong></label>
                                       <input type="text" class="form-control" name="cod_tanque" id="cod_tanque" placeholder="Codigo del Tanque">
                                    </div>                                       
                                   <div class="col-sm-6">
                                       <label class="control-label" style="text-align: left;"><strong>Capacidad:</strong></label>
                                       <input type="text" class="form-control" name="detalle_capacidad" id="detalle_capacidad" placeholder="Capacidad del tanques">
                                    </div>
                                    
                                 </div>
                                 <div class="form-group">
                                    <div class="col-sm-6">
                                       <label class="control-label" style="text-align: left;"><strong>Volumen:</strong></label>
                                       <input type="text" class="form-control" name="detalle_volumen" id="detalle_volumen" placeholder="Volumen del tanques">
                                    </div>
                                   <div class="col-sm-6">
                                       <label class="control-label" style="text-align: left;"><strong>Actividad:</strong></label>
                                       <input type="text" class="form-control" name="detalle_actividad" id="detalle_actividad" placeholder="Actividad del tanques">
                                    </div>
                                    
                                 </div>
                                 <div class="form-group">
                                    <div class="col-sm-6">
                                       <label class="control-label" style="text-align: left;"><strong>Salinidad:</strong></label>
                                       <input type="text" class="form-control" name="detalle_salinidad" id="detalle_salinidad" placeholder="Salinidad del tanques">
                                    </div>
                                   <div class="col-sm-6">
                                       <label class="control-label" style="text-align: left;"><strong>Temperatura (°C):</strong></label>
                                       <input type="text" class="form-control" name="detalle_temperatura" id="detalle_temperatura" placeholder="Temperatura del tanques">
                                    </div>
                                    
                                 </div>
                                 <div class="form-group">
                                    <div class="col-sm-6">
                                       <label class="control-label" style="text-align: left;"><strong>Conductividad (μS):</strong></label>
                                       <input type="text" class="form-control" name="detalle_conductividad" id="detalle_conductividad" placeholder="Conductividad del tanques">
                                    </div>
                                   <div class="col-sm-6">
                                       <label class="control-label" style="text-align: left;"><strong>PH:</strong></label>
                                       <input type="text" class="form-control" name="detalle_ph" id="detalle_ph" placeholder="PH del tanques">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <div class="col-md-12">
                                       <button id="btn_agregar_tanque" type="submit" class="mb-xs mt-xs mr-xs btn btn-primary btn-block">Agregar Tanque</button>
                                    </div>
                                 </div>
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
                                             <label class="control-label" style="text-align: left;"><strong>Zona (1 o 2):</strong></label>
                                             <input type="text" class="form-control" name="promedio_zona" id="promedio_zona" placeholder="Zona">
                                          </div>
                                          <div class="col-sm-4">
                                             <label class="control-label" style="text-align: left;"><strong>Actividad (Low o High):</strong></label>
                                             <input type="text" class="form-control" name="promedio_actividad" id="promedio_actividad" placeholder="Actividad">
                                          </div>
                                          <div class="col-sm-4">
                                             <label class="control-label" style="text-align: left;"><strong>Salinidad (PPM):</strong></label>
                                             <input type="text" class="form-control" name="promedio_salinidad" id="promedio_salinidad" placeholder="Salinidad">
                                          </div>
                                       <div class="form-group">   
                                          <div class="col-sm-4">
                                             <label class="control-label" style="text-align: left;"><strong>Temperatura (°C):</strong></label>
                                             <input type="text" class="form-control" name="promedio_temperatura" id="promedio_temperatura" placeholder="Temperatura">
                                          </div>
                                          <div class="col-sm-4">
                                             <label class="control-label" style="text-align: left;"><strong>Conductividad (μS):</strong></label>
                                             <input type="text" class="form-control" name="promedio_conductividad" id="promedio_conductividad" placeholder="Conductividad">
                                          </div>
                                          <div class="col-sm-4">
                                             <label class="control-label" style="text-align: left;"><strong>PH:</strong></label>
                                             <input type="text" class="form-control" name="promedio_ph" id="promedio_ph" placeholder="PH">
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
                                                   <textarea class="form-control" rows="5" id="observaciones" name="observaciones" data-plugin-textarea-autosize></textarea>
                                                </div>
                                             </div>
                                          </div>
                                       </section>
                                    </div>
                  </div>
         </section>