<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        return view('frontend.cart');
    }
    public function destroy()
    {
        Cart::destroy();
        return redirect()->route('products.index');
    }
    public function storeCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        Cart::add($id, $product->title, $request->product_qty, $product->sale_price, $product->weight, ['image' => $product->featured_image, 'color' => $request->color, 'size' => $request->size,]);

        // $carts = Cart::add(['id' => $id, 'name' => $product->title, 'qty' => 1, 'price' => $product->sale_price, 'weight' => 550, 'options' => ['featured_image' => $product->featured_image]]);
        // Cart::add([$carts]);
        // return response()->json(['success' => 'Product Added to Cart' . $id]);
        return back();
    }
    public function update(Request $request, $id)
    {
        // Cart::update($rowId, 2);
        Cart::update($id, $request->quantity);
        return back();
    }
    public function check()
    {
        // Cart::destroy();
        $content = Cart::content();
        return response()->json($content);
    }
    public function remove($id)
    {
        Cart::remove($id);

        return back()->with('success', 'Item has been removed');
    }
    /**
     * *****************************************************
     *          Saved For Later Instance
     * *****************************************************
     */

    public function storeSavedforLater(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        // return $product;
        Cart::instance('savedforlater')->add($id, $product->title, 1, $product->sale_price, $product->weight, ['image' => $product->featured_image, 'color' => $request->color, 'size' => $request->size]);
        // Cart::remove($request->rowId);
        return back();
    }

    public function destroysavedforLater()
    {
        Cart::instance('savedforlater')->destroy();
        return back()->with('success', 'Item has been destroy');
    }

    public function saveforlaterremove($id)
    {
        Cart::instance('savedforlater')->remove($id);
        return back()->with('success', 'Item has been removed');
    }

    public function moveProductSaveforlaterToCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        Cart::add($id, $product->title, $request->product_qty, $product->sale_price, $product->weight, ['image' => $product->featured_image, 'color' => $request->color, 'size' => $request->size,]);
        Cart::instance('savedforlater')->remove($request->rowId);
        return back();
    }
    public function applyCouponCode(Request $request)
    {
        //First time try;
        $coupon = Coupon::where('code', $request->coupon_code)->where('expiry_date', '>=', Carbon::today())->first();
        if ($coupon) {
            Cart::setGlobalDiscount($coupon->value);
        } else {
            return back()->with('error', 'Coupon Code is Invalid');
        }
        return back()->with('success', 'Coupon Code is Valid');
    }
    public function checkout(Request $request)
    {
        if (Auth::check()) {
            return view('frontend.checkout');
        } else {
            return redirect()->route('login');
        }
    }
}
