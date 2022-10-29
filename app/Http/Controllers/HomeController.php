<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $promos = Product::whereNotNull('dateFinPromo');
        $homePromos = $promos->take(4);

        $nouveautes = Product::latest();
        $homeNouveautes = $nouveautes->take(4);

        return view('index', [
            'promosCount' => $promos->count(),
            'homePromos' => $homePromos,
            'nouveautesCount' => $nouveautes->count(),
            'homeNouveautes' => $homeNouveautes
        ]);
    }

    public function selecteurApple()
    {
        return view("selecteur-de-memoire-apple");
    }

    public function selecteurMemoire()
    {
        return view("selecteur-de-memoire");
    }

    public function configurateurNas()
    {
        return view("configurateur-de-nas");
    }

    public function selecteurNas()
    {
        return view("selecteur-de-nas");
    }

    public function comparateurRaid()
    {
        return view("comparateur-de-raid");
    }

    public function Garantie()
    {
        return view("nasExchange");
    }
}
