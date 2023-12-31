<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Laravel\Sanctum\HasApiTokens;

class users extends Model
{
    use HasApiTokens, HasFactory;
    protected $table = 'users';

    protected $fillable = ['name', 'email', 'password', 'role'];

    public function users()
    {
        return $this->hasMany(t_barang::class);
    }
}
