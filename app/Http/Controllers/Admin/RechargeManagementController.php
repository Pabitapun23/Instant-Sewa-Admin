<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RechargeManagementController extends Controller
{
     public function userData()
    {
    	$recharges  = DB::table('recharges')->paginate(10);
    	$recharges->map(function ($recharge) {
        $recharge->service_provider_name = RechargeManagementController::serviceProviderName($recharge->id);
       });
       return view('admin.rechargemanagement')->with('recharge',$recharges);
     // return $serviceproviders;
    }
    public static function serviceProviderName($id)
    {
         $serviceproviderId = DB::table('recharges')->where('id', $id)->get()->pluck('service_provider_id');
         $name =  DB::table('users')->where('id', $serviceproviderId)->get()->pluck('username');
        return $name[0];
    }
}
