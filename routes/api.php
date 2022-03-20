<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::apiResource('followings', \App\Http\Controllers\FollowingsController::class);
Route::apiResource('followers', \App\Http\Controllers\FollowersController::class);
Route::apiResource('profile-content', \App\Http\Controllers\ProfileContentController::class);
