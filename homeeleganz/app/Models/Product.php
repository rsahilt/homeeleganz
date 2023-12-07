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
        'color',
        'material',
        'unit_price',
        'description',
        'brand',
        'weight',
        'dimensions',
        'catgeory_id'
    ];

    public function review()
    {
        return $this->hasMany(Review::class);
    }
}
