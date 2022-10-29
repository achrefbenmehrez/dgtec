<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\RMAController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('connexion', [AuthController::class, 'index'])->name('connexion');
Route::post('post-connexion', [AuthController::class, 'postConnexion'])->name('connexion.post');
Route::get('inscription', [AuthController::class, 'inscription'])->name('inscription');
Route::post('post-inscription', [AuthController::class, 'postInscription'])->name('inscription.post');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('selecteur-de-memoire-apple', [HomeController::class, 'selecteurApple'])->name('selecteurApple');
Route::get('selecteur-de-memoire', [HomeController::class, 'selecteurMemoire'])->name('selecteurMemoire');
Route::get('configurateur-de-nas', [HomeController::class, 'configurateurNas'])->name('configurateurNas');
Route::get('selecteur-de-nas', [HomeController::class, 'selecteurNas'])->name('selecteurNas');
Route::get('comparateur-de-raid', [HomeController::class, 'comparateurRaid'])->name('comparateurRaid');

Route::get('/la-garantie-j1-et-le-service-premium-nasexchange', [HomeController::class, 'Garantie'])->name('garantie');

Route::prefix('espace-client')->middleware('auth')->group(function () {
    Route::get('/', [ClientController::class, 'index'])->name('client.index');
    Route::get('/commandes', [ClientController::class, 'commandes'])->name('client.commandes');
    Route::get('/paniers', [ClientController::class, 'paniers'])->name('client.paniers');
    Route::get('/devis', [ClientController::class, 'devis'])->name('client.devis');
    Route::get('/catalogues-et-tarifs', [ClientController::class, 'cataloguesTarifs'])->name('client.cataloguesTarifs');
    Route::get('/adresses', [ClientController::class, 'adresses'])->name('client.adresses');
    Route::get('/factures', [ClientController::class, 'factures'])->name('client.factures');
    Route::get('/informations-societe', [ClientController::class, 'informationsSociete'])->name('client.informationsSociete');
    Route::get('/utilisateurs', [ClientController::class, 'utilisateurs'])->name('client.utilisateurs');
    Route::get('/sav', [ClientController::class, 'sav'])->name('client.sav');

    Route::post('/ajouter-un-utilisateur', [EmployesController::class, 'store'])->name('client.ajouterUtilisateur');
    Route::post('/ajouter-une-demande-de-retour', [RMAController::class, 'store'])->name('sav.store');
});


//Back
Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('produits', \App\Http\Controllers\Back\ProductController::class);
    Route::resource('categories', \App\Http\Controllers\Back\CategoryController::class);
    Route::resource('users', \App\Http\Controllers\Back\UserController::class);
    Route::resource('services-apres-vente', \App\Http\Controllers\Back\RMAController::class);
    Route::resource('commandes', \App\Http\Controllers\Back\CommandeController::class);
    Route::resource('devis', \App\Http\Controllers\Back\DevisController::class);
    Route::resource('societes', \App\Http\Controllers\Back\SocieteController::class);
});

//Panier
Route::get('mon-panier', [PanierController::class, 'index'])->name('mon-panier'); 
Route::get('add-to-cart/{formation:slug}', [\App\Http\Controllers\Front\FormationController::class, 'addToCart'])->name('addToCart');
Route::patch('update-cart', [\App\Http\Controllers\Front\FormationController::class, 'updateCart']);
Route::delete('remove-from-cart', [\App\Http\Controllers\Front\FormationController::class, 'removeFromCart']);

Route::get('{category}', [ProduitController::class, 'index'])->name('produits.index');

Route::get('/{category}/{product}', [ProduitController::class, 'show'])->name('produits.show');