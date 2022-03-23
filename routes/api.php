<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Shop\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/registerForm', [App\Http\Controllers\Shop\AuthController::class,'RegisterForm'])->name('registerForm');

Route::post('/registerUser', [App\Http\Controllers\Shop\AuthController::class,'register'])->name('registerUser');

Route::get('/Feedback', [App\Http\Controllers\Shop\MainController::class,'feedback'])->name('feedback');

Route::group(['middleware' => ['auth:sanctum']], function() {

});
 
//Route::middleware('auth:sanctum')->get('/user', function () {
    
//});
