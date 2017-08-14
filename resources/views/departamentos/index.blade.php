@extends('layouts.app')

@section('content')	

	<div id="msj-update-departamento" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Departamento actualizado correctamente!</strong>
	</div>

	<div id="msj-delete-departamento" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Departamento eliminado correctamente!</strong>
	</div>

	@include('departamentos.modal')	
	<h1 style="font-size: 20px; font-weight: bold; color: black;">Lista de Departamentos</h1>
	<br/>
	<table id="tablee" class="table table-bordered">
		<thead>
			<th>Nombre</th>
			<th>Observación</th>
			<th></th>
		</thead>
		<tbody>
			@foreach($departamentos as $dep) 
                <tr>
                  <td>{{$dep->departamento}}</td>
                  <td>{{$dep->observacion}}</td>
                  <td><button value="{{$dep->id}}" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button></td>
                  </tr> 
            @endforeach
		</tbody>
	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptDepartamentos.js')!!}
@endsection


