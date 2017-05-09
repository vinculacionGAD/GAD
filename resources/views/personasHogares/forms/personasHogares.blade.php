<div class="container">
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			<h5>Datos de la Familia</h5>
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
			{!!Form::label('persona_hogar_id','Familia:')!!}
			{!!Form::select('persona_hogar_id', $familias, null, ['id'=>'persona_hogar_id', 'class'=>'form-control'])!!}
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('Parentesco','Parentesco:')!!}
			{!!Form::select('parentesco', ['Padre' => 'Padre', 'Madre' => 'Madre', 'Hijo/a' => 'Hijo/a', 'Nieto/a' => 'Nieto/a', 'Abuelo/a' => 'Abuelo/a', 'Yerno' => 'Yerno', 'Nuera' => 'Nuera', 'Otro Pariente' => 'Otro Pariente'], null, ['class'=>'form-control', 'id'=>'parentesco'])!!}
		</div>		
	</div>
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('Trabaja','Trabaja:')!!}
			{!!Form::select('trabaja_si_no', ['S' => 'Si', 'N' => 'No'], null, ['class'=>'form-control', 'id'=>'trabaja_si_no'])!!}
		</div>		
	</div>
	<div class="form-group">	
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('actividad_laboral_id','Actividad Laboral:')!!}
			{!!Form::select('actividad_laboral_id', $actividades_laborales, null, ['id'=>'actividad_laboral_id', 'class'=>'form-control'])!!}
		</div>
	</div>
	<div class="form-group">	
		<div class="col-lg-12 col-md-12 col-xs-12">
			<hr/>
		</div>
	</div>
</div>