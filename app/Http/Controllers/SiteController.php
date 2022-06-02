<?php

namespace App\Http\Controllers;
use app\Models\home;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('site.index');
    }

    public function home(){
        return view('site.home');
        
    }
    public function menu(){
        return view('site.menu');
    }
    public function dessert(){
        return view('site.dessert');
    }
    public function drink(){
        return view('site.drink');
    }
    public function meals(){
        return view('site.meals');
    }




    public function location(){
        return view('site.location');
    }
    
}
