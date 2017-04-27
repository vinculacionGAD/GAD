<div class="container">

	<div class="form-group">	
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('persona_id','Persona:')!!}
			{!!Form::select('persona_id', $personas, null, ['id'=>'persona_id', 'class'=>'form-control'])!!}
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('FechaInicio','Fecha Inicio:')!!}
			{!!Form::date('fecha_inicio', \Carbon\Carbon::now(), ['id' => 'fecha_inicio', 'class' => 'form-control'])!!}
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('FechaFin','Fecha Fin:')!!}
			{!!Form::date('fecha_fin', \Carbon\Carbon::now(), ['id' => 'fecha_fin', 'class' => 'form-control'])!!}
		</div>
	</div>

	<div class="form-group">	
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('departamento_id','Departamento:')!!}
			{!!Form::select('departamento_id', $departamentos, null, ['id'=>'departamento_id', 'class'=>'form-control'])!!}
		</div>
	</div>

</div>