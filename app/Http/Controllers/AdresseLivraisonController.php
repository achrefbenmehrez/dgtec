<?php

namespace App\Http\Controllers;

use App\Models\AdresseLivraison;
use Illuminate\Http\Request;

class AdresseLivraisonController extends Controller
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
        $data = $request->validate([
            'address1' => 'required',
            'postcode' => 'required',
            'city' => 'required',
            'country' => 'required',
            'name' => 'required'
        ]);

        AdresseLivraison::create([
            'destinataire' => $data['name'],
            'adresse' => $data['address1'],
            'complement' => $request->address2,
            'code_postal' => $data['postcode'],
            'ville' => $data['city'],
            'pays' => $data['country'],
            'user_id' => auth()->user()->id
        ]);

        return redirect()->back()->with('status', 'Adresse de livraison ajoutée avec succés');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdresseLivraison  $adresseLivraison
     * @return \Illuminate\Http\Response
     */
    public function show(AdresseLivraison $adresseLivraison)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdresseLivraison  $adresseLivraison
     * @return \Illuminate\Http\Response
     */
    public function edit(AdresseLivraison $adresseLivraison)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdresseLivraison  $adresseLivraison
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdresseLivraison $adresseLivraison)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdresseLivraison  $adresseLivraison
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdresseLivraison $adresseLivraison)
    {
        //
    }
}
