<div class="container">

	<div class="form-group">		
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('Producto','Producto:')!!}
			{!!Form::text('producto',null,['id'=>'producto','class'=>'form-control', 'placeholder'=>'Ingresa el nombre del producto', 'maxlength'=>'100', 'onkeypress'=>'return validaLetrasEspacioYNumeros(event)'])!!}
			<span id="span_producto"></span>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('fecha_elaboracion','Fecha Elaboración:')!!}
			{!!Form::date('fecha_elaboracion', \Carbon\Carbon::now(), ['id' => 'fecha_elaboracion', 'class' => 'form-control'])!!}
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('fecha_caducidad','Fecha Caducidad:')!!}
			{!!Form::date('fecha_caducidad', \Carbon\Carbon::now(), ['id' => 'fecha_caducidad', 'class' => 'form-control'])!!}
		</div>
	</div>

	<div class="form-group">	
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('tipo_producto_id','Tipo Producto:')!!}
			{!!Form::select('tipo_producto_id', $tipos_productos, null, ['id'=>'tipo_producto_id', 'class'=>'form-control', 'placeholder'=>'Escoja el tipo de producto'])!!}
			<span id="span_tipo_producto_id"></span>
		</div>
	</div>

</div>