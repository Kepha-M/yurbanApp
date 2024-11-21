<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Rides;

use Illuminate\Http\Request;


class RideController extends Controller
{
    ////view all divers
    public function show()
    {
        $rides = Rides::all();

 return view('rides', compact('rides'));
        
    }
}
