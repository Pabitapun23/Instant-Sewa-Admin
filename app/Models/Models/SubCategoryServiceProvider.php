<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategoryServiceProvider extends Model
{
    use HasFactory;
     protected $fillable = [
        'service_provider_id',
        'subcategories_id',
        
    ];
}
