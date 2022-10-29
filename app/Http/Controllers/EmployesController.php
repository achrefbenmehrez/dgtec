<?php

namespace App\Http\Controllers;

use App\Models\Employes;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EmployesController extends Controller
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

        $employe = User::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'email' => $data['email'],
            'login' => $data['login'],
            'telephone' => $data['telephone'],
            'password' => Str::random(),
            'societe_id' => auth()->user()->societe_id,
            'adresse_facturation_id' => auth()->user()->adresse_facturation_id,
        ]);

        return redirect()->route('client.utilisateurs')->with('success', 'L\'employé a bien été ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employes  $employes
     * @return \Illuminate\Http\Response
     */
    public function show(Employes $employes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employes  $employes
     * @return \Illuminate\Http\Response
     */
    public function edit(Employes $employes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employes  $employes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employes $employes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employes  $employes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employes $employes)
    {
        //
    }
}
