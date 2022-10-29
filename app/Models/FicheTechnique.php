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
        'typeDD'
    ];

    use HasFactory;
}
