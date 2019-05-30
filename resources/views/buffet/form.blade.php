@extends('templates.site')

@section('titulo', 'Novo Produto')

@section('content')
    <div class="text-center">
        <h3 class="text-muted">Novo Produto</h3>
    </div>

    @if(isset($errors))
        @if(count($errors) > 0)
            @foreach($errors->all() as $erro)
                <div class="alert alert-danger col-sm-5">
                    {{$erro}}
                </div>
            @endforeach
        @endif
    @endif
    
    <form action="{{route('cadastrar')}}" method="post">
        <div class="form-group row">
            <label for="nome" class="col-sm-1 col-form-label">Nome:</label>
            <div class="col-sm-4">
                <input type="text" name="nome" id="nome" class="form-control" value="{{!empty(old('nome')) ? old('nome') : ''}}"/>
            </div>
        </div>
        <div class="form-group row">
            <label for="valor" class="col-sm-1 col-form-label">Valor:</label>
            <div class="col-sm-4">
                <input type="text" name="valor" id="valor" class="form-control" value="{{!empty(old('valor')) ? old('valor') : ''}}"/>
            </div>
        </div>
        <input type="submit" value="salvar" class="btn btn-primary"/>
        @csrf()
    </form>
@endsection