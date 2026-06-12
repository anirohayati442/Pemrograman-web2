<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //menampilkan halaman login
    public function show_Login(){
        return view('login');
    }
    //memproses data login
    public function login(Request $request){
        $akun = $request->validate(
            [
                'email'=>'required|email',
                'password'=>'required'
            ]
        );
        //cek ke database apakah akun(email&password) cocok untuk login
        if (Auth::attempt($akun)) {
            //buat session
            $request->session()->regenerate();
            return redirect()->route('products.index');
        }
        //jika email/password salah maka akan kembalikan ke menu login dengan pesan error
        return back()->withErrors(['login_error' => 'email atau password salah']);
    }
    //proses logout
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
