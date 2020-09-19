@extends('layouts.app')
    @section('content')
    <form action="/article/found" class="form-horizontal" method="post">
        <fieldset>

        <!-- Form Name -->
        <legend>Recherche d'annonce</legend>

        <!-- Search input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="searchinput">Par Titre</label>
          <div class="col-md-4">
            <input id="searchinput" name="searchinput" type="search" placeholder="titre d'annonce" class="form-control input-md">

          </div>
        </div>

        <!-- Search input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="price">Par Prix en Euros</label>
          <div class="col-md-4">
            <input id="price" name="price" type="search" placeholder="20" class="form-control input-md">

          </div>
        </div>

        <!-- Search input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="desc">Par description</label>
          <div class="col-md-4">
            <input id="desc" name="desc" type="search" placeholder="" class="form-control input-md">
            <p class="help-block">indiquer un mot recherché</p>
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="date">Par Date</label>
          <div class="col-md-4">
          <input id="date" name="date" type="text" placeholder="" class="form-control input-md">

          </div>
        </div>

        <!-- Select Multiple -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="categorie">Par Categories</label>
          <div class="col-md-4">
            <select id="categorie" name="categorie" class="form-control" multiple="multiple">
              <option value="immobilier">Immobilier</option>
              <option value="emploi">Emploi</option>
              <option value="loisir">Loisir</option>
              <option value="mode">Mode</option>
              <option value="vacance">Vacance</option>
              <option value="vehicule">Vehicule</option>
              <option value="multimedia">Multimédia</option>
              <option value="maison">Maison</option>
              <option value="divers">divers</option>
            </select>
          </div>
        </div>

        </fieldset>
        </form>


    @endsection
