<?php

namespace App\Http\Controllers\Backend;

use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categories = brand::where('parent_id', null)->orderBy('order', 'DESC')->get();
        $brands = Brand::orderBy('order', 'DESC')->get();
        return view('backend.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.brand.form');
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
        $brand = Brand::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => $request->filled('status'),
        ]);
        // upload images

        if ($request->has('logo')) {
            $img = $request->file('logo');
            $ext = $img->extension();
            $file = time() . '.' . $ext;
            $img->storeAs('public/brand', $file); //above 4 line process the image code
            $brand->logo =  $file; //ai code ta image ke insert kore
        }
        $brand->save();

        notify()->success('Brand Successfully Added.', 'Added');
        return redirect()->route('app.brand.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('backend.brand.form', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        // return $request;
        $brand->update([
            'name' => $request->name,
            'status' => $request->filled('status'),
        ]);
        // upload images
        if ($request->hasFile('logo') && request('logo') != '') {
            $imagePath = public_path('storage/brand/' . $brand->logo);
            if (File::exists($imagePath)) {
                unlink($imagePath);
            }
            $img = $request->file('logo');
            $ext = $img->extension();
            $file = time() . '.' . $ext;
            $img->storeAs('public/brand', $file); //above 4 line process the image code
            $brand->logo =  $file; //ai code ta image ke insert kore
            $brand->save();
        }
        notify()->success('brand Updated Successfully.', 'Updated');
        return redirect()->route('app.brand.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        notify()->success("Brand Successfully Deleted", "Deleted");
        return back();
    }
}
