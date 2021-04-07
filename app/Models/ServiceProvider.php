<?php

namespace App\Models;

use App\Models\Service;
use App\User;


class ServiceProvider extends User
{
      public function services()
    {
    	return $this->hasMany(Service::class);
    }
}
