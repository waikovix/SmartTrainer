<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function search($name){    
            $friend = User::where('name', 'LIKE', '%'.$name.'%')->get();
            return  response()->json([
                'model' => $friend
            ]);
    }
    public function find($id){
        $user = User::find($id);
        if(Auth::user()->id == $user->id){
            return redirect('daily-intake');
        }else 
        {
        return view('user',compact('user'));
        }      
    }
    public function exerciseprogress(){
        $progress = Auth::user()->progress;
        return response()->json([
           'model' => $progress 
        ]);
        
    }
    public function kgprogress(){
           $progress = Auth::user()->kg_progress;
        return response()->json([
           'model' => $progress 
        ]);
        
        
    }
    
}
