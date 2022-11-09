<?php

namespace App\Http\Controllers;

use App\Models\AdresseLivraison;
use App\Models\Catalogue;
use App\Models\Commande;
use App\Models\Devis;
use App\Models\Facture;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function index()
    {
        $promos = Product::whereNotNull('dateFinPromo');
        $homePromos = $promos->take(4);

        $nouveautes = Product::latest();
        $homeNouveautes = $nouveautes->take(4);

        return view('client.index', [
            'promosCount' => $promos->count(),
            'homePromos' => $homePromos,
            'nouveautesCount' => $nouveautes->count(),
            'homeNouveautes' => $homeNouveautes
        ]);
    }

    public function commandes()
    {
        $commandes = auth()->user()->commandes;

        return view('client.commandes', [
            'commandes' => $commandes
        ]);
    }

    public function paniers()
    {
        $paniers = auth()->user()->savedCarts;

        return view('client.paniers', [
            'paniers' => $paniers
        ]);
    }

    public function devis()
    {
        $devis = auth()->user()->devis;

        return view('client.devis', [
            'devis' => $devis
        ]);
    }

    public function cataloguesTarifs()
    {
        $catalogues = Catalogue::all();

        return view('client.cataloguesTarifs', [
            'catalogues' => $catalogues
        ]);
    }

    public function adresses()
    {
        $adresses = Auth::user()->adressesLivraison;

        return view('client.adresses', [
            'adresses' => $adresses
        ]);
    }

    public function factures()
    {
        $factures = auth()->user()->factures;

        return view('client.factures', [
            'factures' => $factures
        ]);
    }

    public function informationsSociete()
    {
        return view('client.societes');
    }

    public function utilisateurs()
    {
        return view('client.utilisateurs');
    }

    public function sav()
    {
        $savs = auth()->user()->societe->savs;

        return view('client.sav', [
            'savs' => $savs
        ]);
    }
}
