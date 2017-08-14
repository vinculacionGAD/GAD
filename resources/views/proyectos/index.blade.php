@extends('layouts.app')

@section('content')	

	<div id="msj-update-proyecto" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Proyecto actualizado correctamente!</strong>
	</div>

	<div id="msj-delete-proyecto" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Proyecto eliminado correctamente!</strong>
	</div>
	<div>
				<ul class="nav navbar-right panel_toolbox">
                        <ul class="nav navbar-right panel_toolbox">                    
                        <a href="/app/crear_reporte_proyectos/1" target="bland_" class="moverImprimirFactura  btn btn-success">Imprimir Reporte</a>
                        </ul>
                    </ul>
	</div>
	
	@include('proyectos.modal')	
	<h1 style="font-size: 20px; font-weight: bold; color: black;">Lista de Proyectos</h1>
	<br/>
	<table id="tablee" class="table" border="3">
		<thead>
			<th>Nombre</th>
			<th>Fecha Inicio</th>
			<th>Fecha Fin</th>
			<th>Presupuesto</th>
			<th>Moneda</th>
			<th></th>
		</thead>
		   <tbody>
                   @foreach($Proyectos as $pro) 
                        <tr>
                          <td>{{$pro->proyecto}}</td>
                          <td>{{$pro->fecha_inicio}}</td>
                          <td>{{$pro->fecha_fin}}</td>
                          <td>{{$pro->presupuesto}}</td>
                          <td>{{$pro->moneda}}</td>
                          <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">Acciones</button>
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                             <ul class="dropdown-menu" role="menu">
                                  <li><a onclick="cargar_datos({{$pro->id}})" href="javasrcipt:void(0)" data-toggle="modal" data-target="#myModal" >Modificar</a>
                                  </li>
                                  <li><a onclick="EliminarProyectos({{$pro->id}})" href="javascript:void(0)">Eliminar</a>
                                  </li>
                              </ul>
                            </div>  
                          </td>
                        </tr> 
                    @endforeach                     
                      </tbody>	
	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptProyectos.js')!!}
@endsection