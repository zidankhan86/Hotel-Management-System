<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('backend.index');
});

Route::get('/',[IndexController::class,'dashboard'])->name('dashboard');

Route::resource('room',RoomController::class);