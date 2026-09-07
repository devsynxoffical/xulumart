<?php

namespace App\Http\Controllers;

use App\Helpers\ImageUpload;
use App\Models\Slider;
use Illuminate\Http\Request;
use Auth;
use File;
use Alert;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->type == 1) {
            $sliders = Slider::all();
            return view('admin.slider.index', compact('sliders'));
        }
        else {
            return back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // The "add new slide" form lives directly on the index page.
        return redirect()->route('slider.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120', // 5MB
            'link'  => 'nullable|string|max:255',
        ]);

        if (!File::isDirectory(public_path('images/slider'))) {
            File::makeDirectory(public_path('images/slider'), 0755, true);
        }

        $image = $request->file('image');
        $img   = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        ImageUpload::save($image, 'images/slider', $img);

        Slider::create([
            'image' => $img,
            'link'  => $request->link,
        ]);

        Alert::toast('New slide has been added', 'success');
        return redirect()->route('slider.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'position' => 'required|integer|exists:sliders,id',
            'image'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'link'     => 'nullable|string|max:255',
        ]);

        $slider = Slider::findOrFail($request->position);

        // image save
        if ($request->hasFile('image')) {
            if ($slider->image && File::exists(public_path('images/slider/' . $slider->image))) {
                File::delete(public_path('images/slider/' . $slider->image));
            }
            if (!File::isDirectory(public_path('images/slider'))) {
                File::makeDirectory(public_path('images/slider'), 0755, true);
            }
            $image = $request->file('image');
            $img = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            ImageUpload::save($image, 'images/slider', $img);
            $slider->image = $img;
        }

        if ($request->filled('link')) {
            $slider->link = $request->link;
        }

        $slider->save();
        Alert::toast('Slide has been changed', 'success');
        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::user()->type == 1) {
            $slider = Slider::findOrFail($id);
            if ($slider->image && File::exists(public_path('images/slider/' . $slider->image))) {
                File::delete(public_path('images/slider/' . $slider->image));
            }
            $slider->delete();
            Alert::toast('Slide has been removed', 'success');
        }
        return redirect()->route('slider.index');
    }
}