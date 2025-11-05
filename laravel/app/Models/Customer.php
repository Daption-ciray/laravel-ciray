<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use  App\Models\Meal;

class Customer extends Model
{
    public function meal()
    {
        return $this->hasMany(Meal::class);
    }
}
