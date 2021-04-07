<?php

namespace App\Models\Lookups;

use App\Models\Service;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	public function services()
	{
		return $this->belongsToMany(Service::class);
	}
}
