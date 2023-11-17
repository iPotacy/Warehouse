<?php

namespace App\Exports;

use App\Models\t_barang;
use Maatwebsite\Excel\Concerns\FromCollection;

class TransactionExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return t_barang::all();
    }
}
