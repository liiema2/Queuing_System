<?php

namespace App\Http\Controllers;
use  Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
// use app\Models\User;
class RegisterColler extends Controller
{
    //
    public function  create(){
        return view('register.create');
    }

    public function store(){

        return "ok";


    }
}
