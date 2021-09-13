@extends('layouts/template')

@section('subtitle', "Inicia sesión (sólo para administradores)")

@section('main')
<div style="padding: 30px; margin: 5px; flex: column; ">
	@if(isset( $error ))
		<p style="color: red;">ERROR</p>
	@endif
	<form action="dashboard" method="post" class="form">
		@csrf
		<div>
			<p>Nombre de usuario</p>
			<input type="text" name="username" maxlenght="30" value="{{ old('username') }}">
		</div>
		<div>
			<p>Contraseña</p>
			<input type="password" maxlenght="30" name="password" value="{{ old('password') }}"><br>
		</div>
		<input type="hidden" name="referrer" value="{{ Request::url() }}">
		<input type="submit" name="submit" value="Iniciar sesión" style="width: 50%; justify-content: center;">
	</form>
</div>
@endsection
