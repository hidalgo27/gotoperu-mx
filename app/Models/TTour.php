<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TTour extends Model
{
    protected $table = "ttours";
    use HasFactory;

    public function tours_destinos()
    {
        return $this->hasMany(TTourDestino::class, 'idtours');
    }
}
