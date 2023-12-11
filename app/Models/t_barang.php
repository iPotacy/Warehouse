<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Http\Request;

class t_barang extends Model
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
                            'created_at',
                          ];
    // protected $guarded = [];
    // protected $hidden = ['created_at'];
    
    // membuat column asing / column tambahan di luar table 
    protected $appends = ['title_barang', 'name', 'title_status', 'title_transaction'];
    
    // Attribute
    public function getTitleBarangAttribute(){
        return $this->mBarang->title ?? null;
    }
    public function getTitleStatusAttribute(){
        return $this->mStatus->title ?? null;
    }
    public function getTitleTransactionAttribute(){
        return $this->mTransaction->title ?? null;
    }
    public function getNameAttribute(){
        return $this->users->name ?? null;
    }

    // Elequont RelationShip
    public function mBarang(): hasOne
    {
        return $this->hasOne(m_barang::class,'id','m_barang_id');
    }
    public function mStatus(): hasOne
    {
        return $this->hasOne(m_status::class, 'id', 'm_status_id')->where('status', 1);
    }
    public function mTransaction(): hasOne
    {
        return $this->hasOne(m_transaction::class, 'id', 'm_transaction_id')->where('status', 1);;
    }
    public function users(): hasOne
    {
        return $this->hasOne(users::class,'id','m_user_id');
    }
}