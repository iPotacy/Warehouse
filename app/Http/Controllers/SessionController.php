<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    function index()
    {
        return view('login');
    }

    function create()
    {
        return view('register');
    }

    function store()
    {
        $this->validate
        (request(),
            [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required'
            ]
        );

        $user = User::create(request(['name', 'email', 'password']));

        return redirect()->to('/admin')->withSucces('Succes');
    }

    function login(Request $request)
    {
        $request->validate
        (
            [
                'email' => 'required', 
                'password' => 'required'
            ],
            [
                'email.required' => 'Email wajid di isi',
                'password.required' => 'Password wajid di isi'
            ]
        );

        $informationLogin =
        [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($informationLogin))
        {
            if (Auth::user()->role == 'admin')
            {
                return redirect ('admin');
            }
            elseif (Auth::user()->role == 'user')
            {
                return redirect ('user');
            }
        }
        else
        {
            return redirect('/login')->withErrors('Username dan Password tidak sesuai');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
