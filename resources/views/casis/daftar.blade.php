@extends('layout.tampilancasis')

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
                            <h2><b>DATA CALON SISWA</b></h2>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                        <strong>Sukses!</strong> {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                        <strong>Error!</strong> {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    <form method="post" action="/beranda/form/casis/proses" enctype="multipart/form-data">
                        @csrf
                        <p><b>Data Akun Calon Siswa</b></p>
                        <hr>
                        <!-- Menampilkan form data casis hanya read only -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Username</label>
                                    <input type="text" class="form-control" name="name" value="{{ $user->name }}" placeholder="Silahkan Masukan Data" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ $user->email }}" placeholder="Silahkan Masukan Data" readonly>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <p><b>Data Calon Siswa</b></p>
                        <hr>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="nik" class="form-label">NIK</label>
                                    <input type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" id="nik" value="{{ old('nik', $user->casis ? $user->casis->nik : '') }}" placeholder="Silahkan Masukan Data" oninput="validateNIK(this)" maxlength="10" pattern="\d*" inputmode="numeric" required>
                                    @error('nik')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <small id="nikError" class="text-danger"></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $user->casis ? $user->casis->nama : '') }}" placeholder="Silahkan Masukan Data" required>
                                    @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ old('tempat_lahir', $user->casis ? $user->casis->tempat_lahir : '') }}" placeholder="Silahkan Masukan Data" required>
                                    @error('tempat_lahir')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ old('tanggal_lahir', $user->casis ? $user->casis->tanggal_lahir : '') }}" required>
                                    @error('tanggal_lahir')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" required>
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="Laki-Laki" {{ old('jenis_kelamin', $user->casis ? $user->casis->jenis_kelamin : '') == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                                        <option value="Perempuan" {{ old('jenis_kelamin', $user->casis ? $user->casis->jenis_kelamin : '') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                    </select>
                                    @error('jenis_kelamin')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="jml_saudara" class="form-label">Jumlah Saudara</label>
                                    <input type="number" class="form-control @error('jml_saudara') is-invalid @enderror" name="jml_saudara" value="{{ old('jml_saudara', $user->casis ? $user->casis->jml_saudara : '') }}" placeholder="Silahkan Masukan Data" required>
                                    @error('jml_saudara')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Data Orang Tua Siswa -->
                        <hr>
                        <p><b>Data Orang Tua Siswa</b></p>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="nama_ortu" class="form-label">Nama Orang Tua</label>
                                    <input type="text" class="form-control @error('nama_ortu') is-invalid @enderror" name="nama_ortu" value="{{ old('nama_ortu', $user->casis ? $user->casis->nama_ortu : '') }}" placeholder="Silahkan Masukan Data" required>
                                    @error('nama_ortu')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="pendidikan_ortu" class="form-label">Pendidikan Orang Tua</label>
                                    <select class="form-select @error('pendidikan_ortu') is-invalid @enderror" name="pendidikan_ortu" required>
                                        <option value="">Pilih Pendidikan</option>
                                        <option value="Tidak Bersekolah" {{ old('pendidikan_ortu', $user->casis ? $user->casis->pendidikan_ortu : '') == 'Tidak Bersekolah' ? 'selected' : '' }}>Tidak Bersekolah</option>
                                        <option value="SD" {{ old('pendidikan_ortu', $user->casis ? $user->casis->pendidikan_ortu : '') == 'SD' ? 'selected' : '' }}>SD</option>
                                        <option value="SMP" {{ old('pendidikan_ortu', $user->casis ? $user->casis->pendidikan_ortu : '') == 'SMP' ? 'selected' : '' }}>SMP</option>
                                        <option value="SMA" {{ old('pendidikan_ortu', $user->casis ? $user->casis->pendidikan_ortu : '') == 'SMA' ? 'selected' : '' }}>SMA</option>
                                        <option value="S1" {{ old('pendidikan_ortu', $user->casis ? $user->casis->pendidikan_ortu : '') == 'S1' ? 'selected' : '' }}>S1</option>
                                        <option value="S2" {{ old('pendidikan_ortu', $user->casis ? $user->casis->pendidikan_ortu : '') == 'S2' ? 'selected' : '' }}>S2</option>
                                    </select>
                                    @error('pendidikan_ortu')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="tempat_lahir_ortu" class="form-label">Tempat Lahir Orang Tua</label>
                                    <input type="text" class="form-control @error('tempat_lahir_ortu') is-invalid @enderror" name="tempat_lahir_ortu" value="{{ old('tempat_lahir_ortu', $user->casis ? $user->casis->tempat_lahir_ortu : '') }}" placeholder="Silahkan Masukan Data" required>
                                    @error('tempat_lahir_ortu')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="tanggal_lahir_ortu" class="form-label">Tanggal Lahir Orang Tua</label>
                                    <input type="date" class="form-control @error('tanggal_lahir_ortu') is-invalid @enderror" name="tanggal_lahir_ortu" value="{{ old('tanggal_lahir_ortu', $user->casis ? $user->casis->tanggal_lahir_ortu : '') }}" required>
                                    @error('tanggal_lahir_ortu')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="pekerjaan_ortu" class="form-label">Pekerjaan Orang Tua</label>
                                    <input type="text" class="form-control @error('pekerjaan_ortu') is-invalid @enderror" name="pekerjaan_ortu" value="{{ old('pekerjaan_ortu', $user->casis ? $user->casis->pekerjaan_ortu : '') }}" placeholder="Silahkan Masukan Data" required>
                                    @error('pekerjaan_ortu')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="gaji_ortu" class="form-label">Gaji Orang Tua</label>
                                    <input type="number" class="form-control @error('gaji_ortu') is-invalid @enderror" name="gaji_ortu" value="{{ old('gaji_ortu', $user->casis ? $user->casis->gaji_ortu : '') }}" placeholder="Silahkan Masukan Data" required>
                                    @error('gaji_ortu')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat', $user->casis ? $user->casis->alamat : '') }}" placeholder="Silahkan Masukan Data" required>
                                    @error('alamat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="no_hp" class="form-label">No Telepon</label>
                                    <input type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" id="no_hp" value="{{ old('no_hp', $user->casis ? $user->casis->no_hp : '') }}" placeholder="Silahkan Masukan Data" oninput="validateNoHP()" maxlength="12" required>
                                    @error('no_hp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <small id="noHpError" class="text-danger"></small>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <p><b>Berkas Calon Siswa</b></p>
                        <hr>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="akte" class="form-label">Akte Kelahiran</label>
                                    <input type="file" class="form-control @error('akte') is-invalid @enderror" name="akte">
                                    @error('akte')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    @if ($user->casis && $user->casis->pendaftaran && $user->casis->pendaftaran->akte)
                                    <p><b>File saat ini: {{ $user->casis->pendaftaran->akte }}</b></p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="kk" class="form-label">Kartu Keluarga</label>
                                    <input type="file" class="form-control @error('kk') is-invalid @enderror" name="kk">
                                    @error('kk')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    @if ($user->casis && $user->casis->pendaftaran && $user->casis->pendaftaran->kk)
                                    <p><b>File saat ini: {{ $user->casis->pendaftaran->kk }}</b></p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="foto" class="form-label">Pas Foto</label>
                                    <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
                                    @error('foto')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    @if ($user->casis && $user->casis->pendaftaran && $user->casis->pendaftaran->foto)
                                    <p><b>File saat ini: {{ $user->casis->pendaftaran->foto }}</b></p>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function validateNIK(input) {
        input.value = input.value.replace(/\D/g, '');
        var nikError = document.getElementById('nikError');
        if (input.value.length !== 10) {
            nikError.textContent = 'NIK harus terdiri dari 10 digit.';
            input.setCustomValidity('NIK harus terdiri dari 10 digit.');
        } else {
            nikError.textContent = '';
            input.setCustomValidity('');
        }
    }

    function validateNoHP() {
        const noHpInput = document.getElementById('no_hp');
        const noHpError = document.getElementById('noHpError');
        const noHpValue = noHpInput.value.replace(/\D/g, '');
        noHpInput.value = noHpValue;
        if (noHpValue.length !== 12) {
            noHpError.textContent = 'No Telepon harus berupa 12 digit angka';
            noHpInput.setCustomValidity('No Telepon harus berupa 12 digit angka');
        } else {
            noHpError.textContent = '';
            noHpInput.setCustomValidity('');
        }
    }

    // Tambahkan event listener untuk form submission
    document.querySelector('form').addEventListener('submit', function(event) {
        validateNIK(document.getElementById('nik'));
        validateNoHP();
        if (!this.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }
        this.classList.add('was-validated');
    });
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