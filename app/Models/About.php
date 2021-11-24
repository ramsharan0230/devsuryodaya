<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table = 'abouts';
    protected $fillable = ['title', 'short_description', 'main_description', 'background_image', 'main_image', 'first_icon_title', 'first_icon_description', 
    'second_icon_title', 'second_icon_description', 'third_icon_title', 'third_icon_description', 'fourth_icon_title', 'fourth_icon_description', 
    'about_title','seo_title', 'seo_short_description', 'seo_main_description', 'seo_about_title', 'publish'];
}
