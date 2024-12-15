<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciseRecommendationController;

Route::get('/index', function () {
    return view('index');
});
Route::get('/index', [ExerciseRecommendationController::class, 'index'])->name('index');
Route::post('/index', [ExerciseRecommendationController::class, 'submitRecommendation'])->name('recommendation.submit');
