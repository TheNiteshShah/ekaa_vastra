<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\WebSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Auth;

class WebSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = WebSlider::wherenull('deleted_at')->latest()->get();
        return view('backend/web_slider.index', compact('slider'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $slider = new WebSlider();
        return view('backend/web_slider.create', compact('slider'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'link' => '',
        ]);
        if ($request->id === null) {
            $slider = new WebSlider();
        } else {
            $slider = WebSlider::where('id', $request->id)->first();
        }
        if (!empty($request->image)) {
            $file = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/web_slider/'), $file);
            $image = 'uploads/web_slider/' . $file;
        } else {
            $image = $slider->image;
        }
        $userId = Auth::id();
        $slider->image = $image;
        $slider->link = $request->link;
        $slider->ip = $request->ip();
        $slider->added_by = $userId;
        $slider->save();
        if ($slider) {
            if ($request->id === null) {
                return redirect()->route('web_slider.index')->with('success', 'Slider Added Successfully!');
            } else {
                return redirect()->route('web_slider.index')->with('success', 'Slider Updated Successfully');
            }
        } else {
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = WebSlider::where('id', $id)->first();
        return view('backend/web_slider.create', compact('slider'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $web_slider = WebSlider::findOrFail($id);
        $web_slider->delete();
        return $data = ['status' => 'success'];
    }
    public function updateStatus($id)
    {
        $web_slider = WebSlider::findOrFail($id);
        $web_slider->is_active = !$web_slider->is_active;
        $web_slider->save();
        return response()->json(['message' => 'Status updated successfully.']);
    }
}
