<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    //
    public function index(){
        $categories = Category::all();
        return view('add_post',compact('categories'));
    }
    public function store(){
        $category = new Category;
        $category->name = request('name');
        $category->save();
    }
    public function update($id){
        $category = Category::find($id);
        $category->name = request('name');
        $category->update();
    }
    public function delete($id){
        $category = Category::find($id)->delete();
    }
}
