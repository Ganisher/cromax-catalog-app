<?php

namespace App\Models;

use App\Events\CategorySaving;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'parent_id',
        'sku',
        'title',
        'slug',
        'sort_order',
        'status',
    ];

    protected $dispatchesEvents = [
        'saving' => CategorySaving::class,
    ];
}
