<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;

Route::get('/',[DashboardController::class,'getPage']);
Route::get('/events',[EventController::class,'index']);
Route::get('/events/create',[EventController::class,'create']);
Route::post('/events/create',[EventController::class,'store']);
Route::get('/events/delete/{id}',[EventController::class,'delete']);
Route::get('/events/update/{id}',[EventController::class,'edit']);
Route::post('/events/update',[EventController::class,'update']);
