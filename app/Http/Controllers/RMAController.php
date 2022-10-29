<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Facture;
use App\Models\Product;
use App\Models\RMA;
use App\Models\User;
use Illuminate\Http\Request;

class RMAController extends Controller
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

        switch ($data['type']) {
            case 'FACTURE':
                $facture = Facture::find($data['numero']);
                if ($facture) {
                    RMA::create([
                        'type' => $data['type'],
                        'numero' => $data['numero'],
                        'date' => now(),
                        'societe_id' => auth()->user()->societe_id,
                        'adresse_facturation_id' => auth()->user()->adresse_facturation_id,
                        'facture_id' => $data['numero']
                    ]);
                    return redirect()->back()->with('success', 'Le RMA a bien été ajouté');
                }


                break;
            case 'SERIE':
                $rma = RMA::find($data['numero']);
                if ($rma) {
                    RMA::create([
                        'type' => $data['type'],
                        'numero' => $data['numero'],
                        'date' => now(),
                        'societe_id' => auth()->user()->societe_id,
                        'adresse_facturation_id' => auth()->user()->adresse_facturation_id,
                        'rma_id' => $data['numero']
                    ]);
                    return redirect()->back()->with('success', 'Le RMA a bien été ajouté');
                }

                break;
            case 'CODART':
                $codart = Product::find($data['numero']);
                if ($codart) {
                    RMA::create([
                        'type' => $data['type'],
                        'numero' => $data['numero'],
                        'date' => now(),
                        'societe_id' => auth()->user()->societe_id,
                        'adresse_facturation_id' => auth()->user()->adresse_facturation_id,
                        'codart' => $data['numero']
                    ]);
                    return redirect()->back()->with('success', 'Le RMA a bien été ajouté');
                }

                break;
            case 'COMMANDE':
                $commande = Commande::find($data['numero']);
                if ($commande) {
                    RMA::create([
                        'type' => $data['type'],
                        'numero' => $data['numero'],
                        'date' => now(),
                        'societe_id' => auth()->user()->societe_id,
                        'adresse_facturation_id' => auth()->user()->adresse_facturation_id,
                        'commande_id' => $data['numero']
                    ]);
                    return redirect()->back()->with('success', 'Le RMA a bien été ajouté');
                }

                break;
            case 'CDECLI':
                $client = User::find($data['numero']);
                if ($client) {
                    RMA::create([
                        'type' => $data['type'],
                        'numero' => $data['numero'],
                        'date' => now(),
                        'societe_id' => auth()->user()->societe_id,
                        'adresse_facturation_id' => auth()->user()->adresse_facturation_id,
                        'client_id' => $data['numero']
                    ]);

                    break;
                }
        }

        return redirect()->back()->with('error', "Le numéro de " . $data['type'] . " n'existe pas");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RMA  $rMA
     * @return \Illuminate\Http\Response
     */
    public function show(RMA $rMA)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RMA  $rMA
     * @return \Illuminate\Http\Response
     */
    public function edit(RMA $rMA)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RMA  $rMA
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RMA $rMA)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RMA  $rMA
     * @return \Illuminate\Http\Response
     */
    public function destroy(RMA $rMA)
    {
        //
    }
}
