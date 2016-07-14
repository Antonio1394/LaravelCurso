@extends('layouts.admin')
@section('content')
	{!! Form::open() !!}
		@include('genero.form.genero')
		{!! link_to('#',$title='Registrar',$attributes=['id'=>'registro','class'=>'btn btn-primary'],$secure=null)!!}
	{!! Form::close()!!}
@endsection