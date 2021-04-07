<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
     protected $fillable = [
       'service_user_id',
       'service_provider_id',
    ];
}
