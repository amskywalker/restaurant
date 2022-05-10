<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Seat extends Model
{
    use HasFactory;

    /**
     * Relationships
     */

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function orders_active(): HasMany
    {
        return $this->hasMany(Order::class)
            ->where('active', true)
            ->latest();
    }

    public function orders_inactive(): HasMany
    {
        return $this->hasMany(Order::class)
            ->where('active', false)
            ->latest();
    }
}
