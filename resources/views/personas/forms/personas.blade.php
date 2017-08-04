<div class="container">
<div class="col-md-12 registro">
     <div class="col-md-4 col-xs-12">
			<div class="form-group">		
				<div class="col-lg-12 col-md-12 col-xs-12">
					{!!Form::label('doc_identificacion','Cédula:')!!}
					{!!Form::text('doc_identificacion',null,['id'=>'doc_identificacion','class'=>'form-control', 'placeholder'=>'Ingresa el número de cédula', 'maxlength'=>'13', 'onkeypress'=>'return validaNumeros(event)'])!!}
					<span id="span_doc_identificacion"></span>
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-12 col-md-12 col-xs-12">
					{!!Form::label('Nombres','Nombres:')!!}
					{!!Form::text('nombres',null,['id'=>'nombres','class'=>'form-control', 'placeholder'=>'Ingresa los nombres', 'maxlength'=>'30', 'onkeypress'=>'return validaLetrasYEspacio(event)'])!!}
					<span id="span_nombres"></span>
				</div>
			</div>

			<div class="form-group">
				<div class="col-lg-12 col-md-12 col-sm-12">
					{!!Form::label('ApellidoPaterno','Apellido Paterno:')!!}
					{!!Form::text('apellido_paterno',null,['id'=>'apellido_paterno','class'=>'form-control', 'placeholder'=>'Ingresa el apellido paterno', 'maxlength'=>'20', 'onkeypress'=>'return validaLetrasYEspacio(event)'])!!}
					<span id="span_apellido_paterno"></span>
				</div>		
			</div>

			<div class="form-group">
				<div class="col-lg-12 col-md-12 col-sm-12">
					{!!Form::label('ApellidoMaterno','Apellido Materno:')!!}
					{!!Form::text('apellido_materno',null,['id'=>'apellido_materno','class'=>'form-control', 'placeholder'=>'Ingresa el apellido materno', 'maxlength'=>'20', 'onkeypress'=>'return validaLetrasYEspacio(event)'])!!}
				</div>		
			</div>

			<br/>

			<div class="form-group">
				<div class="col-md-6 col-xs-12">
					{!!link_to('#', $title='Registrar', $attributes = ['id'=>'registroPersona','class'=>'btn btn-primary'], $secure = null)!!}
				</div>
			</div>
		</div>	
        
        <div class="col-md-4 col-sm-6 col-xs-12">
			<div class="form-group">
				<div class="col-lg-12 col-md-12 col-xs-12">
					{!!Form::label('FechaNacimiento','Fecha Nacimiento:')!!}
					{!!Form::date('fecha_nacimiento', \Carbon\Carbon::now(), ['id' => 'fecha_nacimiento', 'class' => 'form-control'])!!}
				</div>
			</div>

			<div class="form-group">
				<div class="col-lg-12 col-md-12 col-sm-12">
					{!!Form::label('Sexo','Sexo:')!!}
					{!!Form::select('sexo', ['M' => 'Masculino', 'F' => 'Femenino'], null, ['class'=>'form-control', 'id'=>'sexo'])!!}
				</div>		
			</div>

			<div class="form-group">
				<div class="col-lg-12 col-md-12 col-sm-12">
					{!!Form::label('CorreoElectronico','Correo Electronico:')!!}
					{!!Form::text('correo_electronico',null,['id'=>'correo_electronico','class'=>'form-control', 'placeholder'=>'Ingresa el correo electrónico', 'maxlength'=>'45'])!!}
				</div>		
			</div>

			<div class="form-group">
				<div class="col-lg-12 col-md-12 col-sm-12">
					{!!Form::label('TelefonoMovil','Teléfono Móvil:')!!}
					{!!Form::text('telefono_movil',null,['id'=>'telefono_movil','class'=>'form-control', 'placeholder'=>'Ingresa el número de teléfono', 'maxlength'=>'10', 'onkeypress'=>'return validaNumeros(event)'])!!}
				</div>		
			</div>

			<div class="form-group">
				<div class="col-lg-12 col-md-12 col-sm-12">
					{!!Form::label('EstadoCivil','Estado Civil:')!!}
					{!!Form::select('estado_civil', ['Soltero' => 'Soltero', 'Casado' => 'Casado', 'Viudo' => 'Viudo', 'Divorciado' => 'Divorciado', 'Union Libre' => 'Union Libre' ], null, ['class'=>'form-control', 'id'=>'estado_civil', 'placeholder'=>'Seleccione un estado civil'])!!}
					<span id="span_estado_civil"></span>
				</div>
		    
		</div>	
	</div>
</div>