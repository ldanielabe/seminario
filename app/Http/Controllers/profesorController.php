<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Route;
class profesorController extends Controller
{
    


public function ingresar(Request $request){




$tipo =  $request->input('tipo');

if ($tipo=="1") {

 if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->has('remember'))) {
        // if successful, then redirect to their intended location
     //  dd(Auth::guard('admin')->user());
        return redirect('/home');
    }

  return view('auth.login')->withInput($request->only('email', 'remember'));

}else if($tipo=="2"){

 if (Auth::guard('profesor')->attempt(['email' => $request->email, 'password' => $request->password], $request->has('remember'))) {
        // if successful, then redirect to their intended location
     //  dd(Auth::guard('admin')->user());



  
          return redirect('/home2');
    }

  return view('auth.login')->withInput($request->only('email', 'remember'));


} 
} 


public function logoutAdmin(Request $request){





} 







}
