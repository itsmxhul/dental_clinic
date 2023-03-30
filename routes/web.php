<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index',[IndexController::class,'index']);
Route::get('/services',[IndexController::class,'services']);
Route::get('/about',[IndexController::class,'about']);
Route::get('/navbar',[IndexController::class,'navbar']);
Route::get('/dashboard',[DashboardController::class,'dashboard']);
Route::get('/all_appointments',[AppointmentController::class,'appointments']);
Route::get('/contact',[ContactController::class,'contact']);
Route::get('/all_contacts',[ContactController::class,'contacts']);
Route::post('/contact',[ContactController::class,'viewcontact']);
Route::get('/registration',[AuthController::class,'registration']);
Route::post('/registration',[AuthController::class,'valid_register']);
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'valid_login']);
Route::get('/logout',[AuthController::class,'logout']);
Route::get('/appointment',[AppointmentController::class,'appointment']);
Route::post('/appointment',[AppointmentController::class,'viewappointment'])->middleware('auth');


