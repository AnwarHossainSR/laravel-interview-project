<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{

    public function varient_images()
    {
        return $this->belongsToMany('App\Models\ProductImage')->withTimestamps();
    }
}
