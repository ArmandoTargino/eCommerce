<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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


Route::get('/auth/google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/auth/callback', function () {
    $user = Socialite::driver('google')->user();

    // $user->token
});
Route::get('/auth/facebook', function () {
    return Socialite::driver('facebook')->redirect();
});
Route::get('/auth/callback', function () {
    $user = Socialite::driver('facebook')->user();

    // $user->token
});

Route::view("/register","register");

route::get("/logout",function(){
  Session::forget('user');
  return redirect("login");
});

Route::get('/', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
// Route::get('/register', function () {
//     return view('register');
// });
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/plans', function () {
    return view('plans');
});
Route::get('/about', function () {
    return view('about');
});

Route::post("/login",[UserController::class,"login"]);
Route::post("/register",[UserController::class,"register"]);
// Route::get("/login",[ProductController::class,"index"]);
