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

    public function profile($username){
        $permissions = [];
        $user = User::where('username', $username)->first();
        if(!$user)
            return view('front.page-not-found'); 
        
            // dd($user->roles->all());
        // foreach($user->roles->all() as $role){
        //     foreach($role->permissions as $permission){
        //         // array_push($permissions, $permission->name);
        //         echo $permission;
        //     }
        // }
        // dd($permission);
        // $rolePermissions = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")
        //     ->where("role_has_permissions.role_id",$id)
        //     ->get();
        // dd($user->roles->pluck('name','name')->all());
        return view('admin.users.profile', compact('user'));
    }
}
