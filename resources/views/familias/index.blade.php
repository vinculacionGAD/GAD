@extends('layouts.app')

@section('content')	

	<div id="msj-update-familia" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Familia actualizada correctamente!</strong>
	</div>

	<div id="msj-delete-familia" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Familia eliminada correctamente!</strong>
	</div>
	<div>
		<ul class="nav navbar-right panel_toolbox">
                <ul class="nav navbar-right panel_toolbox">                    
                  <a href="/welcomeAdmin/crear_reporte_hospitales/1" target="bland_" class="moverImprimirFactura  btn btn-success">Imprimir Reporte</a>
                </ul>
        </ul>
	</div>
	<div>
		<ul class="nav navbar-right panel_toolbox">
                <ul class="nav navbar-right panel_toolbox">                    
                  <a href="/welcomeAdmin/crear_reporte_hospitales/1" target="bland_" class="moverImprimirFactura  btn btn-success">Imprimir Reporte</a>
                </ul>
        </ul>
	</div>
	<div>
		<ul class="nav navbar-right panel_toolbox">
                <ul class="nav navbar-right panel_toolbox">                    
                  <a href="/welcomeAdmin/crear_reporte_hospitales/1" target="bland_" class="moverImprimirFactura  btn btn-success">Imprimir Reporte</a>
                </ul>
        </ul>
	</div>

	@include('familias.modal')
	<h1 style="font-size: 20px; font-weight: bold; color: black;">Lista de Familias y Miembros</h1>
	<br/>
	<table class="table">
		<thead>
			<th>Vivienda</th>
			<th>Persona</th>			
			<th>Edad</th>
			<th>Parentesco</th>
			<th>Jefe Hogar</th>
			<th>Sector</th>
			<th>Comunidad</th>
			<th></th>
		</thead>
		<tbody id="datos"></tbody>

	</table>	

@endsection

@section('scripts')
	{!!Html::script('js/scriptFamilias.js')!!}
@endsection	