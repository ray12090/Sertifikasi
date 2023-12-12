<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\DataPelangganController;

class DataPelangganController extends Controller
{
       public function index()
    {
        $posts = DataPelangganController::latest()->get();
        return view('datapelanggan.index', compact('datapelanggan'));
    }
}
