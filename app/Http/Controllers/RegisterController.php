<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request ; 

class RegisterController extends Controller
{
   public function index(){
       return view('register.index' ,[
        'tittle' => 'Register'
    ]);
   }

   public function store(Request $request)
   {
    $validated= $request->validate([
          'name'=>'required',
          'username'=>'required',
          'email'=>'required',
          'password'=>'required'
      ]);
      $validated['passwordd'] =bcrypt($validated['password']);
      User::create($validated);

      
      
      return redirect()->route('login')->with('success', 'Registration Successfull ,Please Login!');
   }
}
