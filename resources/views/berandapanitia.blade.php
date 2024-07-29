@extends('layout.tampilanpanitia')

@section('content')

<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fas fa-user-shield"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-number">Selamat Datang {{ Auth::user()->name }}</span>
                    </div>
                </div>

                <!-- Informasi Tahun Ajaran -->
                <div class="col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary"><i class="fas fa-calendar-alt"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Tahun Ajaran</span>
                            <span class="info-box-number">{{ $tahunAjaranBerlangsung }}</span>
                        </div>
                    </div>
                </div>

                <!-- Total Pendaftar -->
                <div class="col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-success"><i class="fas fa-users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Pendaftar</span>
                            <span class="info-box-number">{{ $totalPendaftar }}</span>
                        </div>
                    </div>
                </div>

                <!-- Pendaftar Diterima -->
                <div class="col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning"><i class="fas fa-user-check"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Pendaftar Diterima</span>
                            <span class="info-box-number">{{ $totalDiterima }}</span>
                        </div>
                    </div>
                </div>

                <!-- Pendaftar Ditolak -->
                <div class="col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-danger"><i class="fas fa-user-times"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Pendaftar Ditolak</span>
                            <span class="info-box-number">{{ $totalDitolak }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">5 Calon Siswa Lolos Dengan Nilai Tertinggi</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nama Casis</th>
                                        <th>Nilai Akhir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($casisTertinggi as $casis)
                                    <tr>
                                        <td>{{ $casis->casis->nama }}</td>
                                        <td>{{ $casis->nilai_akhir }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection