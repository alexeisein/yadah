<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Image;
use Storage;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::latest('id')->paginate(6);
        return view('event.index', compact(['events']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
          'title' => 'required|min:3|max:255',
          'description' => 'max:1000',
          'location' => 'max:255',
          'ticket' =>'max:50',
          'date' => 'max:11',
          'slug' => 'required|unique:posts,slug|alpha_dash|max:100',
          'event_image' => 'mimes:jpeg,png,jpg|max:1999',
        ]);

        $events = new Event;

        $events->title = $request->title;
        $events->description = $request->description;
        $events->location = $request->location;
        $events->ticket = $request->ticket;
        $events->event_date = $request->event_date;
        $events->slug = $request->slug;

          if ($request->hasFile('event_image')) {
            $image = $request->file('event_image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('yadah/images/event/'.$filename);

            Image::make($image)->save($location);

            $events->event_image = $filename;
          }

        $events->save();

        session()->flash('success', 'NEW EVENT: ' .strtoupper($events->title) .' has been created !');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('event.show', compact(['event']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
