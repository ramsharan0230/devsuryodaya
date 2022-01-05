<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Service;
use App\Models\Blog;
use App\Models\NewsEvent;
use App\Models\Contact;
use App\Models\Subscription;
use App\Models\Product;
use App\Models\Video;
use App\Models\Catalog;
use App\Models\Category;
use App\Models\Subcategory;

use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    public function about(){
        $testimonials = Testimonial::where('publish', 1)->get();
        return view('front.about', compact('testimonials'));
    }

    public function contact(){
        return view('front.contact');
    }
    
    public function postContact(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email'=> 'required|email',
            'subject' => 'required|max: 500',
            'phone' => 'required|max: 15',
            'message' => 'required|max: 2500'
        ]);

        if ($validator->fails()) {
            return redirect('contact')
                        ->withErrors($validator)
                        ->withInput();
        }

        $value = $request->all();
        Contact::Create($value);
        return redirect()->back()->with('message','Contact Added Successfully');
    }

    public function subscription(Request $request){
        $validator = Validator::make($request->all(), [
            'email'=> 'required|email'
        ]);

        if ($validator->fails()) {
            return redirect('home')
                        ->withErrors($validator)
                        ->withInput();
        }

        $value = $request->all();
        Subscription::Create($value);
        return redirect()->back()->with('message','Subscribed Successfully');
    }

    public function products(){
        $products = Product::where('publish', 1)->get();
        return view('front.products', compact('products'));
    }

    public function productDetail($slug){
        $product = Product::where('slug', $slug)->first();
        if(!$product)
            return view('front.page-not-found'); 

        $varients = [];
        $tech_details = [];
        
        return view('front.product-detail', compact('product', 'varients', 'tech_details'));
    }

    public function productSearch(Request $request){
        $search = $request->search;
        $searchedItems = Product::where('publish', 1)->where(function($query) use ($search) {
            $query->where('title', 'LIKE', '%'.$search.'%')
                ->orWhere('description', 'LIKE', '%'.$search.'%')
                ->orWhere('subtitle', 'LIKE', '%'.$search.'%')
                ->orWhere('short_description', 'LIKE', '%'.$search.'%');
        })->get();

        return view('front.search-detail', compact('searchedItems', 'search'));
    }

    public function newsEvent(){
        $newsEvents = NewsEvent::where('publish', 1)->orderBy('order', 'desc')->paginate(6);
        $recentNewsEvent = NewsEvent::where('publish', 1)->orderBy('created_at', 'desc')->get();
        return view('front.news-event', compact('newsEvents', 'recentNewsEvent'));
    }

    public function newsEventDetail($slug){
        $newsEvent = NewsEvent::where('slug', $slug)->first();
        if(!$newsEvent)
            return view('front.page-not-found'); 
        
        $title = $newsEvent->title;
        $reletedNewsEvents = NewsEvent::where('publish', 1)->whereNotIn('id', [$newsEvent->id])
        ->where(function($query) use ($title) {
            $query->where('title', 'LIKE', '%'.$title.'%')
                ->orWhere('subtitle', 'LIKE', '%'.$title.'%')
                ->orWhere('description', 'LIKE', '%'.$title.'%')
                ->orWhere('short_description', 'LIKE', '%'.$title.'%');
        })->orderBy('created_at', 'DESC')->take(5)->get();

        if(count($reletedNewsEvents)==0){
            $reletedNewsEvents = NewsEvent::where('publish', 1)->whereNotIn('id', [$newsEvent->id])->orderBy('created_at', 'DESC')->take(5)->get();
        }
        return view('front.news-event-detail', compact('newsEvent', 'reletedNewsEvents'));
    }

    public function blogs(){
        $blogs = Blog::where('publish', 1)->orderBy('order', 'desc')->get();
        $recentBlogs = Blog::where('publish', 1)->orderBy('created_at', 'desc')->get();
        return view('front.blogs', compact('blogs', 'recentBlogs'));
    }

    public function blogDetail($slug){
        $blog = Blog::where('slug', $slug)->first();
        if(!$blog)
            return view('front.page-not-found'); 
        
        $title = $blog->title;
        $reletedBlogs = Blog::where('publish', 1)->whereNotIn('id', [$blog->id])->where(function($query) use ($title) {
            $query->where('title', 'LIKE', '%'.$title.'%')
                ->orWhere('description', 'LIKE', '%'.$title.'%')
                ->orWhere('short_description', 'LIKE', '%'.$title.'%');
        })->take(4)->get();
        return view('front.blog-detail', compact('blog', 'reletedBlogs'));
    }

    public function services(){
        $services = Service::where('publish', 1)->get();
        return view('front.services', compact('services'));
    }

    public function serviceDetail($slug){
        $service = Service::where('slug', $slug)->first();
        if(!$service)
            return view('front.page-not-found'); 

        $title = $service->title;
        $reletedProducts = Product::where('publish', 1)->where('service_id', '=', $service->id)->take(4)->get();
        return view('front.service-detail', compact('service','reletedProducts'));
    }

    public function catalogs(){
        $catalogs = Catalog::where('publish', 1)->get();
        return view('front.catalogs', compact('catalogs'));
    }

    public function productBycategory($slug){
        $category = Category::where('slug', $slug)->first();

        if(!$category){
            return view('front.page-not-found');
        }
        else{
            $subcategories = [];
            foreach($category->subcategories as $sub){
                array_push($subcategories, $sub->id); 
            }
            $productsByCat = Product::whereIn('subcategory_id', $subcategories)->get();
        }
        $title= $category->name;
        return view('front.product-listing', compact('productsByCat', 'title'));
    }

    public function productBySubcategory($slug){
        $subcategory = Subcategory::where('slug', $slug)->first();
        if(!$subcategory)
            return view('front.page-not-found');
        else
            $productsByCat = Product::where('subcategory_id', $subcategory->id)->get();

        return view('front.subcategory-product-listing', compact('productsByCat', 'subcategory'));
    }

    public function subcategory($slug){
        return $slug;
    }

    public function videos(){
        $videos = Video::where('publish', 1)->orderBy('order', 'desc')->get();
        $recentVideos = Video::where('publish', 1)->orderBy('created_at', 'desc')->get();
        return view('front.videos', compact('videos', 'recentVideos'));
    }


    public function rules()
    {
        $rules =  [
            'name' => 'required',
            'email'=> 'required|email',
            'subject' => 'required|max: 500',
            'phone' => 'required|max: 15',
            'message' => 'required|max: 2500',

        ];
    }
       
}
