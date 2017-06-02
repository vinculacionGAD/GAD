<div class="modal fade" id="myModal" tabindex="1" role="dialog" aria-labelledby=myModalLabel>
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Actualizar Cuerpo de Bombero</h4>
			</div>
			<div class="modal-body">			
				<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
				<input type="hidden" id="id">
				{!!Form::open(['class'=>'form-horizontal', 'id'=>'frmEditaBombero', 'method'=>'POST'])!!}
					<div class="col-md-12 registro">
		        		<div class="col-md-6 col-xs-12">
							@include('recursos.forms.recursos')	
						</div>	
						<div class="col-md-6 col-sm-6 col-xs-12"> 		
							@include('bomberos.forms.bomberos')
							<br>					
						</div>		
						<br/>			
					</div>
				{!!Form::close()!!}	
			</div>
			<div class="modal-footer">
				{!!link_to('#', $title='Actualizar' ,$attributes = ['id'=>'actualizarBombero', 'class'=>'btn btn-primary'], $secure = null)!!}
			</div>
		</div>	
	</div>
</div>