<?php

use App\Http\Controllers\TeacherController;
use App\Http\Controllers\DriverController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user(); 
});

Route::get('/drivers', [DriverController::class, 'show']);   // List all users
Route::get('/welcome', function(){
    return view('/welcome');
}); // Get a specific user
Route::post('/users', [UserController::class, 'store']);  // Create a new user
Route::put('/users/{id}', [UserController::class, 'update']); // Update a specific user
Route::delete('/users/{id}', [UserController::class, 'destroy']); // Delete a specific user

