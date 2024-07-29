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
                    <form method="POST" action="{{ route('updatedata', $casis->id_casis) }}" enctype="multipart/form-data" onsubmit="return validateForm()">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="nik" class="form-label">NIK</label>
                                    <input type="text" class="form-control" name="nik" id="nik" value="{{ $casis->nik }}" required maxlength="10" oninput="validateNIK(this)">
                                    <small id="nikError" class="text-danger" style="display: none;">NIK harus terdiri dari 10 digit angka.</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" value="{{ $casis->nama }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tempat_lahir" value="{{ $casis->tempat_lahir }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tanggal_lahir" value="{{ $casis->tanggal_lahir }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" name="jenis_kelamin" required>
                                        <option value="">Jenis Kelamin</option>
                                        <option value="Laki-Laki" {{ $casis->jenis_kelamin == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                                        <option value="Perempuan" {{ $casis->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="jml_saudara" class="form-label">Jumlah Saudara</label>
                                    <input type="number" class="form-control" name="jml_saudara" value="{{ $casis->jml_saudara ?? 'belum diinput' }}">
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
                                    <input type="text" class="form-control" name="nama_ortu" value="{{ $casis->nama_ortu }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="pendidikan_ortu" class="form-label">Pendidikan Orang Tua</label>
                                    <select class="form-select" name="pendidikan_ortu" required>
                                        <option value="Tidak Bersekolah" {{ $casis->pendidikan_ortu == 'Tidak Bersekolah' ? 'selected' : '' }}>Tidak Bersekolah</option>
                                        <option value="SD" {{ $casis->pendidikan_ortu == 'SD' ? 'selected' : '' }}>SD</option>
                                        <option value="SMP" {{ $casis->pendidikan_ortu == 'SMP' ? 'selected' : '' }}>SMP</option>
                                        <option value="SMA" {{ $casis->pendidikan_ortu == 'SMA' ? 'selected' : '' }}>SMA</option>
                                        <option value="S1" {{ $casis->pendidikan_ortu == 'S1' ? 'selected' : '' }}>S1</option>
                                        <option value="S2" {{ $casis->pendidikan_ortu == 'S2' ? 'selected' : '' }}>S2</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="tempat_lahir_ortu" class="form-label">Tempat Lahir Orang Tua</label>
                                    <input type="text" class="form-control" name="tempat_lahir_ortu" value="{{ $casis->tempat_lahir_ortu ?? 'belum diinput' }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="tanggal_lahir_ortu" class="form-label">Tanggal Lahir Orang Tua</label>
                                    <input type="date" class="form-control" name="tanggal_lahir_ortu" value="{{$casis->tanggal_lahir_ortu ?? 'belum diinput' }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="pekerjaan_ortu" class="form-label">Pekerjaan Orang Tua</label>
                                    <input type="text" class="form-control" name="pekerjaan_ortu" value="{{ $casis->pekerjaan_ortu ?? 'belum diinput' }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="gaji_ortu" class="form-label">Gaji Orang Tua</label>
                                    <input type="text" class="form-control" name="gaji_ortu" value="{{ $casis->gaji_ortu ?? 'belum diinput' }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" value="{{ $casis->alamat ?? 'belum diinput' }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="no_hp" class="form-label">No Telepon</label>
                                    <input type="text" class="form-control" name="no_hp" value="{{ $casis->no_hp ?? 'belum diinput' }}">
                                </div>
                            </div>
                        </div>

                        <hr>
                        <p><b>Berkas Calon Siswa </b></p>
                        <hr>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="akte" class="form-label">Akte Kelahiran</label>
                                    <input type="file" class="form-control" name="akte">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="akte" class="form-label">Akte Kelahiran</label>
                                    <input type="text" class="form-control" name="akte" value="{{ $casis->akte ?? 'Belum di upload' }}" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="kk" class="form-label">Kartu Keluarga</label>
                                    <input type="file" class="form-control" name="kk">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="kk" class="form-label">Kartu Keluarga</label>
                                    <input type="text" class="form-control" name="kk" value="{{ $casis->kk ?? 'Belum di upload' }}" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="foto" class="form-label">Pas Foto</label>
                                    <input type="file" class="form-control" name="foto">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="foto" class="form-label">Pas Foto</label>
                                    <input type="text" class="form-control" name="foto" value="{{ $casis->foto ?? 'Belum di upload' }}" readonly>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    function validateNIK(input) {
        // Hapus karakter non-digit
        input.value = input.value.replace(/\D/g, '');

        // Periksa panjang NIK
        if (input.value.length !== 10) {
            document.getElementById('nikError').style.display = 'block';
        } else {
            document.getElementById('nikError').style.display = 'none';
        }
    }

    function validateForm() {
        var nik = document.getElementById('nik');
        if (nik.value.length !== 10) {
            alert('NIK harus terdiri dari 10 digit angka.');
            return false;
        }
        return true;
    }
    
</script>

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