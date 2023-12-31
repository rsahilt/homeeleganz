<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'summary',
        'color',
        'material',
        'unit_price',
        'description',
        'brand',
        'weight',
        'dimensions',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function lineItems()
    {
        return $this->hasMany(LineItem::class);
    }
}
