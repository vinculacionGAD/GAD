@extends('layouts.app')

@section('content')	
	
	<div id="msj-update-personal" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Personal actualizado correctamente!</strong>
	</div>

	<div id="msj-delete-personal" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Personal eliminado correctamente!</strong>
	</div>
	<div>
				<ul class="nav navbar-right panel_toolbox">
                        <ul class="nav navbar-right panel_toolbox">                    
                        <a href="/app/crear_reporte_personal/1" target="bland_" class="moverImprimirFactura  btn btn-success">Generar Reporte</a>
                        </ul>
                    </ul>
	</div>

	@include('personales.modal')	
	<h1 style="font-size: 20px; font-weight: bold; color: black;">Lista de Funcionarios</h1>
	<br/>
	<table id="tablee" class="table table-bordered">
		<thead>
			<th>Nombre</th>
			<th>Fecha Inicio</th>
			<th>Fecha Fin</th>
			<th>Departamento</th>
			<th></th>
		</thead>
		<tbody id="datos"></tbody>

	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptPersonales.js')!!}
@endsection