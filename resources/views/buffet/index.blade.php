@extends('templates.site')

@section('titulo', 'Buffet - Início')

@section('content')
    <div class="card-columns">
        @foreach ($produtos as $prod)
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <p><span class="text-muted">Nome: </span>{{$prod->nome}}</p>
                        <p><span class="text-muted">Valor: </span>R$ <span class="brl-valor">{{$prod->valor}}</span></p>
                        <p><a href="{{route('detalhes', $prod->id)}}">ver mais</a></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection