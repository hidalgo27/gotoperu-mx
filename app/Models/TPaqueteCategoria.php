<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TPaqueteCategoria extends Model
{
    protected $table = "tpaquetescategoria";
    use HasFactory;

    public function paquete()
    {
        return $this->belongsTo(TPaquete::class, 'idpaquetes');
    }

    public function categoria()
    {
        return $this->belongsTo(TCategoria::class, 'idcategoria');
    }
}
