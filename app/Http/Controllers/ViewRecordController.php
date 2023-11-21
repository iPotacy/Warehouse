<?php

namespace App\Http\Controllers;

use App\Models\t_barang;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExcelExport;
class ViewRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $rBarang = t_barang::orderBy('id', 'desc')
        ->when
        (
            $request->date_from && $request->date_to,
            function (Builder $builder) use ($request) 
            {
                $builder->whereBetween
                (
                    DB::raw('DATE(created_at)'),
                    [
                        $request->date_from,
                        $request->date_to
                    ]
                );
            }
        )->paginate(5);
        
        return view('user.record.record', compact('rBarang', 'request'));
    }

    /**
     * Excel a newly created resource in storage.
     */
    public function exportExcel(Request $request)
    {
        // dd($request->date_from, $request->date_to);
        return Excel::download(new ExcelExport($request), 'Record.xlsx');
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
