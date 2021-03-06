@extends('templates.site')

@section('titulo', 'Buffet - '.$prod->nome)

@section('content')
    <h1 class="text-center">{{$prod->nome}}</h1>
    <p><span class="text-muted">Nome: </span><span>{{$prod->nome}}</span></p>
    <p><span class="text-muted">Valor: </span><span>{{$prod->valor}}</span></p>
    @if(Auth::check() && Auth::user()->nivel <= 2)        
        <a href="{{route('atualizar', $prod->id)}}" class="btn btn-warning">Editar</a>
        <form action="{{route('delete', $prod->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" class="btn btn-danger" value="Apagar"/>
        </form>
    @endif
@endsection