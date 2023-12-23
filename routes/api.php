<?php

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

Route::get('hotels', [App\Http\Controllers\HotelController::class,'hotels']);
Route::post('save_hotel', [App\Http\Controllers\HotelController::class,'saveHotel']);
Route::delete('delete_hotel/{id}', [App\Http\Controllers\HotelController::class,'deleteHotel']);
Route::get('get_hotel/{id}', [App\Http\Controllers\HotelController::class,'getHotel']);
Route::post('update_hotel/{id}', [App\Http\Controllers\HotelController::class,'updateHotel']);
