<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Route;
class HomeController2 extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('profesor');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home2');
    }

    public function salir()
    {
   
        Auth::guard('profesor')->logout();
        
        return redirect('/');
    }

     public function salirAdmin()
    {
   
        Auth::guard('web')->logout();
        
        return redirect('/');
    }

}
