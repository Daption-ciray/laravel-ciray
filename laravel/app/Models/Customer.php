<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'surname', 'birthYear', 'gender'];

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    public function meals()
    {
        return $this->hasMany(Meal::class);
    }
}
