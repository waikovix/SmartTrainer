<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    //
    public function index($start){
        $post = Post::skip($start)->take(5)->get();
        response()->json([
            'model' => $post
        ]);
        
    }
}
