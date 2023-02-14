<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;

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

Route::get('/listProduits',[ProduitController::class, 'listProduits']);

Route::post('/addProduit', [ProduitController::class, 'addProduit']);

Route::post('/updateProduit/{id}', [ProduitController::class, 'updateProduit']);

Route::get('/deleteProduit/{id}', [ProduitController::class, 'deleteProduit']);

Route::get('/form_add', [ProduitController::class, 'form_add']);

Route::get('/form_update/{id}', [ProduitController::class, 'form_update']);