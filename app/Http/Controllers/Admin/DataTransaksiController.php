<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Transactions;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class DataTransaksiController extends Controller
{
    // public function index(): View
    // {
    //     $data = Transactions::oldest()->paginate(5);

    //     return view('admin.datatransaksi', compact('data'));
    // }

    // public function create(): View
    // {
    //     return view('admin.tambah-transaksi');
    // }

    public function index()
    {
        $orders = Order::where('status', 3)->paginate(10);
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
        //get data by ID
        $data = Transactions::findOrFail($id);

        //render view with data
        return view('admin.detail-transaksi', compact('data'));
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
    $data = Product::findOrFail($id);

    //check if photo is uploaded
    if ($request->hasFile('photo')) {

        //upload new photo
        $photo = $request->file('photo');
        $photo->storeAs('public/posts', $image->hashName());

        //delete old image
        Storage::delete('public/posts/'.$data->photo);

        //update post with new photo
        $data->update([
            'product_name' => $request->product_name,
            'product_description' => $request->product_description,
            'price' => $request->price,
            'category1' => $request->category1,
            'category2' => $request->category2,
            'photo'     => $photo->hashName(),
        ]);

    } else {

        //update post without photo
        $data->update([
        'product_name' => $request->product_name,
        'product_description' => $request->product_description,
        'price' => $request->price,
        'category1' => $request->category1,
        'category2' => $request->category2,
        ]);
    }

    //redirect to index
    return redirect()->route('data-transaksi.index')->with(['success' => 'Data Berhasil Diubah!']);
}
}
