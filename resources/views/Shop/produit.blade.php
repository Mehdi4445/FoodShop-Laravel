@extends('shop')

@section('theProd')



<main role="main">
    <div class="container">
            <br><br><br>
            <div class="row justify-content-between">
                <div class="col-6">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{asset('produits/'.$produit->photo_principale)}}" alt="Card image cap">
                    </div>
                </div>
                <div class="col-6">
                    <h1 class="jumbotron-heading">{{$produit->nom}}</h1>
                    <h4>{{number_format($produit->prix_ht,2)}} TND</h4>
                    <h5>{{$produit->temps_prep}} min</h5>
                    <p class="lead text-muted">{{$produit->description}}</p>
                    @foreach($produit->tags as $tag)
                    <span class="badge-info"><a href="{{ route('voir_produits_par_tag',['id'=>$tag->id]) }}">{{$tag->nom}}</a></span>
                    @endforeach
                    <hr>
                    <label for="size">Choisissez votre taille</label>
                    <p>
                        <a href="#" class="btn btn-cart my-2 btn-block"><i class="fas fa-shopping-cart"></i> Ajouter au Panier</a>
                    </p>
                </div>
            </div>
        </div>
    <br>
@if(count($produit->recommandations) > 0)
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <h3>Vous aimerez aussi :</h3>
            </div>
            <div class="row">
                @foreach($produit->recommandations as $produit_recomm)
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="{{ asset('produits/'.$produit_recomm->photo_principale )}}" class="card-img-top img-fluid" alt="Responsive image">
                            <div class="card-body">
                            <p class="card-text ">{{$produit_recomm->description}}.</p> 
                                <div class="d-flex justify-content-end">
                                    <div class="btn-group">
                                        <a href="{{ route('voir_produit',['id'=>$produit_recomm->id]) }}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
</main>
@endsection