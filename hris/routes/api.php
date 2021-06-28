<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserController;

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

// Public Routes
Route::post('/login', [UserController::class,'login']);
Route::get('/users', [UserController::class,'index']);

// Protected Routes
Route::group(['middleware'=>['auth:sanctum']], function () {
    //Route::post('/users', [UserController::class,'store']);
});
