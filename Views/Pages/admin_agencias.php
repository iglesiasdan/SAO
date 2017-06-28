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
                               <button ui-sref="agregar_agencias" id="add_agencia" class="btn btn-primary boton">Agregar Nueva Agencia <i class="fa fa-plus"></i></button>
                            </div>
                         </div>
                      </div>
                      <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                         <thead>
                            <tr>
                               <th style="text-align: center;">Nombre</th>
                               <th style="text-align: center;">Acciones</th>
                            </tr>
                         </thead>
                         <tbody>
                            <tr ng-repeat="post in posts" class="gradeX">
                               <td>{{post.Nombre_agencia}}</td>
                               <td class="actions" style="text-align: center;">
                                  <a ui-sref="modificar_agencia({id_agencia: post.ID_agencia})"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="bottom" title="Editar Agencia"></i></a>
                                  <a ui-sref="eliminar_agencia({id_agencia: post.ID_agencia, eliminar:1})"><i class="fa fa-trash eliminar" data-toggle="tooltip" data-placement="bottom" title="Eliminar Agencia"></i></a>
                               </td>
                            </tr>
                         </tbody>
                      </table>
                   </div>
                </section>
