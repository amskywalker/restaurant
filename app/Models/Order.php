<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'seat_id'
    ];


    /**
     * Acessors
     */


    protected function active(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value == 1 ? "Aberto" : "Fechado",
        );
    }
}