<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function show()
    {
        $customers = Customer::orderBy('created_at','Asc')->get();

 return view('customers', compact('customers'));
        
    }
}
