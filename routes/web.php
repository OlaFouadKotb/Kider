<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KiderController;

// Route::get('/', function () {
//     return view('test');});


    Route::get('/',[KiderController::class,('home')])->name('home');
    Route::get('about',[KiderController::class,('about')])->name('about');
     Route::get('error',[KiderController::class,('error')])->name('error');
     Route::get('appointment',[KiderController::class,('appointment')])->name('appointment');
     Route::get('call',[KiderController::class,('call')])->name('call');
     Route::get('classes',[KiderController::class,('classes')])->name('classes');
     Route::get('contact',[KiderController::class,('contact')])->name('contact');
     Route::get('facility',[KiderController::class,('facility')])->name('facility');
    Route::get('team',[KiderController::class,('team')])->name('team');
    Route::get('testimo',[KiderController::class,('testimo')])->name('testimo');
