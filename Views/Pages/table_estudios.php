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

<!-- estos son arribos -->
<section class="panel">
                     <div class="panel-body">
                        <div class="row">
                           <div class="col-sm-6">
                              <div class="mb-md">
                                 <button ui-sref="agregar_arribo" id="addArribo" class="btn btn-primary boton">Agregar Nuevo Arribo <i class="fa fa-plus"></i></button>
                              </div>
                           </div>
                        </div>
                        <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                           <thead>
    <tr>
      <th hidden="true">id</th>
      <th>Nombre del Buque</th>
      <th>Num. IMO</th>
      <th>Abanderamiento</th>
      <th>Puerto</th>
      <th>Fecha de Arribo</th>
      <th>Accion</th>
    </tr>
  </thead>
  <tbody>
    <tr ng-repeat="post in posts">
      <td hidden="true">{{post.ID_arribo}}</td>
      <td>{{post.Nombre_buque}}</td>
      <td>{{post.Numero_IMO}}</td>
      <td>{{post.Abanderamiento}}</td>
      <td>{{post.Nombre_puerto}}</td>
      <td>{{post.Fecha_arribo | date:'dd-MM-yyyy '}}</td>
      <td>
        <a ui-sref="detalle_estudio({id_estudio: post.ID_arribo})"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="bottom" title="Editar Puerto"></i></a>
          <a href=""><i class="fa fa-download" data-toggle="tooltip" data-placement="bottom" title="Descargar PDF"></i></a>
        <a href=""><i class="fa fa-trash eliminar" data-toggle="tooltip" data-placement="bottom" title="Eliminar Puerto"></i></a>
      </td>
    </tr>
  </tbody>
</table>
</div>
</section>
