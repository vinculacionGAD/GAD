@extends ('layouts.app')

@section('content')
	{!!Form::open()!!}

		@include('alerts.success')
		<input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
		@include('Viviendas.forms.viviendas')
		{!!link_to('#', $title='Registrar', $attributes = ['id'=>'registroVivienda','class'=>'btn btn-primary'], $secure = null)!!}
	{!!Form::close()!!}
@endsection