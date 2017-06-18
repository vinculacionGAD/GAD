<div class="container">
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('nombre_contacto','Nombre Contacto:')!!}
			{!!Form::text('nombre_contacto', null, ['id'=>'nombre_contacto','class'=>'form-control', 'placeholder'=>'Ingresa el nombre del encargado', 'maxlength'=>'45', 'onkeypress'=>'return validaLetrasYEspacio(event)'])!!}
			<span id="span_nombre_contacto"></span>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('telefono_contacto','Teléfono Contacto:')!!}
			{!!Form::text('telefono_contacto', null,['id'=>'telefono_contacto','class'=>'form-control', 'placeholder'=>'Ingresa el número de teléfono del encargado', 'maxlength'=>'10', 'onkeypress'=>'return validaNumeros(event)'])!!}
			<span id="span_telefono_contacto"></span>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('capacidad_maxima','Capacidad Máxima:')!!}
			{!!Form::text('capacidad_maxima', null,['id'=>'capacidad_maxima','class'=>'form-control', 'placeholder'=>'Ingresa la capacidad máxima del refugio', 'maxlength'=>'5', 'onkeypress'=>'return validaNumeros(event)'])!!}
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('poblacion','Población Actual:')!!}
			{!!Form::text('poblacion', null,['id'=>'poblacion','class'=>'form-control', 'placeholder'=>'Ingresa la población actual del refugio', 'maxlength'=>'5', 'onkeypress'=>'return validaNumeros(event)'])!!}
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('observacion','Observación:')!!}
			{!!Form::text('observacion', null,['id'=>'observacion','class'=>'form-control', 'placeholder'=>'Ingresa una observación', 'maxlength'=>'255', 'onkeypress'=>'return validaLetrasEspacioYNumeros(event)'])!!}
		</div>
	</div>
</div>
