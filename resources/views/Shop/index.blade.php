@extends('home')
@section('ProdsHome')
<div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        
      @foreach($produits as $produit)        
      <div class="col">
          <div class="card shadow-sm">
          <img class="bd-placeholder-img card-img-top" role="img" src="{{asset('produits/'.$produit->photo_principale)}}">
            <div class="card-body">
              <h2 >{{$produit->nom}}</h2>
              <p class="card-text ">{{$produit->description}}.</p>
              <h3 class="text-danger">{{$produit->prix_ht}} TND</h3>
              <div class="d-flex justify-content-between  align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
           @endforeach
  </div>
  @endsection