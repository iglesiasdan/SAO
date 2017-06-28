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
                               <button ui-sref="agregar_buque" id="add_buque" class="btn btn-primary boton">Agregar Nuevo Buque <i class="fa fa-plus"></i></button>
                            </div>
                         </div>
                      </div>
                      <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                         <thead>
                            <tr>
                               <th style="text-align: center;">Nombre</th>
                               <th style="text-align: center;">IMO</th>
                               <th style="text-align: center;">Abanderamiento</th>
                               <th style="text-align: center;">Eslora</th>
                               <th style="text-align: center;">Manga</th>
                               <th style="text-align: center;">Puntal</th>
                               <th style="text-align: center;">Acciones</th>
                            </tr>
                         </thead>
                         <tbody>
                            <tr ng-repeat="post in posts" class="gradeX">
                               <td>{{post.Nombre_buque}}</td>
                               <td>{{post.Numero_imo}}</td>
                               <td>{{post.Abanderamiento}}</td>
                               <td>{{post.Eslora}}</td>
                               <td>{{post.Manga}}</td>
                               <td>{{post.Puntal}}</td>
                               <td class="actions" style="text-align: center;">
                                  <a ui-sref="modificar_buque({id_buque: post.ID_buque})"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="bottom" title="Editar Buque"></i></a>
                                  <a ui-sref="eliminar_buque({id_buque: post.ID_buque, eliminar:1})"><i class="fa fa-trash eliminar" data-toggle="tooltip" data-placement="bottom" title="Eliminar Buque"></i></a>
                               </td>
                            </tr>
                         </tbody>
                      </table>
                   </div>
                </section>
