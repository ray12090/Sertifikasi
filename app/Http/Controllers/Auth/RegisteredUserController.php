<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Agama;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            // Add validation for new fields
            'no_hp' => ['required', 'numeric'],
            'provinsi_id' => 'required|integer|exists:provinsi,id',
            'kabupaten_id' => 'required|integer|exists:kabupaten,id',
            'agama_id' => 'required|integer|exists:agama,id',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'no_hp' => $request->no_hp,
            'provinsi_id' => $request->provinsi_id,
            'kabupaten_id' => $request->kabupaten_id,
            'agama_id' => $request->agama_id,
            // 'usertype' is already set to 'user' by default
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function showRegistrationForm()
    {
        $provinces = Provinsi::all(); // Assuming you have a Province model
        $districts = Kabupaten::all(); // Assuming you have a District model
        $religions = Agama::all(); // Assuming you have a Religion model

        return view('auth.register', compact('provinces', 'districts', 'religions'));
    }
}
