<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index()
    {
        return view('frontend.cart');
    }
    public function storeCart($id)
    {
        $product = Product::findOrFail($id);
        Cart::add($id, $product->title, 2, $product->price, 550, ['image' => $product->featured_image]);
        // $carts = Cart::add(['id' => $id, 'name' => $product->title, 'qty' => 1, 'price' => $product->price, 'weight' => 550, 'options' => ['featured_image' => $product->featured_image]]);
        // Cart::add([$carts]);
        return response()->json(['success' => 'Product Added to Cart' . $id]);
    }
    public function check()
    {
        // Cart::destroy();
        $content = Cart::content();
        return response()->json($content);
    }
}
