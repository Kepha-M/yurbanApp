<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Driver;
use App\Models\Rides;

class DashboardController extends Controller
{
    //use App\Product, App\User, App\Staff;
public function totals(){
$customerCount = Customer::count();
$driverCount = Driver::count();
$ridesCount = Rides::count();
return view('welcome', compact('customerCount', 'driverCount', 'ridesCount'));

}
}
