<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        $events = Event::all();
        return view('welcome', ['events' => $events]);
    }
    //
    public function create(){

        return view('events.create');
    }
    public function store(Request $request){

        $events = new Event;

        $events->title = $request->title;
        $events->city = $request->city;
        $events->private = $request->private;
        $events->description = $request->description;
        $events->items = $request->items;

        //image uploaded

        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $events->image = $imageName;

        }

        $events->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }
    public function show($id){

        $event = Event::findOrFail($id);

        return view('events.show', ['event'=>$event]);
    }
}


