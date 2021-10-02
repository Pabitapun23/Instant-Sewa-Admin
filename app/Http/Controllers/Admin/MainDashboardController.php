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
        $count = MainDashboardController::popularService();
        $popularservicename = MainDashboardController::popularServiceName($count[0]->service_id);
        $popularservicecount = MainDashboardController::popularServiceCount($count[0]->service_id);
        $popularservicename2 = MainDashboardController::popularServiceName($count[1]->service_id);
        $popularservicecount2 = MainDashboardController::popularServiceCount($count[1]->service_id);
        $popularservicename3 = MainDashboardController::popularServiceName($count[2]->service_id);
        $popularservicecount3 = MainDashboardController::popularServiceCount($count[2]->service_id);
        $popularservicename4 = MainDashboardController::popularServiceName($count[3]->service_id);
        $popularservicecount4 = MainDashboardController::popularServiceCount($count[3]->service_id);
        $totalpopularcount = $popularservicecount4 +$popularservicecount3+$popularservicecount2+$popularservicecount;
        $popularservicecountratio = $popularservicecount/$totalpopularcount*100;
        $popularservicecountratio2 = $popularservicecount2/$totalpopularcount*100;
        $popularservicecountratio3 = $popularservicecount3/$totalpopularcount*100;
        $popularservicecountratio4 = $popularservicecount4/$totalpopularcount*100;
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
        ->with('female_ratio', $female_ratio)
        ->with('popularservicename', $popularservicename)
        ->with('popularservicename2', $popularservicename2)
        ->with('popularservicename3', $popularservicename3)
        ->with('popularservicename4', $popularservicename4)
        ->with('popularservicecountratio', $popularservicecountratio)        
        ->with('popularservicecountratio2', $popularservicecountratio2)
        ->with('popularservicecountratio3', $popularservicecountratio3)
        ->with('popularservicecountratio4', $popularservicecountratio4)
        ->with('popularservicecount', $popularservicecount)
        ->with('popularservicecount4', $popularservicecount4)
        ->with('popularservicecount2', $popularservicecount2)
        ->with('popularservicecount3', $popularservicecount3)
        ->with('totalpopularservicecount', $totalpopularcount);
    }

    public static function operationCount($months)
    {
       $dateS = Carbon::now()->startOfMonth()->subMonth($months);
          $dateE = Carbon::now()->endOfMonth()->subMonth($months); 

        $operation_count  = DB::table('operations')
        ->whereBetween('created_at',[$dateS,$dateE])
        ->count();

        return $operation_count;

    }
        public static function popularService()
    {

    $count =  DB::table('carts')
    ->select('service_id')
    ->groupBy('service_id')
    ->orderByRaw('COUNT(*) DESC')
    ->limit(4)
    ->get();

    // $operation_count  = DB::table('carts')
    //     ->where('service_id',$count[0]->service_id)
    //     ->count();
     return $count;
    }
    public static function popularServiceCount($service)
    {
     $operation_count  = DB::table('carts')
        ->where('service_id',$service)
         ->count();
     return $operation_count;
    }
        public static function popularServiceName($service)
    {
     $operation_count  = DB::table('services')
        ->where('id',$service)
         ->get()->pluck('name');
     return $operation_count[0];
    }
}
