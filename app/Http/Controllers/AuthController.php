<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginPostRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('/index');
    }

    public function register(){
        return view('/register');
    }

    public function login(LoginPostRequest $request){
        $data=$request->validated();
        if(!Auth::attempt($data)){
            return back()
                ->withInput()
                ->withErrors(['auth'=>'メールアドレスかパスワードに誤りがあります。',]);
        }
        $request->session()->regenerate();
        return redirect()->intended('/check/input');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->regenerateToken();
        $request->session()->regenerate();
        return redirect('/');
    }
}
