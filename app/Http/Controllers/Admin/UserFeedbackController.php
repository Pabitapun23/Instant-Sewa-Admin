<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Support\Facades\DB;

class UserFeedbackController extends Controller
{
     public function userData()
    {
    	$feedbacks  = DB::table('feedback')->paginate(10);
    	$feedbacks->map(function ($feedback) {
        $feedback->username = UserFeedbackController::userName($feedback->user_id);
        $feedback->email = UserFeedbackController::userEmail($feedback->user_id);
       });
       return view('admin.userfeedback')->with('feedback',$feedbacks);
    }

    public static function userName($id)
    {
        $name =  DB::table('users')->where('id', $id)->get()->pluck('username');
         return $name[0];
    }

    public static function userEmail($id)
    {
        $email =  DB::table('users')->where('id', $id)->get()->pluck('email');
         return $email[0];
    }

    public function delete($id)
    {
        $feedbacks = Feedback::findOrFail($id);
        $feedbacks->delete();

        return redirect('/user-feedback')->with('status', 'Data Deleted from Feedback Page');

    }
}
