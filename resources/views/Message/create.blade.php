
@extends('layouts.app')
@section('content')
<h1 class="text-center">Message privé</h1>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<form action="{{ route('mess.store')}}" class="form-horizontal" method="POST">
        <fieldset>

        <!-- Text input-->
        <div class="form-group">
          <label class="control-label" for="title">Titre du message</label>
          <div>
          <input id="title" name="title" type="text" placeholder="" class="form-control" required>

          </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
          <label class="control-label" for="content">Corps du message</label>
          <div>
            <textarea class="form-control" id="content" name="content" rows="10" required></textarea>
          </div>
        </div>
        <input type="submit" value="Envoyer">
        </fieldset>
        </form></div>
        <div class="col-md-4"></div>
</div>
@endsection
