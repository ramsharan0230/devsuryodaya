<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use HasFactory, Sluggable;

    protected $table = 'products';
    protected $fillable = ['title', 'subtitle', 'subcategory_id', 'service_id', 'short_description', 'description', 'slug', 'published_date', 'image', 'user_id', 'order', 'meta_title', 'meta_description',
    'publish', 'user_id' ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function catalogs(){
        return $this->hasMany(Catalog::class);
    }
}
