@extends('layout.tampilan')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <div class="row justify-content-between align-items-center">
                        <!-- Kolom Tambah Data -->
                        <div class="col-sm-6 mb-2 mb-sm-0">
                            <h3><b>DATA CALON SISWA</b></h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p><b>Data Calon Siswa</b></p>
                    <hr>
                    <!-- menampilkan form data casis hanya read only -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" class="form-control" id="nik" value="{{ $casis->nik }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" value="{{ $casis->nama }}" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir" value="{{ $casis->tempat_lahir }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="text" class="form-control" id="tanggal_lahir" value="{{ \Carbon\Carbon::parse($casis->tanggal_lahir)->format('d/m/Y') }}" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <input type="text" class="form-control" id="jenis_kelamin" value="{{ $casis->jenis_kelamin }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="jml_saudara" class="form-label">Jumlah Saudara</label>
                                <input type="text" class="form-control" id="jml_saudara" value="{{ $casis->jml_saudara ?? 'belum diinput' }}" readonly>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <p><b>Data Orang Tua Siswa</b></p>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nama_ortu" class="form-label">Nama Orang Tua</label>
                                <input type="text" class="form-control" id="nama_ortu" value="{{ $casis->nama_ortu }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="pendidikan_ortu" class="form-label">Pendidikan Orang Tua</label>
                                <input type="text" class="form-control" id="pendidikan_ortu" value="{{ $casis->pendidikan_ortu ?? 'belum diinput' }}" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tempat_lahir_ortu" class="form-label">Tempat Lahir Orang Tua</label>
                                <input type="text" class="form-control" id="tempat_lahir_ortu" value="{{ $casis->tempat_lahir_ortu ?? 'belum diinput' }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tanggal_lahir_ortu" class="form-label">Tanggal Lahir Orang Tua</label>
                                <input type="text" class="form-control" id="tanggal_lahir_ortu" value="{{ $casis && $casis->tanggal_lahir_ortu ? \Carbon\Carbon::parse($casis->tanggal_lahir_ortu)->format('d/m/y') : 'belum diinput' }}" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="pekerjaan_ortu" class="form-label">Pekerjaan Orang Tua</label>
                                <input type="text" class="form-control" id="pekerjaan_ortu" value="{{ $casis->pekerjaan_ortu ?? 'belum diinput' }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="gaji_ortu" class="form-label">Gaji Orang Tua</label>
                                <input type="text" class="form-control" id="gaji_ortu" value="{{ $casis->gaji_ortu ?? 'belum diinput' }}" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" value="{{ $casis->alamat ?? 'belum diinput' }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="no_hp" class="form-label">No Telepon</label>
                                <input type="text" class="form-control" id="no_hp" value="{{ $casis->no_hp ?? 'belum diinput' }}" readonly>
                            </div>
                        </div>
                    </div>

                    <a href="/data/casis" class="btn btn-primary">Kembali</a>
                </div>

            </div>
        </div>
    </div>
</div>
</div>

<style>
    /* CSS untuk Bahan Baku dan Supplier */
    .form-label {
        font-weight: bold;
    }

    .form-select,
    .form-control {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
        padding: 10px 10px;
        border: none;
        cursor: pointer;
    }

    /* Gaya tambahan sesuai kebutuhan Anda */
    .content-wrapper {
        margin: 10px;
    }

    .card {
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #f8f9fa;
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }

    .card-body {
        padding: 30px;
    }
</style>

@endsection