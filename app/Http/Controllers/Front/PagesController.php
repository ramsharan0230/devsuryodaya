<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        return view('front.home');
    }

    public function contact(){
        return view('front.home');
    }

    public function products(){
        return view('front.home');
    }

    public function services(){
        return view('front.home');
    }

    public function catalogs(){
        return view('front.home');
    }

    public function categories(){
        return view('front.home');
    }

    public function subcategory($slug){
        return $slug;
    }
}
