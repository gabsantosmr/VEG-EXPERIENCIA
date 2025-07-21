<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function event(){

        $search = request('search');

        if ($search) {
            
            $event = Event::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();
        } else {
            $event = Event::All();
        }

        return view('event', ['event'=> $event, 'search' => $search]);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $event = new Event();

        $event ->title = $request->title;
        $event ->location = $request->location;
        $event ->description = $request->description;
        $event ->date_event = $request->date_event;
        $event ->date_final = $request->date_final;
        
       if ($request->hasfile('image') && $request->file('image')->isValid()) {
        $requestImage = $request->image;
        $extension = $requestImage->extension();
        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . '.' . $extension;
        $requestImage->move(public_path('img/events'), $imageName);
        $event->image = $imageName;
        }
        
        $event ->save();

        return redirect('/event')->with('msg','Evento criado com sucesso!');
    }
    
}



