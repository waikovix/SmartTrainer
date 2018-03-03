<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/profile', function(){
    return view('profile');
})->name('Profile')->middleware('auth');
Route::get('/daily-intake', 'MealController@index')->name('home')->middleware('auth');
Route::get('/meals/add/{id}','MealController@find')->name('home')->middleware('auth');
Route::get('/meals/search/{meal}', 'FoodController@find')->name('home')->middleware('auth');
Route::get('food/add/', function(){
    return view('add_food');
})->middleware('auth');
Route::post('/food/create','FoodController@store')->middleware('auth');
Route::get('meals/search',function(){
    return view('search');
})->middleware('auth');
Route::post('/meals/add/{id}','MealController@store')->middleware('auth');
Route::get('/friends',function(){
    return view('friends');
})->middleware('auth');
Route::get('/users/search/{name}','UserController@search')->middleware('auth');
Route::get('/user/{id}','UserController@find')->middleware('auth');
Route::get('/blog/{start}', 'PostController@index')->name('home')->middleware('auth');
Route::get('/blog', function(){
    return view('blog');
})->name('home')->middleware('auth');
Route::get('/blog/posts/add','CategoryController@index')->name('home')->middleware('auth');
Route::get('/progress', function(){
    return view('progress');
});
Route::get('/progress/exercise','UserController@exerciseprogress')->middleware('auth');
Route::get('/progress/kg','UserController@kgprogress')->middleware('auth');
Route::get('/progress/exercise/search/{name}','ExcerciseController@find')->middleware('auth');;
Route::post('/progress/kg/add','KgController@store')->middleware('auth');//create kg progress record
Route::get('/exercise/add',function(){
  return view('add_exercise');
});
Route::post('/exercise/add','ExcerciseController@store');
Route::get('/progress/exercise/add/{id}',function(){
  return view('add_progress');
});
Route::post('/progress/exercise/add/{id}','ProgressController@store');//Create new Exercise progress record
Route::get('/progress/exercise/edit/{id}','ProgressController@find');//Get the exercise props
Route::patch('progress/exercise/edit/{id}','ProgressController@update');//Patch the exercise progeress record
Route::delete('progress/exercise/edit/{id}','ProgressController@delete');//Delete the exercise progress record

Route::get('/progress/kg/edit/{id}','KgController@find');
Route::patch('progress/kg/edit/{id}','KgController@update');
Route::delete('progress/kg/edit/{id}','KgController@delete');

Route::get('/meals/edit/{id}','MealController@findMeal');
Route::patch('/meals/edit/{id}','MealController@update');
Route::delete('/meals/edit/{id}','MealController@delete');
