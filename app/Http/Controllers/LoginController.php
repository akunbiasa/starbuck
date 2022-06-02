<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   public function index(){
       return view('login.index' ,[
           'tittle' => 'Login'
       ]);
   }

   public function authenticate(Request $request)
   {
    $credentials = $request->validate([
        'email'=>'required|email:dns',
        'password'=>'required',
    ]);
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('menus');
    }
    
    return back()->with('LoginError', 'Login Failed');
        
   }
}
