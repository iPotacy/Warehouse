<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_barang;
use Illuminate\Support\Facades\DB; // jika pakai query builder
use Illuminate\Database\Eloquent\Model; //jika pakai eloquent
use Illuminate\Http\RedirectResponse;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mBarang = m_barang::all();
        return view('admin.barang.index', compact('mBarang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view ('admin.barang.formTambahBarang');

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
        $ar_barang = m_barang::all();
        $row = m_barang::find($id);
        return view('admin.barang.form_edit_barang',compact('row','ar_barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'status' => 'required|in:0,1',
        ]);
    
        // Ambil data dari validasi
        $title = $request->input('title');
        $status = $request->input('status');
    
        // Gunakan data untuk update
        DB::table('m_barang')->where('id', $id)->update([
            'title' => $title,
            'status' => $status,
        ]);
    
        return redirect('/barang')
                ->with('success', 'Data Asset Berhasil Diubah');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
