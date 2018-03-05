<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    //
    public function index(){
        $posts = Post::orderBy('id','DESC')->take(5)->get();
        return view('blog',compact('posts'));


    }
    public function store(){
      $post = new Post;
      $post->title = request('title');
      $post->category_id = request('category');
      $post->body = request('body');
      $post->save();
      return redirect('/blog');
    }
    public function find($id){
      $post = Post::find($id);
      return view('post',compact('post'));
    }
}
