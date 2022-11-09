<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
    protected $fillable = [
        'DateDeDevis',
        'DateDeValidite',
        'TotalHT',
        'TotalTTC',
        'donnees_panier',
        'user_id'
    ];

    protected $casts = [
        'donnees_panier' => 'array'
    ];

    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
