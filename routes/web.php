<?php

use App\Http\Controllers\AdresseLivraisonController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Back\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\EmployesController;
use App\Http\Controllers\FactureController;
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
Route::get('dashboard', [AuthController::class, 'dashboard'])->middleware(['auth', 'active']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

//Configurateurs/Selecteurs
Route::get('selecteur-de-memoire-apple', [HomeController::class, 'selecteurApple'])->name('selecteurApple');
Route::get('selecteur-de-memoire', [HomeController::class, 'selecteurMemoire'])->name('selecteurMemoire');
Route::get('configurateur-de-nas', [HomeController::class, 'configurateurNas'])->name('configurateurNas');
Route::get('selecteur-de-nas', [HomeController::class, 'selecteurNas'])->name('selecteurNas');
Route::get('comparateur-de-raid', [HomeController::class, 'comparateurRaid'])->name('comparateurRaid');

Route::post('api/getFabricants', [HomeController::class, 'getFabricants'])->name('getFabricants');
Route::post('api/getFamilles', [HomeController::class, 'getFamilles'])->name('getFamilles');
Route::post('api/getProducts', [HomeController::class, 'getProducts'])->name('getProducts');
Route::post('api/getProduct', [HomeController::class, 'getProduct'])->name('getProduct');
Route::post('api/getAnneeProd', [HomeController::class, 'getAnneesProd'])->name('getAnneeProd');
Route::post('api/getProductsParAnneeProd', [HomeController::class, 'getProductsParAnneeProd'])->name('getProductsParAnneeProd');
Route::post('api/getProductsByCapacite', [HomeController::class, 'getProductsByCapacite'])->name('getProductsByCapacite');
Route::post('api/getProductsByTypeBoitier', [HomeController::class, 'getProductsByTypeBoitier'])->name('getProductsByTypeBoitier');
Route::post('api/getProductsByTypeDD', [HomeController::class, 'getProductsByTypeDD'])->name('getProductsByTypeDD');
Route::post('api/getProductsByNbreBaies', [HomeController::class, 'getProductsByNbreBaies'])->name('getProductsByNbreBaies');
Route::post('api/getNbresBaies', [HomeController::class, 'getNbresBaies'])->name('getNbresBaies');
Route::post('api/getProductsByCapaciteInterval', [HomeController::class, 'getProductsByCapaciteInterval'])->name('getProductsByCapaciteInterval');
Route::post('api/getProductsByNbreDD', [HomeController::class, 'getProductsByNbreDD'])->name('getProductsByNbreDD');
Route::post('api/getProductsByMarqueDD', [HomeController::class, 'getProductsByMarqueDD'])->name('getProductsByMarqueDD');
Route::post('api/getProductsByTypeDDNbDD', [HomeController::class, 'getProductsByTypeDDNbDD'])->name('getProductsByTypeDDNbDD');
Route::post('api/getProductsByMarqueTypeNbre', [HomeController::class, 'getProductsByMarqueTypeNbre'])->name('getProductsByMarqueTypeNbre');

//Recherche produit
Route::get('/recherche', [HomeController::class, 'search'])->name('recherche');

//Panier
Route::post('add-to-cart', [ProduitController::class, 'addToCart'])->name('addToCart');
Route::patch('update-cart', [ProduitController::class, 'updateCart']);
Route::delete('remove-from-cart', [ProduitController::class, 'removeFromCart']);
Route::post('/ajouter-panier', [App\Http\Controllers\SavedCartController::class, 'store'])->name('storePanier');

Route::prefix('espace-client')->middleware(['auth', 'active'])->group(function () {
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

    Route::post('/ajouter-adresse-de-livraison', [AdresseLivraisonController::class, 'store'])->name('adresseLivraison.store');

    Route::post('/ajouter-devis', [DevisController::class, 'store'])->name('devis.store');

    Route::post('/terminer-commande', [CommandeController::class, 'store'])->name('commandes.store');
    Route::post('/paiement', [CommandeController::class, 'save'])->name('commandes.save');
});


//Back
Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('products', \App\Http\Controllers\Back\ProductController::class);
    Route::resource('categories', \App\Http\Controllers\Back\CategoryController::class);
    Route::resource('brands', \App\Http\Controllers\Back\BrandController::class);
    Route::resource('users', \App\Http\Controllers\Back\UserController::class);
    Route::resource('services-apres-vente', \App\Http\Controllers\Back\RMAController::class);
    Route::resource('commandes', \App\Http\Controllers\Back\CommandeController::class);
    Route::resource('devis', \App\Http\Controllers\Back\DevisController::class);
    Route::resource('societes', \App\Http\Controllers\Back\SocieteController::class);
    Route::resource('catalogues', \App\Http\Controllers\Back\CatalogueController::class);

    Route::get('telechargement/{telechargement}/{key}', [ProductController::class, 'removeTelechargement'])->name('telechargements.delete');
    Route::get('photos/{product}/{key}', [ProductController::class, 'removePhoto'])->name('photos.delete');
    Route::post('/activation', [\App\Http\Controllers\Back\UserController::class, 'activation'])->name('users.activation');
});

//Panier
Route::get('mon-panier', [PanierController::class, 'index'])->name('mon-panier');
Route::prefix('mon-panier')->middleware(['auth', 'active'])->group(function () {
    Route::get('livraison', [PanierController::class, 'livraison'])->name('livraison');
    Route::get('paiement', [PanierController::class, 'payement'])->name('payement');
});

Route::get('/products/{product:slug}', [ProduitController::class, 'show'])->name('produits.show');
Route::get('{category:slug?}', [ProduitController::class, 'index'])->name('produits.index');
