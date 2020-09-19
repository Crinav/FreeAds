@extends('layouts.app')
        @section('content')

        <section class="hero">

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
                              <button class="btn btn-success"><a class="button is-warning" href="{{route('mess.create',$article->id)}}">Contacter l'annonceur</a></button>

                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </section>
@endsection
