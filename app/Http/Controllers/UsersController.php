<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = users::all();

        return view ('admin.user.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = users::all();
        $row = users::find($id);
        return view('admin.user.edit',compact('row','data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'role' => 'required',
            'password' => 'nullable|min:8',
        ]);
        
        
        // Ambil data dari validasi
        $name = $request->input('name');
        $email = $request->input('email');
        $role = $request->input('role');
        $password = $request->input('password');
        
        if (!empty($password)) 
        {
            $password = Hash::make($password);
        }
        else 
        {
            // Jika password tidak diberikan, abaikan kolom password
            unset($password);
        }

         // Buat array untuk menyimpan data yang akan diupdate
        $updateData = [
            'name' => $name,
            'email' => $email,
            'role' => $role,
        ];

        // Tambahkan password ke array jika password diberikan
        if (isset($password)) {
            $updateData['password'] = $password;
        }

        // Gunakan data untuk update
        DB::table('users')->where('id', $id)->update($updateData);
    
        return redirect('/users')
                ->with('success', 'Data Users Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Users::find($id);

        if ($user) 
        {
            
            $user->delete();
            
            return redirect('/users')->with('success', 'Data Users Berhasil Dihapus');
        } 
        else 
        {
            return redirect('/users')->with('error', 'Data Users Tidak Ditemukan');
        }
    }
}
