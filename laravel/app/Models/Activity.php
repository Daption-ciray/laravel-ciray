<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use App\Models\Exercise;

class Activity extends Model
{
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    
    public function exercise()
    {
        return $this->belongsTo(Exercise::class);
    }
}
