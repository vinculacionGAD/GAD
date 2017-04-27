<div class="container">
	<div class="form-group">		
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('Programa','Programa:')!!}
			{!!Form::text('programa',null,['id'=>'programa','class'=>'form-control', 'placeholder'=>'Ingresa el nombre del programa'])!!}
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-xs-12">
			{!!Form::label('Observacion','Observación:')!!}
			{!!Form::text('observacion',null,['id'=>'observacion','class'=>'form-control', 'placeholder'=>'Ingresa una observación'])!!}
		</div>		
	</div>
</div>