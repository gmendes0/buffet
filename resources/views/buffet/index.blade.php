@extends('templates.site')

@section('titulo', 'Buffet - Início')

@section('content')
<table class="table">
    <thead class="table-dark">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Valor</td>
            <td>Detalhes</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($produtos as $prod)
            <tr>
                <td>{{$prod->id}}</td>
                <td>{{$prod->nome}}</td>
                <td>{{$prod->valor}}</td>
                <td><a href="{{route('detalhes', $prod->id)}}" class="link">detalhes</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection