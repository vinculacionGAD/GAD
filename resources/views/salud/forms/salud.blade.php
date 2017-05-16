<div class="container">
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			<h5>Datos de Discapacidades</h5>
		</div>
	</div>	
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('Embarazo','Embarazo:')!!}
			{!!Form::select('embarazo', ['S' => 'Si', 'N' => 'No'], null, ['class'=>'form-control', 'id'=>'embarazo'])!!}
		</div>		
	</div>
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('fecha_parto','Fecha Estimada Parto:')!!}
			{!!Form::date('fecha_parto', \Carbon\Carbon::now(), ['id' => 'fecha_parto', 'class' => 'form-control'])!!}
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('Enfermedad Crónica','Enfermedad Crónica:')!!}
			{!!Form::select('enfermedad_cronica', ['S' => 'Si', 'N' => 'No'], null, ['class'=>'form-control', 'id'=>'enfermedad_cronica'])!!}
		</div>		
	</div>
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('Detalle Enfermedad Cronica','Detalle Enfermedad Crónica:')!!}
			{!!Form::text('detalle_enfermedad_cronica',null,['id'=>'detalle_enfermedad_cronica','class'=>'form-control', 'placeholder'=>'Ingresa un detalle de la enfemedad crónica', 'maxlength'=>'255', 'onkeypress'=>'return validaLetrasEspacioYNumeros(event)'])!!}
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('Afectación Desastre','Afectación Desastre:')!!}
			{!!Form::select('afectacion_desastre', ['S' => 'Si', 'N' => 'No'], null, ['class'=>'form-control', 'id'=>'afectacion_desastre'])!!}
		</div>		
	</div>
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('Detalle Afectacion Desastre','Detalle Afectación Desastre:')!!}
			{!!Form::text('detalle_afectacion_desastre',null,['id'=>'detalle_afectacion_desastre','class'=>'form-control', 'placeholder'=>'Ingresa un detalle de la afectación del desastre', 'maxlength'=>'255', 'onkeypress'=>'return validaLetrasEspacioYNumeros(event)'])!!}
		</div>
	</div>
	<div class="form-group">	
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('discapacidad_id','Discapacidad:')!!}
			{!!Form::select('discapacidad_id', $discapacidades, null, ['id'=>'discapacidad_id', 'class'=>'form-control'])!!}
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
			<hr/>
		</div>
	</div>
</div>