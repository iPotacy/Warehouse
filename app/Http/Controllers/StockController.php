<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_barang;
use App\Models\t_barang;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\StockExport;

class StockController extends Controller
{
    public function index()
    {
        $items = m_barang::select([
            'm_barang.id AS m_barang_id',
            'm_barang.title AS nama_barang',
            DB::raw
            ('
                COALESCE(SUM(CASE WHEN m_transaction.title = "Barang Masuk" THEN t_barang.quantity ELSE 0 END), 0) - 
                COALESCE(SUM(CASE WHEN m_transaction.title = "Barang Keluar" THEN t_barang.quantity ELSE 0 END), 0) AS stok_barang
            ')
        ])
        ->join('t_barang', 'm_barang.id', '=', 't_barang.m_barang_id')
        ->join('m_transaction', 't_barang.m_transaction_id', '=', 'm_transaction.id')
        ->where('m_barang.status', 1)
        ->groupBy('m_barang.id', 'm_barang.title')
        ->get();
        
        $allTransaction = t_barang::orderBy('id', 'desc')->paginate(5);

        $allItems = m_barang::where('status', 1)->get(); 

        return view('admin.dashboard', compact('items', 'allItems', 'allTransaction'));

        // return response()->json($items);
    }

    public function showStock(Request $request)
    {

        $rBarangQuery = m_barang::select(
            'm_barang.id AS m_barang_id',
            'm_barang.title AS nama_barang',
            DB::raw("CONCAT(
                        IFNULL(SUM(CASE WHEN m_transaction.title = 'barang masuk' THEN t_barang.quantity ELSE 0 END), 0) -
                        IFNULL(SUM(CASE WHEN m_transaction.title = 'barang keluar' THEN t_barang.quantity ELSE 0 END), 0)
                    ) AS stok_barang")
        )
        ->leftJoin('t_barang', 'm_barang.id', '=', 't_barang.m_barang_id')
        ->leftJoin('m_transaction', 't_barang.m_transaction_id', '=', 'm_transaction.id')
        ->groupBy('m_barang.id', 'm_barang.title');

        $rBarang = $rBarangQuery->get();

        // Jika $month diisi, maka lakukan query khusus
        if ($request->has('month')) {
            $month = $request->input('month');

            $selectedData = t_barang::select(
                    'm_barang.id AS m_barang_id',
                    'm_barang.title AS nama_barang',
                    DB::raw("DATE_FORMAT(t_barang.created_at, '%Y-%m') AS bulan_tahun"),
                    DB::raw("SUM(CASE WHEN m_transaction.title = 'barang masuk' THEN t_barang.quantity ELSE 0 END) AS stok_masuk"),
                    DB::raw("SUM(CASE WHEN m_transaction.title = 'barang keluar' THEN t_barang.quantity ELSE 0 END) AS stok_keluar"),
                    DB::raw("(SUM(CASE WHEN m_transaction.title = 'barang masuk' THEN t_barang.quantity ELSE 0 END) -
                            SUM(CASE WHEN m_transaction.title = 'barang keluar' THEN t_barang.quantity ELSE 0 END)) AS jumlah_stok")
                )
                ->join('m_barang', 'm_barang.id', '=', 't_barang.m_barang_id')
                ->join('m_transaction', 't_barang.m_transaction_id', '=', 'm_transaction.id')
                ->where(DB::raw("DATE_FORMAT(t_barang.created_at, '%Y-%m')"), '=', $month)
                ->groupBy('m_barang.id', 'm_barang.title', 'bulan_tahun')
                ->orderByDesc('bulan_tahun')
                ->get();

            return view('user.stock.stock', ['rBarang' => $rBarang, 'selectedData' => $selectedData, 'request' => $request]);
        }

        return view('user.stock.stock', ['rBarang' => $rBarang, 'request' => $request]);
        // return response()->json($rBarang);
        
    }
    /**
     * Excel a newly created resource in storage.
     */
    public function exportExcel(Request $request)
    {
        $month = $request->input('month');

        $filterData = t_barang::select(
            'm_barang.id AS m_barang_id',
            'm_barang.title AS nama_barang',
            DB::raw("DATE_FORMAT(t_barang.created_at, '%Y-%m') AS bulan_tahun"),
            DB::raw("SUM(CASE WHEN m_transaction.title = 'barang masuk' THEN t_barang.quantity ELSE 0 END) AS stok_masuk"),
            DB::raw("SUM(CASE WHEN m_transaction.title = 'barang keluar' THEN t_barang.quantity ELSE 0 END) AS stok_keluar"),
            DB::raw("(SUM(CASE WHEN m_transaction.title = 'barang masuk' THEN t_barang.quantity ELSE 0 END) -
                    SUM(CASE WHEN m_transaction.title = 'barang keluar' THEN t_barang.quantity ELSE 0 END)) AS jumlah_stok")
        )
            ->join('m_barang', 'm_barang.id', '=', 't_barang.m_barang_id')
            ->join('m_transaction', 't_barang.m_transaction_id', '=', 'm_transaction.id')
            ->where(DB::raw("DATE_FORMAT(t_barang.created_at, '%Y-%m')"), '=', $month)
            ->groupBy('m_barang.id', 'm_barang.title', 'bulan_tahun')
            ->orderByDesc('bulan_tahun')
            ->get();

        return Excel::download(new StockExport($filterData), 'Stock.xlsx');
    }
}
