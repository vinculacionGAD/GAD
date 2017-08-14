@extends('layouts.app')

@section('content')	

	<div id="msj-update-comunidad" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Comunidad actualizada correctamente!</strong>
	</div>

	<div id="msj-delete-comunidad" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Comunidad eliminada correctamente!</strong>
	</div>

	@include('comunidades.modal')	
	<h1 style="font-size: 20px; font-weight: bold; color: black;">Lista de Comunidades</h1>
	<br/>
	<table id="tablee" class="table table-bordered">
		<thead>
			<th>Nombre</th>
			<th>Observación</th>
			<th></th>
		</thead>
		<tbody>
			@foreach($comunidades as $com) 
                <tr>
                  <td>{{$com->comunidad}}</td>
                  <td>{{$com->observacion}}</td>
                  <td><button value="{{$com->id}}" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button></td>
                  </tr> 
            @endforeach
		</tbody>
	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptComunidades.js')!!}
@endsection


