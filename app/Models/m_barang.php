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

    protected $fillable = ['title'];

    // hasMany = "apabila nilai pada suatu column tidak unik / harus sama lebih dari 1";
    // hasOne = "apabila nilai pada suatu column  unik / tidak boleh sama lebih dari 1";

    public function tBarang()
    {
        return $this->hasMany(t_barang::class,'m_barang_id','id');
    }

    public function barang_keluar()
    {
        return $this->hasOne(VBarangKeluar::class,'m_barang_id','id');
    }
}
