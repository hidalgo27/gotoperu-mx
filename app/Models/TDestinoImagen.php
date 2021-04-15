<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TDestinoImagen extends Model
{
    protected $table = "tdestinosimagen";
    use HasFactory;

    public function destinos()
    {
        return $this->belongsTo(TDestino::class, 'iddestinos');
    }
}
