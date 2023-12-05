<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\t_barang;

class ExcelExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $query = t_barang::query();

        if ($this->request->date_from && $this->request->date_to) 
        {
            $query->whereBetween(DB::raw('DATE(created_at)'), 
            [$this->request->date_from, $this->request->date_to]);
        }

        $result = $query->orderBy('id', 'desc')->get();

        // Transformasi kolom bayangan
        $transformedResult = $result->map(function ($item) 
        {
            return 
            [
                'title_barang' => $item->title_barang,
                'name' => $item->name,
                'title_transaction' => $item->title_transaction,
                'quantity' => $item->quantity,
                'description' => $item->description,
                'receiver' => $item->receiver,
                'title_status' => $item->title_status,
            ];
        });

        // Log::info('Generated Query:', ['query' => $query->toSql(), 'bindings' => $query->getBindings()]);

        return $transformedResult;
    }

    public function headings(): array
    {
        return 
        [
            'title_barang',
            'name',
            'title_transaction',
            'quantity',
            'description',
            'receiver',
            'title_status'
        ];
    }
}
