<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabricant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug'
    ];

    public function familles()
    {
        return $this->hasMany(Famille::class);
    }

    public function machines()
    {
        return $this->belongsToMany(Machine::class, 'fabricant_machines');
    }
}
