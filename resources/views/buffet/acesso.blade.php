@extends('templates.erro')

@section('titulo', 'Acesso Inválido')

@section('content')
    <meta http-equiv="refresh" content="3; url={{route('inicio')}}">
    <span class="erro-custom"><span>Acesso Inválido | <span class="text-muted">nível requerido: {{$nivel}}</span></span>
@endsection