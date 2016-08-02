<div class="form-group">
	{!! Form::label('nombre','Nombre: ')!!}
	{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre de la pelicula'])!!}
</div>

<div class="form-group">
	{!! Form::label('Elenco','Elenco: ')!!}
	{!! Form::text('cast',null,['class'=>'form-control','placeholder'=>'Ingresa el Elenco'])!!}
</div>



<div class="form-group">
	{!! Form::label('Direcion','Direccion: ')!!}
	{!! Form::text('direction',null,['class'=>'form-control','placeholder'=>'Ingresa al director'])!!}
</div>

<div class="form-group">
	{!! Form::label('Duracion','Duracion: ')!!}
	{!! Form::text('duration',null,['class'=>'form-control','placeholder'=>'Ingresa la Duracion'])!!}
</div>

<div class="form-group">
	{!! Form::label('Poster','Poster: ')!!}
	{!! Form::file('path')!!}
</div>

<div class="form-group">
	{!! Form::label('Poster','Genero: ')!!}
	{!! Form::select('genre_id',$genres)!!}
</div>