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
                     <h2 class="panel-title">Modificar Agencia</h2>
                  </header>
                  <form ng-submit="submit()">
                     <div class="panel-body">
                        <div class="form-group">
                           <div class="col-md-4">
                              <label class="control-label" style="text-align: left;"><strong>Nombre de Agencia:</strong></label>
                              <input type="text" class="form-control" name="nombre_agencia" id="nombre_agencia" placeholder="Nombre del Puerto" ng-model="posts.Nombre_agencia">
                           </div>
                           <div class="col-md-12">
                              <label class="control-label" style="text-align: left;"><strong>Descrición:</strong></label>
                              <textarea class="form-control" rows="5" id="descripcion" name="descripcion" data-plugin-textarea-autosize ng-model="posts.Descripcion"></textarea>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-4">
                              <button id="btn_modificar_agencia" type="submit" class="mb-xs mt-xs mr-xs btn btn-primary btn-block boton">Modificar Agencia</button>
                           </div>
                        </div>
                     </div>
                  </form>
               </section>
            </div
