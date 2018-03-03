<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Progress;
use App\Exercise;

class ProgressController extends Controller
{
    public function store($id){
      $progress = new Progress;
      $progress->user_id = Auth::user()->id;
      $progress->exercise_id = $id;
      $progress->sets = request('sets');
      $progress->reps = request('reps');
      $progress->kg = request('kg');
      $progress->save();
      return redirect('/progress');
    }
    public function find($id){
      $progress = Progress::find($id);
      return view('add_progress',compact('progress'));
    }
    public function update($id){
      $progress = Progress::find($id);
      $progress->kg = request('kg');
      $progress->reps = request('reps');
      $progress->sets = request('sets');
      $progress->save();
      return redirect('/progress');
    }
    public function delete($id){
      $progress = Progress::find($id);
      $progress->delete();
      return redirect('/progress');
    }
    //
}
