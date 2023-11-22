<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class m_barang extends Model
{
    use HasFactory;

    protected $table = 'm_barang';

    protected $fillable = ['title', 'status', 'created_at'];

    public $timestamps = true;
    const UPDATED_AT = false;

    // hasMany = "apabila nilai pada suatu column tidak unik / harus sama lebih dari 1";
    // hasOne = "apabila nilai pada suatu column  unik / tidak boleh sama lebih dari 1";

    public function tBarang()
    {
        return $this->hasMany(t_barang::class,'m_barang_id','id');
    }
}
