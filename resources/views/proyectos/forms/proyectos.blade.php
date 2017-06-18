<div class="container">
 <div class="col-md-12 registro">
   <div class="col-md-6 col-xs-12">
		<div class="form-group">		
			<div class="col-lg-12 col-md-12 col-xs-12">
				{!!Form::label('Proyecto','Proyecto:')!!}
				{!!Form::text('proyecto',null,['id'=>'proyecto','class'=>'form-control', 'placeholder'=>'Ingresa el nombre del proyecto', 'maxlength'=>'80', 'onkeypress'=>'return validaLetrasEspacioYNumeros(event)'])!!}
				<span id="span_proyecto"></span>
			</div>
		</div>

		<div class="form-group">
			<div class="col-lg-12 col-md-12 col-xs-12">
				{!!Form::label('FechaInicio','Fecha Inicio:')!!}
				{!!Form::date('fecha_inicio', \Carbon\Carbon::now(), ['id' => 'fecha_inicio', 'class' => 'form-control'])!!}
				<span id="span_fecha_inicio"></span>
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
				{!!Form::label('status','Estado:')!!}
				{!!Form::select('status', ['A' => 'Activo', 'P' => 'Pendiente', 'F' => 'Finalizado'], null, ['class'=>'form-control', 'id'=>'status', 'placeholder'=>'Seleccione un estado'])!!}
				<span id="span_status"></span>
			</div>
		</div>

   </div>

   <div class="col-md-6 col-sm-6 col-xs-12">
		<div class="form-group">		
			<div class="col-lg-12 col-md-12 col-xs-12">
				{!!Form::label('Moneda','Moneda:')!!}
				{!!Form::select('moneda', ['Dólar Estadounidense' => 'Dólar estadounidense', 'Euro' => 'Euro', 'Yen Japonés' => 'Yen Japonés', 'Libra Esterlina' => 'Libra Esterlina', 'Franco Suizo' => 'Franco Suizo', 'Dólar Australiano' => 'Dólar Australiano', 'Dólar Canadiense' => 'Dólar Canadiense', 'Corona Sueca' => 'Corona Sueca', 'Dólar de Hong Kong' => 'Dólar de Hong Kong', 'Corona Noruega' => 'Corona Noruega' ], null, ['class'=>'form-control', 'id'=>'moneda', 'placeholder'=>'Seleccione una moneda'])!!}
				<span id="span_moneda"></span>
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
				{!!Form::select('programa_id', $programas, null, ['id'=>'programa_id', 'class'=>'form-control', 'placeholder'=>'Seleccione un programa'])!!}
				<span id="span_programa_id"></span>
			</div>
		</div>

		<div class="form-group">	
			<div class="col-lg-12 col-md-12 col-xs-12">
				{!!Form::label('organizacion_id','Organización:')!!}
				{!!Form::select('organizacion_id', $organizaciones, null, ['id'=>'organizacion_id', 'class'=>'form-control', 'placeholder'=>'Seleccione una organización'])!!}
				<span id="span_organizacion_id"></span>
			</div>
		</div>

   </div>
 </div>
</div>