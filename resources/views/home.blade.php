@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenue</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Vous êtes connecté !
                    <div class="text-right">
                        <a href="{{ URL::route('user.index') }}"><button class="btn btn-secondary " > Entrez </button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
