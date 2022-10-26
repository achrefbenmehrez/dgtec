<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Societe extends Model
{
    protected $fillable = [
        'raisonSociale',
        'nomCommercial',
        'numTel',
        'siteWeb',
        'siret',
        'kbis',
        'formeJuridique',
        'ape',
        'nomComptable',
        'emailComptable',
        'formatPapier',
    ];

    use HasFactory;

    public function employes()
    {
        return $this->hasMany(Employee::class);
    }
}
