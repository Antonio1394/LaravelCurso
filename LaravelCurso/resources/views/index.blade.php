@extends('layouts.principal')

@section('menu')
	<li><a class="active" href="{!!URL::to('/')!!}"><i class="home"></i></a></li>
	<li><a href="{!!URL::to('reviews')!!}"><div class="cat"><i class="watching"></i><i class="watching1"></i></div></a></li>
	<li><a href="{!!URL::to('contacto')!!}"><div class="cnt"><i class="contact"></i><i class="contact1"></i></div></a></li>
@endsection

@section('content')


	<div class="header">
		<div class="top-header">
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" alt="" /></a>
				<p>Movie Theater</p>
			</div>
			<div class="search">
				<form>
					<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
					<input type="submit" value="">
				</form>
			</div>
			<div class="clearfix"></div>
		</div>

		<div class="header-info">
			<h1>BIG HERO 6</h1>
			{!!Form::open()!!}
				<div class="form-group">
					{!!Form::label('correo','Correo:')!!}
					{!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu correo'])!!}
				</div>
				<div class="form-group">
					{!!Form::label('contrasena','Contraseña:')!!}
					{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña'])!!}
				</div>

				{!!Form::submit('Iniciar',['class'=>'btn btn-primary'])!!}
			{!!Form::close()!!}
			{!!link_to('password/email', $title = 'Olvidaste tu contraseña', $attributes = null, $secure = null)!!}
		</div>
	</div>
	<div class="review-slider">
		<ul id="flexiselDemo1">
			<li><img src="images/r1.jpg" alt=""/></li>
			<li><img src="images/r2.jpg" alt=""/></li>
			<li><img src="images/r3.jpg" alt=""/></li>
			<li><img src="images/r4.jpg" alt=""/></li>
			<li><img src="images/r5.jpg" alt=""/></li>
			<li><img src="images/r6.jpg" alt=""/></li>
		</ul>
	</div>

@stop