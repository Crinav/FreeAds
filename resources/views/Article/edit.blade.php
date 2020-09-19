@extends('layouts.app')
@section('content')

<div class="card">

    <div class="card-header text-center">{{ __('Changer mon annonce') }}</div>

    <div class="card-body">
        <form action="{{ route('art.update', $article) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                <div class="col-md-6">
                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Prix') }}</label>

                <div class="col-md-6">
                    <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price">

                    @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="categorie" class="col-md-4 col-form-label text-md-right">{{ __('Choisissez une Catégorie') }}</label>
                <div class="col-md-6">
                <select multiple class="form-control" id="categorie" name="categorie" required>
                    <option value="immobilier">Immobilier</option>
                    <option value="emploi">Emploi</option>
                    <option value="loisir">Loisir</option>
                    <option value="mode">Mode</option>
                    <option value="vacance">Vacance</option>
                    <option value="vehicule">Vehicule</option>
                    <option value="multimedia">Multimédia</option>
                    <option value="maison">Maison</option>
                    <option value="divers">Divers</option>
                  </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="desc" class="col-md-4 col-form-label text-md-right">{{ __('Texte de l\'annonce') }}</label>

                <div class="col-md-6">
                    <input id="desc" type="textarea" class="form-control @error('desc') is-invalid @enderror" name="desc" value="{{ old('desc') }}" required autocomplete="desc">

                    @error('desc')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">

            <label class="col-md-4 col-form-label text-md-right">{{ __('4 photos maximum') }}</label>
            <div class="col-md-6">
                <input type="text" name="img0" id="img0" class="form-control @error('img') is-invalid @enderror" value="{{ old('img0') }}" required autocomplete="desc">
                <input type="text" name="img1" id="img1" class="form-control @error('img') is-invalid @enderror" value="{{ old('img1') }}"  autocomplete="desc">
                <input type="text" name="img2" id="img2" class="form-control @error('img') is-invalid @enderror" value="{{ old('img2') }}"  autocomplete="desc">
                <input type="text" name="img3" id="img3" class="form-control @error('img') is-invalid @enderror" value="{{ old('img3') }}"  autocomplete="desc">

            </div>
            </div>
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Changer') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
