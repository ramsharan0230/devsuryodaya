<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    public function index() 
    {
        $permissionCount = Permission::count();
        $userCount = User::count();
        $roleCount = Role::count();

        return view('admin.home.index', compact('permissionCount', 'userCount', 'roleCount'));
    }
}
