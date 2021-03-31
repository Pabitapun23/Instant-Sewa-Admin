<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function registered()
    {
        $users = User::all();
    	//$serviceprovider_count  = DB::table('users')->where('user_type', 'ServiceProvider')->count();
        return view('admin.register')->with('users', $users);
    }
}
