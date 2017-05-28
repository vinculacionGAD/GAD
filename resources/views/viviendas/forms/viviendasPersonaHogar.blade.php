<div class="container">
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			<h5>Datos de Vivienda</h5>
		</div>
	</div>
	<div class="form-group">	
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('sector_id','Sector:')!!}
			{!!Form::select('sector_id', $sectores, null, ['id'=>'sector_id', 'class'=>'form-control'])!!}
		</div>
	</div>	
	<div class="form-group">	
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('tipo_construccion','Tipo de Construcción:')!!}
			{!!Form::select('tipo_construccion', ['Madera' => 'Madera', 'Cemento' => 'Cemento', 'Mixta' => 'Mixta'], null, ['id'=>'tipo_construccion', 'class'=>'form-control', 'placeholder'=>'Seleccione un tipo de construcción'])!!}
		</div>
	</div>
	<div class="form-group">	
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('detalle','Años de Vida:')!!}
			{!!Form::text('detalle',null,['id'=>'detalle','class'=>'form-control', 'placeholder'=>'Ingresa un detalle de la vivienda', 'maxlength'=>'255', 'onkeypress'=>'return validaLetrasEspacioYNumeros(event)'])!!}
		</div>
	</div>
	<div class="form-group">	
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('anios_vida','Años de Vida:')!!}
			{!!Form::text('anios_vida',null,['id'=>'anios_vida','class'=>'form-control', 'placeholder'=>'Ingresa el número de años de vida', 'maxlength'=>'4', 'onkeypress'=>'return validaNumeros(event)'])!!}
		</div>
	</div>
	<div class="form-group">	
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('ubicacion','Referencia Domiciliaria:')!!}
			{!!Form::text('ubicacion',null,['id'=>'ubicacion','class'=>'form-control', 'placeholder'=>'Ingresa una referencia dommiciliaria', 'maxlength'=>'45', 'onkeypress'=>'return validaLetrasEspacioYNumeros(event)'])!!}
		</div>
	</div>
</div>