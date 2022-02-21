<?php

use App\Http\Controllers\ServiController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('skill', function () {
    return view('skill');
})->name('skill');

Route::get('services',[ServiController::class,'show'])->name('services');
Route::get('contact',[ContactController::class,'show'])->name('contact');


