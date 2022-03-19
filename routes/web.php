<?php


use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[App\Http\Controllers\Shop\MainController::class,'index']);

Route::get('/accueil',[App\Http\Controllers\Shop\MainController::class,'index'])->name('accueil');

Route::get('/prod/view/{id}',[App\Http\Controllers\Shop\MainController::class,'produit'])->name('voir_produit');

Route::get('/categorie/{id}',[App\Http\Controllers\Shop\MainController::class,'filterCat'])->name('voir_produits_par_cat');

Route::get('/tag/{id}',[App\Http\Controllers\Shop\MainController::class,'filterTag'])->name('voir_produits_par_tag');

Route::post('/panier/add/{id}',[App\Http\Controllers\Shop\CartController::class,'add'])->name('cart_add');

Route::get('/panier',[App\Http\Controllers\Shop\CartController::class,'index'])->name('cart_index');


