@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Falta pouco agora! Precisamos apenas que você valide seu e-mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Renviamos um e-mail para você com um link de validação!') }}
                        </div>
                    @endif

                    {{ __('Atens de utilizar os recursos da aplicação, por favor valide seu e-mail por meio de link de verificação que encaminhamos por email!') }}
                    {{ __('Clique no link a seguir para receber um novo email!') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Clique aqui!') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
