<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Famille extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'fabricant_id',
        'machine_id'
    ];

    public function fabricant()
    {
        return $this->belongsTo(Fabricant::class);
    }

    public function machine()
    {
        return $this->belongsTo(Machine::class);
    }

    public function produits()
    {
        return $this->hasMany(Product::class);
    }
}
