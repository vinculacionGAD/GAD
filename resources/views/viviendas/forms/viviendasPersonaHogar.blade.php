<div class="container">
	<div class="form-group">	
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('sectores_id','Sector:')!!}
			{!!Form::select('sectores_id', $sectores, null, ['id'=>'sectores_id', 'class'=>'form-control'])!!}
		</div>
	</div>
	<div class="form-group">	
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('TipoConstruccion','Tipo de Construcción:')!!}
			{!!Form::text('TipoConstruccion',null,['id'=>'tipo_construccion','class'=>'form-control', 'placeholder'=>'Ingresa el tipo de la vivienda'])!!}
		</div>
	</div>
	<div class="form-group">	
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('AniosVida','Años de Vida:')!!}
			{!!Form::text('AniosVida',null,['id'=>'anios_vida','class'=>'form-control', 'placeholder'=>'Ingresa el número de años de vida'])!!}
		</div>
	</div>
	<div class="form-group">	
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('Referencia Domiciliaria','Referencia Domiciliaria:')!!}
			{!!Form::text('Referencia Domiciliaria',null,['id'=>'ubicacion','class'=>'form-control', 'placeholder'=>'Ingresa una referencia dommiciliaria'])!!}
		</div>
	</div>
</div>