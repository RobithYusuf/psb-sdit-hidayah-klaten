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
                            <h3><b>FORM DATA PANITIA</b></h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p style="color: red;"></p>
                    <form method="post" action="/panitia/proses">
                        @csrf

                        <!-- Form panitia-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Username</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="nama" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" name="jenis_kelamin" required>
                                        <option>Jenis Kelamin</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status Panitia</label>
                                    <select class="form-select" name="status" required>
                                        <option>Pilih Status</option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Non Aktif">Non-Aktif</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info">SIMPAN</button>
                        <a href="/data/panitia" class="btn btn-warning">BATAL</a>
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