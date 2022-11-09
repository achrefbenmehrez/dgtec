<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Facture;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if (!isset($data['adresse_livraison_id'])) {
            $data['adresse_livraison_id'] = null;
            $data['type'] = "En local";
        }

        $total = app('\App\Http\Controllers\ProduitController')->getCartTotal();

        session()->put('total', $total);
        session()->put('referenceClient', isset($data['referenceClient']) ? $data['referenceClient'] : null);
        session()->put('livraisonPartielle', isset($data['livraisonPartielle']) ? $data['livraisonPartielle'] : null);
        session()->put('type', $data['type']);
        session()->put('adresse_livraison_id', $data['adresse_livraison_id']);

        return view('paniers.payement');
    }

    public function save()
    {
        $commande = new Commande();
        $commande->referenceClient = session()->get('referenceClient') ? session()->get('referenceClient') : null;
        $commande->livraisonPartielle = session()->get('livraisonPartielle') ? session()->get('livraisonPartielle') : 0;
        $commande->type = session()->get('type');
        $commande->adresse_livraison_id = session()->get('adresse_livraison_id');
        $commande->etat = 'En cours';
        $commande->user_id = auth()->user()->id;
        $commande->donnees_panier = (array) session()->get('cart');
        $commande->save();

        Facture::create([
            'commande_id' => $commande->id,
            'total' => app('\App\Http\Controllers\ProduitController')->getCartTotal(),
            'type' => 'FACTURE',
            'etat' => 'RÉGLÉE',
            'user_id' => auth()->user()->id
        ]);

        app('\App\Http\Controllers\ProduitController')->clearCart();

        return redirect()->route('client.commandes')->with('msg', 'Commande et Facture pour cette Commande Crees');
    }
}
