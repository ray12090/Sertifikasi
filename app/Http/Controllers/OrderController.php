<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\ReturnOrder;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function checkout(Request $request)
    {
        $cart = session()->get('cart');

        foreach ($cart as $productId => $details) {
            Order::create([
                'user_id' => Auth::id(),
                'product_id' => $productId,
                'product_name' => $details['product_name'],
                'quantity' => $details['quantity'],
                'days' => $details['days'],
                'total_price' => $details['price'] * $details['quantity']
            ]);
        }

        session()->forget('cart');
        return redirect()->route('home')->with('success', 'Checkout successful!');
    }



    private function calculateRentalDuration($cart)
    {
        $totalDuration = 0;
        foreach ($cart as $item) {
            $totalDuration += $item['days'] * $item['quantity']; // Total duration for all items
        }
        return $totalDuration;
    }

    private function calculateTotalPrice($cart)
    {
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        return $total;
    }

    public function orders()
    {
        $orders = Order::where('user_id', Auth::id())->get();
        $returnOrders = ReturnOrder::where('user_id', Auth::id())->get();
        return view('orders', compact('orders', 'returnOrders'));
    }

    public function returnOrder(Request $request, $orderId)
    {
        $order = Order::findOrFail($orderId);

        if ($order->user_id != Auth::id()) {
            abort(403);
        }

        ReturnOrder::create([
            'user_id' => $order->user_id,
            'product_id' => $order->product_id,
            'product_name' => $order->product_name,
            'quantity' => $order->quantity,
            'days' => $order->days,
            'total_price' => $order->total_price,
        ]);

        $order->delete();

        return redirect()->route('orders')->with('success', 'Order returned successfully.');
    }
}