<div class="container">
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('n_miembros','Número de miembros:')!!}
			{!!Form::text('n_miembros', null,['id'=>'n_miembros','class'=>'form-control', 'placeholder'=>'Ingresa el número de miembros', 'maxlength'=>'5', 'onkeypress'=>'return validaNumeros(event)'])!!}
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('n_camas','Número de camas:')!!}
			{!!Form::text('n_camas', null,['id'=>'n_camas','class'=>'form-control', 'placeholder'=>'Ingresa el número de camas', 'maxlength'=>'5', 'onkeypress'=>'return validaNumeros(event)'])!!}
		</div>
	</div>	
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('n_ambulancias','Número de ambulancias:')!!}
			{!!Form::text('n_ambulancias', null,['id'=>'n_ambulancias','class'=>'form-control', 'placeholder'=>'Ingresa el número de ambulancias', 'maxlength'=>'5', 'onkeypress'=>'return validaNumeros(event)'])!!}
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('observacion','Observación:')!!}
			{!!Form::text('observacion', null,['id'=>'observacion','class'=>'form-control', 'placeholder'=>'Ingresa una observación', 'maxlength'=>'255', 'onkeypress'=>'return validaLetrasEspacioYNumeros(event)'])!!}
		</div>
	</div>
</div>
