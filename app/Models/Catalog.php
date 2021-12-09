<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory, Sluggable;
    protected $table = 'catalogs';
    protected $fillable = ['title','slug', 'catalog_file', 'order', 'publish', 'product_id'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
