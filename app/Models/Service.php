<?php

namespace App\Models;

use App\Models\Lookups\Category;
use App\Models\ServiceProvider;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function serviceprovider()
    {
        return $this->belongsTo(ServiceProvider::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
