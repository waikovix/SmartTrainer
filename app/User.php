<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Meal;
use Carbon\Carbon;

class User extends Authenticatable
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','weight','daily_calories','protein','carbs','fat'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function meals(){
        return $this->hasMany('App\Meal')->whereDate('created_at', '=', Carbon::today()->toDateString());
    }
    public function friends(){
        return $this->hasMany('App\Friend')->where('aproved','=','1');
    }
    public function progress(){
        return $this->hasMany('App\Progress');
    }
    public function kg_progress(){
        return $this->hasMany('App\Kg')->orderBy('id','Desc')->take(7);
    }
    public function admin(){
        return $this->hasOne('App\Admin');
    }
    public function last_weight(){
      return $this->hasMany('App\Kg')->latest()->take(1);
    }
}
