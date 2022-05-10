<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;

    protected $dates = [
        'created_at',
    ];

    protected $fillable = [
        'seat_id',
        'active',
        'persons_quantity',
        'payment_method'
    ];

    /**
     * Relationships
     */

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }



    /**
     * Acessors
     */


    protected function active(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value == 1 ? "Aberto" : "Fechado",
        );
    }


    // @TODO should be a service
    public function scopeTotalValue(Builder $query)
    {
        return str_replace('.', ',', $this->products()->sum('price'));
    }

    // @TODO should be a service
    public function scopeValueByPersons(Builder $query)
    {
        $value = $this->products()->sum('price') / $this->persons_quantity;
        return str_replace('.', ',', $value);
    }
}
