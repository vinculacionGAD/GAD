@extends('layouts.app')
@section('content')
	{!!Form::open(['class'=>'form-horizontal', 'id'=>'frmProductos', 'method'=>'POST'])!!}

		<div id="msj-insert-producto" class="alert alert-success alert-dismissible" role="alert" style="display: none">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>Producto Agregado Correctamente</strong>
		</div>

		<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 

		@include('productos.forms.productos')			

		<div class="form-group">
			<div class="col-md-6 col-xs-12">
				{!!link_to('#', $title='Registrar', $attributes = ['id'=>'registroProducto','class'=>'btn btn-primary'], $secure = null)!!}
			</div>
		</div>
		
	{!!Form::close()!!}		
@endsection