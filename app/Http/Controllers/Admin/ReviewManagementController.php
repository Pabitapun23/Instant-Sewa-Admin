<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ReviewManagementController extends Controller
{
    public function reviewManage() {
        $serviceproviders  = DB::table('users')->where('user_type', 'ServiceProvider')->paginate(6);
        $serviceproviders->map(function ($serviceprovider) {
            $serviceprovider->review = ReviewManagementController::review($serviceprovider->id)[0]->reviews;
            $serviceprovider->rating = ReviewManagementController::rating($serviceprovider->id);
    });
        //$review = ReviewManagementController::review(3)[0]->reviews;
        return view('admin.reviewmanagement')->with('serviceprovider', $serviceproviders);
        //return $serviceproviders;
    }
     public function blockUser($id)
    {
        $block_status = DB::table('users')->where('id', $id)->get()->pluck('block_status');
        if($block_status[0] == 1)
        {
         DB::table('users')->where('id', $id)->update(['block_status'=>0]);
           return redirect('/review-management')->with('status', 'Data Updated');
        }
        else{
            DB::table('users')->where('id', $id)->update(['block_status'=>1]);
            $blockamount = $block_status = DB::table('users')->where('id', $id)->get()->pluck('block_amount');
        //     if($blockamount[0] == 4){
        //         $users = User::findOrFail($request->input('id'));
        // $users->delete();
        //     }
         //       else{
            $totalblockamount = $blockamount[0]+1;
            DB::table('users')->where('id', $id)->update(['block_amount'=>$totalblockamount]);
     //   }
        return redirect('/review-management')->with('status', 'Data Updated');
    }
    }

    public function serviceReviewManage($id) {
        $serviceproviders =  DB::table('rate_and_reviews')->where('service_provider_id', $id)->get();
        $serviceproviders->map(function ($serviceprovider) {
            $serviceprovider->serviceUserName = ReviewManagementController::serviceUserName($serviceprovider->service_user_id);
    });
       // return view('admin.reviewmanagement')->with('serviceprovider', $serviceprovider);
       return $serviceproviders;
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

    public static function review($id)
    {
        $review =  DB::table('rate_and_reviews')->where('service_provider_id', $id)
            ->select('reviews')
         // ->groupBy('service_id')
            ->orderBy('updated_at', 'desc')
            ->limit(1)
            ->get();
        return $review;
    }
        public static function serviceUserName($id)
    {
         $name =  DB::table('users')->where('id', $id)->get()->pluck('username');
        return $name[0];
    }
}

