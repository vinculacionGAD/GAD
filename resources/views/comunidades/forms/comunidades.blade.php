<div class="container">
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('comunidad','Comunidad:')!!}
			{!!Form::text('comunidad', null,['id'=>'comunidad', 'class'=>'form-control', 'placeholder'=>'Ingresa el nombre de la comunidad', 'maxlength'=>'45', 'onkeypress'=>'return validaLetrasEspacioYNumeros(event)'])!!}
			<span id="span_comunidades"></span>
		</div>
	</div>
</div>
<div class="container">
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('observacion','Observación:')!!}
			{!!Form::text('observacion', null,['id'=>'observacion','class'=>'form-control', 'placeholder'=>'Ingresa una observación', 'maxlength'=>'255', 'onkeypress'=>'return validaLetrasEspacioYNumeros(event)'])!!}
		</div>
	</div>
</div>