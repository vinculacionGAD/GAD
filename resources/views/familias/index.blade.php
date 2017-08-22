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
                        <a href="/app/crear_reporte_ListarFamilia/1" target="bland_" class="moverImprimirFactura  btn btn-success">Reporte General</a>
                        </ul>
                    </ul>
	</div>
	
	@include('familias.modal')
	<h1 style="font-size: 20px; font-weight: bold; color: black;">Lista de Familias y Miembros</h1>
	<br/>
	<table id="tablee" class="table">
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
		<tbody>
			@foreach($familias as $fam) 
                <tr>
                  <td>{{$fam->vivienda_id}}</td>
                  <td>{{$fam->nombres}} {{$fam->apellido_paterno}} {{$fam->apellido_materno}}</td>
                  <td>{{$fam->edad}}</td>
                  <td>{{$fam->parentesco}}</td>
                  <td>{{$fam->jefe_hogar}}</td>
                  <td>{{$fam->sector}}</td>
                  <td>{{$fam->comunidad}}</td>
                  <td><a href='/app/crear_reporte_ListarFamiliaVivienda/1/{{$fam->vivienda_id}}' target='blank_' value="{{$fam->vivienda_id}}" OnClick='Mostrar_reporte(this);' class='btn btn-success'>Reporte Por Familia</a></td>                         
                </tr> 
            @endforeach
		</tbody>

	</table>	

@endsection

@section('scripts')
	{!!Html::script('js/scriptFamilias.js')!!}
@endsection	