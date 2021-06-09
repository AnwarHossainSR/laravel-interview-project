<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    public function variants()
    {
        return $this->belongsTo('App\Models\Variant')->withTimestamps();
    }

    public function product_variants_price()
    {
        return $this->hasMany('App\Models\ProductVariantPrice')->withTimestamps();
    }

}
