<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $products = Product::latest()->get();
        return view('frontend.index');
    }

    public function productapi()
    {
        $products = Product::with('images', 'categories')->get();
        return response()->json($products);
    }
    public function allcategory()
    {
        return Category::latest()->get();
    }
    public function categorybyproduct(Request $request, $slug)
    {
        $category = Category::where('slug', $slug)->first();
        return $category;
    }
}
