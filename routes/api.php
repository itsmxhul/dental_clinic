<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/appointmentdata',[AppointmentController::class,'show']);
Route::get('/navbardata',[IndexController::class,'show']);
Route::get('/allcontactsdata',[ContactController::class,'show']);
Route::get('/deleteappointment/{id}',[AppointmentController::class,'destroy']);
