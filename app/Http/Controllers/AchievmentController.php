<?php

namespace App\Http\Controllers;
use App\Events\Acvievment;
use Carbon\Carbon;
use App\Achievment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AchievmentController extends Controller
{
    //

    public function broadcast(){
      $registered_date = Auth::user()->created_at;
        $mytime = Carbon::now();
      if($registered_date->toDateString() == $mytime->toDateString()){
        Acvievment::dispatch(1);
      }
        return view('home');
    }
}
