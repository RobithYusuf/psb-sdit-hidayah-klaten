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
                            <h3><b>FORM DATA TAHUN AJARAN</b></h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p style="color: red;"></p>
                    <form method="post" action="/tahun ajar/update/{{$data->id_ajar}}">
                        @csrf

                        <!-- Form Pendaftaran Calon Siswa -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="tahun_ajar" class="form-label">Tahun Ajar</label>
                                    <input type="text" class="form-control" name="tahun_ajar" value="{{$data->tahun_ajar}}" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="mb-3">
                                        <label for="mulai_pendaftaran" class="form-label">Tanggal Mulai Pendaftaran</label>
                                        <input type="date" class="form-control" name="mulai_pendaftaran" value="{{$data->mulai_pendaftaran}}" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="batas_pendaftaran" class="form-label">Tanggal Batas Pendaftaran</label>
                                    <input type="date" class="form-control" name="batas_pendaftaran" value="{{$data->batas_pendaftaran}}" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="tgl_seleksi" class="form-label">Tanggal Seleksi</label>
                                    <input type="date" class="form-control" name="tgl_seleksi" value="{{$data->tgl_seleksi}}" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select" name="status" required>
                                        <option value="Berlangsung" {{ $data->status == 'Berlangsung' ? 'selected' : '' }}>Berlangsung</option>
                                        <option value="Berakhir" {{ $data->status == 'Berakhir' ? 'selected' : '' }}>Berakhir</option>
                                        <option value="Belum Dimulai" {{ $data->status == 'Belum Dimulai' ? 'selected' : '' }}>Belum Dimulai</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info">UPDATE</button>
                        <a href="/beranda/tahun ajar" class="btn btn-warning">BATAL</a>
                    </form>
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