<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceManagementController extends Controller
{
    public function registered()
    {
        $users = User::all();
    	//$serviceprovider_count  = DB::table('users')->where('user_type', 'ServiceProvider')->count();
        return view('admin.servicemanagement')->with('users', $users);
    }

    public function store(Request $request)
    {
        $service = DB::model('sub_categories');
        $category = $request->input('category');
        $category = $request->input('subcategory');
        $category = $request->input('description');
    }
}
