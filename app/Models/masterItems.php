<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class masterItems extends Model
{
    use HasFactory;

    protected $table = 'm_barang';

    protected $fillable = ['title'];

    public function transactionItems(): HasOne
    {
        return $this->hasOne(transactionItems::class);
    }
}