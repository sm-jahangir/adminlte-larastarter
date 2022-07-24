<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

class WishlistController extends Controller
{
    public function index()
    {
        $CartContent = Cart::instance('wishlist')->content();
        return view('frontend.wishlist', compact('CartContent'));
    }

    public function remove($id)
    {
        Cart::instance('wishlist')->remove($id);
        return back()->with('success', 'Item has been removed');
    }

    public function storeCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        // return $product;
        Cart::instance('wishlist')->add($id, $product->title, 1, $product->price, $product->weight, ['image' => $product->featured_image]);
        return back();
    }

    public function destroy()
    {
        Cart::instance('wishlist')->destroy();
        return back()->with('success', 'Item has been destroy');
    }
    public function moveProductWishlistToCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        Cart::add($id, $product->title, 1, $product->price, $product->weight, ['image' => $product->featured_image]);
        Cart::instance('wishlist')->remove($request->rowId);
        return back();
    }
}
