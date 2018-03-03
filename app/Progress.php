<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    //
    public function exercise(){
        return $this->belongsTo('App\Excercise');
    }
}
