<?php

namespace App\Http\Controllers\Backend;

use App\Models\Ad;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Ad::orderBy('order', 'DESC')->get();
        return view('backend.ads.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.ads.form');
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
        $ads = Ad::create([
            'name' => $request->name,
            'ads_location' => $request->ads_location,
            'slug' => Str::slug($request->name),
            'status' => $request->filled('status'),
        ]);
        // upload images

        if ($request->has('image')) {
            $img = $request->file('image');
            $ext = $img->extension();
            $file = time() . '.' . $ext;
            $img->storeAs('public/ads', $file); //above 4 line process the image code
            $ads->image =  $file; //ai code ta image ke insert kore
        }
        $ads->save();

        notify()->success('ads Successfully Added.', 'Added');
        return redirect()->route('app.ad.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function show(Ad $ad)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function edit(Ad $ad)
    {
        return view('backend.ads.form', compact('ad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ad $ad)
    {
        // return $request;
        $ad->update([
            'name' => $request->name,
            'ads_location' => $request->ads_location,
            'status' => $request->filled('status'),
        ]);
        // upload images
        if ($request->hasFile('image') && request('image') != '') {
            $imagePath = public_path('storage/ads/' . $ad->image);
            if (File::exists($imagePath)) {
                unlink($imagePath);
            }
            $img = $request->file('image');
            $ext = $img->extension();
            $file = time() . '.' . $ext;
            $img->storeAs('public/ads', $file); //above 4 line process the image code
            $ad->image =  $file; //ai code ta image ke insert kore
            $ad->save();
        }
        notify()->success('Ads Updated Successfully.', 'Updated');
        return redirect()->route('app.ad.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad $ad)
    {
        $ad->delete();
        notify()->success("Ads Successfully Deleted", "Deleted");
        return back();
    }
}
