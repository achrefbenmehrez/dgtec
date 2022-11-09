<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Commande;
use App\Models\Product;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $livres = Commande::where('etat', 'Livré')->count();
        $enCours = Commande::where('etat', 'En cours')->count();
        $dernierProduit = Product::latest()->first()->name;
        $userCount = User::count();

        return view('back.index', [
            'livres' => $livres,
            'enCours' => $enCours,
            'dernierProduit' => $dernierProduit,
            'userCount' => $userCount
        ]);
    }
}
