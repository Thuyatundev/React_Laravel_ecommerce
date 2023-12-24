<?php

namespace App\Models;

use App\Models\Brand;
use App\Models\Color;
use App\Models\Category;
use App\Models\ProductOrder;
use App\Models\ProductReview;
use App\Models\ProductAddTransaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function brand()
    {
        return  $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return  $this->belongsTo(Category::class);
    }

    public function color()
    {
        return $this->belongsToMany(Color::class);
    }

    public function transaction()
    {
        return $this->hasMany(ProductAddTransaction::class);
    }

    public function cart()
    {
        return $this->hasMany(ProductCart::class);
    }

    public function order()
    {
        return $this->hasMany(ProductOrder::class);
    }

    public function review()
    {
        return $this->hasMany(ProductReview::class);
    }
}
