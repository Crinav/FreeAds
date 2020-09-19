@extends('layouts.app')
@section('content')


<section class="hero">


    <section class="caption">
        <h2 class="caption">Free ADS</h2>
        <h3 class="properties">Site de petites annonces</h3>
        <h2 class="text-center">Bienvenue {{$user->name}} </h2><br><br>
<div class="text-center">
 <p>Mon Nom : <b>{{$user->name}}</b></p>

    <p>Mon Email : <b>{{$user->email}}</b></p>
    <p>Ma date d'inscription : <b>{{$user->created_at}}</b></p>
    <a href="{{ route('user.edit', $user->id) }}"><button class='btn btn-success text-center'>Changer mes informations</button></a><br><br>

    <a href="{{ route('user.destroy', $user->id) }}"><button class='btn btn-danger text-center'>Supprimer mon profil</button></a><br><br>
    <br>
</div>
    </section>

</section>



@endsection
