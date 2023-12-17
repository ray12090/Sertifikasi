<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class DataProdukController extends Controller
{
    public function index(): View
    {
        //get datas
        $data = Product::oldest()->paginate(5);

        return view('admin.dataproduk', compact('data'));
    }
    public function create(): View
    {
        return view('admin.tambah-produk');
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'photo'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'product_name'  => 'required',
            'product_description'  => 'required',
            'price' => 'required',
            'category1' => 'required',
            'category2' => 'required',
            'stock' => 'required',
        ]);

        //upload image
        $image = $request->file('photo');
        $image->storeAs('public/products', $image->hashName());

        //create post
        Product::create([
            'photo'     => $image->hashName(),
            'product_name' => $request->product_name,
            'product_description' => $request->product_description,
            'price' => $request->price,
            'category1' => $request->category1,
            'category2' => $request->category2,
            'stock' => $request->stock,
        ]);

        //redirect to index
        return redirect()->route('data-product.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        //get data by ID
        $data = Product::findOrFail($id);

        //render view with data
        return view('admin.detail-produk', compact('data'));
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        // Check if there are any active rentals for this product
        $activeRentals = Order::where('product_id', $id)->whereIn('status', ['1', '2'])->count();

        if ($activeRentals > 0) {
            // If there are active rentals, redirect back with an error message
            return redirect()->back()->with('error', 'This product cannot be removed because it is currently rented by a user.');
        } else {
            // If there are no active rentals, delete the product
            $product->delete();

            return redirect()->route('data-product.index')->with('success', 'Product removed successfully.');
        }
    }
    public function edit(string $id): View
    {
        //get data by ID
        $data = Product::findOrFail($id);

        //render view with data
        return view('admin.edit-produk', compact('data'));
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
            'stock' => 'required',
        ]);

        //get post by ID
        $data = Product::findOrFail($id);

        //check if photo is uploaded
        if ($request->hasFile('photo')) {

            //upload new photo
            $photo = $request->file('photo');
            // $photo->storeAs('public/posts', $image->hashName());

            //delete old image
            // Storage::delete('public/posts/'.$data->photo);

            //update post with new photo
            $data->update([
                'product_name' => $request->product_name,
                'product_description' => $request->product_description,
                'price' => $request->price,
                'category1' => $request->category1,
                'category2' => $request->category2,
                'stock' => $request->stock,
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
                'stock' => $request->stock,
            ]);
        }

        //redirect to index
        return redirect()->route('data-product.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
}
