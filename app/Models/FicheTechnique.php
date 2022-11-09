<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FicheTechnique extends Model
{
    protected $fillable = [
        'capacite',
        'DWPD',
        'format',
        'interfaceInterne',
        'SerieHDD',
        'SMART',
        'interfaceDisque',
        'TBW',
        'tempsEntrePannes',
        'typeDD',
        'categorie',
        'frequence',
        'type',
        'alimentationDD',
        'plateformeCompatible',
        'voltage',
        'organisation',
        'emplacementsMemoire',
        'nbreBaies',
        'typeBoitier',
        'emplacements_memoire',
        'taille_memoire_base',
        'taille_memoire_max',
        'nbreDD'
    ];

    use HasFactory;

    public function product()
    {
        return $this->hasOne(Product::class);
    }
}
