<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function checkout(Request $request)
    {
        $cart = session()->get('cart');
        $totalPrice = $this->calculateTotalPrice($cart);

        $order = Order::create([
            'user_id' => Auth::id(),
            'items' => json_encode($cart),
            'total_price' => $totalPrice,
        ]);

        session()->forget('cart');

        return redirect()->route('home')->with('success', 'Checkout successful!');
    }

    private function calculateTotalPrice($cart)
    {
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        return $total;
    }
}
