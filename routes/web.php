<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return "bonjour laravel";
});

Route::get('/accueil',function(){
    return "salut";
});

;
Route::get('/test',[TestController::class,'index']);
Route::get('/bonjour/{nom?}', function ($nom = 'Invité') {
    return "Bonjour, $nom !";
});
Route::get('/article/{id}', [App\Http\Controllers\TestController::class, 'showArticle']);
Route::get('/profile/{id}/{age}', function ($id, $age) {
    return "L’utilisateur $id a $age ans";
})->where(['id' => '[0-9]+', 'age' => '[0-9]+']);
