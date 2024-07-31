<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\traitementform ;

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

Route::get('/', function () {
    return view('welcome');
});
Route::post('/ajouter',[traitementform::class,'ajouter']) ;
Route::get('/afficher',[traitementform::class,'afficher']) ;
Route::get('/modifier',[traitementform::class,'selectmodif']) ;
Route::get('/supprimer',[traitementform::class,'supprimer']) ;
