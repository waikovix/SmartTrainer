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
Route::get('/friends/{id}','FriendController@find')->middleware('auth');