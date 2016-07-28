@extends('layouts.admin')
	@section('content')
		@include('alerts.request')
			{!! Form::open(['route'=>'pelicula.store','method'=>'POST','files'=>true])!!}

	@endsection