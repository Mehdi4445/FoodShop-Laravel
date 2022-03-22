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
                    <h4>{{ $produit->prixTTC() }} TND</h4>
                    <h5>{{$produit->temps_prep}} min</h5>
                    <p class="lead text-muted">{{$produit->description}}</p>
                    @foreach($produit->tags as $tag)
                    <span class="badge-info"><a href="{{ route('voir_produits_par_tag',['id'=>$tag->id]) }}">{{$tag->nom}}</a></span>
                    @endforeach
                    <hr>
                    <form action="{{ route('cart_add', ['id'=>$produit->id]) }}" method="POST" id="panier_add">
                        @csrf
                    <label class="my-1" for="size">Choisissez votre portion :</label>
                    <select name="portion" id="portion" class="form-control my-3">
                        <option value="Portion Normal">Portion normal</option>
                        <option value="Portion Large">Portion large</option>
                        <option value="Portion Familiale">Portion Familiale</option>
                    </select>
                    <label class="my-1" for="qte">Quantité :</label>
                    <input name="qte" id="qte" type="number" value="1" class="form-control my-3"/>
                    </form>
                    <button type="submit" form="panier_add" class="btn btn-cart my-2 btn-block"><i class="fas fa-shopping-cart"></i> Ajouter au Panier</button>
                </div>
            </div>
        </div>
    <br>
    <div class="container">
            @if(count($produit->recommandations) > 0)
                <div class="album py-5 bg-light">
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
            @endif
        @comments(['model' => $produit])
    </div>
</main>
@endsection