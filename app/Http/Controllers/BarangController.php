<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_barang;
use Illuminate\Support\Facades\DB; // jika pakai query builder

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
        $validatedData = $request->validate([
            'title' => 'required',
            'status' => 'required|in:0,1', // Validasi untuk memastikan nilai yang sesuai dengan tipe tinyint
        ]);
    
        try{
            DB::table('m_barang')->insert(
                [
                    'title'=>$request->title,
                    'status'=>$request->status,
                    //'created_at'=>now(),
                ]);
        
            return redirect()->route('barang.index')
                            ->with('success','Data Item Baru Berhasil Disimpan');
        }
        catch (\Exception $e){
            //return redirect()->back()
            return redirect()->route('barang.index')
                ->with('error', 'Terjadi Kesalahan Saat Input Data!');
        }  
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
