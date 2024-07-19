<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexClientController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\PreferenceController;
use App\Http\Controllers\ProduitCommandeController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/panier/modifier/{panier}', [PanierController::class, 'modifier'])->name('panier.modifier');


Route::get('/panier/ajoute/{produit}' ,[PanierController::class, 'ajoute'])
    ->name('panier.ajoute');
Route::get('panier/compte', [PanierController::class, 'compte']);




Route::apiResource('users', UserController::class);
Route::apiResource('stocks', StockController::class);
Route::apiResource('produits', ProduitController::class);
Route::apiResource('produitcommandes', ProduitCommandeController::class);
Route::apiResource('preferences', PreferenceController::class);
Route::apiResource('paniers', PanierController::class);
Route::apiResource('notifications', NotificationController::class);
Route::apiResource('commandes', CommandeController::class);
Route::apiResource('categories', CategorieController::class);


Route::name('client.')->group(function () {
    Route::get('/index', [IndexClientController::class, 'index'])->name('index');
});

//Auth::routes();
Route::post('/login',[UserController::class,'login']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')->middleware('auth');
Route::get('/filtre/{id}', [CategorieController::class, 'filtre'])->name('filtre');

Route::get('/recettes', function (){
    return response()->json(['message' => 'Hello World']);
});

Route::get('/mes-produits', [ProduitController::class, 'myProducts'])
    ->name('mes-produits')->middleware('auth');
