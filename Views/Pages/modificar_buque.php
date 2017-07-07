    <script type="text/javascript">
        $(document).ready(function(){
            
            var permiso = $('.permiso').text();


            switch (permiso) {
          case '3':
              $('.boton').hide();
              break;
      
      }
           
         
    });
	</script>

<div class="col-md-12">

               <section class="panel panel-featured panel-featured-primary">
                  <header class="panel-heading">
                     <h2 class="panel-title">Modificar Buque</h2>
                  </header>
                  <ng-form id="Form" name="Form" ng-submit="submit()">

                        <div class="form-group">
                           <div ng-class="{ 'has-error' : Form.nombre_buque.$invalid && !Form.nombre_buque.$pristine }" class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>*Nombre del Buque:</strong></label>
                              <input type="text" class="form-control" name="nombre_buque" id="nombre_buque" placeholder="Nombre del Buque" ng-model="data.Nombre_buque" required>
                              <p ng-show="Form.nombre_buque.$invalid && !Form.nombre_buque.$pristine" class="help-block">Ingrese Nombre del Buque.</p>
                           </div>
                           <div ng-class="{ 'has-error' : Form.numero_imo.$invalid && !Form.numero_imo.$pristine }" class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>*Numero IMO:</strong></label>
                              <input type="text" class="form-control" name="numero_imo" id="numero_imo" placeholder="Numero IMO" ng-model="data.Numero_imo" required>
                              <p ng-show="Form.numero_imo.$invalid && !Form.numero_imo.$pristine" class="help-block">Ingrese Numero IMO del Buque.</p>
                           </div>
                           <div ng-class="{ 'has-error' : Form.abanderamiento.$invalid && !Form.abanderamiento.$pristine }" class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>*Abanderamiento:</strong></label>
                              <input type="text" class="form-control" name="abanderamiento" id="abanderamiento" placeholder="Pais de Procedencia" ng-model="data.Abanderamiento" required>
                              <p ng-show="Form.abanderamiento.$invalid && !Form.abanderamiento.$pristine" class="help-block">Ingrese Abanderamiento del Buque.</p>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Eslora:</strong></label>
                              <input type="number" class="form-control" name="eslora" id="eslora" placeholder="Eslora" ng-model="data.Eslora">
                           </div>
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Manga:</strong></label>
                              <input type="number" class="form-control" name="manga" id="manga" placeholder="Manga" ng-model="data.Manga">
                           </div>
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Puntal:</strong></label>
                              <input type="number" class="form-control" name="puntal" id="puntal" placeholder="Puntal" ng-model="data.Puntal">
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Nro. Tanques a Babor:</strong></label>
                              <input type="number" class="form-control" name="n_tanques_babor" id="n_tanques_babor" placeholder="Nro. Tanques a Babor" ng-model="data.N_tanques_babor">
                           </div>
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Nro. Tanques a Estribor:</strong></label>
                              <input type="number" class="form-control" name="n_tanques_estribor" id="n_tanques_estribor" placeholder="Nro. Tanques a Estribor" ng-model="data.N_tanques_estribor">
                           </div>
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Nro. tanques doble Fondo:</strong></label>
                              <input type="number" class="form-control" name="n_tanques_db" id="n_tanques_db" placeholder="Nro. tanques doble Fondo" ng-model="data.N_tanques_db">
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Nro. Total de Tanques:</strong></label>
                              <input type="number" class="form-control" name="total_tanques" id="total_tanques" placeholder="Nro. Total de Tanques" ng-model="data.Total_tanques">
                           </div>
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Capcidad total de Tanques:</strong></label>
                              <input type="number" class="form-control" name="capacidad_tanques" id="capacidad_tanques" placeholder="Capcidad total de Tanques" ng-model="data.Capacidad_tanques">
                           </div>
                        </div>
                         <div class="form-group">
                            <div class="col-md-6">
                           <div class="col-md-12 center-block">
                              <img class="img-responsive center-block" src="http://107.180.66.98/node_backend/uploads/{{selectedBuque.Fotos}}" width="275">
                           </div>
                        </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-4">
                              <input class="mb-xs mt-xs mr-xs btn btn-primary boton" ng-click="submit()" type="submit" value="Modificar Buque">
                           </div>
                        </div>
                     </div>
                  </ng-form>
                  <p>Los Campos que Poseen '*' Son Requeridos.</p>
               </section>
            </div>
