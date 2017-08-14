@extends('layouts.app')

@section('content')	

	<div id="msj-update-bombero" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Cuerpo de Bomberos actualizado correctamente!</strong>
	</div>

	<div id="msj-delete-bombero" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Cuerpo de Bomberos eliminado correctamente!</strong>
	</div>
	<div>
				<ul class="nav navbar-right panel_toolbox">
                        <ul class="nav navbar-right panel_toolbox">                    
                        <a href="/app/crear_reporte_bomberos/1" target="bland_" class="moverImprimirFactura  btn btn-success">Generar Reporte</a>
                        </ul>
                    </ul>
	</div>

	@include('bomberos.modal')
	<h1 style="font-size: 20px; font-weight: bold; color: black;">Lista de Cuerpos de Bombero</h1>
	<br/>
	<table id="tablee" class="table table-bordered">
		<thead>
			<th>Cuerpo de Bombero</th>
			<th>Dirección</th>
			<th>Contacto</th>
			<th>Bomberos</th>
			<th>Carros</th>
			<th></th>
		</thead>
		<tbody>
			@foreach($bomberos as $bom) 
                <tr>
                  <td>{{$bom->nombre_recurso}}</td>
                  <td>{{$bom->direccion}}</td>
                  <td>{{$bom->telefono}}</td>
                  <td>{{$bom->n_bomberos}}</td>
                  <td>{{$bom->n_carros}}</td>
                  <td><button value="{{$bom->id}}" OnClick='Mostrar({{$bom->id}});' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button></td></tr> 
            @endforeach
		</tbody>
	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptBomberos.js')!!}
@endsection