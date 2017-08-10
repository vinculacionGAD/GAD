<div class="container">
<div class="col-md-12 registro">
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
			<div class="col-md-6 col-xs-12">
				{!!link_to('#', $title='Registrar', $attributes = ['id'=>'registroProveedor','class'=>'btn btn-primary'], $secure = null)!!}
			</div>
		</div>		
	</div>		
</div>