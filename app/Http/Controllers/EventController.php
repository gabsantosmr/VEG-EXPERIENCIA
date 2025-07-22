<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

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

    // EventController.php
    public function create()
    {
        return view('create'); // Isso irá renderizar com o layout, se estiver correto
    }


    public function store(Request $request): RedirectResponse{
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
        $user = Auth::user();
        $event->user_id = $user->id;    
        
        $event ->save();

        return redirect('/event')->with('msg','Evento criado com sucesso!');
    }
    
    public function dashboard()
    {
        $user = Auth::user();
        $events = $user->events;
        return view('dashboard', ['event' => $events]);
    }

    public function destroy($id)
    {
        Event::findOrFail($id)->delete();;
       
        return redirect('/dashboard')->with('msg', 'Evento excluído com sucesso!');
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('edit', ['event' => $event]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        Event::findOrFail($id)->update($request->all());
        
        return redirect('/dashboard')->with('msg', 'Evento atualizado com sucesso!');
    }
}



