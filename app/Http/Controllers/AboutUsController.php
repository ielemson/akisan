<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
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
$title = "About Us";
return view('aboutUs')->with('title' , $title);

}



}
