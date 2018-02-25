<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Meal extends Model
{
    //
    public function food(){
        return $this->belongsTo(Food::class);
    }
    public function calorie(){
        return $this->sum('calories');
    }
}
