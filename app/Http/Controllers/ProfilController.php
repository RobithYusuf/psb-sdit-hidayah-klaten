<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function admin()
    {
        // Ambil data user yang memiliki role 'admin'
        $data = User::where('role', 'admin')->get();

        return view('profil.admin', compact('data'));
    }

    public function panitia()
    {
        $user = auth()->user(); // Mendapatkan user yang sedang login
        $panitia = $user->panitia; // Mendapatkan data panitia dari user yang sedang login

        return view('profil.panitia', compact('panitia'));
    }

    public function casis()
    {
        $user = auth()->user(); // Mendapatkan user yang sedang login
        $casis = $user->casis; // Mendapatkan data calon siswa (casis) dari user yang sedang login

        return view('profil.casis', compact('casis','user'));
    }
}
