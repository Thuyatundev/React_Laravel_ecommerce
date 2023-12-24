<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Color extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function product()
    {
        return $this->belongsToMany(Product::class, 'product_color');
    }
}
