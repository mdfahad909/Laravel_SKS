<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:event-list|event-create|event-edit|product-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:event-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:event-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:event-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $event = Event::orderBy('id', 'DESC')->get();
        return view('admin.event.index', compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Event $event)
    {
        if (null !== $request->file('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('assets/img/event/', $filename);
            $event->image =  $filename;
        }
        $event->date = $request->date;
        $event->time = $request->time;
        $event->address = $request->address;
        $event->text = $request->text;
        $event->save();

        return redirect()->route('event.index')
            ->with('message', 'Event created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('admin.event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('admin.event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {

        if ($request->hasfile('image')) {
            $imgDelete = 'assets/img/event/' . $event->img;
            if (File::exists($imgDelete)) {
                File::delete($imgDelete);
            }
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('assets/img/event/', $filename);
            $event->image = $filename;
        }

        $event->address = $request->address;
        $event->time = $request->time;
        $event->date = $request->date;
        $event->text = $request->text;
        $event->update();

        return back()->with('message', 'Event Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $image_path = 'assets/img/event/' . $event->image;
        if (File::exists($image_path)) {
            File::delete($image_path);
        }

        $event->delete();
        return redirect()->route('event.index')->with('message', 'Event Delete Success');
    }
}
