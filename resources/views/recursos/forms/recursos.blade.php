<div class="container">
	<div class="form-group">		
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('Nombre','Nombre:')!!}
			{!!Form::text('nombre_recurso',null,['id'=>'nombre_recurso','class'=>'form-control', 'placeholder'=>'Ingresa el nombre'])!!}
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('Direccion','Dirección:')!!}
			{!!Form::text('direccion',null,['id'=>'direccion','class'=>'form-control', 'placeholder'=>'Ingresa una dirección'])!!}
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('Telefono','Teléfono:')!!}
			{!!Form::text('telefono',null,['id'=>'telefono','class'=>'form-control', 'placeholder'=>'Ingresa el número de teléfono'])!!}
		</div>		
	</div>

	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('Correo','Correo:')!!}
			{!!Form::text('correo',null,['id'=>'correo','class'=>'form-control', 'placeholder'=>'Ingresa un correo'])!!}
		</div>		
	</div>

	<div class="form-group">	
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('tipo_instalacion_id','Tipo de Instalación:')!!}
			{!!Form::select('tipo_instalacion_id', $tipos_instalaciones, null, ['id'=>'tipo_instalacion_id', 'class'=>'form-control'])!!}
		</div>
	</div>
</div>