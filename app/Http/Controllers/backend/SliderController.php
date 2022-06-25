<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::latest()->get();
        return view('backend.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.slider.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $slider = Slider::create([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'excerpt' => $request->excerpt,

            'button_1' => $request->button_1,
            'button_1_bg_color' => $request->button_1_bg_color,
            'button_1_link' => $request->button_1_link,

            'button_2' => $request->button_two,
            'button_2_bg_color' => $request->button_2_bg_color,
            'button_2_link' => $request->button_two_link,
            'position' => $request->position,
            'status' => $request->filled('status'),
        ]);


        if ($request->has('slider_bg')) {
            $slider_bg = $request->file('slider_bg');
            $ext = $slider_bg->extension();
            $file = time() . '.' . $ext;
            $slider_bg->storeAs('public/sliders', $file); //above 4 line process the image code
            $slider->slider_bg =  $file; //ai code ta image ke insert kore
        }
        $slider->save();



        notify()->success('Slider Successfully Added.', 'Added');
        return redirect()->route('app.slider.index');
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
        return view('backend.slider.form', compact('slider'));
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

        // return $request;
        $slider->update([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'excerpt' => $request->excerpt,

            'button_1' => $request->button_1,
            'button_1_bg_color' => $request->button_1_bg_color,
            'button_1_link' => $request->button_1_link,

            'button_2' => $request->button_two,
            'button_2_bg_color' => $request->button_2_bg_color,
            'button_2_link' => $request->button_two_link,
            'position' => $request->position,
            'status' => $request->filled('status'),
        ]);


        if ($request->has('slider_bg')) {
            $slider_bg = $request->file('slider_bg');
            $ext = $slider_bg->extension();
            $file = time() . '.' . $ext;
            $slider_bg->storeAs('public/sliders', $file); //above 4 line process the image code
            $slider->slider_bg =  $file; //ai code ta image ke insert kore
        }
        $slider->save();



        notify()->success('Slider Successfully Updated.', 'Updated');
        return redirect()->route('app.slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return back();
    }
}
