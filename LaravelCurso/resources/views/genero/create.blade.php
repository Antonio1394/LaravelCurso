@extends('layouts.admin')
@section('content')
	{!! Form::open() !!}
		<input type="hidden" name="_token" value="{{ crsf_toke() }}" id="toke">
		@include('genero.form.genero')
		{!! link_to('#',$title='Registrar',$attributes=['id'=>'registro','class'=>'btn btn-primary'],$secure=null)!!}
	{!! Form::close()!!}
@endsection