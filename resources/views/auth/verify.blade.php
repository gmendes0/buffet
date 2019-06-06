@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifique seu endereço de email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um link de verificação foi enviado ao seu endereço de email.') }}
                        </div>
                    @endif

                    {{ __('Antes de proceder, por favor confira o email com o link de verificação.') }}
                    {{ __('Se você não recebeu o email') }}, <a href="{{ route('verification.resend') }}">{{ __('click aqui para reenviar.') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
