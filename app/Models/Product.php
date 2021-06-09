<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'sku', 'description'
    ];

    public function varient_prices()
    {
        return $this->hasMany('App\Models\ProductVariantPrice');
    }

}
