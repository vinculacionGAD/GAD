@extends('layouts.app')

@section('content')	

	<div id="msj-update-producto" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Producto actualizado correctamente!</strong>
	</div>

	<div id="msj-delete-producto" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Producto eliminado correctamente!</strong>
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

	@include('productos.modal')	
	<h1 style="font-size: 20px; font-weight: bold; color: black;">Lista de Productos</h1>
	<br/>
	<table id="tablee" class="table table-bordered">
		<thead>
			<th>Nombre</th>
			<th>Fecha Elaboración</th>
			<th>Fecha Caducidad</th>
			<th>Tipo Producto</th>
			<th></th>
		</thead>
		<tbody id="datos"></tbody>	
	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptProductos.js')!!}
@endsection