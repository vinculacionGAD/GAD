<div class="container">
	<div class="col-md-12 registro">
     	<div class="col-md-4 col-xs-12">
			<div class="form-group">		
				<div class="col-lg-12 col-md-12 col-xs-12">
					{!!Form::label('departamento','Departamento:')!!}
					{!!Form::text('departamento', null,['id'=>'departamento','class'=>'form-control', 'placeholder'=>'Ingresa el nombre del departamento', 'maxlength'=>'45', 'onkeypress'=>'return validaLetrasEspacioYNumeros(event)'])!!}
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-12 col-md-12 col-xs-12">
					{!!Form::label('observacion','Observación:')!!}
					{!!Form::text('observacion', null,['id'=>'observacion','class'=>'form-control', 'placeholder'=>'Ingresa una observación', 'maxlength'=>'255', 'onkeypress'=>'return validaLetrasEspacioYNumeros(event)'])!!}
				</div>

		</div>
		<br><div class="form-group">
					<div class="col-md-6 col-xs-12">
						{!!link_to('#', $title='Registrar', $attributes = ['id'=>'registroDepartamento','class'=>'btn btn-primary'], $secure = null)!!}
					</div>
			</div>
		</div>
	</div>
</div>