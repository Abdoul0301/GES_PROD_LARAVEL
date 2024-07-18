<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexClientController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProduitCommandeController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [IndexClientController::class, 'index'])
    ->name('index');
//Route::post('/panier/modifier/{panier}', [PanierController::class, 'modifier'])->name('panier.modifier');
//
//
//Route::get('/panier/ajoute/{produit}' ,[PanierController::class, 'ajoute'])
//    ->name('panier.ajoute')->middleware('auth');
//
//
//
//Route::resources([
//    'users' => UserController::class,
//    'stocks' => StockController::class,
//    'produits'=>ProduitController::class,
//    'produitcommandes'=>ProduitCommandeController::class,
//    'preferences'=>\App\Http\Controllers\PreferenceController::class,
//    'paniers'=>\App\Http\Controllers\PanierController::class,
//    'notifications'=>\App\Http\Controllers\NotificationController::class,
//    'commandes'=>\App\Http\Controllers\CommandeController::class,
//    'categories'=>\App\Http\Controllers\CategorieController::class,
//]);
//
//Route::name('client.')->group(function () {
//    Route::get('/index', [IndexClientController::class, 'index'])->name('index');
//});
//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
//Route::get('/admin/dashboard', [DashboardController::class, 'index'])
//    ->name('dashboard')->middleware('auth');
//Route::get('/filtre/{id}', [CategorieController::class, 'filtre'])->name('filtre');
//
//Route::get('/recettes', function (){
//   return view('recettes.index');
//});
//
//Route::get('/mes-produits', [ProduitController::class, 'myProducts'])
//    ->name('mes-produits')->middleware('auth');
