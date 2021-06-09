<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariantPrice extends Model
{

    public function products()
    {
        return $this->belongsTo('App\Models\ProductVariantPrice')->withTimestamps();
    }

    public function product_variants()
    {
        return $this->belongsTo('App\Models\ProductVariant')->withTimestamps();
    }

}
