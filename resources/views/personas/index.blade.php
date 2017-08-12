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
		<tbody>
			@foreach($personas as $per) 
                <tr>
                  <td>{{$per->doc_identificacion}}</td>
                  <td>{{$per->nombres}} {{$per->apellido_paterno}} {{$per->apellido_materno}}</td>
                  <td>{{$per->fecha_nacimiento}}</td>
                  <td>{{$per->telefono_movil}}</td>
                  <td>{{$per->estado_civil}}</td>
                  <td><button value="{{$per->id}}" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button></td>
                </tr> 
            @endforeach
		</tbody>	
	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptPersonas.js')!!}
@endsection