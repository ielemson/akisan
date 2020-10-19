<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      
    //rediects the login page to the dashboard
        
    $title = "Home";
    return view('welcome')->with('title' , $title);
    }

    public function AppointmentForm(Request $request){
    // Form validation
    $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'inquiry' => 'required'
     ]);

    //  Store data in database
    Appointment::create($request->all());

    // 
    return back()->with('success', 'We have received your appointment and would get back to you shortly.');
    }
}
