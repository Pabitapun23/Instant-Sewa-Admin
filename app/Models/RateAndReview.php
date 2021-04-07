<?php

namespace App\Models;

use App\Models\ServiceProvider;
use Illuminate\Database\Eloquent\Model;

class RateAndReview extends Model
{
    public function user()
{
    return $this->belongsTo(ServiceProvider::class);
}
}
