<?php

namespace App\ViewComposer;

use App\Models\Client;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Service;
use App\Models\SiteSetting;
use App\Models\Slider;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ViewComposer
{
    private $slider;
    private $product;
    private $site_setting;

    public function __construct(Slider $slider, Product $product, SiteSetting $site_setting, 
    Category $category, Service $service, Client $client)
    {
        $this->slider = $slider;
        $this->product = $product;
        $this->site_setting = $site_setting;
        $this->category = $category;
        $this->service = $service;
        $this->client = $client;
    }

    public function compose(View $view)
    {
        
        $sliders = $this->slider->where('publish', 1)->limit(10)->orderBy('created_at', 'DESC')->get();
        $mainServices = $this->service->limit(6)->where('publish', 1)->orderBy('created_at', 'DESC')->get();
        $clients = $this->client->limit(6)->where('publish', 1)->orderBy('created_at', 'DESC')->get();
        $sliders = $this->slider->where('publish', 1)->limit(10)->orderBy('created_at', 'DESC')->get();
        $products = $this->product->where('publish', 1)->limit(10)->orderBy('created_at', 'DESC')->get();
        $categories = $this->category->where('publish', 1)->limit(10)->orderBy('order', 'ASC')->get();

        $siteSettings = $this->site_setting->where('publish', 1)->first();
        $seo_siteSettings = DB::table('seo_site_settings')->where('publish', 1)->first();

        $view->with([
            'sliders' => $sliders,
            'products' => $products,
            'siteSettings'=>$siteSettings,
            'categories' => $categories,
            'mainServices' => $mainServices,
            'clients' => $clients,
            'seo_siteSettings'=>$seo_siteSettings
        ]);
    }
}
