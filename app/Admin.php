<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    public function admin(){
        return $this->belongsTo('App\User');
    }
    public function posts(){
       
    }
}
