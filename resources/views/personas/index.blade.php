@extends('layouts.app')

@section('content')	
	
	<div id="msj-update-persona" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Persona actualizada correctamente!</strong>
	</div>

	<div id="msj-delete-persona" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Persona eliminada correctamente!</strong>
	</div>

	@include('personas.modal')	
	<h1 style="font-size: 20px; font-weight: bold; color: black;">Lista de Personas</h1>
	<br/>
	<table id="tablee" class="table-bordered table">
		<thead>
			<th>Cédula</th>
			<th>Nombre Completo</th>
			<th>Fecha Nacimiento</th>
			<th>Teléfono</th>
			<th>Estado Civil</th>
			<th></th>
		</thead>
		<tbody id="datos">
			@foreach($personas as $persona)
				<tr>
					<td>{{$persona->doc_identificacion}}</td>
					<td>{{$persona->nombres." ".$persona->apellido_paterno." ".$persona->apellido_materno}}</td>
					<td>{{$persona->fecha_nacimiento}}</td>
					<td>{{$persona->telefono_movil}}</td>
					<td>{{$persona->estado_civil}}</td>
					<td><button value="{{$persona->id}}" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button>
					</td>
				</tr>
			@endforeach

		</tbody>	
	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptPersonas.js')!!}
@endsection