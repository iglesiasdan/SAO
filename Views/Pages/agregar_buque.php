<script>
    $(document).ready(function () {
        var options = {
            beforeSubmit: showRequest,  // pre-submit callback
            success: showResponse  // post-submit callback
        };

        // bind to the form's submit event
        $('#frmUploader').submit(function () {
            $(this).ajaxSubmit(options);
            // always return false to prevent standard browser submit and page navigation
            return false;
        });
    });

    // pre-submit callback
    function showRequest(formData, jqForm, options) {
        alert('Uploading is starting.');
        return true;
    }

    // post-submit callback
    function showResponse(responseText, statusText, xhr, $form) {
        alert('status: ' + statusText + '\n\nresponseText: \n' + responseText );
    }
</script>



<div class="col-md-12">

               <section class="panel panel-featured panel-featured-primary">
                  <header class="panel-heading">
                     <h2 class="panel-title">Agregar Buque</h2>
                  </header>
                   <div class="panel-body">

                    <!-- <div class="form-group" ng-controller = "myCtrl">
                      <div class="col-md-6">
                        <input id="upload-input" type="file" name="uploads[]" multiple="multiple"></br>


                      </div>
                      <div class="col-md-6">
                    <button class="mb-xs mt-xs mr-xs btn btn-primary" id="upload">upload me</button>
                  </div>
                    </div>
                    <div class="progress">
                      <span id = "status"></span>
                    </div> -->
                    <div class="panel-body">
                                       <form id="frmUploader" enctype="multipart/form-data" action="http://107.180.66.98:90:3000/api/Upload/" method="post">
                                           <input type="file" name="imgUploader" multiple ng-model="post.foto"/>
                                           <input type="submit" name="submit" id="btnSubmit" value="Upload" />
                                       </form>

                    <form id="Form" name="Form" ng-submit="submit()">

                        <div class="form-group">
                           <div ng-class="{ 'has-error' : Form.nombre_buque.$invalid && !Form.nombre_buque.$pristine }" class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>*Nombre del Buque:</strong></label>
                              <input type="text" class="form-control" name="nombre_buque" id="nombre_buque" placeholder="Nombre del Buque" ng-model="post.nombre_buque" required>
                              <p ng-show="Form.nombre_buque.$invalid && !Form.nombre_buque.$pristine" class="help-block">Ingrese Nombre del Buque.</p>
                           </div>
                           <div ng-class="{ 'has-error' : Form.numero_imo.$invalid && !Form.numero_imo.$pristine }" class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>*Numero IMO:</strong></label>
                              <input type="text" class="form-control" name="numero_imo" id="numero_imo" placeholder="Numero IMO" ng-model="post.Numero_imo" required>
                              <p ng-show="Form.numero_imo.$invalid && !Form.numero_imo.$pristine" class="help-block">Ingrese Numero IMO del Buque.</p>
                           </div>
                           <div ng-class="{ 'has-error' : Form.abanderamiento.$invalid && !Form.abanderamiento.$pristine }" class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>*Abanderamiento:</strong></label>
                              <input type="text" class="form-control" name="abanderamiento" id="abanderamiento" placeholder="Pais de Procedencia" ng-model="post.abanderamiento" required>
                              <p ng-show="Form.abanderamiento.$invalid && !Form.abanderamiento.$pristine" class="help-block">Ingrese Abanderamiento del Buque.</p>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Eslora:</strong></label>
                              <input type="number" class="form-control" name="eslora" id="eslora" placeholder="Eslora" ng-model="post.eslora">
                           </div>
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Manga:</strong></label>
                              <input type="number" class="form-control" name="manga" id="manga" placeholder="Manga" ng-model="post.manga">
                           </div>
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Puntal:</strong></label>
                              <input type="number" class="form-control" name="puntal" id="puntal" placeholder="Puntal" ng-model="post.puntal">
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Nro. Tanques a Babor:</strong></label>
                              <input type="number" class="form-control" name="n_tanques_babor" id="n_tanques_babor" placeholder="Nro. Tanques a Babor" ng-model="post.n_tanques_babor">
                           </div>
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Nro. Tanques a Estribor:</strong></label>
                              <input type="number" class="form-control" name="n_tanques_estribor" id="n_tanques_estribor" placeholder="Nro. Tanques a Estribor" ng-model="post.n_tanques_estribor">
                           </div>
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Nro. tanques doble Fondo:</strong></label>
                              <input type="number" class="form-control" name="n_tanques_db" id="n_tanques_db" placeholder="Nro. tanques doble Fondo" ng-model="post.n_tanques_db">
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Nro. Total de Tanques:</strong></label>
                              <input type="number" class="form-control" name="total_tanques" id="total_tanques" placeholder="Nro. Total de Tanques" ng-model="post.total_tanques">
                           </div>
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Capcidad total de Tanques:</strong></label>
                              <input type="number" class="form-control" name="capacidad_tanques" id="capacidad_tanques" placeholder="Capcidad total de Tanques" ng-model="post.capacidad_tanques">
                           </div>
                        </div>

                        <div class="form-group">
                           <div class="col-md-4">
                              <input class="mb-xs mt-xs mr-xs btn btn-primary" ng-click="submit()" ng-disabled="Form.$invalid" type="submit" value="Agregar Buque">
                           </div>
                        </div>
                        <!-- http://107.180.66.98:90:3001/upload -->

                  </form>
                  </form>
                  <p>Los Campos que Poseen '*' Son Requeridos.</p>
                  </div>
               </section>
            </div>
