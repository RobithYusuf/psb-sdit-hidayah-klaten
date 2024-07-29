@extends('layout.tampilancasis')

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0"><i class="fas fa-clipboard-list mr-2"></i>Pengumuman Hasil Seleksi</h3>
                    </div>

                    @if (!isset($data) || count($data) === 0)
                        <div class="card-body">
                            <div class="alert alert-info">
                                <i class="fas fa-info-circle mr-2"></i>
                                <strong>Informasi:</strong> Pengumuman belum tersedia, Silahkan melakukan seleksi offline di sekolah
                            </div>
                        </div>
                    @else
                        @foreach($data as $value)
                            <div class="card-body">
                                <h4 class="border-bottom pb-2 mb-4">Data Calon Siswa</h4>
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <p><strong>NIK:</strong> {{ $value->casis->nik ?? 'Tidak Ada Data' }}</p>
                                        <p><strong>Nama Lengkap:</strong> {{ $value->casis->nama ?? 'Tidak Ada Data' }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Jenis Kelamin:</strong> {{ $value->casis->jenis_kelamin ?? 'Tidak Ada Data' }}</p>
                                        <p><strong>Tempat, Tanggal Lahir:</strong> {{ $value->casis->tempat_lahir ?? 'Tidak Ada Data' }}, {{ \Carbon\Carbon::parse($value->casis->tanggal_lahir ?? 'Tidak Ada Data')->format('d-m-Y') }}</p>
                                    </div>
                                </div>

                                <h4 class="border-bottom pb-2 mb-4">Hasil Seleksi</h4>
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <p><strong>Membaca:</strong> {{ $value->nilai_baca ?? 'Tidak Ada Data' }}</p>
                                        <p><strong>Menulis:</strong> {{ $value->nilai_tulis ?? 'Tidak Ada Data' }}</p>
                                        <p><strong>Mengaji:</strong> {{ $value->nilai_ngaji ?? 'Tidak Ada Data' }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Menghitung:</strong> {{ $value->nilai_hitung ?? 'Tidak Ada Data' }}</p>
                                        <p><strong>Wawancara:</strong> {{ $value->nilai_wawancara ?? 'Tidak Ada Data' }}</p>
                                        <p><strong>Total Nilai:</strong> {{ $value->total_nilai ?? 'Tidak Ada Data' }}</p>
                                    </div>
                                </div>

                                <div class="text-center mb-4">
                                    <h5>Nilai Akhir: <span class="badge badge-{{ $value->nilai_akhir >= 70 ? 'success' : 'danger' }} p-2">{{ $value->nilai_akhir ?? 'Tidak Ada Data' }}</span></h5>
                                </div>

                                <div class="alert {{ $value->nilai_akhir >= 70 ? 'alert-success' : 'alert-danger' }} text-center">
                                    <h4 class="alert-heading mb-0">{{ $value->nilai_akhir >= 70 ? 'Selamat! Anda Dinyatakan Lulus' : 'Mohon Maaf, Anda Dinyatakan Tidak Lulus' }}</h4>
                                </div>

                                <div class="text-center mt-4">
                                    <a href="/unduh pengumuman/{{ $value->casis->id_casis }}" class="btn btn-primary btn-lg">
                                        <i class="fas fa-download mr-2"></i>Unduh Hasil Seleksi
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .content-wrapper {
        background-color: #f8f9fa;
        padding: 40px 0;
    }
    .card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
    }
    .card-header {
        border-bottom: none;
    }
    .badge {
        font-size: 1.2rem;
    }
    .alert {
        border-radius: 10px;
    }
</style>
@endsection