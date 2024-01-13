<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\Member;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Message;
use App\Models\Donation;
use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{

    public function dashboard()
    {
        $message = Message::all();
        $user = User::all();
        $event = Event::all();
        $slider = Slider::all();
        $gallery = Gallery::all();
        $member = Member::all();
        $donation = Donation::all();

        return view('admin.dashboard.dashboard', compact('message', 'donation', 'event', 'gallery', 'member', 'user', 'slider'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Information $information)
    {
        $information = $information->first();
        return view('admin.information.information', compact('information'));
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
    public function store(Request $request, Information $information)
    {
        $information->notic = $request->notic;
        $information->people = $request->people;
        $information->phone = $request->phone;
        $information->email = $request->email;
        $information->facebook = $request->facebook;
        $information->instagram = $request->instagram;
        $information->twitter = $request->twitter;
        $information->pinterest = $request->pinterest;
        $information->address = $request->address;
        $information->map = $request->map;
        $information->saveOrFail();

        return back()->with('message', 'Information created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function show(Information $information)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function edit(Information $information)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Information $information)
    {
        $information->notic = $request->notic;
        $information->phone = $request->phone;
        $information->email = $request->email;
        $information->facebook = $request->facebook;
        $information->instagram = $request->instagram;
        $information->twitter = $request->twitter;
        $information->pinterest = $request->pinterest;
        $information->address = $request->address;
        $information->map = $request->map;
        $information->update();
        return back()->with('message', 'Information Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function destroy(Information $information)
    {
        //
    }
}
