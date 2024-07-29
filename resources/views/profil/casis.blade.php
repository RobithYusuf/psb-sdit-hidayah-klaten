@extends('layout.tampilancasis')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    <img src="{{ asset('template/dist/img/user0-128x128.jpg') }}" alt="avatar" class="img-fluid" style="width: 250px;">
                                    <h5 class="my-3">{{$user->name }}</h5>
                                </div>
                            </div>
                            <div class="card mb-4 mb-lg-0">
                                <div class="card-body p-0">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Nama Lengkap</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $casis->nama ?? 'Belum Ada' }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">NIK</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $casis->nik ?? 'Belum Ada' }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Tempat, Tanggal Lahir</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $casis->tempat_lahir ?? 'Belum Ada' }}, {{ $casis->tanggal_lahir ?? 'Belum Ada' }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Jenis Kelamin</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $casis->jenis_kelamin ?? 'Belum Ada' }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Nama Orang Tua</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $casis->nama_ortu ?? 'Belum Ada' }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
