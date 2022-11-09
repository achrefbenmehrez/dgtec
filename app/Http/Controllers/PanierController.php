<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Panier;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('paniers.index');
    }

    public function livraison()
    {
        return view('paniers.livraison');
    }

    public function payement()
    {
        return view('paniers.payement');
    }
}
