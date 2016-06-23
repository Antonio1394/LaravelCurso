@extends('layouts.admin')

@section('content')
<br>
	{!! Form::open()!!}
		<div class="form-group">
			{!! Form::label('Nombre: ')!!}
			{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre del usuario'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('Correo: ')!!}
			{!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingresa el Correo del usuario'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('Password: ')!!}
			{!! Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa el Password del usuario'])!!}
		</div>
		{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!! Form::close()!!}
@stop