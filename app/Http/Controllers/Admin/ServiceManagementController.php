<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
//use Illuminate\Support\Facades\DB;

class ServiceManagementController extends Controller
{
    public function registered()
    {
        $servicemgmnt = Service::all();
        $users = User::all();
    	//$serviceprovider_count  = DB::table('users')->where('user_type', 'ServiceProvider')->count();
        return view('admin.servicemanagement')->with('users', $users)
                    ->with('servicemgmnt', $servicemgmnt);
    }

    public function store(Request $request)
    {
        $services = new Service;

        $services->name = $request->input('name');
        $services->description = $request->input('description');
        $services->quantity = $request->input('quantity');
        $services->image = $request->input('image');
        $services->sub_categories_id = $request->input('sub_categories_id');
        $services->payment = $request->input('payment');

        $services->save();

        return redirect('/service-management')->with('status', 'Data Added for Service Management');
    }
}
