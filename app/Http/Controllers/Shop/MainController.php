<?php

namespace App\Http\Controllers\Shop;

use App\Models\Tag;
use App\Models\Produit;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index(){

        $produits = Produit::with('category')->get();
        //dd($produits);
        return view('shop.index', compact('produits'));

    }

    public function produit(Request $request){

        $produit = Produit::find($request->id);

        return view('shop.produit', compact('produit'));

    }

    public function filterCat(Request $request){

       $category = Category::find($request->id);
       $produits = $category->produits();

        return view('shop.categorie', compact('produits', 'category'));
    }

    public function filterTag(Request $request){

        $tag = Tag::find($request->id);
        $produits = $tag->produits;
 
         return view('shop.categorie', compact('produits', 'tag'));
     }
}
