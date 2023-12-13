<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function rental(Request $request)
    {
        $query = Product::query();

        // If a category is selected
        if ($request->has('category') && $request->category != 'all') {
            $query->where('category1', $request->category);
        }

        // If a search term is entered
        if ($request->has('search')) {
            $query->where('product_name', 'like', '%' . $request->search . '%');
        }

        $products = $query->get();
        $categories = Product::select('category1')->distinct()->pluck('category1');

        return view('rental', compact('products', 'categories'));
    }

    public function cart()
    {
        return view('cart');
    }

    public function addToCart(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1|max:2',
            'days' => 'required|integer|min:1|max:5'
        ]);

        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        if (count($cart) >= 2) {
            return redirect()->back()->with('error', 'You can only rent a maximum of 2 items at a time.');
        }

        $cart[$id] = [
            'product_name' => $product->product_name,
            'price' => $product->price,
            'quantity' => $request->quantity,
            'days' => $request->days,
            'photo' => $product->photo
        ];

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }


    public function updateCartItem(Request $request, $id)
    {
        $request->validate(['quantity' => 'required|integer|min:1']);
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
        }

        return redirect()->route('cart')->with('success', 'Cart updated successfully.');
    }

    public function deleteCartItem($id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart')->with('success', 'Item removed from cart.');
    }

        public function getJumlahBarang()
    {
        $jumlahBarang = Product::sum('jumlah');

        return view('admin.dashboard', compact('jumlahBarang'));
    }
}
