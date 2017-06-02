<div class="container">
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('n_policias','Número de policias:')!!}
			{!!Form::text('n_policias', null,['id'=>'n_policias','class'=>'form-control', 'placeholder'=>'Ingresa el número de policias', 'maxlength'=>'5', 'onkeypress'=>'return validaNumeros(event)'])!!}
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('n_carros','Número de carros:')!!}
			{!!Form::text('n_carros', null,['id'=>'n_carros','class'=>'form-control', 'placeholder'=>'Ingresa el número de carros', 'maxlength'=>'5', 'onkeypress'=>'return validaNumeros(event)'])!!}
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('n_motos','Número de motos:')!!}
			{!!Form::text('n_motos', null,['id'=>'n_motos','class'=>'form-control', 'placeholder'=>'Ingresa el número de motos', 'maxlength'=>'5', 'onkeypress'=>'return validaNumeros(event)'])!!}
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('observacion','Observación:')!!}
			{!!Form::text('observacion', null,['id'=>'observacion','class'=>'form-control', 'placeholder'=>'Ingresa una observación', 'maxlength'=>'255', 'onkeypress'=>'return validaLetrasEspacioYNumeros(event)'])!!}
		</div>
	</div>
</div>
