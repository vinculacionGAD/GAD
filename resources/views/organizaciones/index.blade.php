@extends('layouts.app')

@section('content')	

	<div id="msj-update-organizacion" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Organización actualizada correctamente!</strong>
	</div>

	<div id="msj-delete-organizacion" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Organización eliminada correctamente!</strong>
	</div>

	@include('organizaciones.modal')
	<h1 style="font-size: 20px; font-weight: bold; color: black;">Lista de Organizaciones</h1>
	<br/>
	<table id="tablee" class="table table-bordered">
		<thead>
			<th>Nombre</th>
			<th>Tipo Organización</th>
			<th>Teléfono</th>
			<th>Sitio Web</th>
			<th>Twitter</th>
			<th></th>
			<th></th>
		</thead>
		<tbody>
			@foreach($organizaciones as $org) 
                <tr>
                  <td>{{$org->nombre}}</td>
                  <td>{{$org->tipo_organizacion}}</td>
                  <td>{{$org->telefono}}</td>
                  <td>{{$org->sitio_web}}</td>
                  <td>{{$org->twitter}}</td>
                  <td><button value="{{$org->id}}" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button></td>
                  <td><a href='/app/crear_reporte_organizacion/1/{{$org->id}}' target='blank_' value="{{$org->id}}" OnClick='MostrarIdReporte(this);' class='btn btn-success'>Generar Reporte</a></td>
                </tr> 
            @endforeach
		</tbody>
	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptOrganizaciones.js')!!}
@endsection