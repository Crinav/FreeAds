
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
                    @foreach ($article as $art)
                    <div class="col-md-4 mb-2">
                        <div class="thumbnail p-3" style="border:solid 2px #000000;">

                            <p><b>Titre de l'annonce : </b><a href="{{ route('art.showOne', $art->id) }}">{{ $art->title }}</a></p>
                            <div class="caption">
                                <img src="<?= $art->photo ?>" alt="" style="width:100%">
                              <p><b>prix : </b>{{ $art->price }}</p>
                              <p><b>description : </b>{{ $art->desc }}</p>
                              <p><b>Date de parution : </b>{{ substr($art->created_at , 0, 10) }}</p>

                            </div>
                            <button class="btn btn-success"><a class="button is-warning" href="{{route('mess.create',$art->id)}}">Contacter l'annonceur</a></button>

                        </div>
                      </div>
                        @endforeach
                <footer class="card-footer">
                    {{ $article->links() }}
                </footer>
                  </div>
            </div>
        </section>

    @endsection
