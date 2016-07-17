@extends('layouts.admin')
@section('content')
	{!! Form::open() !!}
		<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
		@include('genero.form.genero')
		{!! link_to('#',$title='Registrar',$attributes=['id'=>'registro','class'=>'btn btn-primary'],$secure=null)!!}
	{!! Form::close()!!}
@endsection