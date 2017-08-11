<div class="container">

	<div class="form-group">	
		<div class="col-lg-6 col-md-12 col-xs-12">
			{!!Form::label('persona_id','Persona:')!!}
			<select name="persona_id" id="persona_id" class="form-control js-example-basic-single" placeholder="Seleccione una persona">
			<option value="">Seleccione una persona</option>
			@foreach($personas  as $p)
				<option value="{{$p->id}}">{{$p->persona}}</option>
			@endforeach
			</select>
			<span id="span_persona_id"></span>
		</div>
	</div>

	<div class="form-group">		
			<div class="col-lg-6 col-md-12 col-xs-12">
				{!!Form::label('Descripcion','Descripción:')!!}
				{!!Form::text('descripcion',null,['id'=>'descripcion','class'=>'form-control', 'placeholder'=>'Ingrese un detalle de la pérdida', 'maxlength'=>'255', 'onkeypress'=>'return validaLetrasEspacioYNumeros(event)'])!!}
				<span id="span_descripcion"></span>
			</div>
		</div>

	<div class="form-group">
		<div class="col-lg-6 col-md-12 col-xs-12">
			{!!Form::label('FechaPerdida','Fecha Pérdida:')!!}
			{!!Form::date('fecha_perdida', \Carbon\Carbon::now(), ['id' => 'fecha_perdida', 'class' => 'form-control'])!!}
			<span id="span_fecha_inicio"></span>
		</div>
	</div>

	<div class="form-group">		
		<div class="col-lg-6 col-md-12 col-xs-12">
			{!!Form::label('monto_estimado','Monto Estimado Pérdida:')!!}
			{!!Form::text('monto_estimado',null,['id'=>'monto_estimado','class'=>'form-control', 'placeholder'=>'Ingresa el monto estimado de pérdida', 'maxlength'=>'9', 'onkeypress'=>'return validaNumeros(event)'])!!}
			<span id="span_monto_estimado"></span>
		</div>
	</div>

</div>