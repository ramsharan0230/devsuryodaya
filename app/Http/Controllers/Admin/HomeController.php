<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use App\Models\Testimonial;
use App\Models\Catalog;
use App\Models\Video;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    public function index() 
    {
        $permissionCount = Permission::count();
        $userCount = User::count();
        $roleCount = Role::count();
        $sliderCount = Slider::count();
        $categoryCount = Category::count();
        $subcategoryCount = Subcategory::count();
        $serviceCount = Service::count();
        $productCount = Product::count();
        $testimonialCount = Testimonial::count();
        $catalogCount = Catalog::count();
        $videoCount = Video::count();

        return view('admin.home.index', compact('permissionCount', 'userCount', 'roleCount', 'sliderCount',
        'categoryCount', 'subcategoryCount', 'serviceCount', 'testimonialCount'
        ,'catalogCount', 'videoCount', 'productCount'
    ));
    }
}
