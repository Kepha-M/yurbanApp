<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RideController;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Models\Rides; 
use App\Models\Customer;
use App\Models\Driver;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

Route::get('/', function () { 
    if (Auth::check()){
        return view('/welcome');
    }
    return view('auth.login');
});


Route::redirect('/userRegister','/auth.register');


Route::get('/drivers', [DriverController::class, 'show'])->name('drivers');


//Customers routes

Route::get('/customers', [CustomerController::class, 'show'])->name('customer');
Route::post('/cusomers/create',[CustomerController::class,'create']);

//Rides routes

Route::get('rides',[RideController::class,'show'])->name('rides');
//Authenication routes
// Route::get('/login', [AuthController::class,'login'])->name('login');


require __DIR__.'/auth.php';
