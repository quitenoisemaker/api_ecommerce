<?php

namespace App\Models;

use App\Models\product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class review extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo(product::class, 'product_id'); //here specifying the foreign key
    }
}
