@extends('layouts.app')
@section('content')
	{!!Form::open(['class'=>'form-horizontal','id'=>'frmRegistraFamiliaHogares','method'=>'POST'])!!}

		<div id="msj-insert-miembrofamilia" class="alert alert-success alert-dismissible" role="alert" style="display: none">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>Miembro de Familia Agregado Correctamente</strong>
		</div>

		<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
	
		<div class="form-group">
			<div class="col-md-6 col-xs-12">
				<h1 style="font-size: 20px; font-weight: bold; color: black;">Registro de Miembros de Familia</h1>
			</div>
		</div>	

		<div class="col-md-12 col-sm-12 col-xs-12 registro">
			<div class="col-md-6 col-sm-12 col-xs-12">
				@include('personasHogares.forms.personasHogares')			
				<div class="form-group">
					<div class="col-md-12 col-xs-12">
						{!!link_to('#', $title='Registrar', $attributes = ['id'=>'registroPersonaHogar','class'=>'btn btn-primary'], $secure = null)!!}
					</div>
				</div>
			</div>	
			<div class="col-md-6 col-sm-12 col-xs-12">
				@include('salud.forms.salud')	
			</div>
		</div>
		
	{!!Form::close()!!}		
@endsection
@section('js')
<script>
$(document).ready(function() {
  			$("#persona_id").select2();
  			$("#persona_hogar_id").select2();
  			$("#parentesco").select2();
  			$("#actividad_laboral_id").select2();
  			$("#discapacidad_id").select2();
		});
</script>
@endsection