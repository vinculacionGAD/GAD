<div class="container">
	<div class="form-group">		
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('Nombre','Nombre:')!!}
			{!!Form::text('nombre',null,['id'=>'nombre','class'=>'form-control', 'placeholder'=>'Ingresa el nombre de la organización'])!!}
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('Acronimo','Acrónimo:')!!}
			{!!Form::text('acronimo',null,['id'=>'acronimo','class'=>'form-control', 'placeholder'=>'Ingresa un acrónimo'])!!}
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-sm-12">
			{!!Form::label('TipoOrganizacion','Tipo de Organización:')!!}
			{!!Form::text('TipoOrganizacion',null,['id'=>'tipo_organizacion','class'=>'form-control', 'placeholder'=>'Ingresa el tipo de organización'])!!}
		</div>		
	</div>

	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-sm-12">
			{!!Form::label('Region','Región:')!!}
			{!!Form::text('region',null,['id'=>'region','class'=>'form-control', 'placeholder'=>'Ingresa la región'])!!}
		</div>		
	</div>

	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-sm-12">
			{!!Form::label('Telefono','Teléfono:')!!}
			{!!Form::text('telefono',null,['id'=>'telefono','class'=>'form-control', 'placeholder'=>'Ingresa el número de teléfono'])!!}
		</div>		
	</div>

	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-sm-12">
			{!!Form::label('SitioWeb','Sitio Web:')!!}
			{!!Form::text('sitio_web',null,['id'=>'sitio_web','class'=>'form-control', 'placeholder'=>'Ingresa el nombre del sitio web'])!!}
		</div>		
	</div>

	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-sm-12">
			{!!Form::label('Anio','Año:')!!}
			{!!Form::text('anio',null,['id'=>'anio','class'=>'form-control', 'placeholder'=>'Ingresa el año de fundación de la organización'])!!}
		</div>		
	</div>

	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-sm-12">
			{!!Form::label('Twitter','Twitter:')!!}
			{!!Form::text('twitter',null,['id'=>'twitter','class'=>'form-control', 'placeholder'=>'Ingresa la cuenta de Twitter'])!!}
		</div>		
	</div>

	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-sm-12">
			{!!Form::label('Logotipo','Logotipo:')!!}
			{!!Form::file('logotipo')!!}
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
			{!!Form::label('pais_id','Pais:')!!}
			{!!Form::select('pais_id', $paises, null, ['id'=>'pais_id', 'class'=>'form-control'])!!}
		</div>
	</div>
</div>