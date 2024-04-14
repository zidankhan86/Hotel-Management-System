<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('backend.index');
});

Route::get('/',[IndexController::class,'dashboard'])->name('dashboard');