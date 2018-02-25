<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;

class FoodController extends Controller
{
    //
    public function find($meal){
        $foods = Food::where('name', 'LIKE', '%'.$meal.'%')->get();
        return  response()->json([
            'model' => $foods
        ]);
    }
    public function store(){
        $food = new Food;
        $food->name = request('name');
        $food->calories = request('calories');
        $food->protein = request('protein');
        $food->carbs = request('carbs');
        $food->fat = request('fat');
        $food->save();
        return redirect('/daily-intake');

    }
}
