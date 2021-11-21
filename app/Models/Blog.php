<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory, Sluggable;
    protected $table = 'blogs';
    protected $fillable = [
        'title',
        'short_description',
        'description',
        'published_date',
        'keyword',
        'image',
        'order',
        'meta_title',
        'meta_description',
        'user_id',
        'status'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
