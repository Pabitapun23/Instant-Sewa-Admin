<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Facade\Ignition\QueryRecorder\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionManagementController extends Controller
{
     public function userData()
    {
    	$payments  = DB::table('payments')->paginate(10);
    	$payments->map(function ($payment) {
        $payment->cartname = TransactionManagementController::cartName($payment->cart_id);
        $payment->payer_name = TransactionManagementController::serviceuserName($payment->cart_id);
        $payment->payee_name = TransactionManagementController::serviceproviderName($payment->cart_id);
       });
       return view('admin.transactionmanagement')->with('payment',$payments);
     // return $serviceproviders;
    }
    public static function cartName($id)
    {
        $name =  DB::table('cart_groups')->where('id', $id)->get()->pluck('collection_name');
         return $name[0];
    }
   public static function serviceuserName($id)
    {
         $serviceproviderId =  DB::table('operations')->where('cart_collection_id', $id)->get()->pluck('service_user_id');
         $name =  DB::table('users')->where('id', $serviceproviderId)->get()->pluck('username');
        return $name[0];
    }
    public static function serviceproviderName($id)
    {
         $serviceproviderId =  DB::table('operations')->where('cart_collection_id', $id)->get()->pluck('service_provider_id');
         $name =  DB::table('users')->where('id', $serviceproviderId)->get()->pluck('username');
        return $name[0];
    }

    public function search(Request $request) {
        if($request->ajax()) {
            $output = '';
            $query = $request->get('query');
            return $query;
        }
    }
}
