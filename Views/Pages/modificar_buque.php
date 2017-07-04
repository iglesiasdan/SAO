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
                              <label class="control-label" style="text-align: left;"><strong>Nombre del Buque:</strong></label>
                              <input type="text" class="form-control" name="nombre_buque" id="nombre_buque" placeholder="Nombre del Buque" ng-model="post.nombre_buque" required>
                              <p ng-show="Form.nombre_buque.$invalid && !Form.nombre_buque.$pristine" class="help-block">Ingrese Nombre del Buque.</p>
                           </div>
                           <div ng-class="{ 'has-error' : Form.numero_imo.$invalid && !Form.numero_imo.$pristine }" class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Numero IMO:</strong></label>
                              <input type="text" class="form-control" name="numero_imo" id="numero_imo" placeholder="Numero IMO" ng-model="post.Numero_imo" required>
                              <p ng-show="Form.numero_imo.$invalid && !Form.numero_imo.$pristine" class="help-block">Ingrese Numero IMO del Buque.</p>
                           </div>
                           <div ng-class="{ 'has-error' : Form.abanderamiento.$invalid && !Form.abanderamiento.$pristine }" class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Abanderamiento:</strong></label>
                              <input type="text" class="form-control" name="abanderamiento" id="abanderamiento" placeholder="Pais de Procedencia" ng-model="post.abanderamiento" required>
                              <p ng-show="Form.abanderamiento.$invalid && !Form.abanderamiento.$pristine" class="help-block">Ingrese Abanderamiento del Buque.</p>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Eslora:</strong></label>
                              <input type="text" class="form-control" name="eslora" id="eslora" placeholder="Eslora" ng-model="data.Eslora">
                           </div>
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Manga:</strong></label>
                              <input type="text" class="form-control" name="manga" id="manga" placeholder="Manga" ng-model="data.Manga">
                           </div>
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Puntal:</strong></label>
                              <input type="text" class="form-control" name="puntal" id="puntal" placeholder="Puntal" ng-model="data.Puntal">
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Nro. Tanques a Babor:</strong></label>
                              <input type="text" class="form-control" name="n_tanques_babor" id="n_tanques_babor" placeholder="Nro. Tanques a Babor" ng-model="data.N_tanques_babor">
                           </div>
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Nro. Tanques a Estribor:</strong></label>
                              <input type="text" class="form-control" name="n_tanques_estribor" id="n_tanques_estribor" placeholder="Nro. Tanques a Estribor" ng-model="data.N_tanques_estribor">
                           </div>
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Nro. tanques doble Fondo:</strong></label>
                              <input type="text" class="form-control" name="n_tanques_db" id="n_tanques_db" placeholder="Nro. tanques doble Fondo" ng-model="data.N_tanques_db">
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Nro. Total de Tanques:</strong></label>
                              <input type="text" class="form-control" name="total_tanques" id="total_tanques" placeholder="Nro. Total de Tanques" ng-model="data.Total_tanques">
                           </div>
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Capcidad total de Tanques:</strong></label>
                              <input type="text" class="form-control" name="capacidad_tanques" id="capacidad_tanques" placeholder="Capcidad total de Tanques" ng-model="data.Capacidad_tanques">
                           </div>
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Volumen total de tanque:</strong></label>
                              <input type="text" class="form-control" name="vol_total" id="vol_total" placeholder="Volumen total de tanque" ng-model="data.Vol_total">
                           </div>
                        </div>
                         <div class="form-group">
                           <div class="col-md-8">
                                    <label class="control-label" style="text-align: left;"><strong>Foto del Buque:</strong></label>
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                       <div class="input-append">
                                          <div class="uneditable-input">
                                             <i class="fa fa-file fileupload-exists"></i>
                                             <span class="fileupload-preview"></span>
                                          </div>
                                          <span class="btn btn-default btn-file">
                                          <span class="fileupload-exists">Cambiar</span>
                                          <span class="fileupload-new">Seleccionar Archivo</span>
                                          <input type="file" name="fotos" id="fotos" ng-model="data.Fotos"/> 
                                          </span>
                                          <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Eliminar</a>
                                       </div>
                                    </div>
                                 </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-4">
                              <input class="mb-xs mt-xs mr-xs btn btn-primary boton" type="submit" value="Modificar Buque">
                           </div>
                        </div>
                     </div>
                  </ng-form>
               </section>
            </div>
