@extends('layouts.master')

@section('title')
	Recuperar contraseña
@stop

@section('content')
	<h1>Recuperar contraseña</h1>

	<form method="post">
		<p>
			<input class="form-control" type="email" placeholder="Email" required>
		</p>
		<p>
			<input type="submit" class="btn btn-primary" value="Generar link">
		</p>
		<p>
			<a href="login">Iniciar sesión >></a>
		</p>
	</form>
@stop