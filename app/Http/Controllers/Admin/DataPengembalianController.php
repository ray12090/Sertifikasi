<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\ReturnOrder;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Carbon\Carbon;

class DataPengembalianController extends Controller
{
    public function index()
    {     
        $orders = Order::join('users', 'orders.user_id', '=', 'users.id')
                ->where('orders.status', 2)
                ->select('orders.*', 'users.name as user_name') 
                ->paginate(10);

        $currentDate = Carbon::now(); 

        foreach ($orders as $order) {
            $returnDate = Carbon::parse($order->return_date);
            $borrowDate = Carbon::parse($order->borrow_date);

            // Menambahkan kondisi untuk memeriksa apakah return_date lebih dari hari ini
            // dan selisih antara borrow_date dan return_date lebih dari 5 hari
            if ($returnDate->greaterThan($currentDate) || $borrowDate->diffInDays($returnDate) < 5) {
                $order->bayar = true; 
            } else {
                $order->bayar = false;
            }
        }
        return view('admin.datapengembalian', compact('orders'));
    }



    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'user_id'         => 'required',
            'product_id'  => 'required',
            'name' => 'required',
            'product_name'  => 'required',
            'quantity' => 'required',
            'days' => 'required',
            'total_price' => 'required',
        ]);

        //create post
        Order::create([
            'product_name' => $request->product_name,
            'product_id' => $request->product_id,
            'name' => $request->name,
            'user_id' => $request->user_id,
            'quantity' => $request->quantity,
            'days' => $request->days,
            'total_price' => $request->total_price,
        ]);

        //redirect to index
        return redirect()->route('data-pengembalian.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        //get data by ID
        $data = Order::findOrFail($id);

        //render view with data
        return view('admin.detail-pengembalian', compact('data'));
    }

    public function destroy($id): RedirectResponse
    {
        //get data by ID
        $data = ReturnOrder::findOrFail($id);

        //delete data
        $data->delete();

        //redirect to index
        return redirect()->route('data-pengembalian.index');
    }
    public function edit(string $id): View
    {
        //get data by ID
        $data = Order::findOrFail($id);

        //render view with data
        return view('admin.edit-pengembalian', compact('data'));
    }
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'photo'         => 'image',
            'product_name'  => 'required',
            'product_description'  => 'required',
            'price' => 'required',
            'category1' => 'required',
            'category2' => 'required',
        ]);

        //get post by ID
        $data = Order::findOrFail($id);

        //check if photo is uploaded

            $data->update([
                'product_name' => $request->product_name,
                'product_description' => $request->product_description,
                'price' => $request->price,
                'category1' => $request->category1,
                'category2' => $request->category2,
            ]);

        //redirect to index
        return redirect()->route('data-pengembalian.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
}
