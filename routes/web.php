<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
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

Route::prefix('espace-client')->group(function () {
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
});
