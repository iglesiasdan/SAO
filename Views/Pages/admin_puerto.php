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

<section class="panel">
                   <div class="panel-body">
                      <div class="row">
                         <div class="col-sm-6">
                            <div class="mb-md">
                               <button ui-sref="agregar_puerto" id="add_puerto" class="btn btn-primary boton">Agregar Nuevo Puerto <i class="fa fa-plus"></i></button>
                            </div>
                         </div>
                      </div>
                      <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                         <thead>
                            <tr>
                              <th  style="text-align: center;" class="hidden">ID</th>
                               <th style="text-align: center;">Puerto</th>
                               <th style="text-align: center;">Ciudad</th>
                               <th style="text-align: center;">Estado</th>
                               <th style="text-align: center;">Acciones</th>
                            </tr>
                         </thead>
                         <tbody>
                            <tr ng-repeat="post in posts" class="gradeX">
                               <td class="hidden">{{post.ID_puerto}}</td>
                               <td>{{post.Nombre_puerto}}</td>
                               <td>{{post.Ciudad}}</td>
                               <td>{{post.Estado}}</td>
                               <td class="actions" style="text-align: center;">
                                  <a ui-sref="modificar_puerto({id_puerto: post.ID_puerto})"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="bottom" title="Editar Puerto"></i></a>
                                  <a ui-sref="eliminar_puerto({id_puerto: post.ID_puerto, eliminar:1})"><i class="fa fa-trash eliminar" data-toggle="tooltip" data-placement="bottom" title="Eliminar Puerto"></i></a>
                               </td>
                            </tr>
                         </tbody>
                      </table>
                   </div>
                </section>
