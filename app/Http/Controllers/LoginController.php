<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\tahunajar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function registrasi(Request $request)
    {
        // Cek apakah ada tahun ajaran dengan status Berlangsung
        $tahunAjarBerlangsung = tahunajar::where('status', 'Berlangsung')->first();

        if (!$tahunAjarBerlangsung) {
            // Jika tidak ada tahun ajaran yang berlangsung, kembalikan dengan pesan error
            return redirect()->back()->with('error', 'Pendaftaran Siswa Baru Telah Ditutup');
        }

        // Jika ada tahun ajaran yang berlangsung, lanjutkan proses registrasi
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role' => 'Calon Siswa',
        ]);

        return redirect('/')->with('success', 'Registrasi berhasil!');
    }


    public function loginproses(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
            'captcha' => 'required|numeric',
            'num1' => 'required|numeric',
            'num2' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect('/')->withErrors($validator)->withInput();
        }

        // Validasi captcha
        if ($request->captcha != ($request->num1 + $request->num2)) {
            return redirect('/')->with('error', 'Jawaban Captcha Salah');
        }

        // Attempt login
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();

            // Store user object in session
            $request->session()->put('user', $user);

            // Redirect based on user role
            switch ($user->role) {
                case 'Admin':
                case 'Kepala Sekolah':
                    return redirect('/beranda');
                case 'Panitia':
                    return redirect('/beranda/panitia');
                case 'Calon Siswa':
                    return redirect('/beranda/casis');
                default:
                    Auth::logout();
                    return redirect('/')->with('error', 'Role tidak valid');
            }
        }

        // Login failed
        return redirect('/')->with('error', 'Email Atau Password Salah');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
