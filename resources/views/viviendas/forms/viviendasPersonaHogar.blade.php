<div class="container">
	<div class="form-group">	
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('sector_id','Sector:')!!}
			{!!Form::select('sector_id', $sectores, null, ['id'=>'sector_id', 'class'=>'form-control'])!!}
		</div>
	</div>
	<div class="form-group">	
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('tipo_construccion','Tipo de Construcción:')!!}
			{!!Form::text('tipo_construccion',null,['id'=>'tipo_construccion','class'=>'form-control', 'placeholder'=>'Ingresa el tipo de la vivienda'])!!}
		</div>
	</div>
	<div class="form-group">	
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('anios_vida','Años de Vida:')!!}
			{!!Form::text('anios_vida',null,['id'=>'anios_vida','class'=>'form-control', 'placeholder'=>'Ingresa el número de años de vida'])!!}
		</div>
	</div>
	<div class="form-group">	
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('ubicacion','Referencia Domiciliaria:')!!}
			{!!Form::text('ubicacion',null,['id'=>'ubicacion','class'=>'form-control', 'placeholder'=>'Ingresa una referencia dommiciliaria'])!!}
		</div>
	</div>
</div>