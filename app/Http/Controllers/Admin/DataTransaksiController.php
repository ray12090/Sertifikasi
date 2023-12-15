<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Transactions;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DataTransaksiController extends Controller
{
    public function index()
    {
        $orders = Order::join('users', 'orders.user_id', '=', 'users.id')
                ->select('orders.*', 'users.name as user_name') 
                ->paginate(10);

        return view('admin.datatransaksi', compact('orders'));
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
        Transactions::create([
            'product_name' => $request->product_name,
            'product_id' => $request->product_id,
            'name' => $request->name,
            'user_id' => $request->user_id,
            'quantity' => $request->quantity,
            'days' => $request->days,
            'total_price' => $request->total_price,
]);

        //redirect to index
        return redirect()->route('data-transaksi.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        try {
            // Get data by ID
            $data = Order::join('products', 'orders.product_id', '=', 'products.id')
                          ->join('users', 'orders.user_id', '=', 'users.id')
                          ->select('orders.*', 'products.product_name', 'users.name as user_name')
                          ->findOrFail($id);
        
            // Render view with data
            return view('admin.detail-transaksi', compact('data'));
        } catch (ModelNotFoundException $e) {
            // Handle the case where the order with the specified ID is not found
            return response()->view('errors.404', [], 404);
        }
    }

    public function destroy($id): RedirectResponse
    {
        //get data by ID
        $data = Transactions::findOrFail($id);

        //delete data
        $data->delete();

        //redirect to index
        return redirect()->route('data-transaksi.index');
    }
    public function edit(string $id): View
    {
        //get data by ID
        $data = Transactions::findOrFail($id);

        //render view with data
        return view('admin.edit-transaksi', compact('data'));
    }

}
