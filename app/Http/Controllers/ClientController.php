<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('client.index');
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
        return view('client.adresses');
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
