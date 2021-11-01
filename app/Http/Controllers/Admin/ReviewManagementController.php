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

    public function serviceReviewManage($id) {
        $serviceprovider =  DB::table('rate_and_reviews')->where('service_provider_id', $id)->get();
       // return view('admin.reviewmanagement')->with('serviceprovider', $serviceprovider);
       return $serviceprovider;
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
}

