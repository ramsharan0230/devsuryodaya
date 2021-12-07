<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsEvent extends Model
{
    protected $table = 'news_events';
    protected $fillable = ['type', 'title', 'slug', 'subtitle', 'image', 'short_description', 'description', 'order', 'publish'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
