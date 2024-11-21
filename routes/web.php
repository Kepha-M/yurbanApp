<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RideController;
use App\Http\Controllers\AuthController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

// Route::get('/', function () {
//     if (Auth::check()){
//         return Redirect::to('/welcome');
//     }
//     return view('auth.login');
// });

// Route::get('/welcome', function () {
//     return view('welcome');
// })->middleware(['auth'])->name('index');

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',function(){
    return view('welcome');
});


//users register
Route::get('/register', [DriverController::class, 'showRegistrationForm']);
Route::post('/register', [DriverController::class, 'register'])->name(name: 'register');

//Login Routes
// Route::get('/login', [DriverController::class, 'showLoginForm']);
// Route::post('/login', [DriverController::class, 'login'])->name('login');

// Driver routes
Route::get('/drivers', [DriverController::class, 'show'])->name('drivers');


//Customers routes
Route::get('customers', function(){
    return view('customers');
});
Route::get('/customers', [CustomerController::class, 'show'])->name('customer');
Route::post('/cusomers/create',[CustomerController::class,'create']);

//Rides routes
Route::get('rides',[RideController::class,'show'])->name('ride');

//Authenication routes
Route::get('/login', [AuthController::class,'login'])->name('login');


require __DIR__.'/auth.php';