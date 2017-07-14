@extends('layouts.app')

@section('content')	

	<div id="msj-update-policia" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Departamento de policia actualizado correctamente!</strong>
	</div>

	<div id="msj-delete-policia" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Departamento de policia eliminado correctamente!</strong>
	</div>
	<div>
				<ul class="nav navbar-right panel_toolbox">
                        <ul class="nav navbar-right panel_toolbox">                    
                        <a href="/app/crear_reporte_policia/1" target="bland_" class="moverImprimirFactura  btn btn-success">Imprimir Reporte</a>
                        </ul>
                    </ul>
	</div>

	@include('policias.modal')
	<h1 style="font-size: 20px; font-weight: bold; color: black;">Lista de Departamentos de Policía</h1>
	<br/>
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Dirección</th>
			<th>Contacto</th>
			<th>Número de Policias</th>
			<th>Número de Carros</th>
			<th>Número de Motos</th>
			<th></th>
		</thead>
		<tbody id="datos"></tbody>

	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptPolicias.js')!!}
@endsection