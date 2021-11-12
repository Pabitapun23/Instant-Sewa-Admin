<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserManagementController extends Controller
{
     public function userData()
    {
    	$serviceproviders  = DB::table('users')->where('user_type', 'ServiceProvider')->paginate(5);
    	$serviceuser  = DB::table('users')->where('user_type', 'serviceuser')->get();
    	$serviceproviders->map(function ($serviceprovider) {
        $serviceprovider->occupation =UserManagementController::categoryName($serviceprovider->id);
        $serviceprovider->rating =UserManagementController::rating($serviceprovider->id);
});
        $serviceuser->map(function ($serviceusers) {
        $serviceusers->popularServices =UserManagementController::TopServices($serviceusers->id);
        });
       return view('admin.dashboard')
        ->with('serviceuser',$serviceuser)
        ->with('serviceprovider',$serviceproviders);
     // return $serviceproviders;
    }

    public static function TopServices($id)
    {
    $operationId = DB::table('operations')->where('service_user_id', $id)->get()->pluck('cart_collection_id');
    $count =  DB::table('carts')
     ->select('service_id')
     ->groupBy('service_id')
     ->orderByRaw('COUNT(*) DESC')
     ->whereIn('cart_collection_id',$operationId)
     ->limit(1)
     ->get();
     $serviceName = DB::table('services')->where('id', $count[0]->service_id)->get()->pluck('name');
    return $serviceName[0];
    }
    
    public static function rating($id)
    {
        $rating =  DB::table('rate_and_reviews')->where('service_provider_id', $id)->get()->pluck('rating');
        $count = count($rating);
        $sum = 0.0;
        if($count == 0)
        {
            return 0.0;
        }
        else{
        for ($i=0; $i <$count ; $i++)
         {
            $sum = $sum + $rating[$i];
         }
         $rate = $sum / $count;
         return $rate;
    }
}
   public static function categoryName($id)
    {
         $subcategories_id = DB::table('sub_category_service_providers')->where('service_provider_id', $id)->get()->pluck('subcategories_id');
        $categories_id = DB::table('sub_categories')->whereIn('id', $subcategories_id)->get()->pluck('category_id');
        $categories_name=DB::table('categories')->whereIn('id', $categories_id)->get()->pluck('name');
        $count = count($categories_name);
        $occupation="";
        for ($i=0; $i <$count ; $i++) {
            if($i==$count-2)
            {
                $occupation=$occupation.$categories_name[$i]."&";
             }
            elseif($i==$count-1){
                $occupation=$occupation.$categories_name[$i].".";
            }
            else{
                $occupation=$occupation.$categories_name[$i].",";
            }
        }

        return $occupation;
    }

     public function blockUser(Request $request)
    {
        $block_status = DB::table('users')->where('id', $request->input('id'))->get()->pluck('block_status');
        if($block_status[0] == 1)
        {
         DB::table('users')->where('id', $request->input('id'))->update(['block_status'=>0]);
           return redirect('/dashboard')->with('status', 'Data Updated');
        }
        else{
            DB::table('users')->where('id', $request->input('id'))->update(['block_status'=>1]);
            $blockamount = $block_status = DB::table('users')->where('id', $request->input('id'))->get()->pluck('block_amount');
        //     if($blockamount[0] == 4){
        //         $users = User::findOrFail($request->input('id'));
        // $users->delete();
        //     }
         //       else{
            $totalblockamount = $blockamount[0]+1;
            DB::table('users')->where('id', $request->input('id'))->update(['block_amount'=>$totalblockamount]);
     //   }
        return redirect('/dashboard')->with('status', 'Data Updated');
    }
    }
}
