<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{   
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'category',
        'price',
        'discount_id',
        'quantity',
        'description',
        'image',
    ];

    // FUNCTION TO FORMAT THE PRICE 0.000.000,00
    public function getFormattedPriceAttribute()
    {
        return number_format($this->attributes['price'], 0, ',', '.');
    }

    // FUNCTION TO CREATE RELATIONSHIP  1 to MANY BETWEEN PRODUCTS AND DISCOUNTS
    public function discount(){
        return $this->belongsTo(Discount::class);
    }

    // FUNCTION TO CALCULATE THE SALE PRICE OF EACH PRODUCT
    public function getSalePriceAttribute()
    {
        $price = $this->price;
        $discountPercent = optional($this->discount)->discount_percent ?? $price;
        return $price * (1 - ($discountPercent / 100));
    }

     // FUNCTION TO FORMAT THE SALE PRICE 0.000.000,00
    public function getFormattedSalePriceAttribute()
    {
        // return number_format($this->attributes['sale_price'], 0, ',', '.');
        $salePrice = $this->sale_price ?? $this->price;
        return number_format($salePrice, 0, ',', '.');
    }

}
