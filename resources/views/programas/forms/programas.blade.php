<div class="container">
	<div class="form-group">		
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('Programa','Programa:')!!}
			{!!Form::text('programa',null,['id'=>'programa','class'=>'form-control', 'placeholder'=>'Ingresa el nombre del programa', 'maxlength'=>'50', 'onkeypress'=>'return validaLetrasEspacioYNumeros(event)'])!!}
			<span id="span_programa"></span>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('Observacion','Observación:')!!}
			{!!Form::text('observacion',null,['id'=>'observacion','class'=>'form-control', 'placeholder'=>'Ingresa una observación', 'maxlength'=>'255', 'onkeypress'=>'return validaLetrasEspacioYNumeros(event)'])!!}
		</div>		
	</div>
</div>