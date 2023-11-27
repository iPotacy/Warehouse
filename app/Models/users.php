<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class users extends Model
{
    use HasFactory;
    protected $table = 'users';

    protected $fillable = ['name', 'eamil', 'password', 'role'];

    public function users()
    {
        return $this->hasMany(t_barang::class);
    }
}
