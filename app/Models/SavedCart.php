<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavedCart extends Model
{
    protected $fillable = ['user_id', 'donnees_panier'];

    protected $casts = [
        'donnees_panier' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
