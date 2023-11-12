<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class m_status extends Model
{
    use HasFactory;

    protected $table = 'm_status';

    protected $fillable = ['title'];

    public function tBarang(): belongsTo
    {
        return $this->belongsTo(t_barang::class);
    }
}
