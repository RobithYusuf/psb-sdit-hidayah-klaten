<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\casis;
use App\Models\tahunajar;
use App\Models\pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PendaftaranController extends Controller
{
    public function index()
    {
        $data = pendaftaran::with('casis')->get();
        return view('pendaftaran.index', compact('data'));
    }

    public function tampil(Request $request, $id)
    {
        $data = pendaftaran::with('casis.pembayaran')->where('id_pendaftaran', $id)->firstOrFail();

        return view('pendaftaran.tampil', compact('data'));
    }

    public function prosesdata(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'status' => 'required|in:Berhasil,Gagal,Pending',
        ]);

        // Temukan entri pendaftaran berdasarkan ID
        $pendaftaran = Pendaftaran::findOrFail($id);

        // Update status pendaftaran
        $pendaftaran->status = $request->status;
        $pendaftaran->save();

        return redirect()->route('datapendaftaran')->with('success', 'Status pendaftaran berhasil diperbarui.');
    }

    public function formpendaftaran()
    {
        return view('pendaftaran.form');
    }

    public function proses(Request $request)
    {
        // Mendapatkan id_ajar dari tahun ajar yang berstatus 'Berlangsung'
        $tahunAjarBerlangsung = tahunajar::where('status', 'Berlangsung')->first();

        if ($tahunAjarBerlangsung) {
            // Proses menyimpan data user
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'Calon Siswa',
            ]);

            // Menyimpan data calon siswa
            $casis = casis::create([
                'user_id' => $user->id,
                'nik' => $request->nik,
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'nama_ortu' => $request->nama_ortu,
                'pendidikan_ortu' => $request->pendidikan_ortu,
                'gaji_ortu' => $request->gaji_ortu,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
            ]);

            // Menyimpan data pendaftaran
            $pendaftaran = pendaftaran::create([
                'casis_id' => $casis->id_casis,
                'tgl_pendaftaran' => now(),
                'status' => 'Pending',
                'ajar_id' => $tahunAjarBerlangsung->id_ajar,
            ]);

            // Redirect dengan pesan sukses
            return redirect()->route('datapendaftaran')->with('success', 'Data Berhasil Disimpan');
        } else {
            // Redirect dengan pesan error
            return redirect()->route('datapendaftaran')->with('error', 'Pendaftaran untuk tahun ini telah ditutup.');
        }
    }

    public function pendaftaran()
    {
        return view('pendaftaran.daftar');
    }
}
