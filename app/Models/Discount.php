<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    protected $table = 'discounts';
    protected $fillable = [
        'name',
        'discount_percent',
    ];

    // FUNCTION TO CREATE RELATIONSHIP  1 to MANY BETWEEN PRODUCTS AND DISCOUNTS
    public function products(){
        return $this->hasMany(Product::class);
    }
}
