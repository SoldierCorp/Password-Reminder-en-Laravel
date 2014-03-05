@extends('layouts.master')

@section('title')
	Iniciar sesión
@stop

@section('content')
	<h1>Iniciar sesión</h1>

	<form method="post">
		<p>
			<input class="form-control" placeholder="Usuario" required>
		</p>
		<p>
			<input class="form-control" type="password" placeholder="Contraseña" required>
		</p>
		<p>
			<input type="submit" class="btn btn-primary" value="Ingresar">
		</p>
		<p>
			<a href="recuperar">¿Olvidó su contraseña?</a>
		</p>
	</form>
@stop