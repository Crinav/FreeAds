<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
  ...
  <h1>Titre de la page index</h1>
  ...
</body>
</html>



@extends('layout')
@section('membres')
<h1>Tous les membres</h1>

@foreach($membres as $val)
    <h2>{{$val->fisrtname}}</h2>
    <h2>{{$val->lastname}}</h2>
    <p>{{$val->pseudo}}</p>
@endforeach
@stop
