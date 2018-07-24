<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventsController extends Controller
{
    public function index ()
    {
        $events = Event::all();
    
        return view('events.index', compact('events'));
    }
    
    public function realized ()
    {
        $events = Event::realized();
    
        return view('events.index', compact('events'));
    }
    
    public function planed ()
    {
        $events = Event::planed();
    
        return view('events.index', compact('events'));
    }
    
    public function show ($id)
    {
        $event = Event::find($id);
    
        return view('events.show', compact('event'));
    }
}
