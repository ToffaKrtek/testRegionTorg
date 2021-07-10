<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('auth');
    }
    public function register(){
        return view('auth');
    }
    public function make_register(Request $request){
        $valid = $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:7'
        ]);
    }
}
