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
    public function find($id){ //function to display the food information
        $macros = Food::find($id);
        return view('meals',compact('macros'));
    }
    public function findMeal($id){
      $meal = Meal::find($id);
      return view('edit_meal',compact('meal'));
    }

    public function update($id){
        $meal = Meal::find($id);
        $meal->amount = request('amount');
        $meal->calories = request('calories');
        $meal->protein = request('protein');
        $meal->fat = request('fat');
        $meal->carbs = request('carbs');
        $meal->type = request('meal');
        $meal->save();
        return redirect('/daily-intake');
    }
    public function delete($id){
        $meal = Meal::find($id)->delete();
        return redirect('/daily-intake');
    }

}
