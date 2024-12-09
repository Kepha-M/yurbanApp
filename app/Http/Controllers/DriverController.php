<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;

class DriverController extends Controller
{
    //view all divers
    public function show()
    {
       $drivers = Driver::all();

 return view('drivers', compact(drivers));
        
    }
    //
    public function showRegistrationForm()
    {
        return view('driver.register');
    }
    //store the drivers
    public function store(Request $request) {
        Driver::create([
          'name' => $request->get('name'),
          'county' => $request->get('county'),
          'phone_number' => $request->get('phone_number'),
          'email' => $request->get('email'),
        ]);

        return redirect('/drivers');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }
    
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }
    
        return redirect('/login')->with('error', 'Invalid credentials. Please try again.');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        Driver::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect('/login')->with('success', 'Registration successful! Please log in.');
    }
}
