<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
        $this->middleware('permission:slider-list|slider-create|slider-edit|product-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:slider-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:slider-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:slider-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $slider = Slider::orderBy('id', 'DESC')->get();
        return view('admin.slider.index', compact('slider'));
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
    public function store(Request $request, Slider $slider)
    {
        $this->validate($request, [
            'image' => 'required',

        ]);

        $slider->heading = $request->heading;
        if (null !== $request->file('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('assets/img/slider/', $filename);
            $slider->image =  $filename;
        }
        $slider->save();

        return redirect()->route('slider.index')
            ->with('message', 'Slider created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {

        return view('admin.slider.edit', compact('slider'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $this->validate($request, [
            'image' => 'required',

        ]);

        $slider->heading = $request->heading;
        if ($request->hasfile('image')) {
            $imgDelete = 'assets/img/slider/' . $slider->img;
            if (File::exists($imgDelete)) {
                File::delete($imgDelete);
            }
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('assets/img/slider/', $filename);
            $slider->image = $filename;
        }

        $slider->update();

        return back()->with('message', 'Slider Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */

    public function destroy(Slider $slider)
    {
        // $sliderDelete = slider::find($id);

        $image_path = 'assets/img/slider/' . $slider->image;
        if (File::exists($image_path)) {
            File::delete($image_path);
        }

        $slider->delete();
        return redirect()->route('slider.index')->with('message', 'Slider Delete Success');
    }
}
