<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TTourDestino extends Model
{
    protected $table = "ttoursdestino";
    use HasFactory;

    public function tours()
    {
        return $this->belongsTo(TTour::class, 'idtours');
    }

    public function destinos()
    {
        return $this->belongsTo(TDestino::class, 'iddestinos');
    }
}
