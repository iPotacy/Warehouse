<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class transactionItems extends Model
{
    use HasFactory;

    protected $table = 't_barang';

    protected $fillable = [ 'm_barang_id',
                            'm_user_id',
                            'm_transaction_id',
                            'quantity',
                            'description',
                            'receiver',
                            'm_status_id',
                            'created_at'
                          ];
    
    public function masterItems(): BelongsTo
    {
        return $this->belongsTo(masterItems::class);
    }
    public function masterStatus(): BelongsTo
    {
        return $this->belongsTo(masterStatus::class);
    }
    public function masterTransaction(): BelongsTo
    {
        return $this->belongsTo(masterTransaction::class);
    }
    public function users(): BelongsTo
    {
        return $this->belongsTo(users::class);
    }
}
