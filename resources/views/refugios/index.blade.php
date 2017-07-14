@extends('layouts.app')

@section('content')	

	<div id="msj-update-refugio" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Albergue actualizado correctamente!</strong>
	</div>

	<div id="msj-delete-refugio" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Albergue eliminado correctamente!</strong>
	</div>

	<div>
				<ul class="nav navbar-right panel_toolbox">
                        <ul class="nav navbar-right panel_toolbox">                    
                        <a href="/app/crear_reporte_albergues/1" target="bland_" class="moverImprimirFactura  btn btn-success">Imprimir Reporte</a>
                        </ul>
                    </ul>
			</div>


	@include('refugios.modal')
	<h1 style="font-size: 20px; font-weight: bold; color: black;">Lista de Albergues</h1>
	<br/>
	<table class="table">
		<thead>
			<th>Nombre Albergue</th>
			<th>Dirección</th>
			<th>Encargado</th>
			<th>Contacto</th>
			<th></th>
		</thead>
		<tbody id="datos"></tbody>

	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptRefugios.js')!!}
@endsection