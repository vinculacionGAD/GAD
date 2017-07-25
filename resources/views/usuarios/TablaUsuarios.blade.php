<table id="tablee" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>Usuario</th>
                          <th>email</th>
                          <th>Contrasena</th>
                          <th>Opciones</th>
                        </tr>
                      </thead>
                      <tbody>
                   @foreach($Usuarios as $Cat) 
                        <tr>
                          <td>{{$Cat->id}}</td>
                          <td>{{$Cat->name}}</td>
                          <td>{{$Cat->email}}</td>
                          <td>{{$Cat->password}}</td>
                          <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">Acciones</button>
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                             <ul class="dropdown-menu" role="menu">
                                  <li><a onclick="cargar_datos({{$Cat->id}})" href="javasrcipt:void(0)" data-toggle="modal" data-target="#myModal_ModificarUsuarios" >Modificar</a>
                                  </li>
                                  <li><a onclick="cargar_datosMO({{$Cat->id}})" href="javasrcipt:void(0)" data-toggle="modal" data-target="#myModal_ModificarContraseñaUsuarios" >Cambiar Contraseña</a>
                                  </li>
                                  <li><a onclick="EliminarUsuarios({{$Cat->id}})" href="javascript:void(0)">Eliminar</a>
                                  </li>
                              </ul>
                            </div>  
                          </td>
                        </tr> 
                    @endforeach                     
                      </tbody>
                    </table>