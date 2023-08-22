<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\models\category;
use App\Http\Controllers\CategoryController;


Route::middleware(['auth'])->prefix('/dashboard')->name('dashboard.')->group(function(){

    Route::get('/', function () {
        return view('frontend.index');
    })->name('index');

    Route::post('/categories' ,[ CategoryController::class , 'search'])
    ->name('search');
    Route::resource('/categories' , CategoryController::class);

});


