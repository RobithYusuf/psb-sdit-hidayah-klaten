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
                            <h3><b>FORM TAGIHAN PEMBAYARAN</b></h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p style="color: red;"></p>
                    <form method="post" action="/pembayaran/proses/{{ $data->id_pembayaran}}">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="nik" class="form-label">NIK</label>
                                    <input type="text" class="form-control" name="nik" value="{{ $data->casis->nik}}" readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" value="{{ $data->casis->nama}}" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Nominal Pembayaran</label>
                                    <input type="text" class="form-control" value="Rp.100.000,00" readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Status Pembayaran</label>
                                    <select name="status_pembayaran" class="form-control" required>
                                    <option value="Belum Lunas" {{ $data->status_pembayaran === 'Belum Lunas' ? 'selected' : '' }}>Belum Lunas</option>
                                    <option value="Lunas" {{ $data->status_pembayaran === 'Lunas' ? 'selected' : '' }}>Lunas</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info">SIMPAN</button>
                        <a href="/data pembayaran" class="btn btn-warning">BATAL</a>
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
