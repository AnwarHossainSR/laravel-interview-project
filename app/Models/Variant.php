<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    protected $fillable = [
        'title', 'description'
    ];

    public function product_variants()
    {
        return $this->hasMany('App\Models\ProductVarient')->withTimestamps();
    }

}
