<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterPostRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User as UserModel;

class UserController extends Controller
{
    public function user(RegisterPostRequest $request){
        $data=$request->validated();
        try{
            $data['password']=Hash::make($data['password']);
            $r=UserModel::create($data);
        }catch(\Throwable $e){
            echo $e->getMessage();
            exit;
        }
        $request->session()->flash('user.register.success', true);
        return redirect('/');
    }
}
