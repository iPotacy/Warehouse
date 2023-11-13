<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class m_transaction extends Model
{
    use HasFactory;

    protected $table = 'm_transaction';
    
    protected $fillable = ['title'];

    public function tBarang()
    {
        return $this->hasMany(t_barang::class, 'm_transaction_id', 'id');
    }


}
