<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlanController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('login',[AuthController::class,'loginpage']);
Route::post('postlogin',[AuthController::class,'postlogin']);
Route::get('register',[AuthController::class,'registerpage']);
Route::post('postregister',[Authcontroller::class, 'postregister']);
Route::get('/logout',[Authcontroller::class, 'logout']);
Route::get('forget',[AuthController::class,'forgetpage']);
Route::get('/dashboard',[AuthController::class,'dashboard']);

Route::group(['middleware'=>'admin'],function(){
   
});

 

Route::get('plans', [PlanController::class, 'index']);
Route::get('plans/{plan}', [PlanController::class, 'show'])->name("plans.show");
Route::post('subscription', [PlanController::class, 'subscription'])->name("subscription.create");

Route::middleware("auth")->group(function () {
   
});



