<?php

namespace App\Http\Controllers;

use App\Models\m_barang;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ViewBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vBarang = m_barang::orderBy('id', 'desc')->get();
        return view('user.fitur.index', compact('vBarang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function itemsPDF(){
        $vBarang =  m_barang::orderBy('id', 'desc')->get();
        $pdf = PDF::loadView('user.fitur.itemsPDF', 
                              ['vBarang'=>$vBarang]);
        return $pdf->download('Data Items '.date('d-m-Y').'.pdf');
    }
}
