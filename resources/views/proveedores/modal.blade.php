<div class="modal fade" id="myModal" tabindex="1" role="dialog" aria-labelledby=myModalLabel>
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Actualizar Proveedor</h4>
			</div>
			<div class="modal-body">			
				<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
				<input type="hidden" id="id">
				{!!Form::open(['id'=>'frmEditarProveedores', 'method'=>'POST'])!!}
					<div class="col-md-12 registro">
     	<div class="col-md-12 col-xs-12">
			<div class="form-group">	
				<div class="col-lg-12 col-md-12 col-xs-12">
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
		</div>
	</div>	
				{!!Form::close()!!}		
			</div>
			<div class="modal-footer">
				{!!link_to('#', $title='Actualizar' ,$attributes = ['id'=>'actualizarProveedor', 'class'=>'btn btn-primary'], $secure = null)!!}
			</div>
		</div>	
	</div>
</div>