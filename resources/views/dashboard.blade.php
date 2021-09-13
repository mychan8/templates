@extends('layouts/template')

@section('pretitle')
	<h5 style="color: gray;">¡Panel de control de</h5>
@endsection

@section('subtitle', "Gestiona tus publicaciones o crea una nueva")

@section('main')
	<a href="{{ URL::asset('logout') }}">Salir de sesión</a>
@endsection