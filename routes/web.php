<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CasisController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PanitiaController;
use App\Http\Controllers\OrangtuaController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\LaporanController;

// Public routes
Route::get('/', [PengaturanController::class, 'index']);
Route::post('/registrasi', [LoginController::class, 'registrasi'])->name('registrasi');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Authenticated routes
Route::middleware(['auth'])->group(function () {
    Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');

    // Calon Siswa routes
    Route::middleware(['role:Calon Siswa'])->group(function () {
        Route::get('/beranda/casis', [BerandaController::class, 'berandacasis'])->name('berandacasis');
        Route::get('/beranda/profil casis', [ProfilController::class, 'casis'])->name('casis');
        Route::get('/beranda/form', [CasisController::class, 'form'])->name('formcasis');
        Route::get('/beranda/form/casis', [CasisController::class, 'daftar'])->name('daftarcasis');
        Route::post('/beranda/form/casis/proses', [CasisController::class, 'proses'])->name('prosescasis');
        Route::get('/beranda/informasi pembayaran', [PembayaranController::class, 'infobayar'])->name('informasipembayaran');
        Route::get('/beranda/pembayaran', [PembayaranController::class, 'pembayaran'])->name('pembayaran');
        Route::post('/pelunasan', [PembayaranController::class, 'pelunasan'])->name('pelunasan');
        Route::get('/beranda/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman');
        Route::get('/unduh pengumuman/{id}', [PengumumanController::class, 'unduh'])->name('unduh');
    });

    // Panitia routes
    Route::middleware(['role:Panitia'])->group(function () {
        Route::get('/beranda/panitia', [BerandaController::class, 'berandapanitia'])->name('berandapanitia');
        Route::get('/beranda/profil panitia', [ProfilController::class, 'panitia'])->name('panitia');
        Route::get('/panitia/form nilai', [PanitiaController::class, 'nilai'])->name('nilai');
        Route::get('/panitia/input_nilai/{id}', [PanitiaController::class, 'input'])->name('input');
        Route::post('/panitia/simpan/{id}', [PanitiaController::class, 'simpan'])->name('simpan');
        Route::delete('/panitia/hapus/{id}', [PanitiaController::class, 'hapus'])->name('hapus');

        // Laporan
        Route::prefix('laporan')->group(function () {
            Route::get('pendaftaran', [LaporanController::class, 'pendaftaran'])->name('pendaftaran');
            Route::get('pembayaran', [LaporanController::class, 'pembayaran'])->name('pembayaran');
            Route::get('hasil casis', [LaporanController::class, 'hasilcasis'])->name('hasilcasis');
            Route::get('siswa lulus', [LaporanController::class, 'diterimacasis'])->name('diterimacasis');
            Route::get('siswa/tidak lulus', [LaporanController::class, 'gagalcasis'])->name('gagalcasis');
        });

        Route::prefix('unduh')->group(function () {
            Route::get('data casis', [LaporanController::class, 'datacasis'])->name('datacasis');
            Route::get('hasil casis', [LaporanController::class, 'unduhhasil'])->name('unduhhasil');
            Route::get('siswa lulus', [LaporanController::class, 'unduhditerima'])->name('unduhditerima');
            Route::get('siswa tidak lulus', [LaporanController::class, 'unduhgagal'])->name('unduhgagal');
            Route::get('laporan pendaftaran', [LaporanController::class, 'unduhpendaftaran'])->name('unduhpendaftaran');
            Route::get('laporan pembayaran', [LaporanController::class, 'unduhpembayaran'])->name('unduhpembayaran');
        });
    });

    // Admin routes
    Route::middleware(['role:Admin'])->group(function () {
        Route::get('/beranda/profil admin', [ProfilController::class, 'admin'])->name('admin');

        // Casis management
        Route::prefix('data/casis')->group(function () {
            Route::get('/', [CasisController::class, 'index'])->name('indexcasis');
            Route::get('edit/{id}', [CasisController::class, 'edit'])->name('editdata');
            Route::post('update/{id}', [CasisController::class, 'update'])->name('updatedata');
            Route::get('detail/{id}', [CasisController::class, 'detail'])->name('detailcasis');
            Route::delete('delete/{id}', [CasisController::class, 'deletecasis'])->name('deletecasis');
        });

        // Panitia management
        Route::prefix('data/panitia')->group(function () {
            Route::get('/', [PanitiaController::class, 'index'])->name('datapanitia');
            Route::get('add', [PanitiaController::class, 'add'])->name('addpanitia');
            Route::post('proses', [PanitiaController::class, 'proses'])->name('prosespanitia');
            Route::get('edit/{id}', [PanitiaController::class, 'edit'])->name('editpanitia');
            Route::post('update/{id}', [PanitiaController::class, 'update'])->name('updatepanitia');
            Route::delete('delete/{id}', [PanitiaController::class, 'delete'])->name('deletepanitia');
        });

        // Other admin routes
        Route::get('/data/ortu', [OrangtuaController::class, 'index'])->name('dataortu');
        Route::get('/data pembayaran', [PembayaranController::class, 'index'])->name('index');
        Route::get('/pembayaran/tagihan/{id}', [PembayaranController::class, 'tagihan'])->name('tagihan');
        Route::post('/pembayaran/proses/{id}', [PembayaranController::class, 'proses'])->name('proses');
        Route::delete('pembayaran/delete/{id}', [PembayaranController::class, 'delete'])->name('delete');

        // Pendaftaran
        Route::prefix('pendaftaran')->group(function () {
            Route::get('/', [PendaftaranController::class, 'index'])->name('datapendaftaran');
            Route::get('form', [PendaftaranController::class, 'formpendaftaran'])->name('formpendaftaran');
            Route::post('proses', [PendaftaranController::class, 'proses'])->name('prosespendaftaran');
            Route::get('tampil data/{id}', [PendaftaranController::class, 'tampil'])->name('tampildata');
            Route::post('prosesdata/{id}', [PendaftaranController::class, 'prosesdata'])->name('prosesdata');
        });

        // Laporan
        Route::prefix('laporan')->group(function () {
            Route::get('pendaftaran', [LaporanController::class, 'pendaftaran'])->name('pendaftaran');
            Route::get('pembayaran', [LaporanController::class, 'pembayaran'])->name('pembayaran');
        });

        Route::prefix('unduh')->group(function () {
            Route::get('data casis', [LaporanController::class, 'datacasis'])->name('datacasis');
            Route::get('laporan pendaftaran', [LaporanController::class, 'unduhpendaftaran'])->name('unduhpendaftaran');
            Route::get('laporan pembayaran', [LaporanController::class, 'unduhpembayaran'])->name('unduhpembayaran');
        });

        // Pengaturan
        Route::prefix('beranda')->group(function () {
            Route::get('pengaturan', [PengaturanController::class, 'pengaturan'])->name('photo.pengaturan');
            Route::get('pengumuman seleksi', [PengaturanController::class, 'pengseleksi'])->name('pengumuman.pengseleksi');
            Route::post('update-status-seleksi', [PengaturanController::class, 'updateStatusSeleksi'])->name('pengumuman.updateStatusSeleksi');
            Route::get('datauser', [PengaturanController::class, 'datauser'])->name('beranda.datauser');
            Route::get('tahun ajar', [PengaturanController::class, 'tahun'])->name('beranda.tahun');
        });

        Route::post('/photos/upload', [PengaturanController::class, 'upload'])->name('photo.upload');

        // Tahun Ajar
        Route::prefix('tahun ajar')->group(function () {
            Route::get('add', [PengaturanController::class, 'add'])->name('tahun.add');
            Route::post('simpan', [PengaturanController::class, 'simpan'])->name('tahun.simpan');
            Route::get('edit/{id}', [PengaturanController::class, 'edit'])->name('tahun.edit');
            Route::post('update/{id}', [PengaturanController::class, 'update'])->name('tahun.update');
            Route::delete('delete/{id}', [PengaturanController::class, 'delete'])->name('tahun.delete');
        });
    });
});
