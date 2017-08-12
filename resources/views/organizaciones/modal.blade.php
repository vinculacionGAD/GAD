<div class="modal fade" id="myModal" tabindex="1" role="dialog" aria-labelledby=myModalLabel>
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Actualizar Organizaciones</h4>
			</div>
			<div class="modal-body">			
				<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
				<input type="hidden" id="id">
				{!!Form::open(['files'=>true, 'id'=>'frmEditaOrganizaciones', 'method'=>'POST'])!!}
					<div class="container">
						<div class="col-md-12 registro">
    					 <div class="col-md-6 col-xs-12">
								<div class="form-group">		
									<div class="col-lg-12 col-md-12 col-xs-12">
										{!!Form::label('Nombre','Nombre:')!!}
										{!!Form::text('nombre',null,['id'=>'nombre','class'=>'form-control', 'placeholder'=>'Ingresa el nombre de la organización', 'maxlength'=>'100', 'onkeypress'=>'return validaLetrasEspacioYNumeros(event)'])!!}
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-12 col-md-12 col-xs-12">
										{!!Form::label('Acronimo','Acrónimo:')!!}
										{!!Form::text('acronimo',null,['id'=>'acronimo','class'=>'form-control', 'placeholder'=>'Ingresa un acrónimo', 'maxlength'=>'10', 'onkeypress'=>'return validaLetrasEspacioYNumeros(event)'])!!}
									</div>
								</div>

								<div class="form-group">
									<div class="col-lg-12 col-md-12 col-sm-12">
										{!!Form::label('tipo_organizacion','Tipo Organización:')!!}
										{!!Form::select('tipo_organizacion', ['Publica' => 'Pública', 'Privada' => 'Privada'], null, ['class'=>'form-control', 'id'=>'tipo_organizacion'])!!}
									</div>		
								</div>

								<div class="form-group">
									<div class="col-lg-12 col-md-12 col-sm-12">
										{!!Form::label('Region','Región:')!!}
										{!!Form::text('region',null,['id'=>'region','class'=>'form-control', 'placeholder'=>'Ingresa la región', 'maxlength'=>'30', 'onkeypress'=>'return validaLetrasYEspacio(event)'])!!}
									</div>		
								</div>

								<div class="form-group">
									<div class="col-lg-12 col-md-12 col-sm-12">
										{!!Form::label('Telefono','Teléfono:')!!}
										{!!Form::text('telefono',null,['id'=>'telefono','class'=>'form-control', 'placeholder'=>'Ingresa el número de teléfono', 'maxlength'=>'10', 'onkeypress'=>'return validaNumeros(event)'])!!}
									</div>		
								</div>

								<div class="form-group">
									<div class="col-lg-12 col-md-12 col-xs-12">
										{!!Form::label('Logotipo','Logotipo:')!!}
										{!!Form::file('logotipo')!!}	
									</div>
								</div>
			                     
			           </div>
				         <div class="col-md-6 col-sm-6 col-xs-12">   
									<div class="form-group">
										<div class="col-lg-12 col-md-12 col-sm-12">
											{!!Form::label('SitioWeb','Sitio Web:')!!}
											{!!Form::text('sitio_web',null,['id'=>'sitio_web','class'=>'form-control', 'placeholder'=>'Ingresa el nombre del sitio web', 'maxlength'=>'45'])!!}
										</div>		
									</div>

									<div class="form-group">
										<div class="col-lg-12 col-md-12 col-sm-12">
											{!!Form::label('Anio','Año:')!!}
											{!!Form::text('anio',null,['id'=>'anio','class'=>'form-control', 'placeholder'=>'Ingresa el año de fundación de la organización', 'maxlength'=>'4', 'onkeypress'=>'return validaNumeros(event)'])!!}
										</div>		
									</div>

									<div class="form-group">
										<div class="col-lg-12 col-md-12 col-sm-12">
											{!!Form::label('Twitter','Twitter:')!!}
											{!!Form::text('twitter',null,['id'=>'twitter','class'=>'form-control', 'placeholder'=>'Ingresa la cuenta de Twitter', 'maxlength'=>'45'])!!}
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
											{!!Form::label('pais_id','Pais:')!!}
											{!!Form::select('pais_id', $paises, null, ['id'=>'pais_id', 'class'=>'form-control'])!!}
										</div>
									</div>

							</div>
					        
						</div>
					</div>
				{!!Form::close()!!}	
			</div>
			<div class="modal-footer">
				{!!link_to('#', $title='Actualizar' ,$attributes = ['id'=>'actualizarOrganizacion', 'class'=>'btn btn-primary'], $secure = null)!!}
			</div>
		</div>	
	</div>
</div>