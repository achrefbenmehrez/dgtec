<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RMA extends Model
{
    protected $fillable = [
        'type',
        'numero',
        'date',
        'societe_id',
        'adresse_facturation_id',
    ];

    use HasFactory;

    public function societe()
    {
        return $this->belongsTo(Societe::class);
    }

    public function adresseFacturation()
    {
        return $this->belongsTo(AdresseFacturation::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function facture()
    {
        return $this->belongsTo(Facture::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function commande()
    {
        return $this->belongsTo(Commande::class);
    }
}
