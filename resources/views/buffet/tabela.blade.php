@extends('templates.site')

@section('titulo', 'Buffet - Lista')

@section('content')
    <table class="table text-center">
        <thead class="table-dark">
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Valor</td>
                <td>Ações</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($produtos as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nome}}</td>
                    <td>{{$item->valor}}</td>
                    <td>
                        <a href="#" class="btn btn-danger">Deletar</a>
                        <a href="#" class="btn btn-warning">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection