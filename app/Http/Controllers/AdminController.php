<?php

namespace App\Http\Controllers;

use App\Models\m_barang;
use App\Models\t_barang;
use App\Models\User;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function admin()
    {
        return view('admin.dashboard');
    }
    function user()
    {
        return view('user.dashboard');
    }


}
