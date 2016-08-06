@extends('layouts.admin')
	@include('alerts.success')
	@section('content')
		<table class="table">
			<thead>
				<th>Nombre</th>
				<th>Genero</th>
				<th>Direccion</th>
				<th>Caratula</th>
				<th>Operaciones</th>
			</thead>
			@foreach($movies as $movie)
				<tbody>
					
				</tbody>
		</table>