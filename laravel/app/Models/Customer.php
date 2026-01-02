<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Activity;
use App\Models\Meal;

class Customer extends Model
{
    protected $guarded = ['id'];
    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
    
    public function meals()
    {
        return $this->hasMany(Meal::class);
    }
}
