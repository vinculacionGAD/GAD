<div class="container">
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			<h5>Datos de la Familia</h5>
		</div>
	</div>
	<div class="form-group">	
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('persona_id','Persona:')!!}
			<select name="persona_id" id="persona_id" class="form-control js-example-basic-single" placeholder="Seleccione una persona">
			<option value="">Seleccione una persona</option>
			@foreach($personas  as $p)
				<option value="{{$p->id}}">{{$p->persona}}</option>
			@endforeach
			</select>
			<span id="span_persona_id"></span>
		</div>
	</div>

	<div class="form-group">	
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('persona_hogar_id','Jefe Familia:')!!}
			<select name="persona_hogar_id" id="persona_hogar_id" class="form-control js-example-basic-single" placeholder="Seleccione el jefe de familia">
			<option value="">Seleccione el jefe de familia</option>
			@foreach($familias  as $f)
				<option value="{{$f->id}}">{{$f->jefe_hogar}}</option>
			@endforeach
			</select>
			<span id="span_persona_hogar_id"></span>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('Parentesco','Parentesco:')!!}
			{!!Form::select('parentesco', ['Padre' => 'Padre', 'Madre' => 'Madre', 'Hijo/a' => 'Hijo/a', 'Nieto/a' => 'Nieto/a', 'Abuelo/a' => 'Abuelo/a', 'Yerno' => 'Yerno', 'Nuera' => 'Nuera', 'Otro Pariente' => 'Otro Pariente'], null, ['class'=>'form-control', 'id'=>'parentesco', 'placeholder'=>'Seleccione un parentesco'])!!}
			<span id="span_parentesco"></span>
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
			{!!Form::select('actividad_laboral_id', $actividades_laborales, null, ['id'=>'actividad_laboral_id', 'class'=>'form-control', 'placeholder'=>'Seleccione una actividad laboral'])!!}
			<span id="span_actividad_laboral_id"></span>
		</div>
	</div>
	<div class="form-group">	
		<div class="col-lg-12 col-md-12 col-xs-12">
			<hr/>
		</div>
	</div>
</div>