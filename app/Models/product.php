<?php

namespace App\Models;

use App\Models\review;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class product extends Model
{
    use HasFactory;

    public function reviews()
    {

        return $this->hasMany(review::class);
    }
}
