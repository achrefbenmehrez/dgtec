<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EmployesController extends Controller
{

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
            'password' => auth()->user()->password,
            'societe_id' => auth()->user()->societe_id,
            'adresse_facturation_id' => auth()->user()->adresse_facturation_id,
            'active' => 1
        ]);

        if (isset($data['user-new-permission-manage_carts'])) {
            $employe->givePermissionTo('gerer paniers');
        }

        if (isset($data['user-new-permission-manage_quotations'])) {
            $employe->givePermissionTo('gerer devis');
        }

        if (isset($data['user-new-permission-manage_orders'])) {
            $employe->givePermissionTo('gerer commandes');
        }

        if (isset($data['user-new-permission-manage_invoices'])) {
            $employe->givePermissionTo('gerer factures');
        }

        if (isset($data['user-new-permission-manage_contracts'])) {
            $employe->givePermissionTo('gerer contrats');
        }

        if (isset($data['user-new-permission-manage_company'])) {
            $employe->givePermissionTo('gerer societes');
        }

        if (isset($data['user-new-permission-manage_addresses'])) {
            $employe->givePermissionTo('gerer adresses');
        }

        if (isset($data['user-new-permission-manage_users'])) {
            $employe->givePermissionTo('gerer utilisateurs');
        }

        if (isset($data['user-new-permission-manage_catalogs'])) {
            $employe->givePermissionTo('gerer catalogues');
        }

        if (isset($data['user-new-permission-manage_rmas'])) {
            $employe->givePermissionTo('gerer savs');
        }

        return redirect()->route('client.utilisateurs')->with('success', 'L\'employé a bien été ajouté');
    }
}
