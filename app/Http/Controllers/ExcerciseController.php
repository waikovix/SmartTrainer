<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Excercise;

class ExcerciseController extends Controller
{
    //
    public function find($name){
        //display the search results for exercise
        $exercise = Excercise::where('name', 'LIKE', '%'.$name.'%')->get();
        return  response()->json([
            'model' => $exercise
        ]);
      }
      public function store(){
        $exercise = new Excercise;
        $exercise->name = request('name');
        $exercise->save();
        return redirect('/progress');
      }
    }
