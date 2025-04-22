<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Mahasiswa;


class AuthController extends Controller
{
    function login() {
        return view('login');
    }
    
    public function authenticating(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'nim' => 'required'
    ]);

    $mahasiswa = Mahasiswa::where('nama', $request->nama)
                          ->where('nim', $request->nim)
                          ->first();

    if ($mahasiswa) {
        // Simpan di session manual
        session(['mahasiswa' => $mahasiswa]);

        return redirect('/mahasiswa');
    }

    return back()->withErrors([
        'nama' => 'Nama atau NIM salah.',
    ]);
}
    
        public function logout(Request $request)
        {
        
            $request->session()->forget('mahasiswa');
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        
            return redirect('/login');
        }
}
