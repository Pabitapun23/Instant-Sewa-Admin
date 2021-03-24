<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainDashboardController extends Controller
{
    public function mainDashboard()
    {
    	$category_count  = DB::table('categories')->count();
    	$service_count  = DB::table('services')->count();
    	$serviceprovider_count  = DB::table('users')->where('user_type', 'ServiceProvider')->count();
    	$operation_count  = DB::table('operations')->count();
        return view('admin.maindashboard')
        ->with('category_count', $category_count)
        ->with('service_count',$service_count)
        ->with('serviceprovider_count',$serviceprovider_count)
        ->with('operation_count',$operation_count);
        //return $category_count;
    }
}
