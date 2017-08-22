@extends('layouts.app')

@section('content')	
	
	<div id="msj-update-perdida" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Pérdida actualizada correctamente!</strong>
	</div>

	<div id="msj-delete-perdida" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Pérdida eliminada correctamente!</strong>
	</div>
	<div>
				<ul class="nav navbar-right panel_toolbox">
                        <ul class="nav navbar-right panel_toolbox">                    
                        <a href="/app/crear_reporte_perdida/1" target="bland_" class="moverImprimirFactura  btn btn-success">Reporte General</a>
                        </ul>
                    </ul>
	</div>

	@include('perdidas.modal')	
	<h1 style="font-size: 20px; font-weight: bold; color: black;">Lista de Pérdidas</h1>
	<br/>
	<table id="tablee" class="table table-bordered">
		<thead>
			<th>Cédula</th>
			<th>Persona</th>
			<th>Descripción</th>
			<th>Monto Estimado</th>
			<th>Fecha Pérdida</th>
			<th></th>
		</thead>
		<tbody>
			@foreach($perdidas as $per) 
                <tr>
                  <td>{{$per->doc_identificacion}}</td>
                  <td>{{$per->nombres}} {{$per->apellido_paterno}} {{$per->apellido_materno}}</td>
                  <td>{{$per->descripcion}}</td>
                  <td>{{$per->monto_estimado}}</td>
                  <td>{{$per->fecha_perdida}}</td>
                  <td><button value="{{$per->id}}" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><a href="/app/crear_reporte_perdidas/1/{{$per->id}}" value="{{$per->id}}" target="bland_" class="	  btn btn-success">Reporte Por Persona</a></td>
                  </tr> 
            @endforeach
		</tbody>
	</table>	
@endsection

@section('scripts')
	{!!Html::script('js/scriptPerdidas.js')!!}
@endsection