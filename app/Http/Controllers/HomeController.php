<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        if(Auth::User() == null){
            return redirect(action('ControllerLogin@index'));
        }
        return view('home');
    }
}
