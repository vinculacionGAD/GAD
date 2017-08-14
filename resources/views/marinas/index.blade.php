@extends('layouts.app')

@section('content')	

	<div id="msj-update-marina" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Marina actualizada correctamente!</strong>
	</div>

	<div id="msj-delete-marina" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Marina eliminada correctamente!</strong>
	</div>
	<div>
				<ul class="nav navbar-right panel_toolbox">
                        <ul class="nav navbar-right panel_toolbox">                    
                        <a href="/app/crear_reporte_marinas/1" target="bland_" class="moverImprimirFactura  btn btn-success">Generar Reporte</a>
                        </ul>
                    </ul>
	</div>


	@include('marinas.modal')
	<h1 style="font-size: 20px; font-weight: bold; color: black;">Lista de Marina</h1>
	<br/>
	<table id="tablee" class="table table-bordered">
		<thead>
			<th>Marina</th>
			<th>Dirección</th>
			<th>Contacto</th>
			<th>Número de Botes</th>
			<th>Número de Personas</th>
			<th></th>
		</thead>
		<tbody>
			@foreach($marina as $mar) 
                <tr>
                  <td>{{$mar->nombre_recurso}}</td>
                  <td>{{$mar->direccion}}</td>
                  <td>{{$mar->telefono}}</td>
                  <td>{{$mar->n_botes}}</td>
                  <td>{{$mar->n_personas}}</td>
                  <td><button value="{{$mar->id}}" OnClick='Mostrar({{$mar->id}});' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button></td>
                  </tr> 
            @endforeach
		</tbody>
	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptMarina.js')!!}
@endsection