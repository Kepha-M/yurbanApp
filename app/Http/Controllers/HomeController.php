<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // You can pass data to the view if needed
        $welcomeMessage = 'Welcome to My Website';

        // Render the "home" view and pass data to it
        return view('welcome');
    }

    /**
     * Display the about page.
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        // Render the "about" view
        return view('about');
    }
}
