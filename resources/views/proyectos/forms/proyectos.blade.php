<div class="container">
	<div class="form-group">		
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('Proyecto','Proyecto:')!!}
			{!!Form::text('proyecto',null,['id'=>'proyecto','class'=>'form-control', 'placeholder'=>'Ingresa el nombre del proyecto', 'maxlength'=>'80', 'onkeypress'=>'return validaLetrasEspacioYNumeros(event)'])!!}
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('Estado','Estado:')!!}
			{!!Form::checkbox('status', 'S', true, ['id'=>'status', 'class'=>'checkbox-inline'])!!}
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('FechaInicio','Fecha Inicio:')!!}
			{!!Form::date('fecha_inicio', \Carbon\Carbon::now(), ['id' => 'fecha_inicio', 'class' => 'form-control'])!!}
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('FechaFin','Fecha Fin:')!!}
			{!!Form::date('fecha_fin', \Carbon\Carbon::now(), ['id' => 'fecha_fin', 'class' => 'form-control'])!!}
		</div>
	</div>

	<div class="form-group">		
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('Presupuesto','Presupuesto:')!!}
			{!!Form::text('presupuesto',null,['id'=>'presupuesto','class'=>'form-control', 'placeholder'=>'Ingresa el presupuesto', 'maxlength'=>'9', 'onkeypress'=>'return validaNumeros(event)'])!!}
		</div>
	</div>

	<div class="form-group">		
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('Moneda','Moneda:')!!}
			{!!Form::select('moneda', ['Dólar Estadounidense' => 'Dólar estadounidense', 'Euro' => 'Euro', 'Yen Japonés' => 'Yen Japonés', 'Libra Esterlina' => 'Libra Esterlina', 'Franco Suizo' => 'Franco Suizo', 'Dólar Australiano' => 'Dólar Australiano', 'Dólar Canadiense' => 'Dólar Canadiense', 'Corona Sueca' => 'Corona Sueca', 'Dólar de Hong Kong' => 'Dólar de Hong Kong', 'Corona Noruega' => 'Corona Noruega' ], null, ['class'=>'form-control', 'id'=>'moneda'])!!}
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('Observacion','Observación:')!!}
			{!!Form::text('observacion',null,['id'=>'observacion','class'=>'form-control', 'placeholder'=>'Ingresa una observación', 'maxlength'=>'255', 'onkeypress'=>'return validaLetrasEspacioYNumeros(event)'])!!}
		</div>		
	</div>

	<div class="form-group">	
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('programa_id','Programa:')!!}
			{!!Form::select('programa_id', $programas, null, ['id'=>'programa_id', 'class'=>'form-control'])!!}
		</div>
	</div>

	<div class="form-group">	
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('organizacion_id','Organización:')!!}
			{!!Form::select('organizacion_id', $organizaciones, null, ['id'=>'organizacion_id', 'class'=>'form-control'])!!}
		</div>
	</div>

</div>