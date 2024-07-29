@extends('layout.tampilancasis')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="card shadow">
                <div class="card-header bg-dark text-white">
                    <h3 class="mb-0"><i class="fas fa-credit-card mr-2"></i>PEMBAYARAN PENDAFTARAN</h3>
                </div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="bg-light p-4 rounded shadow-sm">
                                <h5 class="text-primary mb-3"><i class="fas fa-info-circle mr-2"></i>Informasi Pembayaran</h5>
                                <p class="mb-2"><strong>Jumlah:</strong> Rp. 100.000,00</p>
                                <p class="mb-2"><strong>Bank:</strong> BNI</p>
                                <p class="mb-2"><strong>No. Rekening:</strong> 1234567890</p>
                                <p class="mb-2"><strong>Atas Nama:</strong> SD Islam Terpadu Hidayah</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="bg-light p-4 rounded shadow-sm">
                                <h5 class="text-primary mb-3"><i class="fas fa-list-ol mr-2"></i>Langkah Pembayaran</h5>
                                <ol class="pl-3">
                                    <li>Transfer biaya pendaftaran ke rekening di samping</li>
                                    <li>Simpan bukti transfer</li>
                                    <li>Upload bukti transfer pada form di bawah</li>
                                    <li>Klik 'KONFIRMASI PEMBAYARAN'</li>
                                    <li>Tunggu verifikasi</li>
                                </ol>
                            </div>
                        </div>
                    </div>


                    <form method="post" action="{{ route('pelunasan') }}" enctype="multipart/form-data" class="mt-4">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" class="form-control" id="nik" value="{{ $user->casis ? $user->casis->nik : 'Silahkan Melakukan Pendaftaran' }}" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" value="{{ $user->casis ? $user->casis->nama : 'Silahkan Melakukan Pendaftaran' }}" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="status_pembayaran" class="form-label">Status Pembayaran</label>
                                <input type="text" class="form-control" id="status_pembayaran" value="@isset($user->casis->pembayaran){{ $user->casis->pembayaran->status_pembayaran === 'Lunas' ? 'Lunas' : 'Pending' }}@else Belum Lunas @endisset" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="bukti_pembayaran" class="form-label">Bukti Pembayaran</label>
                                <input type="file" class="form-control @error('bukti_pembayaran') is-invalid @enderror" name="bukti_pembayaran" id="bukti_pembayaran" accept="image/*">
                                @error('bukti_pembayaran')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                        </div>
                        <div class="text-right mt-3">
                            <a href="/beranda/informasi pembayaran" class="btn btn-secondary mr-2">KEMBALI</a>
                            <button type="submit" class="btn btn-primary">KONFIRMASI PEMBAYARAN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    .form-label {
        font-weight: 600;
        color: #495057;
    }

    .card-header {
        border-bottom: 0;
    }

    .btn-primary {
        background-color: #4e73df;
        border-color: #4e73df;
    }

    .btn-primary:hover {
        background-color: #2e59d9;
        border-color: #2e59d9;
    }

    .text-primary {
        color: #4e73df !important;
    }

    .custom-file-label::after {
        content: "Browse";
    }
</style>
@endpush

@endsection