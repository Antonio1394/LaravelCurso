@extends('layouts.admin')

<?php $message=Session::get('message')?>

@if($message=='store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Usuario Creado Exitosamente!!
</div>
@endif

@section('content')
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Email</th>
			<th>Operaciones</th>
		</thead>
		@foreach($users as $user)
		<tbody>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td>
				{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-default'])!!}
			</td>
		</tbody>
		@endforeach
	</table>
@stop