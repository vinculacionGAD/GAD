<div class="container">
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('n_bomberos','Número de bomberos:')!!}
			{!!Form::text('n_bomberos', null,['id'=>'n_bomberos','class'=>'form-control', 'placeholder'=>'Ingresa el número de bomberos', 'maxlength'=>'5', 'onkeypress'=>'return validaNumeros(event)'])!!}
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('n_carros','Número de coches de bombero:')!!}
			{!!Form::text('n_carros', null,['id'=>'n_carros','class'=>'form-control', 'placeholder'=>'Ingresa el número de coches de bombero', 'maxlength'=>'5', 'onkeypress'=>'return validaNumeros(event)'])!!}
		</div>
	</div>	
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('observacion','Observación:')!!}
			{!!Form::text('observacion', null,['id'=>'observacion','class'=>'form-control', 'placeholder'=>'Ingresa una observación', 'maxlength'=>'255', 'onkeypress'=>'return validaLetrasEspacioYNumeros(event)'])!!}
		</div>
	</div>
</div>
