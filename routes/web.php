<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProductsController::class, 'index']);

// Show create form
// Le middleware permet de vérifier est-ce que l'utilisateur est authentifié ou pas et décider de s'il faut rendre la vue
Route::get('/products/create', [ProductsController::class, 'create'])->middleware('auth');


// Show edit route
Route::get('/products/{produit}/edit', [ProductsController::class, 'edit'])->middleware('auth');


// Store product infos
Route::post('/products', [ProductsController::class, 'store'])->middleware('auth');

// Update listings
Route::put('/products/{produit}', [ProductsController::class, 'update'])->middleware('auth');

// Delete listing
Route::delete('/products/{produit}', [ProductsController::class, 'destroy'])->middleware('auth');

// Manage products
Route::get('/products/manage', [ProductsController::class, 'manage'])->middleware('auth');

// /!\ ATTENTION, TU DOIS METTRE CETTE ROUTE EN BAS SINON IL VA CONSIDERER /listings/create comme un show create
// Single listing
Route::get('/products/{produit}', [ProductsController::class, 'show']);

// Show register create forem
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New user
Route::post('/users', [UserController::class, 'store']);

// Log User Outphp artisan cache:clear,
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Le name ajouté ici permet de rediriger la méthode du middleware ver l'interface de login :
// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
// Dans ce cas ci, il retourne vers une variable home, tu peux la changer dans routeServiceProvider

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
