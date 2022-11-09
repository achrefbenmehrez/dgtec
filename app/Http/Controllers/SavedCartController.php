<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use App\Models\SavedCart;
use Illuminate\Http\Request;

class SavedCartController extends Controller
{
    public function store()
    {
        $cart = new SavedCart();
        $cart->user_id = auth()->user()->id;
        $cart->donnees_panier = Panier::select('donnees_panier')->where('user_id', auth()->user()->id)->get()[0]['donnees_panier'];

        $cart->save();

        return response()->json(['msg', 'Le Panier a ete enregistré sous la rubrique Mon compte / Paniers']);
    }
}
