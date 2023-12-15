<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::id()) {
            $usertype = Auth::user()->usertype;
            if ($usertype == 'user') {
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
            } else if ($usertype == 'admin') {
                $jumlahProduct = Product::jumlahProduct();
                $jumlahUser = User::jumlahUser();
                $totalPrice = Order::totalOrderPrice();

                return view('admin.dashboard', compact('jumlahProduct','jumlahUser','totalPrice'));
            } else {
                return redirect()->back();
            }
        }
    }

    public function post()
    {
        return view('post');
    }
}
