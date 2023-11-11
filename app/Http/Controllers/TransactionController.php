<?php

namespace App\Http\Controllers;

use App\Models\transactionItems;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index(): View
    {
        $transaction = transactionItems::all();
        return view ('admin.transaksi.index', compact('transaction'));
    }
}
