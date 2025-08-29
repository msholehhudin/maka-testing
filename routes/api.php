<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/users', [UserController::class, 'index']);
// Route::post('/users', [UserController::class, 'index']);
// Route::put('/users', [UserController::class, 'index']);
// Route::delete('/users', [UserController::class, 'index']);

Route::get('/number-1', [UserController::class, 'number1']);
Route::get('/number-2', [UserController::class, 'number2']);


Route::resource('users', UserController::class);