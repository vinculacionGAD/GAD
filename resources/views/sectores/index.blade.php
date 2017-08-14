@extends('layouts.app')

@section('content')	

	<div id="msj-update-sector" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Sector actualizado correctamente!</strong>
	</div>

	<div id="msj-delete-sector" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Sector eliminado correctamente!</strong>
	</div>
	
	@include('sectores.modal')	
	<h1 style="font-size: 20px; font-weight: bold; color: black;">Lista de Sectores</h1>
	<br/>
	<table id="tablee" class="table table-bordered">
		<thead>
			<th>Nombre</th>
			<th>Ubicacion</th>
			<th>Observacion</th>
			<th></th>
		</thead>
		<tbody>
			@foreach($sectores as $sec) 
                <tr>
                  <td>{{$sec->sector}}</td>
                  <td>{{$sec->ubicacion}}</td>
                  <td>{{$sec->observacion}}</td>
                  <td><button value="{{$sec->id}}" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><a href='/app/crear_reporte_sector/1/{{$sec->id}}' target='blank_' value="{{$sec->id}}" OnClick='Mostrar_reporte(this);' class='btn btn-success'>Generar Reporte</a></td>
                  </tr> 
            @endforeach
		</tbody>
	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptSectores.js')!!}
@endsection