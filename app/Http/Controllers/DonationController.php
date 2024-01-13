<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DonationController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:donation-list|donation-create|donation-edit|product-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:donation-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:donation-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:donation-delete', ['only' => ['destroy']]);
    }

    public function index(Donation $donation)
    {
        $donation = Donation::orderBy('id', 'DESC')->get();
        return view('admin.donation.index', compact('donation'));
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
    public function store(Request $request, Donation $donation)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $donation->name = $request->name;
        $donation->phone = $request->phone;
        if (null !== $request->file('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('assets/img/donation/', $filename);
            $donation->image =  $filename;
        }

        $donation->amount = $request->amount;
        $donation->address = $request->address;

        $donation->save();

        return redirect()->route('donation.index')
            ->with('message', 'Donation created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function show(Donation $donation)
    {
        return view('admin.donation.show', compact('donation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function edit(Donation $donation)
    {
        return view('admin.donation.edit', compact('donation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donation $donation)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'amount' => 'required',
            'address' => 'required',

        ]);

        if ($request->hasfile('image')) {
            $imgDelete = 'assets/img/donation/' . $donation->img;
            if (File::exists($imgDelete)) {
                File::delete($imgDelete);
            }
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('assets/img/donation/', $filename);
            $donation->image = $filename;
        }

        $donation->name = $request->name;
        $donation->amount = $request->amount;
        $donation->phone = $request->phone;
        $donation->address = $request->address;
        $donation->update();

        return back()->with('message', 'Donation Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donation $donation)
    {
        $image_path = 'assets/img/donation/' . $donation->image;
        if (File::exists($image_path)) {
            File::delete($image_path);
        }

        $donation->delete();
        return redirect()->route('donation.index')->with('message', 'Delete Success');
    }
}
