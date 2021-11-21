<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Category extends Model
{
    use HasFactory, Sluggable;
    protected $table = 'categories';
    protected $fillable = ['name', 'slug', 'feature_image', 'publish', 'user_id', 'order', 'description'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }
}
