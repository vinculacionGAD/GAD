<div class="container">
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('n_medicos','Número de médicos:')!!}
			{!!Form::text('n_medicos', null,['id'=>'n_medicos','class'=>'form-control', 'placeholder'=>'Ingresa el número de médicos'])!!}
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('n_enfermeros','Número de enfermeros:')!!}
			{!!Form::text('n_enfermeros', null,['id'=>'n_enfermeros','class'=>'form-control', 'placeholder'=>'Ingresa el número de enfermeras'])!!}
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('n_quirofano','Número de quirófanos:')!!}
			{!!Form::text('n_quirofano', null,['id'=>'n_quirofano','class'=>'form-control', 'placeholder'=>'Ingresa el número de quirófanos'])!!}
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('n_camas','Número de Camas:')!!}
			{!!Form::text('n_camas', null,['id'=>'n_camas','class'=>'form-control', 'placeholder'=>'Ingresa el número de camas'])!!}
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('observacion','Observación:')!!}
			{!!Form::text('observacion', null,['id'=>'observacion','class'=>'form-control', 'placeholder'=>'Ingresa una observación'])!!}
		</div>
	</div>
</div>
