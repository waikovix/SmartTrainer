<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class FriendController extends Controller
{
    //
    public function find($id){
        $friend = User::where('name', 'LIKE', '%'.$id.'%')->get();
        return  response()->json([
            'model' => $friend
        ]);
    }
}
