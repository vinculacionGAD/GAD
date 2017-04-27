<div class="container">
	<div class="form-group">		
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('Sector','Sector:')!!}
			{!!Form::text('sector',null,['id'=>'sector','class'=>'form-control', 'placeholder'=>'Ingresa el nombre del sector'])!!}
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('Abreviatura','Abreviatura:')!!}
			{!!Form::text('abreviatura',null,['id'=>'abreviatura','class'=>'form-control', 'placeholder'=>'Ingresa una abreviatura'])!!}
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-sm-12">
			{!!Form::label('Ubicacion','Ubicación:')!!}
			{!!Form::text('ubicacion',null,['id'=>'ubicacion','class'=>'form-control', 'placeholder'=>'Ingresa la ubicación'])!!}
		</div>		
	</div>

	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('Observacion','Observación:')!!}
			{!!Form::text('observacion',null,['id'=>'observacion','class'=>'form-control', 'placeholder'=>'Ingresa una observación'])!!}
		</div>		
	</div>

	<div class="form-group">	
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('comunidad_id','Comunidad:')!!}
			{!!Form::select('comunidad_id', $comunidades, null, ['id'=>'comunidad_id', 'class'=>'form-control'])!!}
		</div>
	</div>
</div>