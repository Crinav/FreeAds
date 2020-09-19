@extends('layouts.app')
        @section('content')

        <section class="hero">


                <section class="caption">
                    <h2 class="caption">Free ADS</h2>
                    <h3 class="properties">Site de petites annonces</h3>
                </section>
        </section>



        <section class="listings">
            <div class="wrapper">
                <div class="row">
                    <div class="col-md-4 mb-2 text-center">
                        <div class="thumbnail p-3" style="border:solid 2px #000000;">

                        @foreach ($photo as $item)

                          <img src="{{ $item->img }}" alt="{{$article->title}}" style="width:100%">

                        @endforeach
                            <div class="caption">
                              <p>Titre de l'annonce : {{$article->title}}</p>
                              <p>prix : {{ $article->price }}</p>
                              <p>description : {{ $article->desc }}</p>
                              <p>Date de parution : {{ $article->created_at }}</p>
                              <button class="btn btn-success"><a class="button is-warning" href="{{route('art.edit',$article->id)}}">Editer </a></button>
                              <button class="btn btn-danger"><a class="button is-warning" href="{{route('art.destroy',$article->id)}}">supprimer </a></button>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </section>
@endsection
