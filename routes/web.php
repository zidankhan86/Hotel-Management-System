<?php

use App\Http\Controllers\FacilitiesController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('backend.index');
});

Route::get('/',[IndexController::class,'dashboard'])->name('dashboard');

Route::resource('room',RoomController::class);
Route::resource('facilities',FacilitiesController::class);
Route::resource('features',FeaturesController::class);