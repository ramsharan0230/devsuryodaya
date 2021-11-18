<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class ProductTechnicalDetail extends Model
{
    use HasFactory, Sluggable;

    protected $table = 'product_technical_details';
    protected $fillable = [ 'title', 'slug', 'description', 'order', 'user_id', 'product_id', 'publish'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
