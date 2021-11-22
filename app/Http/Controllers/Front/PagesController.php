<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Service;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Subscription;
use App\Models\Product;
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

    public function blogs(){
        $blogs = Blog::where('publish', 1)->get();
        return view('front.blogs', compact('blogs'));
    }

    public function blogDetail($slug){
        $service = Blog::where('slug', $slug)->first();
        if(!$service)
            return view('front.page-not-found'); 
            
        return view('front.blog-detail', compact('blog'));
    }

    public function services(){
        $services = Service::where('publish', 1)->get();
        return view('front.services', compact('services'));
    }

    public function serviceDetail($slug){
        $service = Service::where('slug', $slug)->first();
        if(!$service)
            return view('front.page-not-found'); 

        return view('front.service-detail', compact('service'));
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
