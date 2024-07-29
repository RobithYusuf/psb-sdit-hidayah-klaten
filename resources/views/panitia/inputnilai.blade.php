@extends ('layout.tampilanpanitia')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-sm-6 mb-2 mb-sm-0">
                            <h1><b>DATA NILAI CALON SISWA</b></h1>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p style="color: red;"></p>
                    <form method="post" action="/panitia/simpan/{{$data->id_casis}}">
                        @csrf

                        <!-- Form Pendaftaran Calon Siswa -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="nik" class="form-label">NIK</label>
                                    <input type="text" class="form-control" value="{{$data->nik}}" readonly>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" value="{{$data->nama}}" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="tgl_seleksi" class="form-label">Tanggal Seleksi</label>
                                    <input type="date" class="form-control" name="tgl_seleksi" value="{{ $seleksi->tgl_seleksi ?? '' }}" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="nilai_tulis" class="form-label">Nilai Menulis</label>
                                    <input type="text" class="form-control" name="nilai_tulis" value="{{ $seleksi->nilai_tulis ?? '' }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="nilai_hitung" class="form-label">Nilai Menghitung</label>
                                    <input type="text" class="form-control" name="nilai_hitung" value="{{ $seleksi->nilai_hitung ?? '' }}" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="nilai_ngaji" class="form-label">Nilai Mengaji</label>
                                    <input type="text" class="form-control" name="nilai_ngaji" value="{{ $seleksi->nilai_ngaji ?? '' }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="nilai_baca" class="form-label">Nilai Membaca</label>
                                    <input type="text" class="form-control" name="nilai_baca" value="{{ $seleksi->nilai_baca ?? '' }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="nilai_wawancara" class="form-label">Nilai Wawancara</label>
                                    <input type="text" class="form-control" name="nilai_wawancara" value="{{ $seleksi->nilai_wawancara ?? '' }}" required>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info">SIMPAN</button>
                        <a href="/panitia/form nilai" class="btn btn-warning">BATAL</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection