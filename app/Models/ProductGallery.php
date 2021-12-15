<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model
{
    protected $table = 'product_galleries';
    protected $fillable = ['image', 'order', 'publish', 'product_id'];


    public function product(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}
