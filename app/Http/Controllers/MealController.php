<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Meal;
use App\Food;

class MealController extends Controller
{
    //
    public function index(){
        return view('calories');
    }
    public function store($id){
        $meal = new Meal;
        $meal->food_id = $id;
        $meal->user_id = Auth::user()->id;
        $meal->amount = request('amount');
        $meal->calories = request('calories');
        $meal->protein = request('protein');
        $meal->fat = request('fat');
        $meal->carbs = request('carbs');
        $meal->type = request('meal');
        $meal->save();
        return redirect('/daily-intake');        
    }
    public function find($id){
        $macros = Food::find($id);
        return view('meals',compact('macros'));
    }
   
  
}
