@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifiez votre adresse mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un lien de vérification d\'adresse mail vient de vous être envoyé.') }}
                        </div>
                    @endif

                    {{ __('Avant de vous connecter, cliquez sur le lien que vous avez reçu.') }}
                    {{ __('Si vous n\'avez pas reçu d\'email, veuillez vérifier votre dossier spam , sinon ') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('cliquez ici pour en recevoir un autre') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
