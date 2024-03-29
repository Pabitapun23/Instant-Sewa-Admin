<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserPaymentController extends Controller
{
     public function userPaymentData()
    {
        $serviceproviders  = DB::table('users')->where('user_type', 'ServiceProvider')->paginate(10);
        $serviceproviders->map(function ($serviceprovider) {
        $serviceprovider->payment_remaining =UserPaymentController::payment($serviceprovider->id);
});
       return view('admin.userpayment')
        ->with('serviceproviders',$serviceproviders);
    }
    public static function payment($id)
    {
        $payment =  DB::table('transactions')->where('service_provider_id', $id)->get()->pluck('payment');
        return $payment[0];
    }
    public static function userPay(Request $request)
    {
         $payment =  DB::table('transactions')->where('service_provider_id', $request->input('id'))->get()->pluck('payment');
         if($payment[0]>$request->input('amount')){
         $new_payment = $payment[0]-$request->input('amount');
         DB::table('transactions')->where('service_provider_id', $request->input('id'))->update(['payment'=>$new_payment]);
          return redirect('/user-payment-management')->with('status', 'Data Updated');
      }
      else{
         return redirect('/user-payment-management')->with('status', 'Data is invalid');
      }

    }
}
