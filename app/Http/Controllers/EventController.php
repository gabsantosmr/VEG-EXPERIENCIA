<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
        public function event(){
            $event = Event::All();

        return view('event', ['event'=> $event]);
    }

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }
}


