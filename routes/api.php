<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\AnswersController;
use App\Http\Controllers\Api\DeskController;
use App\Http\Controllers\BiletController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QuestionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:api', 'throttle:60,1')->group(function () {
    Route::get('/user', function () {
        //
    });
});
