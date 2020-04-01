<?php

use Illuminate\Support\Facades\Route;

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

Route::match(array('GET','POST'),'/','MainPage@handler');

Route::get('/detail/{id}','DetailPage@handler');

// session test
// Route::get('/test', function () {
//     session(['email'=>'pranav']);
//     return back();
// });
// Route::get('/destroy', function () {
//     session(['email'=>'']);
//     return back();
// });


// ######## Swati ########
Route::get('/signup', function(){ return view('signup');})->name('signup');

Route::post('/register', 'UserController@storeUser');
Route::get('/login',function(){ return view('Login');})->name('login');

Route::get('/logout','UserController@logout');

Route::post('/authenticate', 'UserController@loginUser');