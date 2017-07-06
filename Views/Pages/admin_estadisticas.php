<!--<script language="Javascript">
   function imprSelec(nombre) {
     var ficha = document.getElementById(nombre);
     var ventimp = window.open(' ', 'popimpr');
     ventimp.document.write( ficha.innerHTML );
     ventimp.document.close();
     ventimp.print( );
     ventimp.close();
   }
   </script>-->


<section class="panel panel-featured panel-featured-primary">
   <header class="panel-heading">
      <h2 class="panel-title">Consulta de Estudios</h2>
   </header>
   <div class="panel-body">
      <div class="form-group">
         <div class="col-md-12">
            <section class="panel panel-featured panel-featured-primary ">
               <header class="panel-heading">
                  <h2 class="panel-title">Frecuencia de Estudio</h2>
               </header>
               <div class="panel-body">
                  <div class="form-group">
                     <div class="form-group">
                        <div class="col-sm-4 ">
                           <div class="checkbox">
                              <div class="radio">
                                 <label>
                                 <input type="radio" name="optionsRadios" id="optionsRadios1" value="2">
                                 Todos los Puertos
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-8 fecha_puerto">
                           <div class="col-sm-8" style="padding:8px;">
                              <div class="input-daterange input-group" data-plugin-datepicker>
                                 <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                 <input id="f1p" name="f1p"type="date" class="form-control " required >
                                 <span class="input-group-addon">a</span>
                                 <input id="f2p" name="f2p" type="date" class="form-control" required >
                              </div>
                           </div>
                              
                           
                           
                        </div>
                        <div class="col-sm-4">
                              <button id="btn_consultar_puerto" type="submit" class="mb-xs mt-xs mr-xs btn btn-primary btn-block">Consultar</button>
                           </div>
                        <div class="col-sm-8">
                           <select id="puerto" name="puerto" class="form-control mb-md bloquear" ng-model="selectedPuerto" ng-options="post.Nombre_puerto for post in posts track by post.ID_puerto" required>
                              <option value="" disabled selected>Selecionar Puerto</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="form-group">
                        <div class="col-sm-4">
                           <div class="checkbox">
                              <div class="radio">
                                 <label>
                                 <input type="radio" name="optionsRadios" id="optionsRadios2" value="2">
                                 Todos los Buques
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-8 fecha_buque">
                           <div class="col-sm-8" style="padding:8px;">
                              <div class="input-daterange input-group" data-plugin-datepicker>
                                 <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                 <input id="f1b" name="f1b"type="date" class="form-control " required >
                                 <span class="input-group-addon">a</span>
                                 <input id="f2b" name="f2b" type="date" class="form-control" required >
                              </div>
                           </div>
                              
                           
                        </div>
                        <div class="col-sm-4">
                              <button id="btn_consultar_buque" type="submit" class="mb-xs mt-xs mr-xs btn btn-primary btn-block">Consultar</button>
                           </div>
                        <div class="col-sm-8 bloquear" >
                           <select id="buque" name="buque" class="form-control mb-md bloquear" required ng-model="selectedBuque" ng-options="post.Nombre_buque for post in posts1 track by post.ID_buque">
                              <option value="" disabled selected>Selecionar Buque</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="form-group">
                        <div class="col-sm-4">
                           <div class="checkbox">
                              <div class="radio">
                                 <label>
                                 <input type="radio" name="optionsRadios" id="optionsRadios3" value="2">
                                  Estudio Detallado
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-8 bloquear">
                           <div class="col-sm-8 form-group " style="padding: 8px  0px  0px  0px">
                              <div class="fecha_detalle">
                                 <div class="input-daterange input-group" data-plugin-datepicker>
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input id="f1d" name="f1d"type="date" class="form-control " required >
                                    <span class="input-group-addon">a</span>
                                    <input id="f2d" name="f2d" type="date" class="form-control" required >
                                 </div>
                              </div>
                           </div>
                            
                        </div>
                        <div class="col-sm-4 bloquear">
                              <button id="btn_consultar_detalle" type="submit" class="mb-xs mt-xs mr-xs btn btn-primary btn-block">Consultar</button>
                           </div>
                     </div>
                  </div>
                  
               </div>
            </section>
         </div>
         <!-- <div class="col-md-4">
            <section class="panel panel-featured panel-featured-primary">
               <header class="panel-heading">
                  <h2 class="panel-title">Caracteristicas</h2>
               </header>
               <div class="panel-body">
                  <div class="form-group">
                     <div class="checkbox">
            <label>
            <input type="checkbox" value="">Salinidad
            </label>
            </div>
            <div class="checkbox">
            <label>
            <input type="checkbox" value="">Temperatura
            </label>
            </div>
            <div class="checkbox">
            <label>
            <input type="checkbox" value="">Conductividad
            </label>
            </div>
            <div class="checkbox">
            <label>
            <input type="checkbox" value="">PH
            </label>
            </div>
            <div class="checkbox">
            <label>
            <input type="checkbox" value="">Riesgo Biológico
            </label>
            </div>
            <div class="checkbox">
            <label>
            <input type="checkbox" value="">M<sup>3</sup> Deslatrados
            </label>
            </div>

                  </div>
               </div>
            </section>
            </div> -->
      </div>
      <div class="form-group">
         <div class="col-md-4 pull-right">
            <button id="btn_reiniciar" type="submit" class="mb-xs mt-xs mr-xs btn btn-primary btn-block">Reiniciar</button>
         </div>
      </div>
   </div>
</section>
<section id="graficas" class="panel panel-featured panel-featured-primary">
   <header class="panel-heading">
      <h2 class="panel-title">Graficas de Estudios</h2>
   </header>
   <div class="panel-body">
      <div class="form-group">
         <div class="col-md-12">
            <section class="panel panel-featured panel-featured-primary">
               <header class="panel-heading">
                  <h2 class="panel-title">Salinidad (PPt)</h2>
                  
                 <!--<div class="panel-actions" >
                     <button id="btn_save" type="submit"  class="mb-xs mt-xs mr-xs btn btn-primary btn-block save"><i class="fa fa-download"></i></button>
                  </div>-->
               </header>
            </section>
            <div class="col-md-2"></div>
            <div class="col-md-8" id="grafico_salinidad">
               <canvas id="base_salinidad" class="chart-horizontal-bar"
                  chart-data="datas_salinidad" chart-labels="labels" chart-options="opt_salinidad" chart-colors="colors" >
               </canvas>
            </div>
            <div class="col-md-2"></div>
         </div>
      </div>
   </div>
   <div class="panel-body">
      <div class="form-group">
         <div class="col-md-12">
            <section class="panel panel-featured panel-featured-primary">
               <header class="panel-heading">
                  <h2 class="panel-title">Temperatura (°C)</h2>
               </header>
            </section>
            <div class="col-md-2"></div>
            <div class="col-md-8">
               <canvas id="base" class="chart-horizontal-bar"
                  chart-data="datas_temperatura" chart-labels="labels" chart-options="opt_temperatura" chart-colors="colors" >
               </canvas>
            </div>
            <div class="col-md-2"></div>
         </div>
      </div>
   </div>
   <div class="panel-body">
      <div class="form-group">
         <div class="col-md-12">
            <section class="panel panel-featured panel-featured-primary">
               <header class="panel-heading">
                  <h2 class="panel-title">PH</h2>
               </header>
            </section>
            <div class="col-md-2"></div>
            <div class="col-md-8">
               <canvas id="base" class="chart-horizontal-bar"
                  chart-data="datas_ph" chart-labels="labels" chart-options="opt_ph" chart-colors="colors" >
               </canvas>
            </div>
            <div class="col-md-2"></div>
         </div>
      </div>
   </div>
   <div class="panel-body">
      <div class="form-group">
         <div class="col-md-12">
            <section class="panel panel-featured panel-featured-primary">
               <header class="panel-heading">
                  <h2 class="panel-title">Conductividad (µS)</h2>
               </header>
            </section>
            <div class="col-md-2"></div>
            <div class="col-md-8">
               <canvas id="base" class="chart-horizontal-bar"
                  chart-data="datas_conductividad" chart-labels="labels" chart-options="opt_conductividad" chart-colors="colors" >
               </canvas>
            </div>
            <div class="col-md-2"></div>
         </div>
      </div>
   </div>
   <div class="panel-body">
      <div class="form-group">
         <div class="col-md-12">
            <section class="panel panel-featured panel-featured-primary">
               <header class="panel-heading">
                  <h2 class="panel-title">Volumen Total Deslastrado (M<sup>3</sup>)</h2>
                  
                 <!--<div class="panel-actions" >
                     <button id="btn_save" type="submit"  class="mb-xs mt-xs mr-xs btn btn-primary btn-block save"><i class="fa fa-download"></i></button>
                  </div>-->
               </header>
            </section>
            <div class="col-md-2"></div>
            <div class="col-md-8" >
               <canvas id="base_voltotal" class="chart-horizontal-bar"
                  chart-data="datas_voltotal" chart-labels="labels"  chart-colors="colors" >
               </canvas>
            </div>
            <div class="col-md-2"></div>
         </div>
      </div>
   </div>
</section>
<section id="graficas2" class="panel panel-featured panel-featured-primary">
   <header class="panel-heading">
      <h2 class="panel-title">Graficas de Estudios</h2>
   </header>
   <div class="panel-body">
      <div class="form-group">
         <div class="col-md-12">
            <section class="panel panel-featured panel-featured-primary">
               <header class="panel-heading">
                  <h2 class="panel-title">Salinidad (PPt)</h2>
               </header>
            </section>
            <div class="col-md-2"></div>
            <div class="col-md-8">
               <canvas id="base" class="chart-horizontal-bar"
                  chart-data="datas_salinidad" chart-labels="labels" chart-options="opt_salinidad" chart-colors="colors" >
               </canvas>
            </div>
            <div class="col-md-2"></div>
         </div>
      </div>
   </div>
   <div class="panel-body">
      <div class="form-group">
         <div class="col-md-12">
            <section class="panel panel-featured panel-featured-primary">
               <header class="panel-heading">
                  <h2 class="panel-title">Temperatura (°C)</h2>
               </header>
            </section>
            <div class="col-md-2"></div>
            <div class="col-md-8">
               <canvas id="base" class="chart-horizontal-bar"
                  chart-data="datas_temperatura" chart-labels="labels" chart-options="opt_temperatura" chart-colors="colors" >
               </canvas>
            </div>
            <div class="col-md-2"></div>
         </div>
      </div>
   </div>
   <div class="panel-body">
      <div class="form-group">
         <div class="col-md-12">
            <section class="panel panel-featured panel-featured-primary">
               <header class="panel-heading">
                  <h2 class="panel-title">PH</h2>
               </header>
            </section>
            <div class="col-md-2"></div>
            <div class="col-md-8">
               <canvas id="base" class="chart-horizontal-bar"
                  chart-data="datas_ph" chart-labels="labels" chart-options="opt_ph" chart-colors="colors" >
               </canvas>
            </div>
            <div class="col-md-2"></div>
         </div>
      </div>
   </div>
   <div class="panel-body">
      <div class="form-group">
         <div class="col-md-12">
            <section class="panel panel-featured panel-featured-primary">
               <header class="panel-heading">
                  <h2 class="panel-title">Conductividad (µS)</h2>
               </header>
            </section>
            <div class="col-md-2"></div>
            <div class="col-md-8">
               <canvas id="base" class="chart-horizontal-bar"
                  chart-data="datas_conductividad" chart-labels="labels" chart-options="opt_conductividad" chart-colors="colors" >
               </canvas>
            </div>
            <div class="col-md-2"></div>
         </div>
      </div>
   </div>
   <div class="panel-body">
      <div class="form-group">
         <div class="col-md-12">
            <section class="panel panel-featured panel-featured-primary">
               <header class="panel-heading">
                  <h2 class="panel-title">Volumen Total Deslastrado (M<sup>3</sup>)</h2>
                  
                 <!--<div class="panel-actions" >
                     <button id="btn_save" type="submit"  class="mb-xs mt-xs mr-xs btn btn-primary btn-block save"><i class="fa fa-download"></i></button>
                  </div>-->
               </header>
            </section>
            <div class="col-md-2"></div>
            <div class="col-md-8" >
               <canvas id="base_voltotal" class="chart-horizontal-bar"
                  chart-data="datas_voltotal" chart-labels="labels"  chart-colors="colors" >
               </canvas>
            </div>
            <div class="col-md-2"></div>
         </div>
      </div>
   </div>
</section>
<section id="graficas3" class="panel panel-featured panel-featured-primary">
   <header class="panel-heading">
      <h2 class="panel-title">Graficas de Estudios</h2>
   </header>
   <div class="panel-body">
      <div class="form-group">
         <div class="col-md-12">
            <section class="panel panel-featured panel-featured-primary">
               <header class="panel-heading">
                  <h2 class="panel-title">Salinidad (PPt)</h2>
               </header>
            </section>
            <div class="col-md-2"></div>
            <div class="col-md-8">
               <canvas id="base" class="chart-horizontal-bar"
                  chart-data="datas_salinidad" chart-labels="labels" chart-options="opt_salinidad" chart-colors="colors" >
               </canvas>
            </div>
            <div class="col-md-2"></div>
         </div>
      </div>
   </div>
   <div class="panel-body">
      <div class="form-group">
         <div class="col-md-12">
            <section class="panel panel-featured panel-featured-primary">
               <header class="panel-heading">
                  <h2 class="panel-title">Temperatura (°C)</h2>
               </header>
            </section>
            <div class="col-md-2"></div>
            <div class="col-md-8">
               <canvas id="base" class="chart-horizontal-bar"
                  chart-data="datas_temperatura" chart-labels="labels" chart-options="opt_temperatura" chart-colors="colors" >
               </canvas>
            </div>
            <div class="col-md-2"></div>
         </div>
      </div>
   </div>
   <div class="panel-body">
      <div class="form-group">
         <div class="col-md-12">
            <section class="panel panel-featured panel-featured-primary">
               <header class="panel-heading">
                  <h2 class="panel-title">PH</h2>
               </header>
            </section>
            <div class="col-md-2"></div>
            <div class="col-md-8">
               <canvas id="base" class="chart-horizontal-bar"
                  chart-data="datas_ph" chart-labels="labels" chart-options="opt_ph" chart-colors="colors" >
               </canvas>
            </div>
            <div class="col-md-2"></div>
         </div>
      </div>
   </div>
   <div class="panel-body">
      <div class="form-group">
         <div class="col-md-12">
            <section class="panel panel-featured panel-featured-primary">
               <header class="panel-heading">
                  <h2 class="panel-title">Conductividad (µS)</h2>
               </header>
            </section>
            <div class="col-md-2"></div>
            <div class="col-md-8">
               <canvas id="base" class="chart-horizontal-bar"
                  chart-data="datas_conductividad" chart-labels="labels" chart-options="opt_conductividad" chart-colors="colors" >
               </canvas>
            </div>
            <div class="col-md-2"></div>
         </div>
      </div>
   </div>
   <div class="panel-body">
      <div class="form-group">
         <div class="col-md-12">
            <section class="panel panel-featured panel-featured-primary">
               <header class="panel-heading">
                  <h2 class="panel-title">Volumen Total Deslastrado (M<sup>3</sup>)</h2>
                  
                 <!--<div class="panel-actions" >
                     <button id="btn_save" type="submit"  class="mb-xs mt-xs mr-xs btn btn-primary btn-block save"><i class="fa fa-download"></i></button>
                  </div>-->
               </header>
            </section>
            <div class="col-md-2"></div>
            <div class="col-md-8" >
               <canvas id="base_voltotal" class="chart-horizontal-bar"
                  chart-data="datas_voltotal" chart-labels="labels"  chart-colors="colors" >
               </canvas>
            </div>
            <div class="col-md-2"></div>
         </div>
      </div>
   </div>
</section>
<!--<div class="panel-body">
   <div class="form-group">
       <div class="col-md-12">
         <section class="panel panel-featured panel-featured-primary">
            <header class="panel-heading">
               <h2 class="panel-title">M<sup>3</sup> Deslatrados</h2>
            </header>
          </section>
        <div class="col-md-2"></div>
            <div class="col-md-8">
              <canvas id="base" class="chart-horizontal-bar"
   chart-data="datas_mtsdeslastrados" chart-labels="labels" chart-options="opt_mtsdeslastrados" chart-colors="colors" >
   </canvas>
            </div>
            <div class="col-md-2"></div>
    </div>
   </div>
   </div> -->
<!--<div class="panel-body">
   <div class="form-group">
       <div class="col-md-12">
         <section class="panel panel-featured panel-featured-primary">
            <header class="panel-heading">
               <h2 class="panel-title">Riesgo Biológico</h2>
            </header>
          </section>
        <div class="col-md-12"></div>
    </div>
   </div>
   </div>-->
