<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionManagementController extends Controller
{
     public function userData()
    {
    	$serviceproviders  = DB::table('users')->where('user_type', 'ServiceProvider')->paginate(5);
    	//$serviceuser  = DB::table('users')->where('user_type', 'serviceuser')->get();
    	$serviceproviders->map(function ($serviceprovider) {
        $serviceprovider->occupation = TransactionManagementController::categoryName($serviceprovider->id);
        $serviceprovider->rating = TransactionManagementController::rating($serviceprovider->id);
       });
       return view('admin.transactionmanagement')->with('serviceprovider',$serviceproviders);
     // return $serviceproviders;
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
        $categories_name=DB::table('categories')->whereIn('id', $subcategories_id)->get()->pluck('name');
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
}
