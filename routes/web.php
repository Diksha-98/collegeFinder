<?php

use App\Http\Controllers\CollegeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StateController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
Route::get('/',[CollegeController::class,"index"])->name('index');
Route::resource('college',CollegeController::class);

Route::get('/',[CategoryController::class,"index"])->name('index');
Route::get('/show',[CategoryController::class,"show"])->name('show');
Route::resource('category',CategoryController::class);

Route::get('/',[CityController::class,"index"])->name('index');
Route::resource('city',CityController::class);

Route::get('/',[CourseController::class,"index"])->name('index');
Route::resource('course',CourseController::class);

Route::get('/',[StateController::class,"index"])->name('index');
Route::resource('state',StateController::class);


