<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return redirect('/listProduits');
});

Route::get('/',[ProduitController::class, 'index']);

Route::post('/addProduit', [ProduitController::class, 'store']);

Route::get('/form_update/{id}', [ProduitController::class, 'edit']);

Route::post('/updateProduit/{id}', [ProduitController::class, 'update']);

Route::get('/deleteProduit/{id}', [ProduitController::class, 'destroy']);

Route::get('/form_add', [ProduitController::class, 'create']);

Route::get('/details_produit/{id}', [ProduitController::class, 'show']);

Route::get('/form', [UserController::class, 'form']);

Route::post('/login', [UserController::class, 'login']);

Route::get('/logout',  [UserController::class, 'logout'] );
