<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\t_barang; //panggil model
use App\Models\m_barang; //panggil model
use App\Models\users; //panggil model
use App\Http\Resources\AdminResource; //panggil resource
use Illuminate\Support\Facades\DB; // jika pakai query builder
use Illuminate\Database\Eloquent\Model; //jika pakai eloquent
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tBarang = m_barang::all();
        return new AdminResource(true,'Data Transaksi',$tBarang);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'm_barang_id' => 'required|max:45',
            'm_user_id' => 'required|max:45',
            'm_transaction_id' => 'required|max:45',
            'quantity' => 'required|max:45',
            'description' => 'required|max:45',
            'receiver' => 'required|max:45',
            'm_status_id' => 'required|max:45',
        ]);

        //cek error atau tidak inputan data
        if($validator->fails()){
            return response()->json($validator->errors(),422);
        }
        //proses menyimpan data yg diinput
        $tBarang = t_barang::create([
            'm_barang_id' => $request->m_barang_id,
            'm_user_id' => $request->m_user_id,
            'm_transaction_id' => $request->m_transaction_id,
            'quantity'=> $request->quantity,
            'description'=> $request->description,
            'receiver'=> $request->receiver,
            'm_status_id'=> $request->m_status_id,
        ]);

        return new AdminResource(true, 'Data Transaksi Berhasil diinput',$tBarang);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = users::find($id);
        if($user){
            return new AdminResource(true,'Detail Users',$user);
        }
        else{
            return response()->json(
                [
                    'success'=>false,
                    'message'=>'Data User Tidak Ditemukan',
                ],404);
        }    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:45',
            'email' => 'required|email',
            'password' => 'required|max:45',
            'role' => 'required|max:45',
        ]);

        //cek error atau tidak inputan data
        if($validator->fails()){
            return response()->json($validator->errors(),422);
        }
        //proses mengedit data lama
        $user = users::whereId($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);
        return new AdminResource(true, 'Data Item Berhasil diubah',$user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = users::whereId($id)->first();
        $user->delete();
        return new AdminResource(true, 'Data User Berhasil dihapus',$user);
    }

    public function register(Request $request)
    {
        $input  = [
            "name" => $request->name,
            "password" => Hash::make($request->password),
            "email" => $request->email,
        ];

        $user = users::create($input);

        return response()->json([
            "status" => "success",
            "message" => "Register success"
        ]);
    }
}
