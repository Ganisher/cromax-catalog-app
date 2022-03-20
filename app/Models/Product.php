<?php

namespace App\Models;

use App\Events\ProductSaving;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'sku',
        'upc',
        'title',
        'price',
        'slug',
        'sort_order',
        'status',
    ];

    protected $dispatchesEvents = [
        'saving' => ProductSaving::class,
    ];
}
