@extends('layouts.app')

@section('content')	

	<div id="msj-update-almacen" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Almacén actualizado correctamente!</strong>
	</div>

	<div id="msj-delete-almacen" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Almacén eliminado correctamente!</strong>
	</div>
	
	
	@include('almacenes.modal')
	<h1 style="font-size: 20px; font-weight: bold; color: black;">Lista de Almacenes</h1>
	<br/>
	<table id="tablee" class="table table-bordered">
		<thead>
			<th>Almacén</th>
			<th>Dirección</th>
			<th>Observación</th>
			<th></th>
		</thead>
		<tbody>
			@foreach($almacenes as $alm) 
                <tr>
                  <td>{{$alm->nombre_recurso}}</td>
                  <td>{{$alm->direccion}}</td>
                  <td>{{$alm->observacion}}</td>
                  <td><button value="{{$alm->id}}" OnClick='Mostrar({{$alm->id}});' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button></td>
                </tr> 
            @endforeach
		</tbody>

	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptAlmacenes.js')!!}
@endsection