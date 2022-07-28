<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function orders(Request $request)
    {
        $email = Auth::user()->email;
        $orders = Order::where('email', $email)->get();
        return view('frontend.dashboard.dashboard', compact('orders'));
    }
    public function details($id)
    {
        $order = Order::find($id);
        // return $order = Order::where('id', $id)->get();
        return view('frontend.dashboard.order-details', compact('order'));
    }
}
