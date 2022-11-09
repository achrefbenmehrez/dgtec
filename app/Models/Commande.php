<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $fillable = [
        'donnees_panier',
        'user_id',
        'adresse_livraison_id',
        'etat',
        'type',
        'livraisonPartielle',
        'referenceClient'
    ];

    protected $casts = [
        'donnees_panier' => 'array'
    ];

    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function adresseLivraison()
    {
        return $this->belongsTo(AdresseLivraison::class);
    }

    public function facture()
    {
        return $this->hasOne(Facture::class);
    }
}
