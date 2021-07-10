<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function get_all(){
        return view('item');
    }
    public function new(){
        return view('item');
    }
    public function edit(){
        return view('item');
    }
    public function delete(){
        return view('item');
    }
    public function search(){
        return view('item');
    }
}
