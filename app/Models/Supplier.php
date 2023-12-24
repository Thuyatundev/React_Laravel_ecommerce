<?php

namespace App\Models;

use App\Models\ProductAddTransaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supplier extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function transaction()
    {
        return $this->hasMany(ProductAddTransaction::class);
    }

    public function product(){
        return $this->hasMany(Product::class);
    }
}
