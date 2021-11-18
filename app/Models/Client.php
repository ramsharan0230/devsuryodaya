<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory, Sluggable;
    protected $table = 'clients';
    protected $fillable = [ 'name', 'slug', 'description', 'image', 'order', 'user_id', 'publish'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function user(){
        return $this->hasMany(User::class, 'category_id');
    }

}
