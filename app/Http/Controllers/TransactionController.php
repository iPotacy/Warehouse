<?php

namespace App\Http\Controllers;

use App\Models\m_barang;
use App\Models\m_status;
use App\Models\m_transaction;
use App\Models\t_barang;
use App\Models\users;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
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
        $tBarang = t_barang::orderBy('id', 'desc')
        ->with([
            'mBarang:id,title',
            'users:id,name',
            'mTransaction:id,title',
            'mStatus:id,title'
        ])->get();
        return view ('admin.transaksi.index', compact('tBarang'));
        // return response()->json($tBarang);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mBarang = m_barang::all()->where('status', 1);
        $users = users::all();
        $mStatus = m_status::all()->where('status', 1);
        $mTransaction = m_transaction::all();
        return view ('admin.transaksi.formTambahTransaksi', compact('mBarang','users','mStatus','mTransaction'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedTransaction = $request->validate
        (
            [
                'm_barang_id' => 'required|integer',
                'm_user_id' => 'required|integer',
                'm_transaction_id' => 'required|integer',
                'quantity' => 'required|integer',
                'description' => 'required',
                'receiver' => 'required',
                'm_status_id' => 'required|integer'
            ],
            [
                'm_barang_id' => 'Barang harus di Input',
                'm_user_id' => 'User harus di Input',
                'm_transaction_id' => 'Transaction harus di Input',
                'quantity' => 'Quantity harus di Input',
                'description' => 'Description harus di Input',
                'receiver' => 'Receiver harus di Input',
                'm_status_id' => 'Status harus di Input'
            ]
        );

        try
        {
            DB::table('t_barang')->insert([
                'm_barang_id' => $request->m_barang_id,
                'm_user_id' => $request->m_user_id,
                'm_transaction_id' => $request->m_transaction_id,
                'quantity' => $request->quantity,
                'description' => $request->description,
                'receiver' => $request->receiver,
                'm_status_id' => $request->m_status_id,
            ]);
        
            return redirect()->route('transaksi.index')
                             ->with('success','Transaction Berhasil Disimpan');
        }
        catch (\Exception $e)
        {
            return redirect()->route('transaksi.index')
                             ->with('error', 'Terjadi Kesalahan Saat Input Data!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $show = t_barang::find($id);
        return view('admin.transaksi.detail',compact('show'));
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
    public function transactionPDF(string $id)
    {
        if (t_barang::where('id', $id)->exists())
        {
            $generate = t_barang::find($id);
            // return view ('admin.transaksi.detailPDF', compact('generate'));
            $data = ['generate' => $generate,];
            $pdf = PDF::loadView('admin.transaksi.detailPDF', $data);
            return $pdf->download('invoice'.date('d-m-Y_H:i:s').'.pdf');
        }
        else
        {
            return redirect()->back()->with('Status','No Order');
        }
        // return view('admin.transaksi.detailPDF');
    }
}
