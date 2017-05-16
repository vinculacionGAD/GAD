<div class="container">
	<div class="form-group">		
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('Trabajo','Trabajo:')!!}
			{!!Form::text('trabajo',null,['id'=>'trabajo','class'=>'form-control', 'placeholder'=>'Ingresa el trabajo del voluntario', 'maxlength'=>'50', 'onkeypress'=>'return validaLetrasYEspacio(event)'])!!}
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
			{!!Form::label('persona_id','Persona:')!!}
			{!!Form::select('persona_id', $personas, null, ['id'=>'persona_id', 'class'=>'form-control'])!!}
		</div>
	</div>

	<div class="form-group">	
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('pais_id','Pais:')!!}
			{!!Form::select('pais_id', $paises, null, ['id'=>'pais_id', 'class'=>'form-control'])!!}
		</div>
	</div>

	<div class="form-group">	
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('organizacion_id','Organización:')!!}
			{!!Form::select('organizacion_id', $organizaciones, null, ['id'=>'organizacion_id', 'class'=>'form-control'])!!}
		</div>
	</div>

	<div class="form-group">	
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('rol_voluntario_id','Rol Voluntario:')!!}
			{!!Form::select('rol_voluntario_id', $roles_voluntarios, null, ['id'=>'rol_voluntario_id', 'class'=>'form-control'])!!}
		</div>
	</div>

</div>