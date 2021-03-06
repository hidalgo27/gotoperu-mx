<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TDestino extends Model
{
    protected $table = "tdestinos";
    use HasFactory;

    public function paquetes_destinos()
    {
        return $this->hasMany(TPaqueteDestino::class, 'iddestinos');
    }

    public function destino_imagen()
    {
        return $this->hasMany(TDestinoImagen::class, 'iddestinos');
    }
}
