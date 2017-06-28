
<section class="panel panel-featured panel-featured-primary">
   <header class="panel-heading">
      <h2 class="panel-title">Consulta de Estudios</h2>
   </header>
   <div class="panel-body">
      <div class="form-group">
         <div class="col-md-12">
            <section class="panel panel-featured panel-featured-primary">
               <header class="panel-heading">
                  <h2 class="panel-title">Frecuencia de Estudio</h2>
               </header>
               <div class="panel-body">
                  <div class="form-group">
                     <div class="form-group">
                        <div class="col-sm-4">
                           <div class="checkbox">
                              <div class="radio">
                                 <label>
                                 <input type="radio" name="optionsRadios" id="optionsRadios1" value="2">
                                 Todos los Puerto
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-8">
                           <select id="categoria_tipo" name="categoria_tipo" class="form-control mb-md" ng-model="selectedPuerto" ng-options="post.Nombre_puerto for post in posts track by post.ID_puerto" required>
                              <option value="" disabled selected>Selecionar Puerto</option>
                              <option value='1'>Puerto 1</option>
                              <option value='2'>Puerto 2</option>
                              <option value='3 Vacacional'>Puerto 3</option>
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
                                 Todos los Barco
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-8">
                           <select id="categoria_tipo" name="categoria_tipo" class="form-control mb-md" required>
                              <option value="" disabled selected>Selecionar Barco</option>
                              <option value='1'>Barco 1</option>
                              <option value='2'>Barco 2</option>
                              <option value='3'>Barco 3</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="form-group">
                        <div class="form-group">
                           <div class="col-sm-4">
                              <div class="checkbox">
                                 <label>
                                 <input type="checkbox" value="">Rango de fecha
                                 </label>
                              </div>
                           </div>
                           <div class="col-sm-8">
                              <div class="input-daterange input-group" data-plugin-datepicker>
                                 <span class="input-group-addon">
                                 <i class="fa fa-calendar"></i>
                                 </span>
                                 <input type="text" class="form-control" name="start">
                                 <span class="input-group-addon">a</span>
                                 <input type="text" class="form-control" name="end">
                              </div>
                           </div>
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
         <div class="col-md-12">
            <button id="btn_consultar" type="submit" class="mb-xs mt-xs mr-xs btn btn-primary btn-block">Consultar</button>
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
                  <h2 class="panel-title">Salinidad</h2>
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
                  <h2 class="panel-title">Temperatura</h2>
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
                  <h2 class="panel-title">Conductividad</h2>
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
