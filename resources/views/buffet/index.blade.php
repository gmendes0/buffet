@extends('templates.site')

@section('titulo', 'Buffet - Início')

@section('pre')
    <div id="carouselIndex" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{url('assets/site/buffet/imgs/carousel/0.jpg')}}"/>
            </div>
        </div>
    </div>
@endsection

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