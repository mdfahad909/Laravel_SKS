<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GoalController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:goal-list|goal-create|goal-edit|product-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:goal-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:goal-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:goal-delete', ['only' => ['destroy']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goal = Goal::orderBy('id', 'DESC')->get();
        return view('admin.goal.index', compact('goal'));
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
    public function store(Request $request, Goal $goal)
    {
        if (null !== $request->file('img')) {
            $imgDelete = 'assets/img/goal/' . $goal->img;
            if (File::exists($imgDelete)) {
                File::delete($imgDelete);
            }

            $file = $request->file('img');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('assets/img/goal/', $filename);
            $goal->img = $filename;
        }

        $goal->heading = $request->heading;
        $goal->text = $request->text;
        $goal->save();

        return redirect()->route('goal.index')
            ->with('message', 'Goal created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function show(Goal $goal)
    {
        return view('admin.goal.show', compact('goal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function edit(Goal $goal)
    {
        return view('admin.goal.edit', compact('goal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Goal $goal)
    {
        if ($request->hasfile('img')) {
            $imgDelete = 'assets/img/goal/' . $goal->img;
            if (File::exists($imgDelete)) {
                File::delete($imgDelete);
            }
            $file = $request->file('img');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('assets/img/goal/', $filename);
            $goal->img = $filename;
        }

        $goal->heading = $request->heading;
        $goal->text = $request->text;
        $goal->update();

        return back()->with('message', 'Goal Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Goal $goal)
    {
        $image_path = 'assets/img/goal/' . $goal->img;
        if (File::exists($image_path)) {
            File::delete($image_path);
        }

        $goal->delete();
        return redirect()->route('goal.index')->with('message', 'Delete Success');
    }
}
