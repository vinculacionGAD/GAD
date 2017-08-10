<div class="container">

	<div class="form-group">	
		<div class="col-lg-6 col-md-12 col-xs-12">
			{!!Form::label('persona_id','Persona:')!!}
			<select name="persona_id" id="persona_id" class="form-control js-example-basic-single" placeholder="Seleccione el Jefe de Hogar">
			<option value="">Seleccione una persona</option>
			@foreach($personas  as $p)
				<option value="{{$p->id}}">{{$p->persona}}</option>
			@endforeach
			</select>
			<span id="span_persona_id"></span>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-6 col-md-12 col-xs-12">
			{!!Form::label('FechaInicio','Fecha Inicio:')!!}
			{!!Form::date('fecha_inicio', \Carbon\Carbon::now(), ['id' => 'fecha_inicio', 'class' => 'form-control'])!!}
			<span id="span_fecha_inicio"></span>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-6 col-md-12 col-xs-12">
			{!!Form::label('FechaFin','Fecha Fin:')!!}
			{!!Form::date('fecha_fin', \Carbon\Carbon::now(), ['id' => 'fecha_fin', 'class' => 'form-control'])!!}
			<span id="span_fecha_fin"></span>
		</div>
	</div>

	<div class="form-group">	
		<div class="col-lg-6 col-md-12 col-xs-12">
			{!!Form::label('departamento_id','Departamento:')!!}
			<select name="departamento_id" id="departamento_id" class="form-control js-example-basic-single" placeholder="Seleccione un departamento">
			<option value="">Seleccione un departamento</option>
			@foreach($departamentos  as $d)
				<option value="{{$d->id}}">{{$d->departamento}}</option>
			@endforeach
			</select>
			<span id="span_departamento_id"></span>
		</div>
	</div>

</div>