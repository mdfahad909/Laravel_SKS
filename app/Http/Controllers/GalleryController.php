<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{


    function __construct()
    {
        $this->middleware('permission:gallery-list|gallery-create|gallery-edit|product-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:gallery-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:gallery-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:gallery-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $gallery = Gallery::orderBy('id', 'DESC')->get();
        return view('admin.gallery.index', compact('gallery'));
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
    public function store(Request $request, Gallery $gallery)
    {
        $this->validate($request, [
            'image' => 'required',
        ]);

        if (null !== $request->file('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('assets/img/gallery/', $filename);
            $gallery->image =  $filename;
        }

        $gallery->save();

        return redirect()->route('gallery.index')
            ->with('message', 'Gallery created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $this->validate($request, [
            'image' => 'required',

        ]);

        if ($request->hasfile('image')) {
            $imgDelete = 'assets/img/gallery/' . $gallery->img;
            if (File::exists($imgDelete)) {
                File::delete($imgDelete);
            }
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('assets/img/gallery/', $filename);
            $gallery->image = $filename;
        }
        $gallery->update();

        return back()->with('message', 'Gallery Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $image_path = 'assets/img/gallery/' . $gallery->image;
        if (File::exists($image_path)) {
            File::delete($image_path);
        }

        $gallery->delete();
        return redirect()->route('gallery.index')->with('message', 'Gallery Delete Success');
    }
}
