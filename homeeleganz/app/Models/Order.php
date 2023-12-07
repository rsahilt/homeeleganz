<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Define the relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lineItems()
    {
        return $this->hasMany(LineItem::class);
    }

    public function taxes()
    {
        return $this->belongsTo(Taxes::class);
    }


}
