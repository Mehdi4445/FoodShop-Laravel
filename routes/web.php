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

Route::get('/accueil',[App\Http\Controllers\Shop\MainController::class,'index'])->name('accueil');

Route::get('/prod/view/{id}',[App\Http\Controllers\Shop\MainController::class,'produit'])->name('voir_produit');
