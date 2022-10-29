<?php

namespace App\Http\Controllers;

use App\Models\AdresseLivraison;
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
        return view('client.commandes');
    }

    public function paniers()
    {
        return view('client.paniers');
    }

    public function devis()
    {
        return view('client.devis');
    }

    public function cataloguesTarifs()
    {
        return view('client.cataloguesTarifs');
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
        return view('client.factures');
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
        return view('client.sav');
    }
}
