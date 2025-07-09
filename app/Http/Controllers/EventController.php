<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
        public function event(){
        return view('event');
    }

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }
}


