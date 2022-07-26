<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Shipping;
use App\Models\Transaction;
use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{

    public function checkout(Request $request)
    {
        if (Cart::content()->count() > 0) {

            return view('frontend.checkout');
        } else {
            return redirect()->route('products.index');
        }
        // if (Auth::check()) {
        //     return view('frontend.checkout');
        // } else {
        //     return redirect()->route('login');
        // }
    }
    public function placeorder(Request $request)
    {
        # Guest Checkout

        // New User
        if ($request->new_account == true) {
            $new_user = User::create([
                'name' => $request->firstname,
                'email' => $request->email,
                'role_id' => 2,
                'password' => $request->new_password,
            ]);
            //New Order
            $order = Order::create([
                'user_id' => $new_user->id,
                'subtotal' => Cart::subtotal(),
                'discount' => Cart::discount(),
                'tax' => Cart::tax(),
                'total' => Cart::total(),
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'mobile' =>  $request->phone,
                'email' =>  $request->email,
                'line1' =>  $request->line1,
                'line2' =>  $request->line2,
                'city' =>  $request->city,
                'province' =>  $request->province,
                'country' =>  $request->country,
                'zipcode' =>  $request->zipcode,
                'status' =>  'ordered',
                'is_shipping_different' =>  $request->is_shipping_different ? 1 : 0,
            ]);
            //New Order Item Added
            foreach (Cart::content() as $item) {
                OrderItem::create([
                    'product_id' => $item->id,
                    'order_id' => $order->id,
                    'price' => $item->price,
                    'quantity' => $item->qty,
                ]);
            }
            //Jodi Diffrent Shipping address thake
            if ($request->is_shipping_different) {
                Shipping::create([
                    'order_id' => $order->id,
                    'firstname' => $request->s_firstname,
                    'lastname' => $request->s_lastname,
                    'mobile' =>  $request->s_phone,
                    'email' =>  $request->s_email,
                    'line1' =>  $request->s_line1,
                    'line2' =>  $request->s_line2,
                    'city' =>  $request->s_city,
                    'province' =>  $request->s_province,
                    'country' =>  $request->s_country,
                    'zipcode' =>  $request->s_zipcode,
                ]);
            }
            //Payment method
            if ($request->payment_method == 'cod') {
                Transaction::create([
                    'user_id' => $new_user->id,
                    'order_id' => $order->id,
                    'mode' => 'cod',
                    'status' => 'pending',

                ]);
            }
        } elseif (!Auth::check() && $request->new_account == false) {

            $new_user = User::create([
                'name' => $request->firstname,
                'email' => $request->email,
                'role_id' => 2,
                'password' => $request->new_password,
            ]);
            //New Order
            $order = Order::create([
                'user_id' => 3,
                'subtotal' => Cart::subtotal(),
                'discount' => Cart::discount(),
                'tax' => Cart::tax(),
                'total' => Cart::total(),
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'mobile' =>  $request->phone,
                'email' =>  $request->email,
                'line1' =>  $request->line1,
                'line2' =>  $request->line2,
                'city' =>  $request->city,
                'province' =>  $request->province,
                'country' =>  $request->country,
                'zipcode' =>  $request->zipcode,
                'status' =>  'ordered',
                'is_shipping_different' =>  $request->is_shipping_different ? 1 : 0,
            ]);
            //New Order Item Added
            foreach (Cart::content() as $item) {
                OrderItem::create([
                    'product_id' => $item->id,
                    'order_id' => $order->id,
                    'price' => $item->price,
                    'quantity' => $item->qty,
                ]);
            }
            //Jodi Diffrent Shipping address thake
            if ($request->is_shipping_different) {
                Shipping::create([
                    'order_id' => $order->id,
                    'firstname' => $request->s_firstname,
                    'lastname' => $request->s_lastname,
                    'mobile' =>  $request->s_phone,
                    'email' =>  $request->s_email,
                    'line1' =>  $request->s_line1,
                    'line2' =>  $request->s_line2,
                    'city' =>  $request->s_city,
                    'province' =>  $request->s_province,
                    'country' =>  $request->s_country,
                    'zipcode' =>  $request->s_zipcode,
                ]);
            }
            //Payment method
            if ($request->payment_method == 'cod') {
                Transaction::create([
                    'user_id' => 3,
                    'order_id' => $order->id,
                    'mode' => 'cod',
                    'status' => 'pending',

                ]);
            }
        }
        #If Authenticated User Checkout
        else {
            //New Order
            $order = Order::create([
                'user_id' => Auth::user()->id,
                'subtotal' => Cart::subtotal(),
                'discount' => Cart::discount(),
                'tax' => Cart::tax(),
                'total' => Cart::total(),
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'mobile' =>  $request->phone,
                'email' =>  $request->email,
                'line1' =>  $request->line1,
                'line2' =>  $request->line2,
                'city' =>  $request->city,
                'province' =>  $request->province,
                'country' =>  $request->country,
                'zipcode' =>  $request->zipcode,
                'status' =>  'ordered',
                'is_shipping_different' =>  $request->is_shipping_different ? 1 : 0,
            ]);
            //New Order Item Added
            foreach (Cart::content() as $item) {
                OrderItem::create([
                    'product_id' => $item->id,
                    'order_id' => $order->id,
                    'price' => $item->price,
                    'quantity' => $item->qty,
                ]);
            }
            //Jodi Diffrent Shipping added thake
            if ($request->is_shipping_different) {
                Shipping::create([
                    'order_id' => $order->id,
                    'firstname' => $request->s_firstname,
                    'lastname' => $request->s_lastname,
                    'mobile' =>  $request->s_phone,
                    'email' =>  $request->s_email,
                    'line1' =>  $request->s_line1,
                    'line2' =>  $request->s_line2,
                    'city' =>  $request->s_city,
                    'province' =>  $request->s_province,
                    'country' =>  $request->s_country,
                    'zipcode' =>  $request->s_zipcode,
                ]);
            }
            //Payment method
            if ($request->payment_method == 'cod') {
                Transaction::create([
                    'user_id' => Auth::user()->id,
                    'order_id' => $order->id,
                    'mode' => 'cod',
                    'status' => 'pending',

                ]);
            }
        }




        Cart::destroy();
        return redirect()->route('order.thank-you')->with('success', 'Order Placed Successfully');
    }
}
