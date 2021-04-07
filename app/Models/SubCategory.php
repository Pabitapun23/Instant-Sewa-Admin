<?php

namespace App\Models;

use App\Models\Lookups\Category;
use App\Models\Service;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
    
}
