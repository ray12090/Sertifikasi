<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class DataUserController extends Controller
{
    public function index(): View
    {
        //get datas
        $data = User::latest()->paginate(5);

        return view('admin.datauser', compact('data'));
    }

    public function create(): View
    {
        return view('admin.tambah-user');
        return response()->json(['success' => true, 'message' => 'Data user telah ditambahkan!']);
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],            'password' => ['required'],
            'no_hp' => ['required', 'string', 'max:20'],
            'provinsi_id' => ['required', 'string', 'max:20'],
            'kabupaten_id' => ['required', 'string', 'max:20'],
            'agama_id' => ['required', 'string', 'max:20'],          
            'usertype' => ['required'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'no_hp' => $request->no_hp,
            'provinsi_id' => $request->provinsi_id,
            'kabupaten_id' => $request->kabupaten_id,
            'agama_id' => $request->agama_id,     
            'usertype' => $request->usertype,
        ]);

        //redirect to index
        return redirect()->route('data-user.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        //get data by ID
        $data = User::findOrFail($id);

        //render view with data
        return view('admin.detail-user', compact('data'));
    }

    public function destroy($id): RedirectResponse
    {
        //get data by ID
        $data = User::findOrFail($id);

        //delete data
        $data->delete();

        //redirect to index
        return redirect()->route('data-user.index');
    }
    public function edit(string $id): View
    {
        //get data by ID
        $data = User::findOrFail($id);

        //render view with data
        return view('admin.edit-user', compact('data'));
    }
    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'no_hp' => ['required', 'string', 'max:20'],
            'provinsi_id' => ['required', 'string', 'max:20'],
            'kabupaten_id' => ['required', 'string', 'max:20'],
            'agama_id' => ['required', 'string', 'max:20'],            
        ]);

        //get data by ID
        $data = User::findOrFail($id);

            $data->update([
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'provinsi_id' => $request->provinsi_id,
            'kabupaten_id' => $request->kabupaten_id,
            'agama_id' => $request->agama_id,     
            ]);

        //redirect to index
        return redirect()->route('data-user.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
}
