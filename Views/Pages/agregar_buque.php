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
                                           <input type="file" name="imgUploader" multiple />
                                           <input type="submit" name="submit" id="btnSubmit" value="Upload" />
                                       </form>

                                     <form ng-submit="submit()" id="frmUploader" enctype="multipart/form-data" action="http://107.180.66.98:90:3000/api/Upload/" method="post">


                        <div class="form-group">
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Nombre del Buque:</strong></label>
                              <input type="text" class="form-control" name="nombre_buque" id="nombre_buque" placeholder="Nombre del Buque" ng-model="post.nombre_buque">
                           </div>
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Numero IMO:</strong></label>
                              <input type="text" class="form-control" name="numero_imo" id="numero_imo" placeholder="Numero IMO" ng-model="post.Numero_imo">
                           </div>
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Abanderamiento:</strong></label>
                              <input type="text" class="form-control" name="abanderamiento" id="abanderamiento" placeholder="Pais de Procedencia" ng-model="post.abanderamiento">
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Eslora:</strong></label>
                              <input type="text" class="form-control" name="eslora" id="eslora" placeholder="Eslora" ng-model="post.eslora">
                           </div>
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Manga:</strong></label>
                              <input type="text" class="form-control" name="manga" id="manga" placeholder="Manga" ng-model="post.manga">
                           </div>
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Puntal:</strong></label>
                              <input type="text" class="form-control" name="puntal" id="puntal" placeholder="Puntal" ng-model="post.puntal">
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Nro. Tanques a Babor:</strong></label>
                              <input type="text" class="form-control" name="n_tanques_babor" id="n_tanques_babor" placeholder="Nro. Tanques a Babor" ng-model="post.n_tanques_babor">
                           </div>
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Nro. Tanques a Estribor:</strong></label>
                              <input type="text" class="form-control" name="n_tanques_estribor" id="n_tanques_estribor" placeholder="Nro. Tanques a Estribor" ng-model="post.n_tanques_estribor">
                           </div>
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Nro. tanques doble Fondo:</strong></label>
                              <input type="text" class="form-control" name="n_tanques_db" id="n_tanques_db" placeholder="Nro. tanques doble Fondo" ng-model="post.n_tanques_db">
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Nro. Total de Tanques:</strong></label>
                              <input type="text" class="form-control" name="total_tanques" id="total_tanques" placeholder="Nro. Total de Tanques" ng-model="post.total_tanques">
                           </div>
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Capcidad total de Tanques:</strong></label>
                              <input type="text" class="form-control" name="capacidad_tanques" id="capacidad_tanques" placeholder="Capcidad total de Tanques" ng-model="post.capacidad_tanques">
                           </div>
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Volumen total de tanque:</strong></label>
                              <input type="text" class="form-control" name="vol_total" id="vol_total" placeholder="Volumen total de tanque" ng-model="post.vol_total">
                           </div>
                        </div>

                        <div class="form-group">
                           <div class="col-md-4">
                              <input class="mb-xs mt-xs mr-xs btn btn-primary" type="submit" value="Agregar Buque">
                           </div>
                        </div>
                        <!-- http://107.180.66.98:90:3001/upload -->

                  </form>
                  </div>
               </section>
            </div>
