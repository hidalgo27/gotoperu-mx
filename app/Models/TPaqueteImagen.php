<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TPaqueteImagen extends Model
{
    protected $table = "tpaquetesimagen";
    use HasFactory;

    public function paquetes()
    {
        return $this->belongsTo(TPaquete::class, 'idpaquetes');
    }
}
