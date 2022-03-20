@extends('shop')

@section('theProd')

<main role="main" class="container">
    <div class="py-3">
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    @if(isset($category))
                    @if($category->parent_id !== null) 
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('voir_produits_par_cat',['id'=>$category->parent->id]) }}">{{ $category->parent->nom }}</a></li>
                    @endif
                    <li class="breadcrumb-item active" aria-current="page">{{ $category->nom }}</li>
                    @foreach($category->enfants as $enfant)
                    <li class="breadcrumb-item active">
                        <a href="{{ route('voir_produits_par_cat',['id'=>$enfant->id]) }}">{{$enfant->nom}}</a></li>
                    @endforeach     
                    
                    @else

                    <li class="breadcrumb-item active" aria-current="page">{{ $tag->nom }}</li>

                    @endif
                </ol>
            </nav>
            <div class="row">
                @foreach($produits as $produit)
                    <div class="col-md-3">
                        <div class="card mb-4 box-shadow">
                            <img src="{{asset('produits/'.$produit->photo_principale)}}" class="card-img-top img-fluid" alt="{{ $produit->nom }}">
                            <div class="card-body">
                                <p class="card-text">{{$produit->nom}} <br> {{$produit->description}}.</p>
                                <h5>{{$produit->temps_prep}} min</h5>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price">{{ $produit->prixTTC() }} TND</span>
                                    <a href="{{route('voir_produit',['id'=>$produit->id])}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</main>

@endsection