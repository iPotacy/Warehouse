<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\t_barang;

use Illuminate\Http\Request;

class TransaksiBarangController extends Controller
{
    public function index(){
        //$ar_tbarang = DB::table('t_barang')->get();//query builder
        $ar_tbarang = t_barang::all();//eloquent
        return view('multiUser', compact('ar_tbarang'));

    }
}
