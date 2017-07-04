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
                     <h2 class="panel-title">Modificar Puerto</h2>
                  </header>
                  <ng-form id="Form" name="Form" ng-submit="submit()">
                     <div class="panel-body">
                     <div class="form-group">
                        <div ng-class="{ 'has-error' : Form.nombre_puerto.$invalid && !Form.nombre_puerto.$pristine }" class="col-md-4">
                           <label class="control-label" style="text-align: left;"><strong>Nombre del Puerto:</strong></label>
                           <input type="text" class="form-control" name="nombre_puerto" id="nombre_puerto"  placeholder="Nombre del Puerto" ng-model="posts.Nombre_puerto" required>
                           <p ng-show="Form.nombre_puerto.$invalid && !Form.nombre_puerto.$pristine" class="help-block">Ingrese Nombre del Puerto.</p>
                        </div>
                        <div class="col-md-4">
                           <label class="control-label" style="text-align: left;"><strong>Ciudad:</strong></label>
                           <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Ciudad"  ng-model="posts.Ciudad">
                        </div>
                        <div class="col-md-4">
                           <label class="control-label" style="text-align: left;"><strong>Estado:</strong></label>
                           <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado"  ng-model="posts.Estado">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-4">
                           <label class="control-label" style="text-align: left;"><strong>Direccion:</strong></label>
                           <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion"  ng-model="posts.Direccion">
                        </div>
                     </div>
                      <div class="form-group">
                        <div class="col-md-12">
                           <label class="control-label" style="text-align: left;"><strong>Observaciones:</strong></label>
                           <textarea class="form-control" rows="5" id="observaciones_puerto" name="observaciones_puerto" data-plugin-textarea-autosize ng-model="posts.Descripcion"></textarea>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-4">
                           <button id="btn_modificar_puerto" ng-disabled="Form.$invalid" type="submit" class="mb-xs mt-xs mr-xs btn btn-primary btn-block boton">Modificar Agencia</button>
                        </div>
                     </div>
                  </div>
                  </ng-form>
               </section>
            </div>
