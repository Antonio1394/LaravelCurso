@extends('layouts.admin')

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
			<td></td>
		</tbody>
		@endforeach
	</table>
@stop