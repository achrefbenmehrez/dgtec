<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'emplacements_memoire',
        'taille_memoire_base',
        'taille_memoire_max'
    ];

    public function fabricants()
    {
        return $this->belongsToMany(Fabricant::class, 'fabricant_machines');
    }

    public function familles()
    {
        return $this->hasMany(Famille::class);
    }
}
