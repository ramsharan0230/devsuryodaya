<?php

namespace App\ViewComposer;

use App\Models\Client;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Service;
use App\Models\SiteSetting;
use App\Models\Slider;
use App\Models\Video;
use App\Models\About;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ViewComposer
{
    private $slider;
    private $product;
    private $site_setting;

    public function __construct(Slider $slider, Product $product, SiteSetting $site_setting, 
    Category $category, Service $service, Client $client, Video $video, About $about)
    {
        $this->slider = $slider;
        $this->product = $product;
        $this->site_setting = $site_setting;
        $this->category = $category;
        $this->service = $service;
        $this->client = $client;
        $this->video = $video;
        $this->about = $about;
    }

    public function compose(View $view)
    {
        
        $sliders = $this->slider->where('publish', 1)->limit(10)->orderBy('created_at', 'DESC')->get();
        $mainServices = $this->service->limit(6)->where('publish', 1)->orderBy('created_at', 'DESC')->get();
        $mainVideos = $this->video->where('publish', 1)->orderBy('created_at', 'DESC')->get();
        $clients = $this->client->limit(6)->where('publish', 1)->orderBy('created_at', 'DESC')->get();
        $sliders = $this->slider->where('publish', 1)->limit(10)->orderBy('created_at', 'DESC')->get();
        $featuredProducts = $this->product->where(['publish'=> 1, 'featured'=>1])->limit(10)->orderBy('created_at', 'DESC')->get();
        $categories = $this->category->where('publish', 1)->with('subcategories',function($query){
            return $query->where('publish','=',1)->with('products',function($q){
                return $q->where('publish','=',1);
            });
        })->orderBy('order', 'ASC')->get();
        $about = $this->about->first();

        $siteSettings = $this->site_setting->where('publish', 1)->first();
        $seo_siteSettings = DB::table('seo_site_settings')->where('publish', 1)->first();

        $view->with([
            'sliders' => $sliders,
            'featuredProducts' => $featuredProducts,
            'siteSettings'=>$siteSettings,
            'categories' => $categories,
            'mainServices' => $mainServices,
            'mainVideos' => $mainVideos,
            'clients' => $clients,
            'seo_siteSettings'=>$seo_siteSettings,
            'about' => $about
        ]);
    }
}
