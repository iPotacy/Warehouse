<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class transactionItems extends Model
{
    use HasFactory;

    protected $table = 't_barang';

    protected $fillable = [ 'barang',
                            'user',
                            'transaction',
                            'quantity',
                            'description',
                            'receiver',
                            'status'
                          ];
    
    public function masterItems(): belongsTo
    {
        return $this->belongsTo(masterItems::class, 'title');
    }
    public function masterStatus(): belongsTo
    {
        return $this->belongsTo(masterStatus::class, 'title');
    }
    public function masterTransaction(): belongsTo
    {
        return $this->belongsTo(masterTransaction::class, 'title');
    }
}
