@extends('layouts.app')

@section('content')	

	<div id="msj-update-cruz-roja" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Cruz Roja actualizada correctamente!</strong>
	</div>

	<div id="msj-delete-cruz-roja" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Cruz Roja eliminada correctamente!</strong>
	</div>
	<div>
				<ul class="nav navbar-right panel_toolbox">
                        <ul class="nav navbar-right panel_toolbox">                    
                        <a href="/app/crear_reporte_bomberos/1" target="bland_" class="moverImprimirFactura  btn btn-success">Imprimir Reporte</a>
                        </ul>
                    </ul>
	</div>

	@include('cruzRoja.modal')
	<h1 style="font-size: 20px; font-weight: bold; color: black;">Lista de Cruz Roja</h1>
	<br/>
	<table id="tablee" class="table table-bordered">
		<thead>
			<th>Cruz Roja</th>
			<th>Dirección</th>
			<th>Contacto</th>
			<th>Personas</th>
			<th>Camas</th>
			<th>Ambulancias</th>
			<th></th>
		</thead>
		<tbody>
			@foreach($cruz_roja as $cruz) 
                <tr>
                  <td>{{$cruz->nombre_recurso}}</td>
                  <td>{{$cruz->direccion}}</td>
                  <td>{{$cruz->telefono}}</td>
                  <td>{{$cruz->n_miembros}}</td>
                  <td>{{$cruz->n_camas}}</td>
                  <td>{{$cruz->n_ambulancias}}</td>
                  <td><button value="{{$cruz->id}}" OnClick='Mostrar({{$cruz->id}});' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button></td>
                  </tr> 
            @endforeach
		</tbody>
	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptCruzRoja.js')!!}
@endsection