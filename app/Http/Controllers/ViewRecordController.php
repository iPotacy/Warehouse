<?php

namespace App\Http\Controllers;

use App\Models\t_barang;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // jika pakai query builder

class ViewRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $formDate = $request->input('fromDate');
        $toDate = $request->input('toDate');

        $query = DB::table('t_barang')->select()
         ->where('created_at', '>=', $formDate)
         ->where('created_at', '<=', $toDate)
         ->get();
        
        $rBarang = t_barang::orderBy('id', 'desc')->get();
        return view('user.record.record', compact('rBarang'));
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
}
