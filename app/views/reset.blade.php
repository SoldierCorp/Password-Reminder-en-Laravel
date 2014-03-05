@extends('layouts.master')

@section('title')
	Cambiar contraseña
@stop

@section('content')
	<h1>Cambiar contraseña</h1>

	<form method="post">
		<p>
			<input class="form-control" type="password" placeholder="Nueva contraseña" required>
		</p>
		<p>
			<input class="form-control" type="password" placeholder="Repetir contraseña" required>
		</p>
		<p>
			<input type="submit" class="btn btn-primary" value="Cambiar contraseña">
		</p>
		<p>
			<a href="login">Iniciar sesión >></a>
		</p>
	</form>
@stop