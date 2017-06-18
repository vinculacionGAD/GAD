<div class="container">

	<div class="form-group">	
		<div class="col-lg-6 col-md-12 col-xs-12">
			{!!Form::label('persona_id','Persona:')!!}
			{!!Form::select('persona_id', $personas, null, ['id'=>'persona_id', 'class'=>'form-control', 'placeholder'=>'Seleccione una persona'])!!}
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
			{!!Form::select('departamento_id', $departamentos, null, ['id'=>'departamento_id', 'class'=>'form-control', 'placeholder'=>'Seleccione un departamento'])!!}
			<span id="span_departamento_id"></span>
		</div>
	</div>

</div>