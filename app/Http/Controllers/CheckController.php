<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CheckPostRequest;


class CheckController extends Controller
{
    public function input(){
        return view('/check/input');
    }

    public function confirm(CheckPostRequest $request){
        $data=$request->validated();
        dd($data);
    }
}
