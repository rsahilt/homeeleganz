<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    use HasFactory;

    protected $fillable = ['province', 'pst', 'gst', 'hst'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
