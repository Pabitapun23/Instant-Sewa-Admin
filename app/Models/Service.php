<?php

namespace App\Models;

use App\Models\Lookups\Category;
use App\Models\ServiceProvider;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $fillable = ['name', 'description', 'quantity', 'image', 'sub_categories_id', 'payment'];

    public function serviceprovider()
    {
        return $this->belongsTo(ServiceProvider::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
