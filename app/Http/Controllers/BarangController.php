<?php

namespace App\Http\Controllers;

use App\Models\m_barang;
use App\Models\t_barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $tBarang = t_barang::where('m_user_id',2)->with(['mBarang' => function($mbarang){
        //         $mbarang -> with('barang_keluar');
        //     }
        // ])->get();
        $tBarang = t_barang::all();
        return view ('admin.transaksi.index', compact('tBarang'));
        // return response()->json($tBarang);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.transaksi.formTambahTransaksi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
