<section class="panel">
                   <div class="panel-body">
                      <div class="row">
                         <div class="col-sm-6">
                            <div class="mb-md">
                               <button ui-sref="agregar_usuario" id="add_usuario" class="btn btn-primary">Agregar Nuevo Usuario <i class="fa fa-plus"></i></button>
                            </div>
                         </div>
                      </div>
                      <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                         <thead>
                            <tr>
                              <th  style="text-align: center;" class="hidden">ID</th>
                               <th style="text-align: center;">Nombre de Usuario</th>
                               <th style="text-align: center;">Correo Electrónico</th>
                               <th style="text-align: center;">Acciones</th>
                            </tr>
                         </thead>
                         <tbody>
                            <tr ng-repeat="post in posts" class="gradeX">
                               <td class="hidden">{{post.ID_usuario}}</td>
                               <td>{{post.Username}}</td>
                               <td>{{post.Correo}}</td>
                               <td class="actions" style="text-align: center;">
                                  <a ui-sref="modificar_usuario({id_usuario: post.ID_usuario})"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="bottom" title="Editar Usuario"></i></a>
                                  <a ui-sref="eliminar_usuario({id_usuario: post.ID_usuario, eliminar:1})"><i class="fa fa-trash" data-toggle="tooltip" data-placement="bottom" title="Eliminar Usuario"></i></a>
                               </td>
                            </tr>
                         </tbody>
                      </table>
                   </div>
                </section>