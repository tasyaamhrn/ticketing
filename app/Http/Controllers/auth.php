<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class auth extends Controller
{
    public function index(){
        return view('/login');
    }
    public function login(Request $request)
    {
        if (FacadesAuth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/dashboard');
        }else {

            return redirect('/');
        }

    }
    public function logout()
    {
        FacadesAuth::logout();
        return redirect('/');

    }
}
