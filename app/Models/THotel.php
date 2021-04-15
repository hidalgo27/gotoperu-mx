<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class THotel extends Model
{
    protected $table = "thotel";
    use HasFactory;

    public function hotel_destinos()
    {
        return $this->hasMany(THotelDestino::class, 'idhotel');
    }
}
