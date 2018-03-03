<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kg;
use Illuminate\Support\Facades\Auth;

class KgController extends Controller
{
    //
    public function store(){
      $kg = new Kg;
      $kg->user_id = Auth::user()->id;
      $kg->kg = request('kg');
      $kg->body_fat = request('body_fat');
      $kg->save();
        return redirect('/progress');
    }
    public function find($id){ //function to find the kg record and return view with variable
      $kg = Kg::find($id);
      return view('edit_kg',compact('kg'));
    }
    public function update($id){ //function to update the kg record
      $kg = Kg::find($id);
      $kg->kg = request('kg');
      $kg->body_fat = request('body_fat');
      $kg->save();
      return redirect('/progress');
    }
    public function delete($id){//function to delete the kg record
      $kg = Kg::find($id);
      $kg->delete();
      return redirect('/progress');
    }
}
