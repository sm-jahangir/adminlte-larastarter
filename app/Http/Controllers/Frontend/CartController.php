<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $CartContent = Cart::content();
        return view('frontend.cart', compact('CartContent'));
    }
    public function abcdef(Request $request)
    {
        return $request->all();
    }
    public function storeCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        Cart::add($id, $product->title, $request->product_qty, $product->price, $product->weight, ['image' => $product->featured_image, 'color' => $request->color, 'size' => $request->size,]);

        // $carts = Cart::add(['id' => $id, 'name' => $product->title, 'qty' => 1, 'price' => $product->price, 'weight' => 550, 'options' => ['featured_image' => $product->featured_image]]);
        // Cart::add([$carts]);
        // return response()->json(['success' => 'Product Added to Cart' . $id]);
        return back();
    }
    public function check()
    {
        // Cart::destroy();
        $content = Cart::content();
        return response()->json($content);
    }
    public function destroy($id)
    {
        Cart::remove($id);

        return back()->with('success', 'Item has been removed');
    }
}
