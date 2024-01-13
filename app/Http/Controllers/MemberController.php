<?php

namespace App\Http\Controllers;


use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MemberController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:member-list|member-create|member-edit|product-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:member-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:member-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:member-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $member = Member::orderBy('id', 'DESC')->get();
        return view('admin.member.index', compact('member'));
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
    public function store(Request $request, Member $member)
    {
        $this->validate($request, [
            'name' => 'required',
            'district' => 'required',
            'address' => 'required',
        ]);


        if (null !== $request->file('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('assets/img/member/', $filename);
            $member->image =  $filename;
        }
        $member->position = $request->position;
        $member->name = $request->name;
        $member->phone = $request->phone;
        $member->district = $request->district;
        $member->address = $request->address;
        $member->save();

        return redirect()->route('member.index')
            ->with('message', 'Member created successfully');
    }

    public function memberStore(Request $request, Member $member)
    {
        if (null !== $request->file('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('assets/img/member/', $filename);
            $member->image = $filename;
        }

        $member->position = $request->position;
        $member->name = $request->name;
        $member->phone = $request->phone;
        $member->district = $request->district;
        $member->address = $request->address;
        $member->saveOrFail();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */

    public function show(Member $member)
    {
        return view('admin.member.show', compact('member'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        return view('admin.member.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        $this->validate($request, [
            'name' => 'required',
            'district' => 'required',
            'address' => 'required',

        ]);

        if ($request->hasfile('image')) {
            $imgDelete = 'assets/img/member/' . $member->img;
            if (File::exists($imgDelete)) {
                File::delete($imgDelete);
            }
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('assets/img/member/', $filename);
            $member->image = $filename;
        }

        $member->position = $request->position;
        $member->name = $request->name;
        $member->phone = $request->phone;
        $member->district = $request->district;
        $member->address = $request->address;
        $member->update();

        return back()->with('message', 'Member Update successfully');
    }

    public function changeStatus(Request $request)
    {
        $member = Member::find($request->member_id);
        $member->status = $request->status;
        $member->save();

        return response()->json(['success' => 'Status change successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        $image_path = 'assets/img/member/' . $member->image;
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        $member->delete();
        return redirect()->route('member.index')->with('message', 'Delete Success');
    }
}
