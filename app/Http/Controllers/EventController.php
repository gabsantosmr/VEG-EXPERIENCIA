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

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $event = new Event();

        $event ->title = $request->title;
        $event ->description = $request->description;

        $event ->save();

        return redirect('/event')->with('msg','Evento criado com sucesso!');
    }
}


