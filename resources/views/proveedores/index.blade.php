@extends('layouts.app')

@section('content')	

	<div id="msj-update-proveedor" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Proveedor actualizado correctamente!</strong>
	</div>

	<div id="msj-delete-proveedor" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Proveedor eliminado correctamente!</strong>
	</div>

	@include('proveedores.modal')	
	<h1 style="font-size: 20px; font-weight: bold; color: black;">Lista de Proveedores</h1>
	<br/>
	<table id="tablee" class="table-bordered table">
		<thead>
			<th>Nombre</th>
			<th></th>
		</thead>
		<tbody>
			@foreach($proveedores as $pro) 
                <tr>
                  <td>{{$pro->nombres}} {{$pro->apellido_paterno}} {{$pro->apellido_materno}}</td>
                  <td><button value="{{$pro->id}}" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button></td>                         
                </tr> 
            @endforeach
		</tbody>
	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptProveedores.js')!!}
@endsection