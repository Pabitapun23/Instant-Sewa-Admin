<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MainDashboardController extends Controller
{
    public function mainDashboard()
    {
    	$category_count  = DB::table('categories')->count();
    	$service_count  = DB::table('services')->count();
    	$serviceprovider_count  = DB::table('users')->where('user_type', 'ServiceProvider')->count();
    	$operation_count  = DB::table('operations')->count();
        $service_user_count = User::count();
        $male_count  = DB::table('users')->where('gender', 'Male')->count();
        $female_count  = DB::table('users')->where('gender', 'Female')->count();
        $male_ratio = $male_count*100/$service_user_count;
        $female_ratio = $female_count*100/$service_user_count;
        $data12 = MainDashboardController::operationCount(0);
        $data11 = MainDashboardController::operationCount(1);
        $data10 = MainDashboardController::operationCount(2);
        $data9 = MainDashboardController::operationCount(3);
        $data8 = MainDashboardController::operationCount(4);
        $data7 = MainDashboardController::operationCount(5);
        $data6 = MainDashboardController::operationCount(6);
        $data5 = MainDashboardController::operationCount(7);
        $data4 = MainDashboardController::operationCount(8);
        $data3 = MainDashboardController::operationCount(9);
        $data2 = MainDashboardController::operationCount(10);
        $data1 = MainDashboardController::operationCount(11);
        return view('admin.maindashboard')
        ->with('category_count', $category_count)
        ->with('service_count',$service_count)
        ->with('serviceprovider_count',$serviceprovider_count)
        ->with('operation_count',$operation_count)
        ->with('service_user_count', $service_user_count)
        ->with('data1', $data1)
        ->with('data2', $data2)
        ->with('data3', $data3)
        ->with('data4', $data4)
        ->with('data5', $data5)
        ->with('data6', $data6)
        ->with('data7', $data7)
        ->with('data8', $data8)
        ->with('data9', $data9)
        ->with('data10', $data10)
        ->with('data11', $data11)
        ->with('data12', $data12)
        ->with('male', $male_count)
        ->with('male_ratio', $male_ratio)
        ->with('female', $female_count)
        ->with('female_ratio', $female_ratio);
    }

    public static function operationCount($months)
    {
        $date = Carbon::now();
        $startDate = $date->firstOfMonth()->toDateString();
        $endDate = $date->lastOfMonth()->toDateString();

        $operation_count  = DB::table('operations')->whereBetween('created_at', [$startDate, $endDate])->count();

        return $operation_count;

    }
}
