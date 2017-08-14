@extends('layouts.app')

@section('content')	
	
	<div id="msj-update-programa" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Programa actualizado correctamente!</strong>
	</div>

	<div id="msj-delete-programa" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Programa eliminado correctamente!</strong>
	</div>

	@include('programas.modal')	
	<h1 style="font-size: 20px; font-weight: bold; color: black;">Lista de Programas</h1>
	<br/>
	<table id="tablee" class="table">
		<thead>
			<th>Nombre</th>
			<th>Observacion</th>
			<th>Accion</th>
			<th>Reporte</th>
		</thead>
		<tbody>
			@foreach($programas as $pro) 
                <tr>
                  <td>{{$pro->programa}}</td>
                  <td>{{$pro->observacion}}</td>
                  <td><button value="{{$pro->id}}" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button></td>
                  <td><a href='/app/crear_reporte_programa/1/{{$pro->id}}' target='blank_' value="{{$pro->id}}" OnClick='Mostrar_reporte(this);' class='btn btn-success'>Generar Reporte</a></td>                          
                </tr> 
            @endforeach
		</tbody>	
	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptProgramas.js')!!}
@endsection