<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Aluno;
class ControllerLogin extends Controller
{
    public function index(){
        if(Auth::User()){
            return redirect(action('HomeController@index'));
        }
        return view('login');
    }
    
    public function deslogar(){
        Auth::logout();
        return redirect(action('ControllerLogin@index'));
    }
    public function logar(Request $request) {
        $username = $request->get("usuario");
        $password = $request->get("senha");
        $aluno = Aluno::where("username",'=',$username)->where("password",'=',$password)->first();
        if($aluno != null){
            Auth::login($aluno);
            return redirect('/home');
        }
        return "ruim";
        //return back()->with('login_fail', true);
    }
}
