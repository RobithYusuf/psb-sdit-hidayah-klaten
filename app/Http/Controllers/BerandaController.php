<?php

namespace App\Http\Controllers;

use App\Models\selekasi;
use App\Models\tahunajar;
use App\Models\pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BerandaController extends Controller
{
    public function index()
    {
        // Mengambil total pendaftar
        $totalPendaftar = Pendaftaran::count();

        // Mengambil total pendaftar diterima
        $totalDiterima = Selekasi::where('hasil_seleksi', 'Lolos')->count();

        // Mengambil total pendaftar ditolak
        $totalDitolak = Selekasi::where('hasil_seleksi', 'Tidak Lolos')->count();

        // Mengambil tahun ajaran yang sedang berlangsung atau berakhir terbaru
        $tahunAjaranBerlangsung = tahunajar::where('status', 'Berlangsung')->first();

        if (!$tahunAjaranBerlangsung) {
            $tahunAjaranBerlangsung = tahunajar::where('status', 'Berakhir')->orderBy('tahun_ajar', 'desc')->first();
        }

        $tahunAjaranBerlangsung = $tahunAjaranBerlangsung ? $tahunAjaranBerlangsung->tahun_ajar : 'Tidak ada data tahun ajaran';

        return view('beranda', compact('totalPendaftar', 'totalDiterima', 'totalDitolak', 'tahunAjaranBerlangsung'));
    }


    public function berandacasis()
    {
        // Ambil data user yang sedang login
        $user = Auth::user();

        // Mengambil tahun ajaran yang sedang berlangsung atau berakhir terbaru
        $tahunajar = tahunajar::where('status', 'Berlangsung')->first();

        if (!$tahunajar) {
            $tahunajar = tahunajar::where('status', 'Berakhir')->orderBy('tahun_ajar', 'desc')->first();
        }

        // Kirim data ke view
        return view('berandacasis', compact('tahunajar'));
    }

    public function berandapanitia()
    {
        // Mengambil total pendaftar
        $totalPendaftar = Selekasi::count();

        // Mengambil total pendaftar diterima
        $totalDiterima = Selekasi::where('hasil_seleksi', 'Lolos')->count();

        // Mengambil total pendaftar ditolak
        $totalDitolak = Selekasi::where('hasil_seleksi', 'Tidak Lolos')->count();

        // Mengambil 5 casis dengan nilai tertinggi yang lolos
        $casisTertinggi = Selekasi::where('hasil_seleksi', 'Lolos')
            ->orderBy('nilai_akhir', 'desc')
            ->with('casis')
            ->take(5)
            ->get();

        // Mengambil tahun ajaran yang sedang berlangsung atau berakhir terbaru
        $tahunAjaranBerlangsung = tahunajar::where('status', 'Berlangsung')->first();

        if (!$tahunAjaranBerlangsung) {
            $tahunAjaranBerlangsung = tahunajar::where('status', 'Berakhir')->orderBy('tahun_ajar', 'desc')->first();
        }

        $tahunAjaranBerlangsung = $tahunAjaranBerlangsung ? $tahunAjaranBerlangsung->tahun_ajar : 'Tidak ada data tahun ajaran';

        return view('berandapanitia', compact('totalPendaftar', 'totalDiterima', 'totalDitolak', 'casisTertinggi', 'tahunAjaranBerlangsung'));
    }
}
