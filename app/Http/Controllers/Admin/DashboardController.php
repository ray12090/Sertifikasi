<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $usertype = Auth::user()->usertype;
            if($usertype == 'admin')
            {
                #New
                $jumlahProduct = Product::jumlahProduct();
                $jumlahUser = User::jumlahUser();
                $totalPrice = Order::totalOrderPrice();

                return view('admin.dashboard', compact('jumlahProduct','jumlahUser','totalPrice'));
            }else{
                return redirect()->back();
            }
        }
}

}