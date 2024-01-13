<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use App\Models\Event;
use App\Models\Member;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Donation;
use App\Models\Information;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{

    public function home()
    {
        $slider = new Slider();
        $slider = $slider->get();

        $gallery = new Gallery();
        $gallery =  Gallery::orderBy('id', 'desc')->take(4)->get();

        $event = new Event();
        $event =  Event::orderBy('id', 'desc')->take(3)->get();

        $donate = new Donation();
        $donate =  Donation::orderBy('id', 'desc')->take(3)->get();

        $member = new Member();
        $member =  Member::orderBy('id', 'desc')->take(3)->get();

        $goal = new Goal();
        $goal = $goal->get();

        $information = new Information();
        $information = $information->get();

        return view('index', compact('slider', 'gallery', 'goal', 'event', 'donate', 'member', 'information'));
    }




    // Pagination Gallery
    function gallery_data(Request $request)
    {
        if ($request->ajax()) {
            $gallery = DB::table('galleries')->paginate(12);
            return view('galleryPagination', compact('gallery'))->render();
        }
    }
    public function gallery()
    {
        $gallery = Gallery::latest()->paginate(12);
        return view('gallery', compact('gallery'));
    }

    // Pagination Donation
    function fetch_data(Request $request)
    {
        if ($request->ajax()) {
            $donate = DB::table('donations')->paginate(6);
            return view('donatePagination', compact('donate'))->render();
        }
    }
    public function donate()
    {
        $donate = Donation::latest()->paginate(6);
        return view('donate', compact('donate'));
    }

    // Events Pagination 
    function event_fetch_data(Request $request)
    {
        if ($request->ajax()) {
            $event = DB::table('events')->paginate(6);
            return view('eventPagination', compact('event'))->render();
        }
    }

    public function event()
    {
        $event = Event::latest()->paginate(6);
        return view('event', compact('event'));
    }

    // Members Pagination 
    function member_fetch_data(Request $request)
    {
        if ($request->ajax()) {
            $member = DB::table('members')->paginate(6);
            return view('memberPagination', compact('member'))->render();
        }
    }

    public function member()
    {
        $member = Member::latest()->paginate(6);
        return view('member', compact('member'));
    }








    public function about()
    {
        $donate = new Donation();
        $donate =  Donation::orderBy('id', 'desc')->take(3)->get();
        return view('about', compact('donate'));
    }
}
