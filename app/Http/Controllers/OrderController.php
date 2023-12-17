<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\ReturnOrder;
use App\Models\Product;
use App\Models\Transactions;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function checkout(Request $request)
    {
        $cart = session()->get('cart');

        foreach ($cart as $productId => $details) {
            $borrowDate = isset($details['borrow_date']) ? $details['borrow_date'] : Carbon::today()->toDateString();
            $returnDate = isset($details['return_date']) ? $details['return_date'] : Carbon::today()->addDays(1)->toDateString();

            $borrowDateCarbon = Carbon::parse($borrowDate);
            $returnDateCarbon = Carbon::parse($returnDate);
            $rentalDays = $borrowDateCarbon->diffInDays($returnDateCarbon);

            $currentDate = Carbon::today();
            $penalty = 0;
            if ($currentDate->gt($returnDateCarbon)) {
                $daysLate = $currentDate->diffInDays($returnDateCarbon);
                $penalty = 50000 * $daysLate;
            }

            $pricePerDay = $details['price'];
            $totalPrice = $pricePerDay * $details['quantity'] * $rentalDays + $penalty;

            $product = Product::find($productId);
            $product->stock -= $details['quantity'];
            $product->save();

            Order::create([
                'user_id' => Auth::id(),
                'product_id' => $productId,
                'status' => 1,
                'product_name' => $details['product_name'],
                'quantity' => $details['quantity'],
                'borrow_date' => $borrowDate,
                'return_date' => $returnDate,
                'price' => $pricePerDay * $details['quantity'], // Price per day
                'penalty' => $penalty,
                'total_price' => $totalPrice, // Total price including the rental days and penalty
            ]);
        }

        session()->forget('cart');
        return redirect()->route('orders')->with('success', 'Checkout successful!');
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
        $orders = Order::where('user_id', Auth::id())
            ->whereIn('status', [1, 2])
            ->get();

        foreach ($orders as $order) {
            $returnDate = Carbon::parse($order->return_date);
            $currentDate = Carbon::today();
            $penalty = 0;
            if ($currentDate->gt($returnDate)) {
                $daysLate = $currentDate->diffInDays($returnDate);
                $penalty = 50000 * $daysLate; // Replace 50000 with your penalty rate
            }
            $order->penalty = $penalty;
        }
        $returnOrders = Order::where('user_id', Auth::id())
            ->where('status', 3)
            ->get();
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
            'borrow_date' => $order['borrow_date'],
            'return_date' => $order['return_date'],
            'total_price' => $order->total_price,
        ]);

        $order->delete();

        return redirect()->route('orders')->with('success', 'Order returned successfully.');
    }
    public function updateOrderStatus($orderId)
    {
        $order = Order::findOrFail($orderId);
        if ($order->status == 1) {
            $order->status = 2;
            $order->save();
        }

        return back()->with('success', 'Order status updated successfully.');
    }
    public function confirmReturn($orderId)
    {
        $order = Order::findOrFail($orderId);
        if ($order->status == 2) {
            $order->status = 3; // Status changed to Confirmed
            $order->save();

            // Increase stock
            $product = Product::find($order->product_id);
            $product->stock += $order->quantity;
            $product->save();
        }

        return redirect()->route('data-pengembalian.index')->with('success', 'Return confirmed successfully.');
    }

    public function destroy(Order $order)
    {

        $order->delete();

        return redirect()->back()->with('error', 'Order deleted successfully.');
    }

}
