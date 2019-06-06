@extends('templates.site')

@section('titulo', 'Buffet - Início')

@section('pre')
    <div id="carouselIndex" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @for($i = 0; $i < $n_imgs; $i++)
                <div class="carousel-item {{$i == 0 ? 'active' : ''}}">
                    <img class="d-block w-100" src="{{url('assets/site/buffet/imgs/carousel/'.$i.'.jpg')}}"/>
                </div>
            @endfor
        </div>
    </div>
@endsection

@section('content')
    <div class="card-columns">
        @foreach ($produtos as $prod)
            <div class="card card-18">
                {{-- <img class="card-img-top" src="{{asset('storage/buffet/iten/'.$prod->id.'/thumb/')}}"/> --}}
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