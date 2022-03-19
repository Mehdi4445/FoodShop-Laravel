<?php

namespace App\Http\Controllers\Shop;

use Cart;
use App\Models\Produit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function add(Request $request){

        $produit = Produit::find($request->id);

        Cart::add(array(
            array(
                'id' => $produit->id,
                'name' => $produit->nom,
                'price' => $produit->prix_ht,
                'quantity' => $request->qte,
                'attributes' => array('portion'=>$request->portion)
            ))
        );

        return redirect(route('cart_index'));
    }

    public function index(){
        $content = Cart::getContent();
        dd($content);
    }

}
