<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class THotelDestino extends Model
{
    protected $table = "thoteldestino";
    use HasFactory;

    public function hotel()
    {
        return $this->belongsTo(THotel::class, 'idhotel');
    }

    public function destinos()
    {
        return $this->belongsTo(TDestino::class, 'iddestinos');
    }
}
