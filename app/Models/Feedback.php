<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback';
    protected $fillable = ['user_id', 'feedback', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
