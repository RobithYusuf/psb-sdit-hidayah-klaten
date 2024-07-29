@extends('layout.tampilancasis')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">

            <!-- Pengumuman -->
            @if(isset($tahunajar))
            <div class="col-12 mb-4">
                <div class="card bg-gradient-warning">
                    <div class="card-header">
                        <h3 class="card-text">Selamat Datang, <strong>{{ Auth::user()->name }}</strong>!</h3>
                    </div>
                    <div class="card-header">
                        <h4 class="card-text"><i class="fas fa-bullhorn mr-2"></i>Pengumuman</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li><i class="fas fa-calendar-alt mr-2"></i>Tahun Ajaran: <strong>{{$tahunajar->tahun_ajar}}</strong></li>
                            <li><i class="fas fa-hourglass-start mr-2"></i>Pendaftaran Dimulai: <strong>{{ \Carbon\Carbon::parse($tahunajar->mulai_pendaftaran)->format('d-m-Y') }}</strong></li>
                            <li><i class="fas fa-hourglass-end mr-2"></i>Pendaftaran Berakhir: <strong>{{ \Carbon\Carbon::parse($tahunajar->batas_pendaftaran)->format('d-m-Y') }}</strong></li>
                            <li><i class="fas fa-hourglass-end mr-2"></i>Tanggal Seleksi: <strong>{{ \Carbon\Carbon::parse($tahunajar->tgl_seleksi)->format('d-m-Y') }} Pukul 08:00-10:00 WIB</strong></li>
                            <li><i class="fas fa-hourglass-end mr-2"></i>Pendaftaran <strong>{{$tahunajar->status}}</strong></li>
                        </ul>
                        <div class="alert alert-light mt-3">
                            <i class="fas fa-info-circle mr-2"></i>Hasil Seleksi dapat diunduh setelah menyelesaikan semua TAHAP.
                        </div>
                    </div>
                </div>
            </div>
            @endif
            
            <!-- Alur Pendaftaran -->
            <div class="col-12 mb-4" style="margin-top: -20px;">
                <div class="card bg-gradient-primary">
                    <div class="card-header">
                        <h4 class="card-text"><i class="fas fa-road mr-2"></i>Alur Pendaftaran</h4>
                    </div>
                    <div class="card-body">
                        <ol class="">
                            <li>Registrasi akun pada website</li>
                            <li>Lengkapi data diri dan unggah dokumen yang diperlukan</li>
                            <li>Lakukan pembayaran biaya pendaftaran</li>
                            <li>Verifikasi pembayaran oleh admin</li>
                            <li>Ikuti ujian seleksi Offline</li>
                            <li>Tunggu pengumuman hasil seleksi</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- Tata Cara Pembayaran -->
            <div class="col-12 mb-4" style="margin-top: -20px;">
                <div class="card bg-gradient-success">
                    <div class="card-header">
                        <h4 class="card-text"><i class="fas fa-money-bill-wave mr-2"></i>Tata Cara Pembayaran</h4>
                    </div>
                    <div class="card-body">
                        <p class="lead">Pembayaran dapat dilakukan melalui transfer bank ke rekening berikut:</p>
                        <div class="bank-info">
                            <p><i class="fas fa-university mr-2"></i><strong>Bank BNI</strong></p>
                            <p><i class="fas fa-credit-card mr-2"></i>Nomor Rekening: 1234567890</p>
                            <p><i class="fas fa-user mr-2"></i>Atas Nama: SD Islam Terpadu Hidayah</p>
                        </div>
                        <div class="alert alert-light mt-3">
                            <i class="fas fa-info-circle mr-2"></i>Setelah melakukan pembayaran, harap unggah bukti transfer pada menu yang telah disediakan.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content-wrapper -->
@endsection

@push('styles')
<style>
    .card {
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
        border-radius: 10px;
        overflow: hidden;
    }
    .card-header {
        border-bottom: none;
    }
    .timeline {
        list-style-type: none;
        position: relative;
        padding-left: 30px;
    }
    .timeline li {
        position: relative;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-left: 2px solid rgba(255,255,255,0.5);
        color: #fff;
    }
    .timeline li:before {
        content: '';
        position: absolute;
        left: -8px;
        top: 0;
        background-color: #fff;
        width: 16px;
        height: 16px;
        border-radius: 50%;
    }
    .bank-info p {
        margin-bottom: 5px;
        color: #fff;
    }
    .alert-light {
        background-color: rgba(255,255,255,0.2);
        border: none;
        color: #fff;
    }
</style>
@endpush