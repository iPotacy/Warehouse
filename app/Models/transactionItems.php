<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class transactionItems extends Model
{
    use HasFactory;

    protected $table = 'v_t_barang';

    protected $fillable = [ 'item',
                            'user',
                            'transaction',
                            'quantity',
                            'description',
                            'status',
                            'receiver',
                            'status'
                          ];
}
