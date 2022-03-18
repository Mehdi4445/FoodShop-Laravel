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
              <span class="badge-info"><a href="{{ route('voir_produits_par_cat',['id'=>$produit->category->id]) }}">{{$produit->category->nom}}</a></span>
              <p class="card-text ">{{$produit->description}}.</p> 
              <div class="d-flex justify-content-between align-items-center">
                                <span class="price">{{ number_format($produit->prix_ht,2) }} TND</span>
                                <a href="{{ route('voir_produit',['id'=>$produit->id]) }}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                            </div>
                <small class="text-muted">Prepation : {{$produit->temps_prep}} min</small>
            </div>
          </div>
        </div>
           @endforeach
  </div>
  @endsection