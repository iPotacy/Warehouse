<?php

namespace App\Http\Controllers;

use App\Models\transactionItems;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TransactionController extends Controller
{
    public function index(): View
    {
        $transaction = transactionItems::orderBy('id', 'desc')->get();
        return view ('admin.transaksi.index', compact('transaction'));
    }
}
