<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_barang;
use App\Models\t_barang;
use App\Models\User;
use App\Models\users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StockController extends Controller
{
    public function index()
    {
        $items = m_barang::select([
            'm_barang.id AS m_barang_id',
            'm_barang.title AS nama_barang',
            DB::raw('COALESCE(SUM(CASE WHEN m_transaction.title = "barang masuk" THEN t_barang.quantity ELSE 0 END), 0) - COALESCE(SUM(CASE WHEN m_transaction.title = "barang keluar" THEN t_barang.quantity ELSE 0 END), 0) AS stok_barang')
        ])
        ->join('t_barang', 'm_barang.id', '=', 't_barang.m_barang_id')
        ->join('m_transaction', 't_barang.m_transaction_id', '=', 'm_transaction.id')
        ->where('m_barang.status', 1)
        ->groupBy('m_barang.id', 'm_barang.title')
        ->get();
        
        $allTransaction = t_barang::orderBy('id', 'desc')->paginate(5);

        $allItems = m_barang::where('status', 1)->get(); 

        return view('admin.dashboard', compact('items', 'allItems', 'allTransaction'));
    }
}
