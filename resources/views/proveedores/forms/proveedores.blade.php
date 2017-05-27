<div class="container">
<div class="col-md-12 registro">
     	<div class="col-md-4 col-xs-12">
			<div class="form-group">	
				<div class="col-lg-12 col-md-12 col-xs-12">
					{!!Form::label('persona_id','Persona:')!!}
					{!!Form::select('persona_id', $personas, null, ['id'=>'persona_id', 'class'=>'form-control'])!!}
				</div>
			</div>
		<br><div class="form-group">
				<div class="col-md-6 col-xs-12">
					{!!link_to('#', $title='Registrar', $attributes = ['id'=>'registroProveedor','class'=>'btn btn-primary'], $secure = null)!!}
				</div>
			</div>
		</div>
	</div>		
</div>