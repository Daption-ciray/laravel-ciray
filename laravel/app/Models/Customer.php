<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Activity;
use App\Models\Meal;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;
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
