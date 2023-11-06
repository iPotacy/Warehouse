<?php

namespace App\Http\Controllers;

use App\Models\transaksiBarang;
use Illuminate\Http\Request;

class barangController extends Controller
{
    public function index()
    {
        $barang = transaksiBarang::all();
 
        return view('multiUser', compact('barang'));
    }
}
