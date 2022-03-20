<?php

namespace App\Http\Controllers\Shop;

use Cart;
use App\Models\Produit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Darryldecode\Cart\CartCondition;

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
                'attributes' => array('portion'=>$request->portion, 'photo'=>$produit->photo_principale, 'prix_TTC'=>$produit->prixTTC())
            ))
        );

        return redirect(route('cart_index'));
    }

    public function index(){

        $content = Cart::getContent();

        $condition = new CartCondition(array(
            'name'=>'TVA 19%',
            'type'=>'tax',
            'target'=>'total',
            'value'=>'19.0%'
        ));
        Cart::condition($condition);
        $total_ht_panier = Cart::getSubTotal();
        $total_ttc_panier = Cart::getTotal();
//        dd($total_ht_panier,$total_ttc_panier);

        $tva = $total_ttc_panier - $total_ht_panier;

        return view('cart.cart',[
            'content'=>$content,
            'total_ht_panier'=>$total_ht_panier,
            'total_ttc_panier'=>$total_ttc_panier,
            'tva'=>$tva
        ]);

       // return view('cart.cart', compact('content', 'total_ttc_panier', 'total_ht_panier', 'tva'));
    }

}
