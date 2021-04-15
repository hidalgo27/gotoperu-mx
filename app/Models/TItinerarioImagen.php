<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TItinerarioImagen extends Model
{
    protected $table = "titinerarioimagen";
    use HasFactory;

    public function itinerario()
    {
        return $this->belongsTo(TItinerario::class, 'iditinerario');
    }
}
