<?php

namespace App\Http\Controllers;

use App\Models\m_barang;
use App\Models\User;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function admin()
    {
        return view('admin.dashboard');
    }
    function user()
    {
        return view('user.dashboard');
    }
    public function stock()
    {
        $items = DB::select
        ('
            SELECT
            m_barang.id AS m_barang_id,
            m_barang.title AS nama_barang,
            CONCAT
            (
                IFNULL(SUM(CASE WHEN m_transaction.title = "barang masuk" THEN t_barang.quantity ELSE 0 END), 0) -
                IFNULL(SUM(CASE WHEN m_transaction.title = "barang keluar" THEN t_barang.quantity ELSE 0 END), 0)
            ) 
            AS stok_barang
            FROM
                m_barang
            JOIN t_barang ON m_barang.id = t_barang.m_barang_id
            JOIN m_transaction ON t_barang.m_transaction_id = m_transaction.id
            WHERE
                m_barang.status = 1
            GROUP BY
                m_barang.id, m_barang.title
        ');

        $allItems = m_barang::where('status', 1)->get();

        return view('admin.dashboard', compact('items', 'allItems'));
    }


}
